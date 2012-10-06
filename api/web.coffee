#!/usr/bin/env coffee

express = require 'express'
fs = require 'fs'

# Send out some sample json files. See /samples for format.
sendStatic = (filename, response) ->
  fs.readFile filename, (error, content) ->
    if error
      response.writeHead(500)
      response.end()
    else
      response.contentType 'application/json'
      response.end content, 'utf-8'


app = express.createServer express.logger()

# Serve these files from the sample directory.
static_samples = ['csas', 'indicators']
for json_file in static_samples
  app.get "/#{json_file}.json", do (json_file) ->
    (request, response) -> sendStatic "./samples/#{json_file}.json", response

# Default path
app.get '/', (request, response) ->
  response.send 'no json file requested'

port = process.env.PORT || 5000
app.listen port, ->
  console.log "Listening on #{port}"
