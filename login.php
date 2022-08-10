<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
   <meta charset="UTF-8">
        <title> Admin | Barangay Management System</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
		
		 <link href="css/style3.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="css/style.css">

</head>
<body>


 <header class="header" style="margin-top:-850px;">
    <div class="container1" >
        
        <div class="row align-items-center justify-content-between">

            <img src="img/logo.png" style="height:80px;"/>

           
      
          
           <nav class="nav">
              <ul>

                <img src="img/about.png" class="img1" style="height:40px;"/> &emsp; &emsp;
                <li><a href="about.php">ABOUT</a></li> &emsp; &emsp;
                <img src="img/admin.png" class="img2" style="height:40px;"/> &emsp; &emsp;
                <li><a href="login.php"class="active">ADMIN</a></li>  &emsp; &emsp; 
                <img src="img/user.png"class="img3" style="height:40px;"/> &emsp; &emsp;
				<li><a href="pages/resident/login.php">RESIDENT</a></li> &emsp; &emsp;
            

              </ul>
           </nav>
        </div>
    </div>

    <br>
    <br>
    <br>

	<div class="container" style="margin-top:80px">
         <div class="col-md-4 col-md-offset">
              <div class="panel panel-default">
            <div class="panel-heading" style="text-align:center;">
                <img src="img/logo.png" style="height:110px;"/>
              <label class="panel_title">
                    Administrator
              </label>
            </div>
		<br>
            <div class="panel-body">
              <form role="form" method="post">
                <div class="form-group">
					
                  <input type="text" class="log_user"  name="txt_username" placeholder="Username" required>
                </div>
                <div class="form-group">
				<br>
                  <input type="password" class="log_Pass"  name="txt_password" placeholder="Password" required>
                </div>
				<br>
                <button type="submit" class="login-submit" name="btn_login">Log In</button>
                <label id="error" class="label label-danger pull-right"></label> 
				<br>

              </form>
            </div>
          </div>
          </div>
        </div>
        <div class="text" ><h5>Copyright © 2022 BMS. All Rights Reserved | Privacy Policy </h5></div>
 </header>

      <?php
        include "pages/connection.php";
        if(isset($_POST['btn_login']))
        { 
            $username = $_POST['txt_username'];
            $password = $_POST['txt_password'];


            $admin = mysqli_query($con, "SELECT * from user where username = '$username' and password = '$password' and type = 'administrator' ");
            $numrow_admin = mysqli_num_rows($admin);

           

            if($numrow_admin > 0)
            {
                while($row = mysqli_fetch_array($admin)){
                  $_SESSION['role'] = "Administrator";
                  $_SESSION['userid'] = $row['id'];
                  $_SESSION['username'] = $row['username'];
                }    
                header ('location: pages/dashboard/dashboard.php');
            }
		
			elseif($username=="" ||  $password =="")
			{
				echo '<script type="text/javascript">document.getElementById("error").innerHTML = "Please fill out all fields";</script>';
				
			}
            else
            {
              echo '<script type="text/javascript">document.getElementById("error").innerHTML = "Invalid Account";</script>';
               
            }
             
        }
        
      ?>
</body>
</html>
