# PHPMVC
## What is it?
PHPMVC is a sample project I created for a PHP Bootcamp at Salford University. It was designed for beginners who are not familiar with PHP to get a headstart and therefore has a lot of comments. It is fully MVC but does **not** use routing. The idea of this is to use this as a base to develop more complex piece of code such as a social network, therefore it has basic but working code that can be expanded.

## Functionality
* Simple MVC structure
* Database connectivity
* Example user login system with a database connection
* Comments explaining all the core functionality
* Some demonstrations of singletons, abstract classes and inheritance in PHP
* **Does not demonstrate relationships between classes**

## MV-What?
MVC stands for Model-View-Controller, simply Models represent classes, Views are HTML and Controllers handle the other stuff. In this project it has been setup as followed, if you want to find out more check out all the code - it has comments!:

`src/Project/User.php`  - Example User model

`views/register.phtml` - Example registration view

`/login.php` - Example Login Controller

## Setup
1) Install a PHP and MySQL server (XAMPP/LAMMP) or set these up on your own server
2) Install Composer from [here](https://getcomposer.org/download/)
3) Delete the vendor folder and rename Project to the name of your Project
4) Make sure if you find Project you change this to your project name
5) Open the command line in your project and use "composer install"
6) Go! Seriously!

## Some challenges
* Can you add a template like Bootstrap?
* How about improving the login system? Can you identify any problems?
* Try making a clone of another website like [Twitter](https://github.com/greenpencil/twitter-clone) or a blog