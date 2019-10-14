#!/bin/bash

if [[ "$DEBUG" = "True" ]]
then
    set -ex
fi

if [[ "$@" = "bash" ]]
then
    poetry shell
    exec "$@"
else
    poetry run "$@"
fi
