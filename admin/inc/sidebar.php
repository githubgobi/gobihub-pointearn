<?php 
$mnu_master='';
$mnu_transaction='';
$mnu_lead='';
$mnu_user='';
$mnu_reports="";
$mnu_receipts="";
if($menu=='master') $mnu_master='active';
if($menu=='transaction') $mnu_transaction='active';
if($menu=='lead') $mnu_lead='active';
if($menu=='users') $mnu_user='active'; 
if($menu=='reports') $mnu_reports='active';
if($menu=='receipts') $mnu_receipts='active'; ?>
<div class="left-sidebar">
  
            <nav class="sidebar-menu">
                <ul id="nav-accordion">
                    <li class="sub-menu">
                        <a href="dashboard.php">
                            <i class=" ti-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="ads_update.php">
                            <i class=" ti-home"></i>
                            <span>Ad Slots</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="users.php">
                            <i class=" ti-home"></i>
                            <span>Registerd Users</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="btc_update.php">
                            <i class=" ti-home"></i>
                            <span>BTC Value</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="withdraw_requests.php">
                            <i class=" ti-home"></i>
                            <span>New Withdraw Request</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="payments.php">
                            <i class=" ti-home"></i>
                            <span>Payments</span>
                        </a>
                    </li>

                    
                    
                </ul>
            </nav>
            
        </div>