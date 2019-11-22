<?php

ob_start();

ini_set('session.cache_limiter','public');
session_cache_limiter(false);

session_start();




// HTTP
define('HTTP_SERVER', 'http://techmaza.org/bitcoin/');
define('COMPANY_NAME', 'Bitcoin Mining');
define('DIR_ROOT', '/home/shareingroup/public_html/techmaza.org/bitcoin/');

define('DIR_LIB', DIR_ROOT.'admin/lib/');

define('DIR_USER', DIR_ROOT.'images/user/');
define('HTTP_USER', HTTP_SERVER.'images/user/');


class Connection { var $hostname, $username, $password, $database, $connection;

function __construct() {

		$this->hostname = "localhost";//Database host.

		$this->username = "bitcoin_live"; //Database username.

		$this->password = "%o5#=X*X~5Z$"; //Database password.

		$this->database = "bitcoin_live";//Database.local
	

		$this->dbConnection(); 

	}

	

	

	public function dbConnection () {

		$this->connection = mysqli_connect($this->hostname,$this->username,$this->password,$this->database) or die ('Cannot make a connection');

	}

}

$connect = new Connection();
date_default_timezone_set('Asia/Kolkata');
extract($_REQUEST);
?>