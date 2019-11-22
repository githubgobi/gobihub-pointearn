<?php include("lib/common.php"); extract($_REQUEST);

$record=10;
//$start=$page*$record;
//$student=$objMain->getRow("select * from withdraw_request where userid='".$id."' order by id desc limit ".$start.",".$record);

$results=$objMain->getResults("select * from withdraw_request where userid='".$id."' order by id desc limit 10");

$data= array();

if(!empty($results)){
	foreach($results as $result){
	    if($result['payment_type']==1) $payment_type="Amazon Pay";
else if($result['payment_type']==2) $payment_type="UPI";
else if($result['payment_type']==3) $payment_type="Paypal";
else $payment_type="BTC Wallet";

if($result['status']=='pending') $msg="Your Payment Request  at ".date("d/m/Y",strtotime($result['request_date']))." for BTC : ".$result['btc']." to ".$payment_type." is still Pending";
else $msg="Your Payment is transfered to ".$payment_type." (".$result['payment_id'].") for BTC : ".$result['btc'];

		$data[] = array(
			'date' 		=>	$msg,
			'type' 		=>	$payment_type,
			'amount'    => $objMain->INR($result['amount_usd'])
		);
	}
}

		$res = array ("res" => $data);

echo json_encode($res);
?>