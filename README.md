# Laravel Queue Listen on all queue ( Laravel 5 Package )

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