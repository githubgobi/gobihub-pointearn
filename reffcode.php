<?php include("lib/common.php"); extract($_REQUEST); $data= array();
if($reffcode=="TRYAGAIN"){
    $data[] = array(
                'status'            =>  'Better Luck Next Time'
            );
    $res = array ("res" => $data);
    echo json_encode($res);
}else{
    $res=$objMain->getRow("select * from pu_users where reffcode='".$reffcode."'");
    $promocode=$objMain->getRow("select * from promocode where promo_code='".$reffcode."'");
    if(!empty($promocode)){
    $cnt=$objMain->getResultsCount("select * from promocode_users where promocode=".$promocode['id']." and userid=".$id); 
    if($cnt==0){
        $objMain->Query("update pu_users set btc=btc+".$promocode['points']." where id='".$id."'");
        $data[] = array(
                'status'            =>  'Points Claimed'
            );
    } else {
        $data[] = array(
                'status'            =>  'Already Used'
            );
    }

    $res = array ("res" => $data);
    echo json_encode($res);
        
    } else {
    if(!empty($res)){
        $checkAlreadyDone=$objMain->getRow("select * from pu_users where id=".$id);
        if($checkAlreadyDone['reff_by']==''){
            $result=$objMain->getRow("select * from pu_users where reffcode='".$reffcode."' and id=".$id);
            if(empty($result)){
                $objMain->Query("update pu_users set reff_by='".$reffcode."' where id=".$id);
                $objMain->Query("insert into  referral_users set referral_user_id='".$res['id']."',user_id=".$id);
                $objMain->Query("update pu_users set btc=btc+0.00000010,total_btc=total_btc+0.00000010 where reffcode='".$reffcode."'");
                $data[] = array(
                        'status'            =>  'success'
                    );  
            }else{
                $data[] = array(
                    'status'            =>  'failure'
                );   
            }
        }else{
            $data[] = array(
                'status'            =>  'Already Used'
            );
        }
        
            
    } else {
        $data[] = array(
                'status'            =>  'failure'
            );          
    }

    $res = array ("res" => $data);
    echo json_encode($res);
    }  
}

?>