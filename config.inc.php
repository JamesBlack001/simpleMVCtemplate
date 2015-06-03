<?php

#Responsible for setting various configuration settings for the application.
#Can control and maintain the global settings from this file.

#Written By James Black, for use with SimpleMVCTemplate, 06/2015
#
#The primary function of this config file is to hold a constant for the application
#that can be easily updated for the server root of the application, this will make it
#more portable by only requiring to change the constant value when porting to a new 
#location.

#The constant for server settings, BASE_URI and BASE_URL

define('BASE_URL', 'http://localhost/SimpleMVCTemplate/public');
define('BASE_URI', 'C:\xampp/\htdocs\SimpleMVCTemplate');

#define('BASE_URL', 'url to act as base for other URLs');
#define('BASE_URI', 'Absolute Path to project folder');


#default String which contains the file ROOT for the server files
$_SERVER['FILE_ROOT'] = 'C:/xampp/htdocs/simpleMVCtemplate';

#$_SERVER['FILE_ROOT'] = 'Absolute Path to project folder';


#The $_SERVER['DOCUMENT_ROOT'] variable will take you to C:/xampp/htdocs/
#
#can change it globally with apache (requires server restart) to a different location