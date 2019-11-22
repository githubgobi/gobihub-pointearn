<?php include("lib/common.php"); extract($_REQUEST); $data= array();

$res=$objMain->getRow("select * from pu_users where id=".$id);
if($res['daily_click']<=25){
    if($res['last_ad_date']==date("Y-m-d")){
    	if($res['slotno']==10) $slot=1; else $slot=$res['slotno']+1;
    	$slot_id='slot_'.$slot;
    } else { $slot=1; 
    	$slot_id='slot_1';
    }
    
    $ad=$objMain->getRow("select * from ad_slot");
    
    	$data[] = array(
    			'ad' 			=>	$ad[$slot_id],
    			'type' 			=>	$ad[$slot_id."_type"]
    		);	
    $today_click = $res['daily_click']+1;	
    $total_click = $res['total_click']+1;	
    $btc=$res['btc']+0.00000010;
    $total_btc=$res['total_btc']+0.00000010;
    $objMain->Query("update admin set branch=branch+1 where username='admin'");
    $objMain->Query("update pu_users set daily_click=".$today_click.",total_click=".$total_click.",total_btc=".$total_btc.", btc=".$btc.", slotno=".$slot.", last_ad_date='".date("Y-m-d")."' where id=".$id);
    if($res['reff_by']!="")
    $objMain->Query("update pu_users set btc=btc+0.00000002 where reffcode='".$res['reff_by']."'");
    $res = array ("res" => $data);
    echo json_encode($res);
    return;
}else{
    if($res['last_ad_date'] !=date("Y-m-d")){
        $objMain->Query("update pu_users set daily_click=0 where id=".$id);
    }
    $referCheck=$objMain->getRow("select * from referral_users where referral_user_id=".$id." and alloted==0");
    if(count($referCheck)<=5){
        $data[] = array(
                'message'           =>  'Refer Your 5 Friends Earn Points',
            );  
        $res = array ("res" => $data);
        echo json_encode($res);  
        return;
    }else{
        $referUpdateFetch=$objMain->getRow("select id from referral_users where referral_user_id=".$id." and alloted==0 limit 0,5");
        $objMain->Query("update referral_users set alloted=1 where id IN($referUpdateFetch)");   
       //  if($res['last_ad_date']==date("Y-m-d")){
       //  if($res['slotno']==10) $slot=1; else $slot=$res['slotno']+1;
       //  $slot_id='slot_'.$slot;
       //  } else { $slot=1; 
       //      $slot_id='slot_1';
       //  }
       // $ad=$objMain->getRow("select * from ad_slot");
       //  $data[] = array(
       //          'ad'            =>  $ad[$slot_id],
       //          'type'          =>  $ad[$slot_id."_type"]
       //      );  
       //      $res = array ("res" => $data);
       //  echo json_encode($res);
       $objMain->Query("update pu_users set daily_click=0 where id=".$id);
        /*$data[] = array(
                'message'           =>  'Refer Your 5 Friends Earn Points',
            );  
        $res = array ("res" => $data);
        echo json_encode($res);  
        return;*/
        if($res['last_ad_date']==date("Y-m-d")){
    	if($res['slotno']==10) $slot=1; else $slot=$res['slotno']+1;
    	$slot_id='slot_'.$slot;
        } else { $slot=1; 
        	$slot_id='slot_1';
        }
        
        $ad=$objMain->getRow("select * from ad_slot");
        
        	$data[] = array(
        			'ad' 			=>	$ad[$slot_id],
        			'type' 			=>	$ad[$slot_id."_type"]
        		);	
        $today_click = $res['daily_click']+1;	
        $total_click = $res['total_click']+1;	
        $btc=$res['btc']+0.00000010;
        $total_btc=$res['total_btc']+0.00000010;
        $objMain->Query("update admin set branch=branch+1 where username='admin'");
        $objMain->Query("update pu_users set daily_click=".$today_click.",total_click=".$total_click.",total_btc=".$total_btc.", btc=".$btc.", slotno=".$slot.", last_ad_date='".date("Y-m-d")."' where id=".$id);
        if($res['reff_by']!="")
        $objMain->Query("update pu_users set btc=btc+0.00000002 where reffcode='".$res['reff_by']."'");
        $res = array ("res" => $data);
        echo json_encode($res);
        return;
    }
    
}
?>