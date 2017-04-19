<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

include_once "class/PageData.class.php";

//load class
$PageData = new PageData();
$PageData->title = "Bank Data Kejari Palu";
$PageData->content = "";

//load CSS
$PageData->addCSS("link href='vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'");
$PageData->addCSS("link href='vendor/metisMenu/metisMenu.min.css' rel='stylesheet'");
$PageData->addCSS("link href='dist/css/sb-admin-2.css' rel='stylesheet'");
$PageData->addCSS("link href='vendor/morrisjs/morris.css' rel='stylesheet'");
$PageData->addCSS("link href='vendor/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'");

$page = include_once 'templates/page.php';
echo "$page";
 ?>
