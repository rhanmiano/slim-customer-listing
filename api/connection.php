<?php
require_once 'includes/idiorm.php';
require_once 'includes/paris.php';

ORM::configure('mysql:host='.getenv("DB_HOST").';dbname='.getenv("DB_NAME"));
ORM::configure('username', getenv("DB_USER"));
ORM::configure('password', getenv("DB_PASS"));