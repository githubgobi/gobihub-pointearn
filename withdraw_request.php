<?php include("lib/common.php"); extract($_REQUEST); $data= array();
$inr=$objMain->convertcurrency('USD','INR',1);

$euro=$objMain->convertcurrency('USD','EUR',1);
$btc=$objMain->getRow("select * from btc");

$user=$objMain->getRow("select * from pu_users where id=".$id);
$amount_inr=($btc['btc_value']*$inr)*$user['btc'];
$amount_usd=($btc['btc_value'])*$user['btc'];
$amount_euro=($btc['btc_value']*$euro)*$user['btc'];

$objMain->Query("insert into withdraw_request set userid='".$id."', payment_type='".$type."', payment_id='".$payment_id."', request_date='".date("Y-m-d")."', btc='".$user['btc']."' , amount_inr='".$amount_inr."' , amount_usd='".$amount_usd."' , amount_euro='".$amount_euro."'");

$objMain->Query("update pu_users set total_btc=total_btc+".$user['btc'].", btc=0.00000001 where id=".$id);

	$data[] = array(
			'status' 			=>	'success'
		);		

$res = array ("res" => $data);
echo json_encode($res);
?>