<?php include("lib/common.php"); include("lib/session_check.php"); $menu='master'; ?>
<!DOCTYPE html> <?php $ptype='Users'; ?>
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
    if(isset($msg) && $msg=='suc') { $atype="success";
    $msg=$ptype." Added successfully"; }
     if(isset($msg) && $msg=='upd') { $atype="success";
    $msg=$ptype." Updated successfully"; }
     if(isset($msg) && $msg=='del') { $atype="danger";
    $msg=$ptype." Deleted successfully"; }

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
                                        <th>Registered Date</th>
                                        <th>BTC</th>
                                        <th>Total BTC</th>
                                    </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php 
$results=$objMain->getResults("select * from pu_users order by created_date");
                                        
                                        if(!empty($results)) { $i=0; foreach($results as $result) { $i++; ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $result['mailid']; ?></td>
                                        <td><?php echo date("d-m-Y h:i A",strtotime($result['created_date'])); ?></td>
                                        <td><?php echo $result['btc']; ?></td>
                                        <td><?php echo $result['total_btc']; ?></td>
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
