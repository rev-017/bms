<?php echo '<div id="editModal'.$row['bid'].'" class="modal fade">

<form class="form-horizontal" method="post" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Blotter Information</h4>
        </div>
        <div class="modal-body">';

             $edit_query = mysqli_query($con,"SELECT * from blotter where id = '".$row['bid']."' ");
               $row = mysqli_fetch_array($edit_query);

        echo '


            <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">


                        <input type="hidden" value="'.$row['id'].'" name="hidden_id" id="hidden_id"/>
                            <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">Complainant</label>
                            </div>  
                            <div class="col-sm-4">
                                <select name="txt_edit_cname" class="form-control input-sm select2" style="width:100%">
                                    <option>'.$row['complainant'].'</option>
                                    ';
                                        $qce = mysqli_query($con,"SELECT * from resident");
                                        while($rowce = mysqli_fetch_array($qce)){
                                            echo '
                                            <option>'.$rowce['lname'].', '.$rowce['fname'].' '.$rowce['mname'].'</option>
                                            ';
                                        }
                                    echo '   
                                </select>
                            </div> 

                            <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">Age:</label>
                            </div>
                            <div class="col-sm-4" >
                                <input name="txt_edit_cage" class="form-control input-sm" type="number" value="'.$row['cage'].'"/>
                            </div> 
                        </div><br>
                   
                        <div class="form-group">
                            <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">Address:</label>
                            </div>  
                            <div class="col-sm-4"  style="margin-top:10px;" >
                                <input name="txt_edit_cadd" class="form-control input-sm" type="text" value="'.$row['caddress'].'"/>
                            </div> 

                            <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">Contact #:</label>
                            </div>  
                            <div class="col-sm-4"  style="margin-top:10px;">
                                <input name="txt_edit_ccontact" class="form-control input-sm" type="number" value="'.$row['ccontact'].'"/>
                            </div> 
                        </div><br>

                        <div class="form-group">
                            <div class="col-sm-2" style="width:110px; margin-top:5px;">
                                <label class="control-label">Complainee:</label>
                            </div>  
                            <div class="col-sm-4"  style="margin-top:10px;" >
                                <select name="txt_edit_pname" class="form-control input-sm select2" style="width:100%">
								 <option value="'.$row['rid'].'">'.$row['rname'].'</option>
										';
                                        $qcp = mysqli_query($con,"SELECT * from resident");
                                        while($rowcp = mysqli_fetch_array($qcp)){
                                            echo '
                                            <option value="'.$rowcp['id'].'">'.$rowcp['lname'].', '.$rowcp['fname'].' '.$rowcp['mname'].'</option>
                                            ';
                                        }
                                    echo '   
                                </select>
                            </div>

                            <div class="col-sm-2" style="width:110px; margin-top:5px;">
                                <label class="control-label">Age:</label>
                            </div>
                            <div class="col-sm-4"  style="margin-top:10px;" >
                                <input name="txt_edit_page" class="form-control input-sm" type="number" value="'.$row['page'].'"/>
                            </div> 
                        </div><br>

                        <div class="form-group">
                            <div class="col-sm-2" style="width:110px; margin-top:15px;">
                                <label class="control-label">Address:</label>
                            </div>  
                            <div class="col-sm-4"  style="margin-top:10px;" >
                                <input name="txt_edit_padd" class="form-control input-sm" type="text" value="'.$row['paddress'].'"/>
                            </div> 

                            <div class="col-sm-2" style="width:110px; margin-top:15px;">
                                <label class="control-label">Contact #:</label>
                            </div>  
                            <div class="col-sm-4" style="margin-top:10px;" >
                                <input name="txt_edit_pcontact" class="form-control input-sm" type="number" value="'.$row['pcontact'].'"/>
                            </div> 
                        </div><br>

                        <div class="form-group">
                            <div class="col-sm-2" style="width:110px; margin-top:15px;">
                                <label class="control-label">Complaint:</label>
                            </div>
                            <div class="col-sm-4" style="margin-top:10px;">
                                <input name="txt_edit_complaint" class="form-control input-sm" type="text" value="'.$row['complaint'].'"/>
                            </div>

                            <div class="col-sm-2" style="width:110px; margin-top:15px;">
                                <label class="control-label">Action:</label>
                            </div>
                            <div class="col-sm-4" style="margin-top:10px;">
                                <select name="ddl_edit_acttaken" class="form-control input-sm">
                                    <option value="'.$row['actionTaken'].'" selected readonly>'.$row['actionTaken'].'</option>
											<option value="For Review">For Review</option>
											<option value="Hearing">Hearing</option>
                                            <option value="Summon">Summon</option>
                                            <option value="Amicable Settlement">Amicable Settlement</option>
                                </select>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <div class="col-sm-2" style="width:110px; margin-top:15px;">
                                <label class="control-label">Status:</label>
                            </div>
                            <div class="col-sm-4" style="margin-top:10px;">
                                <select name="ddl_edit_stat" class="form-control input-sm">
                                    <option value="'.$row['sStatus'].'" selected readonly>'.$row['sStatus'].'</option>
                                    <option>For Review</option>
								   <option >Solved</option>
                                    <option >Unsolved</option>
                                </select>
                            </div>

                            <div class="col-sm-2" style="width:110px;margin-top:15px;">
                                <label class="control-label">Incidence:</label>
                            </div>
                            <div class="col-sm-4" style="margin-top:10px;">
                                <input name="txt_edit_location" class="form-control input-sm" type="text" value="'.$row['locationOfIncidence'].'"/>
                            </div>
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