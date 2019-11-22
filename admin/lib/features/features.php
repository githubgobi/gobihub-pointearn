<?php
require_once "lib/functions.php";
global $objFeatures;
class Features extends Main
{
	public function UpdatePassword(){
		extract($_REQUEST);
		$res=$this->getRow("select * from pu_admin where username='".$username."' and userpassword='".md5($olduserpassword)."'");
		if(!empty($res)){
			$this->Query("update pu_admin set username='".$username."',userpassword='".md5($userpassword)."' where admin_id=".$_SESSION['admin_id']);
			session_destroy();
			$this->redirectUrl("index.php?logout");
		}
		else $this->redirectUrl("change_password.php?msg=invalid");
	}

	public function ChangePasswordUsers($id){
		extract($_REQUEST);
		$this->Query("update pu_admin set userpassword='".md5($userpassword)."' where admin_id=".$id);
		header("location:users.php?msg=pass");
	}

	public function UpdateAds(){ extract($_REQUEST); print_r($_REQUEST);
//die("update ad_slot set slot_1='".$slot_1."', slot_2='".$slot_2."', slot_3='".$slot_3."', slot_4='".$slot_4."', slot_5='".$slot_5."', slot_6='".$slot_6."', slot_7='".$slot_7."', slot_8='".$slot_8."', slot_9='".$slot_9."', slot_10='".$slot_10."', slot_1_type='".$slot_1_type."', slot_2_type='".$slot_2_type."', slot_3_type='".$slot_3_type."', slot_4_type='".$slot_4_type."', slot_5_type='".$slot_5_type."', slot_6_type='".$slot_6_type."', slot_7_type='".$slot_7_type."', slot_8_type='".$slot_8_type."', slot_9_type='".$slot_9_type."', slot_10_type='".$slot_10_type."'");	
		$this->Query("update ad_slot set slot_1='".$slot_1."', slot_2='".$slot_2."', slot_3='".$slot_3."', slot_4='".$slot_4."', slot_5='".$slot_5."', slot_6='".$slot_6."', slot_7='".$slot_7."', slot_8='".$slot_8."', slot_9='".$slot_9."', slot_10='".$slot_10."', slot_1_type='".$slot_1_type."', slot_2_type='".$slot_2_type."', slot_3_type='".$slot_3_type."', slot_4_type='".$slot_4_type."', slot_5_type='".$slot_5_type."', slot_6_type='".$slot_6_type."', slot_7_type='".$slot_7_type."', slot_8_type='".$slot_8_type."', slot_9_type='".$slot_9_type."', slot_10_type='".$slot_10_type."'");
		header("location:ads_update.php?msg=upd");

	}
	public function UpdatePayment($id){ extract($_REQUEST);
		$this->Query("update withdraw_request set description='".$description."', `status`='transfered' where id=".$id);
		header("location:withdraw_requests.php?msg=upd");
	}

	public function UpdateBTC(){ extract($_REQUEST);
		$this->Query("update btc set btc_value='".$btc_value."'");
		header("location:btc_update.php?msg=upd");
	}
}
$objFeatures = new Features();
?>