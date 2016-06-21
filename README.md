# Sweetalert-Laravel
Simple way to flash sweetalert messages to the screen for laravel.

## Laravel 5.1 SweetAlert

Simple way to flash sweetalert messages to the screen for laravel.

##Installation

````
composer require raymondwilkinson/sweetalert-laravel
````

After install this package you have to set the service provider on your config/app.php file

````
RaymondWilkinson\SweetalertLaravel\AlertServiceProvider::class,
````


Copy the required assets of SweetAlert to your public folder. Those assets would be placed in the css and js directories respectively.

````
php artisan vendor:publish --tag=alerts
````

Then in your master view add those styles and scripts. Put this style between the <head> </head> tags

````
<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
````

Add the JS script before close your </body> tag.

````
<script src="js/sweetalert.js"></script>
````

Include the alerts view to your master view. Add this code right after set the JS script file.

````
@include('Alerts::sweetalerts')
````

###Usage

Your controllers are a perfect place to use it.

````
flash('Title', 'Message')


flash()->error('Title', 'Message')


flash()->success('Title', 'Message')


flash()->overlay('Title', 'Message')
````

###SweetAlert website

http://t4t5.github.io/sweetalert/
