<?php include("lib/common.php"); include("lib/session_check.php"); $menu='master'; ?>
<!DOCTYPE html> <?php $ptype='Withdraw Request'; ?>
<html lang="en">
<head>
    <?php include("inc/header_scripts.php"); ?>
    <title><?php echo $ptype; ?></title>
</head>
<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden">

    <!--===========header start===========-->
   <?php include("inc/header.php"); ?>
    <!--===========header end===========-->

    <!--===========app body start===========-->
    <div class="app-body">

        <!--left sidebar start-->
        <?php include("inc/sidebar.php"); ?>
        <!--left sidebar end-->

        <!--main contents start-->
        <main class="main-content">
            <!--page title start-->
            <div class="page-title">
                <h4 class="mb-0"><?php echo $ptype; ?>                </h4>
                <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                    <li class="breadcrumb-item"><a href="dashboard.php" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active"><?php echo $ptype; ?></li>
                </ol>
            </div>
            <!--page title end-->


            <div class="container-fluid">

                <!-- state start-->
                <div class="row">
                
                
                    <div class=" col-sm-12">
                        <?php
     if(isset($msg) && $msg=='upd') { $atype="success";
    $msg="Payment Transfered Successfully"; }

  ?>
    <?php if(isset($msg)) { ?>
      <div class="alert alert-<?php echo $atype; ?> alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <p><i class="icon fa fa-ban"></i> <?php echo $msg; ?></p>
      </div>
          <?php } ?>
                        <div class="card card-shadow mb-4">
                            
                            <div class="card-body">
                                <table id="bs4-table" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Email ID</th>
                                        <th>Request Date</th>
                                        <th>BTC</th>
                                        <th>Amount (USD)</th>
                                        <th>Amount (INR)</th>
                                        <th>Amount (EURO)</th>
                                        <th>Payment Type</th>
                                        <th>Payment ID</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php 
$results=$objMain->getResults("select * from withdraw_request where  `status`='pending' order by request_date");
                                        
                                        if(!empty($results)) { $i=0; foreach($results as $result) { $i++;
$user=$objMain->getRow("select * from pu_users where id=".$result['userid']);
if($result['payment_type']==1) $payment_type="Amazon Pay";
else if($result['payment_type']==2) $payment_type="UPI";
else if($result['payment_type']==3) $payment_type="Paypal";
else $payment_type="BTC Wallet";
                                         ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $user['mailid']; ?></td>
                                        <td><?php echo date("d-m-Y h:i A",strtotime($result['request_date'])); ?></td>
                                        <td><?php echo $result['btc']; ?></td>
                                        <td><?php echo $result['amount_usd']; ?></td>
                                        <td><?php echo $result['amount_inr']; ?></td>
                                        <td><?php echo $result['amount_euro']; ?></td>
                                        <td><?php echo $payment_type; ?></td>
                                        <td><?php echo $result['payment_id']; ?></td>
                                        <td><a href="update_payment.php?id=<?php echo $result['id']; ?>" class="btn btn-danger btn-xs">Update Payment</a></td>
                                    </tr>
                                    <?php } } ?>
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- state end-->

            </div>
        </main>
        <!--main contents end-->

        <!--right sidebar start-->
        <?php include("inc/rightsidebar.php"); ?>
        <!--right sidebar end-->

    </div>
    <!--===========app body end===========-->

    <!--===========footer start===========-->
    <?php include("inc/footer.php"); ?>
        <!--===========footer end===========-->


    <?php include("inc/footer_scripts.php"); ?>

    

</body>
</html>
