# Laravel Queue Listen on all queue ( Laravel 5 Package )

 ![php 5.5+](https://img.shields.io/badge/php-5.5+-brightgreen.svg?style=flat&logo=php&labelColor=777BB4&logoColor=white&color=lightgrey) ![author](https://img.shields.io/badge/author-kch-brightgreen.svg?style=flat&logo=bitbucket&color=lightgrey)

## Installation

1. add

	    "repositories": [
	        {
	            "type": "vcs",
	            "url":  "git@bitbucket.org:wilzokch/laravel-queue-listen-on-all-queue.git"
	        }
	    ],

	to your composer.json.

2. run the `composer require` command from your terminal:

    	composer require wilzokch/laravel-queue-listen-on-all-queue:dev-master

Laravel 5.5+ uses Package Auto-Discovery, so does not require you to manually add the ServiceProvider.

#### Laravel version below 5.5:

If you use Laravel version below 5.5 or don't use auto-discovery, add the ServiceProvider to the `providers` array in `config/app.php`

	Wilzokch\LaravelQueue\QueueServiceProvider::class,
