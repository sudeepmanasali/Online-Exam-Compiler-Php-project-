
<?php
session_start();
error_reporting(0);

include('connection.php');

if(!isset($_SESSION['user']))
{
	header('location:login.php');
}

?>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
  <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/7.14.2/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Online Guru</title>
    <link rel="apple-touch-icon" href="images/logo2.jpg">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
   
  <!-- inject:css -->
 <!-- BEGIN VENDOR CSS-->
     <!-- plugin css for this page -->
    
  
	    
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
	<style>
	body{
	
		font-family: 'Varela Round', sans-serif;
		color:black;
	}
  .product-listing-m {
    border-left: 4px solid orange;
    border-radius:8px;
  margin:0 auto 20px;
  overflow: hidden;
}
.product-listing-img {
  float: left;
  width: 25%;
  position:relative;
  overflow:hidden;
}
.product-listing-content {
  float: left;
  padding:20px 15px 20px 30px;
 
  width: 75%;
}
.product-listing-content h5 {
  margin-bottom: 2px;
  font-weight:bold;
  color:red;
}
.product-listing-content h5 a {
	color:#111;
}
.product-listing-content ul {
  margin: 0 auto 22px;
  overflow: hidden;
  padding: 0;
}
.product-listing-content li {
  float: left;
  font-size: 13px;
  font-weight: 400;
  list-style: outside none none;
  margin: 0 auto;
  width: 43%;
}
.product-listing-content li .fa {
  font-size: 15px;
  margin-right: 8px;
}
.car-location {
  display: inline-block;
  margin-left: 24px;
  color:#919090;
  font-size:13px;
}
.label_icon {
  color: #ffffff;
  font-size: 13px;
  line-height: 26px;
  padding: 0 12px;
  position: absolute;
  right: 10px;
  text-align: center;
  top: 10px;
}
.listing-page {
  overflow: hidden;
  padding: 80px 0;
}
.result-sorting-wrapper {
  background: #f5f5f5 none repeat scroll 0 0;
  border-bottom: 3px solid #e5e5e5;

  margin-bottom: 40px;
  overflow: hidden;
  padding: 10px 20px;
}
.sorting-count {
  
  float: left;
  displey:inline;
}
.sorting-count p {
  margin: 0 auto;
  color:#222222;
}
.sorting-count span {
  color: #999999;
}
.result-sorting-by {
  float: right;
}
.result-sorting-by p {
  display: inline-block;
  margin: 0 auto;
  color:#222222;
}
.result-sorting-by form {
  display: inline-block;
}
.sorting-select {
  margin: 0 auto;
  padding-left: 10px;
}
.sorting-select .form-control {
  background: #ffffff none repeat scroll 0 0;
  border: 1px solid #dddddd;
  border-radius: 50px;
  color: #555555;
  font-size: 12px;
  height: auto;
  padding: 0 30px 0 12px;
}
.sorting-select.select::after {
  font-size: 12px;
  padding: 7px 0;
  right: 13px;
  color: #555555;
}

iframe
{
	position:relative;
	bottom:0;
}
@media screen and (max-width:786px){
  .product-listing-content {
  float: left;
  padding:20px 15px 20px 30px;
  width: 100%;
}
  .product-listing-img
  {
    display:none;
  }
}
	</style>
	
	  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns" style="font-family: Arial, Helvetica, sans-serif;">
	  <?php
	  include('topnav.php');
	 
	  ?>
	