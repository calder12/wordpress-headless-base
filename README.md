# WordPress Headless Base

This project is a full WordPress install designed to work as a headless backend. It has a very basic theme to allow access to the functions.php if necessary.

## Plugins
There are four plugins included with this install that I feel are very helpful

* [Advanced Custom Fields](https://en-ca.wordpress.org/plugins/advanced-custom-fields/) - If you work with WordPress you know what it is and why it's included here.
* [ACF to REST API](https://wordpress.org/plugins/acf-to-rest-api/) - This exposes any custom fields to the WP REST API, without it you can't access your ACF fields through the API.
* [Cloudinary](https://wordpress.org/plugins/cloudinary-image-management-and-manipulation-in-the-cloud-cdn/) - This one is included because I feel having your images loaded on your custom front end from your WP backend isn't good practice and exposes the back end's URL to the public. With a free [Cloudinary](https://cloudinary.com) account you can avoid that and access some great functionality like transforms of your images and serving images from a CDN.
* [Rename WP Login](https://wordpress.org/plugins/rename-wp-login/) - This is a pretty old plugin that is always behind the times with its compatibility checks, but it works great. It allows you to change the location of your login page from wp-login.php to anything you like. It 404's on the old login page and it won't redirect when you try to access wp-admin without being logged in. Nice extra layer of security for your back end.

## Functions.php / Gutenberg

The theme also disables the Gutenberg plugin for posts and pages in functions.php. This is purely a personal choice and you can renable it by removing lines 6 & 7 from functions.php

## DOTenv

This install also uses Vance Lucas's [PHPDOTenv](https://github.com/vlucas/phpdotenv) for increased security. Copy the env-example.txt file to a .env file and change the variables to match your database settings. APP_NAME is used just to populate the basic index.php and isn't really necessary. Do NOT commit your .env file (it is excluded in the base .gitignore)

## Uploads

The uploads folder is git ignored on purpose. Ideally you'll use Cloudinary to manage your images and uploads, but even if you don't I strongly suggest not committing binary files to your repo. Use SCP or even FTP to manage your uploads folder.

## Authors

* **Rick Calder** - *Initial work* - [calder.io](https://calder.io)


## License

This project is licensed under the MIT License
