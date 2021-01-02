#!/bin/bash

# first, switch to correct dir
cd "$(dirname "$0")/.." || exit

# then, clone the sources
mkdir apiary-src
cd apiary-src || exit
git clone git@github.com:pipefy/doc-api-pipe.git
git clone git@github.com:pipefy/doc-api-general.git
git clone https://github.com/pipefy/doc-api-database

# then, convert the API Blueprint to Swagger
for DIRECTORY in ./*/; do
  cd "$DIRECTORY" || echo "Could not switch directory to $DIRECTORY" && continue
  npx apib2swagger --bearer-apikey -i ./*.apib -o ./swagger.json
  cd ..
done

# finally, use Swagger Codegen to generate the API
for DIRECTORY in ./*/; do
  cd "$DIRECTORY" || echo "Could not switch directory to $DIRECTORY" && continue
  DIRECTORY_NAME=$(basename "$DIRECTORY")
  swagger-codegen generate -c ../../bin/generatePhpConfig.json -i ./swagger.json -l php -o "../../src/$DIRECTORY_NAME"
  cd ..
  rm -rf "$DIRECTORY"
done
