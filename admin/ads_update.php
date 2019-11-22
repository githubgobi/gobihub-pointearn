<?php include("lib/common.php"); include("lib/session_check.php"); $menu='master'; ?><!DOCTYPE html> <?php $ptype="Ad Slot"; 
$res=$objMain->getRow("select * from ad_slot");
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
                    <div class=" col-md-8">
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
                                <form method="post" action="init.php?module=admin&action=ads&do=update" enctype="multipart/form-data" >
                                
                    <?php for($i=1;$i<=10;$i++) { ?>
                                <div class="row">
                                    <div class="form-group col-lg-10">
                                        <label for="exampleFormControlTextarea1">Slot <?php echo $i; ?></label>
                                        <textarea name="slot_<?php echo $i; ?>" id="slot_<?php echo $i; ?>" class="form-control" required="" ><?php echo stripcslashes($res['slot_'.$i]); ?></textarea>
                                    </div>
                                    <div class="form-group col-lg-2">
                                        <label for="exampleFormControlTextarea1">Slot <?php echo $i; ?> Type</label>
                                        <div class="form-group">
                                        <input type="radio" name="slot_<?php echo $i; ?>_type" id="solt_<?php echo $i; ?>_type_url" <?php if($res['slot_'.$i."_type"]=='url') echo "checked"; ?> value="url"> <label for="solt_<?php echo $i; ?>_type_url">URL</label> &nbsp;
                                         <input type="radio" name="slot_<?php echo $i; ?>_type" id="solt_<?php echo $i; ?>_type_ad" <?php if($res['slot_'.$i."_type"]=='ad') echo "checked"; ?> value="ad"> <label for="solt_<?php echo $i; ?>_type_ad">Ad</label> &nbsp;
                                    </div></div>
                                   
                                </div>

                    <?php } ?>
                                                                     
                                    
                                
                                    
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
