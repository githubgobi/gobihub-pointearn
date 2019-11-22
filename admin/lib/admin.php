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
		public function deleteenquiry($id)
	{
    extract($_REQUEST);
	mysql_query("delete from  tbl_req_quote where enq_id =".$id."") or die(mysql_error());
	header("location: enquiry.php?msg=del");
	}
	public function updateImages($id)
	{
    extract($_REQUEST);
	//die("update carimages set status='yes' where id =".$image_id);
	mysql_query("update carimages set status='no' where car_id =".$id) or die(mysql_error());
	mysql_query("update carimages set status='yes' where id =".$image_id) or die(mysql_error());
	header("location: images.php?msg=upd&id=".$id);
	}
	public function deleteImages($id)
	{
    extract($_REQUEST);
	$carid=$this->getRow("select * from carimages where id =".$id);
	unlink("../imgs/".$carid['image_name']);
	mysql_query("delete from  carimages where id =".$id."") or die(mysql_error());
	header("location: images.php?msg=del&id=".$carid['car_id']);
	}
	public function getCustomerID($id){ extract($_REQUEST);
		$cus=$this->getRow("select * from customer where id=".$id);
		if($cus['customer_type']=='dealer') $prefix=ID_PREFIX."DL";
		else if($cus['customer_type']=='mediator') $prefix=ID_PREFIX."DL";
		else if($cus['customer_type']=='customer') $prefix=ID_PREFIX."CS";
		if($cus['customer_id'] <10) $id="000".$cus['customer_id'];
		else if($cus['customer_id'] <100) $id="00".$cus['customer_id'];
		else if($cus['customer_id'] <1000) $id="0".$cus['customer_id'];
		else $id=$cus['customer_id'];
		return $prefix.$id;
	}
	public function getID($id){ //get id from customer ID		
		$type=substr($id, strlen(ID_PREFIX),2);
		$aid=substr($id, (strlen(ID_PREFIX)+2));
		return ltrim($aid, '0');
	}
}
$objAdmin = new Admin();
?>