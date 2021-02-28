<?php

$loader = require(__DIR__ . "/../vendor/autoload.php");

use GraphQL\Type\Schema;
use Overblog\GraphQLGenerator\Generator\TypeGenerator;

$typeTranslator = [
  "INPUT_OBJECT" => "input-object",
  "ENUM" => "enum",
  "OBJECT" => "object",
  "UNION" => "union",
  "CUSTOM_SCALAR" => "custom-scalar",
  "INTERFACE" => "interface",
  "SCALAR" => "custom-scalar"
];

function translatePipefyType($type)
{
  global $typeTranslator;
  // if ($type["kind"] == "SCALAR") {
  //   return $type["name"];
  // } else {
    return $typeTranslator[$type["kind"]];
  // }
}

function translateTypeToKind($type)
{
  if ($type['name'] != null) {
    return $type['name'];
  } else {
    return $type['ofType']['name'];
  }
}

$schema = json_decode(file_get_contents(__DIR__ . "/../schema.json"), TRUE);

$config = [];

foreach ($schema["types"] as $type) {
  $objConfig = [
    'description' => $type["description"],
    'fields' => []
  ];
  if (isset($type["inputFields"])) {
    foreach ($type["inputFields"] as $inputField) {
      $objConfig['inputFields'][$inputField['name']] = [
        'type' => translateTypeToKind($inputField['type']),
        'description' => $inputField['description'],
        'defaultValue' => $inputField['defaultValue']
      ];
    }
  }
  if (isset($type["fields"])) {
    foreach ($type["fields"] as $inputField) {
      $objConfig['fields'][$inputField['name']] = [
        'type' => translateTypeToKind($inputField['type']),
        'description' => $inputField['description'],
        'defaultValue' => $inputField['defaultValue'] ?? null
      ];
    }
  }
  $obj = [
    'type' => translatePipefyType($type),
    'config' => $objConfig,
    'name' => $type["name"]
  ];
  $config[$type["name"]] = $obj;
}

var_dump($config);

$typeGenerator = new TypeGenerator('\\BernhardWebstudio\\PipefySDK\\PHP\\Types');
$classesMap = $typeGenerator->generateClasses($config, __DIR__ . '/../src/Types');

$loader->addClassMap($classesMap);

// $schema = new Schema(\BernhardWebstudio\PipefySDK\PHP\Types\QueryType::getInstance());
