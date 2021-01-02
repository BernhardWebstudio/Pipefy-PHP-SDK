#!/usr/bin/env bash

# first, switch to correct dir
cd "$(dirname "$0")/.." || exit

# delete the currrent API
rm -rf src

# then, clone the sources
mkdir apiary-src
cd apiary-src || exit
if ! [ -d "doc-api-pipe" ]; then
  git clone git@github.com:pipefy/doc-api-pipe.git
fi
if ! [ -d "doc-api-general" ]; then
  git clone git@github.com:pipefy/doc-api-general.git
fi
if ! [ -d "doc-api-database" ]; then
  git clone https://github.com/pipefy/doc-api-database
fi

# then, convert the API Blueprint to Swagger
pwd
for DIRECTORY in ./*; do
  if [ -d "$DIRECTORY" ]; then
    cd "$DIRECTORY" || (echo "Could not switch directory to $DIRECTORY" && exit 2)
    npx apib2swagger --bearer-apikey -i ./*.apib -o ./swagger.json
    cd ..
  fi
done

pwd
# finally, use Swagger Codegen to generate the API
for DIRECTORY in ./*; do
  if [ -d "$DIRECTORY" ]; then
    cd "$DIRECTORY" || (echo "Could not switch directory to $DIRECTORY" && exit 3)
    DIRECTORY_NAME=$(basename "$DIRECTORY")
    swagger-codegen generate -c ../../bin/generatePhpConfig.json -i ./swagger.json -l php -o "../../src/$DIRECTORY_NAME"
    cd ..
  fi
done

pwd
cd ..
rm -rf apiary-src
