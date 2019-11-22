<?php include("lib/common.php"); extract($_REQUEST); $data= array();

$promocode=$objMain->getRow("select * from promocode where promo_code='".$reffcode."'");
if(!empty($promocode)){ 
$cnt=$objMain->getResultsCount("select * from promocode_users where promocode=".$promocode['id']." and userid=".$id);
if($cnt==0){
    $objMain->Query("insert into promocode_users set promocode='".$promocode['id']."', userid=".$id.", posted_date='".date("Y-m-d H:i:s")."'");
    $objMain->Query("update pu_users set btc=btc+".$promocode['points']." where id='".$id."'");

    $data[] = array(
			'status' 			=>	'Points Claimed'
		);
} else {
    $data[] = array(
			'status' 			=>	'Already Used'
		);
}

$res = array ("res" => $data);
echo json_encode($res);
    
} else {
	$data[] = array(
			'status' 			=>	'Invalid Code'
		);			

$res = array ("res" => $data);
echo json_encode($res);
}
?>