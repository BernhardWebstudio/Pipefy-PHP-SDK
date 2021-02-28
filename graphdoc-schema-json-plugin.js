const { resolve } = require("path")
const fs = require("fs")

function GraphdocSchemaJsonPlugin(schema, projectPackage, graphdocPackage) {
  this.schema = schema
  fs.writeFileSync(resolve(__dirname, "schema.json"), JSON.stringify(schema))
}

GraphdocSchemaJsonPlugin.prototype.getAssets = function() {
  return resolve(__dirname, "schema.json")
  /* ... */
}

exports.default = GraphdocSchemaJsonPlugin

