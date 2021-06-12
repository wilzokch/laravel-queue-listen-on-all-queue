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

3. in your `config/app.php` add

		Wilzokch\LaravelQueue\QueueServiceProvider::class,

	to the `providers` array.
