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
                <section class="content-header">
                    <h1>
                        Blotter
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
					<?php
                    if($_SESSION['role'] == "Administrator")
                    {
                    ?>
                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                <div class="box-header">
                                    <div style="padding:10px;">
                                        
                                        <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#addModal1"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Blotter</button>  
                                        <?php 
                                            if(!isset($_SESSION['Administrator']))
                                            {
                                        ?>
                                        <button class="btn btn-danger btn-md" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button> 
                                        <?php
                                           }
                                        ?>
                                
                                    </div>                                
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                <form method="post">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
										 <?php 
                                            if(!isset($_SESSION['Administrator']))
                                            {
                                        ?>
                                                <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
										<?php
                                          }
                                        ?>
                                                <th>Date Recorded</th>
                                                <th>Complainant</th>
                                                <th>Person To Complain</th>
                                                <th>Complaint</th>
                                                <th>Action Taken</th>
                                                <th>Status</th>
                                                <th>Location of Incidence</th>
                                                <th >Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if(!isset($_SESSION['Administrator']))
                                            {

                                                $squery = mysqli_query($con, "SELECT * FROM blotter_view") or die('Error: ' . mysqli_error($con));
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['bid'].'" /></td>
                                                        <td>'.$row['dateRecorded'].'</td>
                                                        <td>'.$row['complainant'].'</td>
                                                        <td>'.$row['rname'].'</td>
                                                        <td>'.$row['complaint'].'</td>
                                                        <td>'.$row['actionTaken'].'</td>
                                                        <td>'.$row['sStatus'].'</td>
                                                        <td>'.$row['locationOfIncidence'].'</td>
                                                        <td><button class="btn btn-primary btn-md" data-target="#editModal'.$row['bid'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></td>
                                                    </tr>
                                                    ';

                                                    include "edit_modal.php";
                                                }
                                            }
                                            else{
                                                $squery = mysqli_query($con,  "SELECT * FROM blotter_view") or die('Error: ' . mysqli_error($con));
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td>'.$row['dateRecorded'].'</td>
                                                        <td>'.$row['complainant'].'</td>
                                                        <td>'.$row['rname'].'</td>
                                                        <td>'.$row['complaint'].'</td>
                                                        <td>'.$row['actionTaken'].'</td>
                                                        <td>'.$row['sStatus'].'</td>
                                                        <td>'.$row['locationOfIncidence'].'</td>
                                                        <td><button class="btn btn-primary btn-md" data-target="#editModal'.$row['bid'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></td>
                                                    </tr>
                                                    ';

                                                    include "edit_modal.php";
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <?php include "add_modal.php"; ?>
                                     <?php include "../deleteModal.php"; ?>

                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <?php include "../edit_notif.php"; ?>

                            <?php include "../added_notif.php"; ?>

                            <?php include "../delete_notif.php"; ?>

           

            <?php include "function.php"; ?>


                    </div>   <!-- /.row -->
					<?php 
                    }
                    else
                    {
                    ?>
				<div class="row">
                        <!-- left column -->
                            <div class="box">
                                <div class="box-header">
                                    <div style="padding:10px;">
                                        
                                        <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#addModal1"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Blotter</button>  

                                
                                    </div>                                
                                </div><!-- /.box-header -->
								
                                <div class="box-body table-responsive">
								 <ul class="nav nav-tabs" id="myTab">
                                      <li class="active"><a data-target="#new" data-toggle="tab">Complaints Receive</a></li>
                                   
                                </ul>
									<br>
                                <form method="post">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>

                                                <th>Date Recorded</th>
                                                <th>Complainant</th>
                                                <th>Person To Complain</th>
                                                <th>Complaint</th>
                                                <th>Action Taken</th>
                                                <th>Status</th>
                                                <th>Location of Incidence</th>  </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           
                                                $squery = mysqli_query($con, "SELECT *, rid from blotter_view where rid = ".$_SESSION['userid']." ") or die('Error: ' . mysqli_error($con));
												  if(mysqli_num_rows($squery) > 0)
                                            {
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td>'.$row['dateRecorded'].'</td>
                                                        <td>'.$row['complainant'].'</td>
                                                        <td>'.$row['rname'].'</td>
                                                        <td>'.$row['complaint'].'</td>
                                                        <td>'.$row['actionTaken'].'</td>
                                                        <td>'.$row['sStatus'].'</td>
                                                        <td>'.$row['locationOfIncidence'].'</td>
                                                       
                                                    </tr>
                                                    ';

                                                    
											}}
												 else{
                                                echo '
                                                <tr>
                                                <td colspan="7" style="text-align: center;">No record found</td>
                                                </tr>
                                                ';
                                            }

                                            
                                            ?>
                                        </tbody>
                                    </table>
                                    <?php include "blotter_add_resident.php"; 
									?>

                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <?php include "../edit_notif.php"; ?>

                            <?php include "../added_notif.php"; ?>

							<?php include "function.php"; ?>
				

                    </div>   <!-- /.row -->
										<?php
                                            }
                                        ?>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <?php }
        include "../footer.php"; ?>
<script type="text/javascript">
    <?php
    if(!isset($_SESSION['staff']))
    {
    ?>
        $(function() {
            $("#table").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,8 ] } ],"aaSorting": []
            });
            $(".select2").select2();
        });
    <?php
    }
    else{
    ?>
        $(function() {
            $("#table").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 7 ] } ],"aaSorting": []
            });
            $(".select2").select2();
        });
    <?php
    }
    ?>
</script>
    </body>
</html>