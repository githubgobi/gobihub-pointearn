<?php include("lib/common.php"); extract($_REQUEST);

$res=$objMain->getRow("select * from pu_users where mailid='".$mailid."'");
$data= array(); 
if(empty($res)){
	$reffcode=$objMain->reffcode();
	//profile_photo='".$photo."',
	$objMain->Query("insert into pu_users set  mailid='".$mailid."', uname='".$name."', created_date='".date("Y-m-d H:i:s")."', reffcode='".$reffcode."'");
	$id=$objMain->insertID();
	$data[] = array(
			'id' 			=>	$id,
			'usertype' 		=>	"new"
		);		
		
} else {
	$data[] = array(
			'id' 			=>	$res['id'],
			'usertype' 		=>	"old"
		);		
}

$res = array ("res" => $data);
echo json_encode($res);


?>