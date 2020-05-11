Wordpress OOP Custom Post Types
====================================

[WP Dashicons](https://developer.wordpress.org/resource/dashicons/#admin-media)

## About
The idea behind this package is to help create either Custom Types or Custom Admin pages.
Either it be for a plugin or to use in a custom template, I want to add an OOP and simplified way to add
such CPTs to the backend.

WP has a very extensive way to tackle these, so let us target all of it in one package and leave the specifications
to our plugins/templates and do not worry in having to create our way of CFT again.

I want to provide a way to either simple do a few CFTs or to bulk create them (via `JSON` file).


For the first release, I am focusing in just do it via factory call to do a few.
Later on will implement the bulk generation for larger projects to take advantage of it.


## How to generate a custom Admin Page

First, declare your options for the page you wish to generate.
This is an array you can build beforehand.

```php
$options = [
    'icon'      => 'dashicons-welcome-learn-more', //This is a WP Dashicon
    'position'  => 5,
    'template'  => '/path/to/your/custom/template/file.php'
];
```

Then call the factory you wish to use. There are two:
* PageFactory
* PostFactory

```php
$factory = new PageFactory();
$factory->setName('Test Admin Page')
        ->setOptions($options)
        ->create();
```