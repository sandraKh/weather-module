[![Build Status](https://travis-ci.com/sandraKh/weather-module.svg?branch=main)](https://travis-ci.com/sandraKh/weather-module)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sandraKh/weather-module/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/sandraKh/weather-module/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/sandraKh/weather-module/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/sandraKh/weather-module/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/sandraKh/weather-module/badges/build.png?b=main)](https://scrutinizer-ci.com/g/sandraKh/weather-module/build-status/main)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/sandraKh/weather-module/badges/code-intelligence.svg?b=main)](https://scrutinizer-ci.com/code-intelligence)

# weather-module

Install with composer `composer require sandrakh/weather-module`

# Require in composer.json

Add require to you compose.json-file like this:

`    "require": {
        "sandrakh/weather-module": "^1.1"
    }`
    
# Add files from module to right folders 

`
rsync -av vendor/sandrakh/weather-module/src ./
rsync -av vendor/sandrakh/weather-module/test ./
rsync -av vendor/sandrakh/weather-module/config ./
rsync -av vendor/sandrakh/weather-module/view ./
`

#### Make sure to change the api-key from "YOUR_KEY" to your own api-key
