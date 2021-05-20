<?php
require 'vendor/autoload.php';
require 'Crudomator/Crud.php';

use Crudomator\Crud;

$config = [

    'base' => 'http://localhost/rest/index.php',
    'db' =>['localhost','root',' ','rest'],
    'table'=> 'users',
    'fields' => [
        'name' => 'User Name',
        'email' => 'User Email',
        'age' => 'User Age',
    ],
];

$crud = new Crud($config);
$crud->run();
