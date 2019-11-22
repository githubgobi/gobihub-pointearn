<?php
$module = @$_REQUEST['module'];
$action = @$_REQUEST['action'];
switch ($module) 
	{
	case 'admin':
		switch($action)
			{
			case 'ads':
			$do = @$_REQUEST['do'];
			$id = @$_REQUEST['id'];
			 if($do == 'update'){
				$objFeatures->UpdateAds();
			}
			break;
			case 'btc':
			$do = @$_REQUEST['do'];
			$id = @$_REQUEST['id'];
			 if($do == 'update'){
				$objFeatures->UpdateBTC();
			}
			break;
			case 'payment':
			$do = @$_REQUEST['do'];
			$id = @$_REQUEST['id'];
			 if($do == 'update'){
				$objFeatures->UpdatePayment($id);
			}
			break;
			case 'changepassword':
			$do = @$_REQUEST['do'];
			$id = @$_REQUEST['id'];
			if($do == 'update'){
				$objFeatures->UpdatePassword();
			} 
			break;
		}
	}
?>