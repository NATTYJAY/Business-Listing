<?php
	session_start();
	/*This file loads system to do basic functions on the site, Please do not change anything here if you dont know what you are doing.*/
	
	include('includes/db_connect.php');	
	include('classes/users.php');
	include('classes/userlevel.php');
	include('classes/notes.php');
	include('classes/messages.php');
	include('classes/stores.php');
	include('classes/store_access.php');
	include('classes/productcategories.php');
	include('classes/producttax.php');
	include('classes/product.php');
	include('classes/warehouse.php');
	include('classes/vendor.php');
	include('classes/client.php');
	include('classes/returnreasons.php');
	include('classes/purchase.php');
	include('classes/sale.php');
	include('classes/sale_return.php');
	include('classes/purchase_return.php');
	require_once('includes/functions.php');
	include('classes/announcements.php');
	include('classes/expenses.php');
	
	//include('classes/visitor.php');
		
	
	global $db;
	//Checks if options exist and installation is complete.
	$val = $db->query('SELECT 1 from notes');
	
	if($val == FALSE) {
	  HEADER("LOCATION: install.php");
	}
	
	//Adding Language.
	if(isset($_SESSION['language']) && $_SESSION['language'] != '') { 
		$lang = $_SESSION['language'];
	} else if(get_option('language') != ''){ 
		$lang = get_option('language');
	} else { 
		$lang = 'english';
	}
	include('language/'.$lang.'.php');
	
	//Session signout after session timeout.
	if(isset($_SESSION['timeout'])) {
		if ($_SESSION['timeout'] + get_option('session_timeout') * 60 < time()) {
		 	if(get_option('session_timeout') == '') {} else {
				session_destroy();
				HEADER('LOCATION: '.get_option('redirect_on_logout'));
				exit();
			}
		}
	}
	//Declare user class outside user verification so it can process login and other stuff.
	$user = new Users;
	
	if(isset($_SESSION['user_id'])):
	$check_user = new Users;
	$user_status = $check_user->get_user_info($_SESSION['user_id'], 'status');
	
	if($user_status == 'ban' || $user_status == 'deactivate' || $user_status == 'suspend') { 
		session_destroy();
		HEADER('LOCATION: index.php');
	}
	//declaring object of a class
		$product = new Product;
		$new_store = new Store;
		$store_access = new StoreAccess;
		$sale = new Sale;
		$client = new Client;
		$ProductTax = new ProductTax;
		$purchase = new Purchase;
		$vendor = new Vendor;
		$products = new Product;
		$warehouses = new Warehouse;
		$message_obj = new Messages;
		$notes_obj = new Notes;
		$announcement_obj = new Announcements;
		$product_category = new ProductCategory;
		$expenses = new Expenses;		
		$new_user = new Users;
		
		
	
		if($new_user->get_user_info($_SESSION['user_id'], 'profile_image') == '') { 
			$profile_img = 'images/thumb.png';
		} else { 
			$profile_img = $new_user->get_user_info($_SESSION['user_id'], 'profile_image');
		}
	endif;
	
	//include('includes/update.php');