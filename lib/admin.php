<?php
global $objAdmin;
class Admin extends Main
{
	public function Postvalue($x)
	{
	$x = $_POST[$x];
	/*$x = str_replace("'","&#39;",$x);
	$x = str_replace("<","",$x);
	$x = str_replace(">","",$x);
	$x = htmlentities($x, ENT_QUOTES); //ENT_QUOTES – Decodes double and single quotes*/
	$x = mysql_real_escape_string($x); 
	return $x;
	}
	public function rand_string( $length ) {
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	

	$size = strlen( $chars );
	for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	}

	return $str;
    }
	public function gen_md5_password($len = 6)
	{
	// function calculates 32-digit hexadecimal md5 hash
	// of some random data
	return substr(md5(rand().rand()), 0, $len);
	}
    
	public function redirectUrl($url){
		echo '<SCRIPT language="JavaScript">
			<!--
			window.location="'.$url.'";
			//-->
		</SCRIPT>';
	}
	public function ajaxredirectUrl($url){
		echo 'window.location="'.$url.'";';
	}
}
$objAdmin = new Admin();
?>