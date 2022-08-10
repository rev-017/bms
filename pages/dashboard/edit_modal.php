<link href="modal1.css" rel="stylesheet" type="text/css" />
<?php echo '<div id="editModal'.$row['id'].'" class="modal fade">

<form class="form-horizontal" method="post" enctype="multipart/form-data">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Resident Information</h4>
        </div>
        <div class="modal-body">';

        $edit_query = mysqli_query($con,"SELECT * from resident where id = '".$row['id']."' ");
        $erow = mysqli_fetch_array($edit_query);

        echo '
            <div class="row">
                <div class="container-fluid">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">

                        <input type="hidden" value="'.$erow['id'].'" name="hidden_id" id="hidden_id"/>
                            <label class="control-label">Name:</label><br>
                            <div class="col-sm-4">
                                <input name="txt_edit_lname" class="form-control input-sm" type="text" value="'.$erow['lname'].'"/>
                            </div> 
                            <div class="col-sm-4">
                                <input name="txt_edit_fname" class="form-control input-sm" type="text" value="'.$erow['fname'].'"/>
                            </div> 
                            <div class="col-sm-4">
                                <input name="txt_edit_mname" class="form-control input-sm" type="text" value="'.$erow['mname'].'"/>
                            </div> <br>
                        </div>

                        <div class="form-group">
                            <label class="control-label" style="margin-top:10px;">Birthdate:</label>
                            <input name="txt_edit_bdate" class="form-control input-sm input-size" type="date" value="'.$erow['bdate'].'"/> 
                        </div>

					   <div class="form-group">
                            <label class="control-label">Birthplace:</label>
                            <input name="txt_edit_bplace" class="form-control input-sm input-size" type="text" value="'.$erow['bplace'].'"/>
                        </div>
					
					
                        <div class="form-group">
                            <label class="control-label">Barangay:</label>
                            <input name="txt_edit_brgy" class="form-control input-sm input-size" type="text" value="'.$erow['barangay'].'"/>
                        </div>


					<div class="form-group">
                            <label class="control-label">Educational Attainment:</label>
                            <select name="ddl_edit_eattain" class="form-control input-sm input-size">
                                <option selected>'.$erow['highestEducationalAttainment'].'</option>
                                <option>No schooling completed</option>
                                <option>Elementary</option>
                                <option>High school, undergrad</option>
                                <option>High school graduate</option>
                                <option>College, undergrad</option>
                                <option>Vocational</option>
                                <option>Bachelor’s degree</option>
                                <option>Master’s degree</option>
                                <option>Doctorate degree</option>
                            </select>
                        </div>
                 
                        <div class="form-group">
                            <label class="control-label">Differently-abled Person:</label>
                       
							<select name="txt_edit_dperson" class="form-control input-sm input-size">
                                            <option selected="" disabled="">'.$erow['differentlyabledperson'].'</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
											 </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Blood Type:</label>
                       
							<select name="txt_edit_btype" class="form-control input-sm input-size">
                                            <option selected="" disabled="">'.$erow['bloodtype'].'</option>
                                            <option value="O-">O-</option>
                                            <option value="O+">O+</option>
											 <option value="A-">A-</option>
                                            <option value="A+">A+</option>
											 <option value="B-">B-</option>
                                            <option value="B+">B+</option>
											 <option value="AB-">AB-</option>
                                            <option value="AB+">AB+</option>
											 <option value="Unknown">Unknown</option>
                                            
											 </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Civil Status:</label>
                         
							 <select name="txt_edit_cstatus" class="form-control input-sm input-size">
                                            <option selected="" disabled="">'.$erow['civilstatus'].'</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
											<option value="Separated">Separated</option>
											<option value="Divorced">Divorced</option>
                                            <option value="Widowed">Widowed</option>
											
                                        </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Length of Stay: (in Months)</label>
                            <input name="txt_edit_length" class="form-control input-sm  input-size" type="number" min="1" value="'.$erow['lengthofstay'].'"/>
                        </div>

                   

                        
                   

                    </div>


						
							
                    <div class="col-md-6 col-sm-12">
					
					
					<div class="form-group">
                            <label class="control-label">Image:</label>
                            <input name="txt_edit_image" class="form-control input-sm" type="file" />
                        </div>
						
						
                        <div class="form-group">
                            <label class="control-label">Gender:</label>
                            <select name="ddl_edit_gender" class="form-control input-sm">
                                <option value="'.$erow['gender'].'" selected="">'.$erow['gender'].'</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
					
					
					 <div class="form-group">
                            <label class="control-label">Phone No:</label>
                            <input name="txt_edit_phno" class="form-control input-sm" type="number" max="999999999999" min="1" value="'.$erow['phoneNo'].'"/>
                        </div>
					
					
					
					<div class="form-group">
                            <label class="control-label">House No./Street:</label>
                            <input name="txt_edit_hNoStreet" class="form-control input-sm" type="text" value="'.$erow['houseNoStreet'].'"/>
                        </div>
						
                     

                       

                        <div class="form-group">
                            <label class="control-label">Zone #:</label>

							  	 <select name="txt_edit_zone" class="form-control input-sm ">
                                            <option selected="" disabled="">'.$erow['zone'].'</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
											 <option value="3">3</option>
                                            <option value="4">4</option>
											 </select>
                        </div>

                      

                        <div class="form-group">
                            <label class="control-label">Occupation:</label>
                            <input name="txt_edit_occp" class="form-control input-sm" type="text" value="'.$erow['occupation'].'"/>
                        </div>

                
						<div class="form-group">
                            <label class="control-label">Nationality:</label>
                            <input name="txt_edit_national" class="form-control input-sm" type="text" value="'.$erow['nationality'].'"/>
                        </div>
						
                        <div class="form-group">
                            <label class="control-label">Religion:</label>
                            <input name="txt_edit_religion" class="form-control input-sm" type="text" value="'.$erow['religion'].'"/>
                        </div>

                      
                        <div class="form-group">
                            <label class="control-label">House Ownership Status:</label>
                            <select name="ddl_edit_hos" class="form-control input-sm">
                                <option value="'.$erow['houseOwnershipStatus'].'" selected>'.$erow['houseOwnershipStatus'].'</option>
                                <option value="Own Home">Own Home</option>
                                <option value="Rent">Rent</option>
                                <option value="Live with Parents/Relatives">Live with Parents/Relatives</option>
                            </select>
                        </div>


       

                      


                      

                    </div>

                    </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_save" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>