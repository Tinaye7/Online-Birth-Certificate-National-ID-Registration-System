     <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
  <div class="left-sidebar-pro" >
            <nav id="sidebar">
                <div class="sidebar-header" style= background:#e0dd0d>
                    <a href="#"><img src="img/message/avatar.jpg" alt="" />
                    </a>
                    <?php
$aid=$_SESSION['obcsaid'];
$sql="SELECT AdminName,Email from  tbladmin where ID=:aid";
$query = $dbh -> prepare($sql);
$query->bindParam(':aid',$aid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                    <h3> <?php  echo $row->AdminName;?></h3>
                    <p> <?php  echo $row->Email;?></p>
                  <?php $cnt=$cnt+1;}} ?>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="dashboard.php" role="button" aria-expanded="false"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> </a>
                            
                        </li>
                       
                       
                      
                       
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> <span class="mini-dn">Birth Applications</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="new-birth-application.php" class="dropdown-item">New Applications</a>
                                <a href="verified-birth-application.php" class="dropdown-item">Verified Applications</a>
                                <a href="rejected-birth-application.php" class="dropdown-item">Rejected Applications</a>
                                <a href="all-birth-application.php" class="dropdown-item">All Applications</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> <span class="mini-dn">National ID Applications</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="new-birth-application2.php" class="dropdown-item">New Applications</a>
                                <a href="verified-birth-application2.php" class="dropdown-item">Verified Applications</a>
                                <a href="rejected-birth-application2.php" class="dropdown-item">Rejected Applications</a>
                                <a href="all-birth-application2.php" class="dropdown-item">All Applications</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="between-dates-report.php" role="button" aria-expanded="false"><i class="fa big-icon fa-files-o"></i> <span class="mini-dn">Between Dates Birth Report</span> </a>
                            
                        </li>
                        <li class="nav-item">
                            <a href="between-dates-report2.php" role="button" aria-expanded="false"><i class="fa big-icon fa-files-o"></i> <span class="mini-dn">Between Dates ID Report</span> </a>
                            
                        </li>
                        <li class="nav-item">
                            <a href="search.php" role="button" aria-expanded="false"><i class="fa fa-search"></i> <span class="mini-dn">Search Birth Certificate Applications</span> </a>
                            
                        </li>
                        <li class="nav-item">
                            <a href="search2.php" role="button" aria-expanded="false"><i class="fa fa-search"></i> <span class="mini-dn">Search ID Applications</span> </a>
                            
                        </li>
                        <li><a href="logout.php"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                                </li>
                      
                    </ul>
                </div>
            </nav>
        </div>
        <?php }  ?>