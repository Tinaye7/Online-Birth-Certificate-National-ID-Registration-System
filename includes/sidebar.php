        <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsuid']==0)) {
  header('location:logout.php');
  } else{



  ?>
  <div class="left-sidebar-pro" >
            <nav id="sidebar">
                <div class="sidebar-header" style= background:#e0dd0d>
                     <?php
$uid=$_SESSION['obcsuid'];
$sql="SELECT FirstName,LastName,MobileNumber from  users where ID=:uid";
$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                    <a href="#"><img src="img/message/avatar.jpg" alt="" />
                    </a>
                    <h3><?php  echo $row->FirstName;?>  <?php  echo $row->LastName;?></h3>
                    <p><?php  echo $row->MobileNumber;?></p><?php $cnt=$cnt+1;}} ?>
                   
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro" >
                        <li class="nav-item">
                            <a href="dashboard.php" role="button" aria-expanded="false"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> </a>
                            
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">Birth Certificate Registration</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="fill-birthregform.php" class="dropdown-item">Add Details</a>
                                <a href="view-birthregform.php" class="dropdown-item">Manage Details</a>
                              
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">National ID Registration</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="fill-birthregform2.php" class="dropdown-item">Add Details</a>
                                <a href="view-birthregform2.php" class="dropdown-item">Manage Details</a>
                              
                            </div>
                        </li>
                       <li class="nav-item">
                            <a href="certificates-list.php" role="button" aria-expanded="false"><i class="fa big-icon fa-user"></i> <span class="mini-dn"> Approved Birth Certificate(s)</span> </a>
                            
                        </li>
                        <li class="nav-item">
                            <a href="certificates-list2.php" role="button" aria-expanded="false"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Approved ID(s)</span> </a>
                            
                        </li>
                   
                    </ul>
                </div>
            </nav>
        </div><?php }  ?>