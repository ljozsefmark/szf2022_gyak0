<?php
require_once 'resources/orm/idiorm.php';
require_once 'resources/orm/paris.php';
require_once 'vendor/autoload.php';

ORM::configure('mysql:host=localhost;dbname=uni');
ORM::configure('username', 'root');
ORM::configure('password', '');
ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
function dbTearDown()
{
    ORM::reset_config();
    ORM::reset_db();
}


