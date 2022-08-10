<!DOCTYPE html>
<html>

    <?php
    session_start();
    if(!isset($_SESSION['role']))
    {
        header("Location: ../../login.php"); 
    }
    else
    {
    ob_start();
    include('../head_css.php'); ?>
	<style>
    .input-size {
        width:418px;
    }
    </style>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php 
        
        include "../connection.php";
        ?>
        <?php include('../header.php'); ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include('../sidebar-left.php'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style = "margin-top: 7px;">
                    <h1>
                        Dashboard
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                  

							
                    <?php if($_SESSION['role'] == "Administrator"){
                       ?>
                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box" style = "border-radius: 0px 15px 15px 0px;">
                                    <a href="../resident/resident.php"><span class="info-box-icon bg-purple"  style = "border-radius: 15px 0px 0px 15px;"><i class="fa fa-users"></i></span></a>

                                    <div class="info-box-content">
                                      <center><span class="info-box-text">Total Resident</span></center>
                                      <center><span class="info-box-number" style = "font-size: 30px; margin-top: 5px;">
                                        <?php
												 if($_SESSION['role'] == "Administrator")
                                            {
                                            $q = mysqli_query($con,"SELECT * from resident");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
											}
                                        ?>
                                      </span></center>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>
								
								
								
								  <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box" style = "border-radius: 0px 15px 15px 0px;">
                                    <a href="../resident/resident.php"><span class="info-box-icon bg-purple"  style = "border-radius: 15px 0px 0px 15px;"><i class="fa fa-user"></i></span></a>

                                    <div class="info-box-content">
                                      <center><span class="info-box-text">Total Male</span></center>
                                      <center><span class="info-box-number" style = "font-size: 30px; margin-top: 5px;">
                                        <?php
										 if($_SESSION['role'] == "Administrator")
                                            {
                                            $q = mysqli_query($con,"SELECT * from resident where gender = 'male'");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
											}
                                        ?>
                                      </span></center>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>
								
								
							
								 <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box" style = "border-radius: 0px 15px 15px 0px;">
                                    <a href="../resident/resident.php"><span class="info-box-icon bg-purple"  style = "border-radius: 15px 0px 0px 15px;"><i class="fa fa-user"></i></span></a>

                                    <div class="info-box-content">
                                      <center><span class="info-box-text">Total Female</span></center>
                                      <center><span class="info-box-number" style = "font-size: 30px; margin-top: 5px;">
                                        <?php
										 if($_SESSION['role'] == "Administrator")
                                            {
                                            $q = mysqli_query($con,"SELECT * from resident where gender = 'female'");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
											}
                                        ?>
                                      </span></center>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>
								
								 <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box" style = "border-radius: 0px 15px 15px 0px;">
                                    <a href="../officials/officials.php"><span class="info-box-icon bg-purple"  style = "border-radius: 15px 0px 0px 15px;"><i class="fa fa-users"></i></span></a>

                                    <div class="info-box-content">
                                      <center><span class="info-box-text">Total Official</span></center>
                                      <center><span class="info-box-number" style = "font-size: 30px; margin-top: 5px;">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * from official");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span></center>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>
								
								<?php
					}
					?>
								

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box" style = "border-radius: 0px 15px 15px 0px;">
                                    <a href="../clearance/clearance.php"><span class="info-box-icon bg-purple" style = "border-radius: 15px 0px 0px 15px;"><i class="fa fa-file"></i></span></a>

                                    <div class="info-box-content">
                                      <center><span class="info-box-text">Total Clearance</span> </center>
                                       <center><span class="info-box-number" style = "font-size: 30px; margin-top: 5px;"> 
                                        <?php
										 if($_SESSION['role'] == "Administrator")
                                            {
                                            $q = mysqli_query($con,"SELECT * from clearance where status = 'Approved' ");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
											}
											else
											{
											$q = mysqli_query($con,"SELECT * from clearance where status = 'Approved' and residentid = '".$_SESSION['userid']."'");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
											}	
											
                                        ?>
										
                                          
                                      </span></center>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box" style = "border-radius: 0px 15px 15px 0px;">
                                    <a href="../permit/permit.php"><span class="info-box-icon bg-purple" style = "border-radius: 15px 0px 0px 15px;"><i class="fa fa-file"></i></span></a>

                                    <div class="info-box-content">
                                      <center><span class="info-box-text">Total Permit</span> </center>
                                      <center> <span class="info-box-number" style = "font-size: 30px; margin-top: 5px;">
                                        <?php
										 if($_SESSION['role'] == "Administrator")
                                            {
                                            $q = mysqli_query($con,"SELECT * from permit where status = 'Approved' ");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
											}
											else
											{
                                            $q = mysqli_query($con,"SELECT * from permit where status = 'Approved' and residentid = '".$_SESSION['userid']."'  ");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
											}
											
											
											
									
                                        ?>
                                      </span> </center>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box" style = "border-radius: 0px 15px 15px 0px;">
                                    <a href="../blotter/blotter.php"><span class="info-box-icon bg-purple" style = "border-radius: 15px 0px 0px 15px;"><i class="fa fa-user"></i></span></a>

                                    <div class="info-box-content">
                                      <center><span class="info-box-text">Total Blotter</span></center>
                                      <center><span class="info-box-number" style = "font-size: 30px; margin-top: 5px;">
                                        <?php
										 
										 if($_SESSION['role'] == "Administrator")
                                            {
                                            $q = mysqli_query($con,"SELECT * from blotter");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
											}
										else
											{
											 $q = mysqli_query($con,"SELECT * from blotter where personToComplain = '".$_SESSION['userid']."' ");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;	
											}
                                        ?>
                                      </span></center>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>
								
								
								
                               
								
								
								
								
                            </div><!-- /.box -->
                    </div>   <!-- /.row -->
					 
                        <!-- left column -->
                         
                                

                            


                  
						</section><!-- /.content -->
						</aside>
        
            <!-- Right side column. Contains the navbar and content of the page -->
     
		 
  <aside class="right-side">
 
                <?php 
                if(!isset($_GET['resident']))
                {
                ?>
                <!-- Main content -->
                 <section class="content" style = "margin-top: -500px;">
                    <div class="row">
					
                        <!-- left column -->
                            <div class="box">
                               <div class="col-md-6 ">
                               <div class="box-body table-responsive">
                                <form method="post"  enctype="multipart/form-data">
                                    <table class="table table-bordered table-striped">
                                        <thead>
										<h3>Resident</h3>
                                            <tr>
                                                <th>Zone</th>
                                                <th>Image</th>
												<th>Name</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th>House No./ Street</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if($_SESSION['role'] == "Administrator")
                                            {
                                                $squery = mysqli_query($con, "SELECT * FROM resident_view");
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                       
                                                        <td>'.$row['zone'].'</td>
														<td style="width:70px;"><image src="/bms/pages/resident/image/'.basename($row['image']).'" style="width:70px;height:70px;"/></td>
                                                        <td>'.$row['cname'].'</td>
                                                        <td>'.$row['age'].'</td>
                                                        <td>'.$row['gender'].'</td>
                                                        <td>'.$row['houseNoStreet'].'</td>

                                                    </tr>
                                                    ';

                                                 
                                                }
                                            }
                                            else{
                                                $squery = mysqli_query($con, "SELECT * FROM resident_view where id = '".$_SESSION['userid']."'");
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td>'.$row['zone'].'</td>
														<td style="width:70px;"><image src="/bms/pages/resident/image/'.basename($row['image']).'" style="width:70px;height:70px;"/></td>
                                                        <td>'.$row['cname'].'</td>
                                                        <td>'.$row['age'].'</td>
                                                        <td>'.$row['gender'].'</td>
                                                        <td>'.$row['houseNoStreet'].'</td>
                                                        <td><button class="btn btn-primary btn-md" data-target="#editModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></td>
                                                    </tr>
                                                    ';

                                                    include "edit_modal.php";
													include "function.php";

                                              
                                                }
                                            }
			
                                            ?>
                                        </tbody>
                                    </table>

                                    

                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
							 </div>   <!-- /.row -->
							 
							 
							  <?php 
                                            if($_SESSION['role'] == "Administrator")
                                            {
                                        ?>
							    <div class="col-md-6 " >
							    <div class="box-body table-responsive">
                                <form method="post">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
										<h3 style = "margin-top: 30px;">Officials</h3>
                                            <tr>
                                             
                                                <th>Position</th>
                                                <th>Name</th>
                                                <th>Contact</th>
                                              
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                               if($_SESSION['role'] == "Administrator")
                                                {

                                                    $squery = mysqli_query($con, "select * from official ");
                                                    while($row = mysqli_fetch_array($squery))
                                                    {
                                                        echo '
                                                        <tr>
                                                           
                                                            <td>'.$row['sPosition'].'</td>
                                                            <td>'.$row['completeName'].'</td>
                                                            <td>'.$row['pcontact'].'</td>
                                                           
                                                        ';

                                                    
                                                    }

                                                }
                                              
                                            ?>
                                        </tbody>
										<?php 
                                          
                                            {
                                        ?>
                                    </table>

                                   

                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
							 
<div>
                          
						</div>
						</section><!-- /.content -->

                 
            </aside><!-- /.right-side -->
      </div>
      
        <!-- jQuery 2.0.2 -->
		

                 

	<?php }}}}
        include "../footer.php"; 
		 ?>

  
<script type="text/javascript">
    $(function() {
        $("#table").dataTable({
           "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,5 ] } ],"aaSorting": []
        });
    });
</script>
    </body>
</html>