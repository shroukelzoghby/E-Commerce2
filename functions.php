<?php

use database\DBController;
use database\Product;



//require Mysql Connection
require('database/DBController.php');

//require product class
require('database/Product.php');

//DBController object
$db=new DBController();

//Product object
$product=new Product($db);

