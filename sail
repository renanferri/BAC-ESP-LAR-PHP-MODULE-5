#!/usr/bin/env bash

docker run --rm -it \
    -u $(id -u):$(id -g) \
    -v $PWD:/app \
    -w /app \
    composer:latest "$@"