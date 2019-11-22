<?php include("lib/common.php"); include("lib/session_check.php"); $menu='master'; ?><!DOCTYPE html> <?php $ptype="BTC"; 
$res=$objMain->getRow("select * from btc");
?>
<html lang="en">
<head>
    <?php include("inc/header_scripts.php"); ?>
    <title>Update <?php echo $ptype; ?></title>
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
                <h4 class="mb-0">Update <?php echo $ptype; ?>
                </h4>
                <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                    <li class="breadcrumb-item"><a href="dashboard.php" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Update <?php echo $ptype; ?></li>
                </ol>
            </div>
            <!--page title end-->


            <div class="container-fluid">

                <!-- state start-->
                <div class="row">
                    <div class=" col-md-4">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                               <?php
     if(isset($msg) && $msg=='upd') { $atype="success";
    $msg=$ptype." Updated successfully"; }

  ?>
    <?php if(isset($msg)) { ?>
      <div class="alert alert-<?php echo $atype; ?> alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <p><i class="icon fa fa-ban"></i> <?php echo $msg; ?></p>
      </div>
          <?php } ?>
                            </div>
                            <div class="card-body">
                                <form method="post" action="init.php?module=admin&action=btc&do=update" enctype="multipart/form-data" >
                                
                    <div class="form-group col-lg-12">
                                        <label for="exampleFormControlTextarea1">BTC Value (1 BTC = $$)</label>
                                        <input type="text" name="btc_value" id="btc_value" class="form-control" required="" value="<?php echo stripcslashes($res['btc_value']); ?>">
                                    </div>
                                                                     
                                    
                                
                                    
                                    <button type="submit" class="btn btn-danger col-lg-4 pull-right">Submit</button>
                                </form>
                               
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
