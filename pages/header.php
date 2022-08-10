  <?php

   echo  '<header class="header" style = "background: #382140;">
            


				<nav class="navbar navbar-static-top" role="navigation"style = "background:  #382140;" >
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button" >
                    <span class="sr-only" >Toggle navigation</span>
					<i class="fa fa-bars fa-lg" style ="color: #a195ab;"aria-hidden="true"></i>
                </a>
                <div class="navbar-right" >
                    <ul class="nav navbar-nav">

                        <!-- User Account-->
                        <li class="dropdown user user-menu" >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user" style ="color: #a195ab;"></i><span style ="color: #a195ab;">Account<i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu" style = "height: 150px; width: 180px; border-radius: 8px 8px 0px 0px;  ">
                                <!-- User image -->
                                <li class="user-header bg-purple" >
                                    
                                    <p>
                                        '.$_SESSION['role'].'
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left" style="margin-left: 10px;">
                                        <a href="#" data-toggle="modal" data-target="#editProfileModal"><i class="fa fa-cog" aria-hidden="true"></i> Manage Account</a>
                                    </div> 
                                    <div class="pull-left" style= "margin-top:40px; margin-left: -100px;">
                                        <a href="../../logout.php" ><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>'; ?>


         <div id="editProfileModal" class="modal fade">
            <form method="post">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Manage Account</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                        <?php
                        if($_SESSION['role'] == "Administrator"){
                            $user = mysqli_query($con,"SELECT * from user where id = '".$_SESSION['userid']."' ");
                            while($row = mysqli_fetch_array($user)){
                                echo '
                                    <div class="form-group">
                                        <label>Username:</label>
                                        <input name="txt_username" id="txt_username" class="form-control input-sm" type="text" value="'.$row['username'].'" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input name="txt_password" id="txt_password" class="form-control input-sm" type="password"  value="'.$row['password'].'"/>
                                    </div>';
                            } 
                        }
                       
                        else{
                            $user = mysqli_query($con,"SELECT * from resident where id = '".$_SESSION['userid']."' ");
                            while($row = mysqli_fetch_array($user)){
                                echo '
                                    <div class="form-group">
                                        <label>Username:</label>
                                        <input name="txt_username" id="txt_username" class="form-control input-sm" type="text" value="'.$row['username'].'" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input name="txt_password" id="txt_password" class="form-control input-sm" type="password"  value="'.$row['password'].'"/>
                                    </div>';
                            } 
                        }
                        ?>
                         
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" id="btn_saveeditProfile" name="btn_saveeditProfile" value="Save"/>
                    </div>
                </div>
              </div>
              </form>
            </div>


            <?php
            if(isset($_POST['btn_saveeditProfile'])){
                $username = $_POST['txt_username'];
                $password = $_POST['txt_password'];

                if($_SESSION['role'] == "Administrator"){
                    $updadmin = mysqli_query($con,"UPDATE user set username = '$username', password = '$password' where id = '".$_SESSION['userid']."' ");
                    if($updadmin == true){
                        header ("location: ".$_SERVER['REQUEST_URI']);
                    }
                }
                else{
                    $updres = mysqli_query($con,"UPDATE resident set username = '$username', password = '$password' where id = '".$_SESSION['userid']."' ");
                    if($updres == true){
                        header ("location: ".$_SERVER['REQUEST_URI']);
                    }
                }
                
            }

            ?>