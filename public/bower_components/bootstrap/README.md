{
    "_readme": [
        "This file locks the dependencies of your project to a known state",
        "Read more about it at https://getcomposer.org/doc/01-basic-usage.md#composer-lock-the-lock-file",
        "This file is @generated automatically"
    ],
    "hash": "ebd8cc4eb95775c60a4b452c0e7e5725",
    "content-hash": "e27ecb5bf01046d3260965c52c38de01",
    "packages": [
        {
            "name": "almasaeed2010/adminlte",
            "version": "v2.3.7",
            "source": {
                "type": "git",
                "url": "https://github.com/almasaeed2010/AdminLTE.git",
                "reference": "797b65b3ca90525a4e048de5b8d02ba6878ea239"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/almasaeed2010/AdminLTE/zipball/797b65b3ca90525a4e048de5b8d02ba6878ea239",
                "reference": "797b65b3ca90525a4e048de5b8d02ba6878ea239",
                "shasum": ""
            },
            "type": "library",
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Abdullah Almsaeed",
                    "email": "abdullah@almsaeedstudio.com"
                }
            ],
            "description": "AdminLTE - admin control panel and dashboard that's based on Bootstrap 3",
            "homepage": "http://almsaeedstudio.com/",
            "keywords": [
                "JS",
                "admin",
                "back-end",
                "css",
                "less",
                "responsive",
                "template",
                "theme",
                "web"
            ],
            "time": "2016-10-19 15:34:25"
        },
        {
            "name": "backpack/base",
            "version": "0.7.3",
            "source": {
                "type": "git",
                "url": "https://github.com/Laravel-Backpack/Base.git",
                "reference": "0534cd2b84c3a07a3a46878c661a0558c204cde6"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/Laravel-Backpack/Base/zipball/0534cd2b84c3a07a3a46878c661a0558c204cde6",
                "reference": "0534cd2b84c3a07a3a46878c661a0558c204cde6",
                "shasum": ""
            },
            "require": {
                "almasaeed2010/adminlte": "2.3.*",
                "illuminate/support": "~5.1",
                "jenssegers/date": "^3.2",
                "laravel/framework": "5.3.*",
                "prologue/alerts": "0.4.*"
            },
            "require-dev": {
                "phpunit/phpunit": "4.*",
                "scrutinizer/ocular": "~1.1",
                "squizlabs/php_codesniffer": "~2.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Backpack\\Base\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Cristian Tabacitu",
                    "email": "hello@tabacitu.ro",
                    "homepage": "http://www.tabacitu.ro",
                    "role": "Chief Architect & Developer"
                }
            ],
            "description": "Laravel Backpack's base package, which offers admin authentication and a blank admin panel using AdminLTE",
            "homepage": "https://github.com/laravel-backpack/base",
            "keywords": [
                "backpack",
                "base"
            ],
            "time": "2016-10-15 10:20:21"
        },
        {
            "name": "classpreloader/classpreloader",
            "version": "3.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/ClassPreloader/ClassPreloader.git",
                "reference": "9b10b913c2bdf90c3d2e0d726b454fb7f77c552a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/ClassPreloader/ClassPreloader/zipball/9b10b913c2bdf90c3d2e0d726b454fb7f77c552a",
                "reference": "9b10b913c2bdf90c3d2e0d726b454fb7f77c552a",
                "shasum": ""
            },
            "require": {
                "nikic/php-parser": "^1.0|^2.0",
                "php": ">=5.5.9"
            },
            "require-dev": {
                "phpunit/phpunit": "^4.8|^5.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.0-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "ClassPreloader\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Michael Dowling",
                    "email": "mtdowling@gmail.com"
                },
                {
                    "name": "Graham Campbell",
                    "email": "graham@alt-three.com"
                }
            ],
            "description": "Helps class loading performance by generating a single PHP file containing all of the autoloaded files for a specific use case",
            "keywords": [
                "autoload",
                "class",
                "preload"
            ],
            "time": "2015-11-09 22:51:51"
        },
        {
            "name": "dnoegel/php-xdg-base-dir",
            "version": "0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/dnoegel/php-xdg-base-dir.git",
                "reference": "265b8593498b997dc2d31e75b89f053b5cc9621a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/dnoegel/php-xdg-base-dir/zipball/265b8593498b997dc2d31e75b89f053b5cc9621a",
                "reference": "265b8593498b997dc2d31e75b89f053b5cc9621a",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.2"
            },
            "require-dev": {
                "phpunit/phpunit": "@stable"
            },
            "type": "project",
            "autoload": {
                "psr-4": {
                    "XdgBaseDir\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "implementation of xdg base directory specification for php",
            "time": "2014-10-24 07:27:01"
        },
        {
            "name": "doctrine/inflector",
            "version": "v1.1.0",
            "source": {
                "type": "git",
                "url": "https://github.com/doctrine/inflector.git",
                "reference": "90b2128806bfde671b6952ab8bea493942c1fdae"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/doctrine/inflector/zipball/90b2128806bfde671b6952ab8bea493942c1fdae",
                "reference": "90b2128806bfde671b6952ab8bea493942c1fdae",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.2"
            },
            "require-dev": {
                "phpunit/phpunit": "4.*"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.1.x-dev"
                }
            },
            "autoload": {
                "psr-0": {
                    "Doctrine\\Common\\Inflector\\": "lib/"
                }
   