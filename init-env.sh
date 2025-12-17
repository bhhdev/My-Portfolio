#!/bin/bash
# init-env.sh
if [ ! -f .env ]; then
    cp .env.example .env
    echo ".env created from .env.example"
fi

if [ ! -f .env.local ]; then
    cp .env.example .env.local
    echo ".env.local created from .env.example"
fi
