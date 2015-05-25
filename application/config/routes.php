<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

<<<<<<< HEAD
$route['default_controller'] = "leads";
=======
$route['default_controller'] = "books";
>>>>>>> 7cb8edef1bc617f770d1d793eb6c5a663c61530d
$route['404_override'] = '';
$route["(:any)"] = 'books/$1';

//end of routes.php