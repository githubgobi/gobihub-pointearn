<?php include("lib/common.php"); extract($_REQUEST);

$results=$objMain->getResults("select * from pu_users order by total_btc desc limit 20");

$data= array();
if(!empty($results)){
	foreach($results as $result){

		$data[] = array(
			'name' 			=>	$result['uname'],
			'amount' 		=>	$result['total_btc']
		);
	}
}


		$res = array ("res" => $data);

echo json_encode($res);
?>