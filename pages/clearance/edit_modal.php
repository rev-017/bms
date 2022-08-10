<?php echo '<div id="editModal'.$row['pid'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Clearance</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['pid'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
                    <label>Clearance #: </label>
                    <input name="txt_edit_cnum" class="form-control input-sm" type="text" value="'.$row['clearanceNo'].'" />
                </div>
                <div class="form-group">
                    <label>Resident: </label>
                    <input class="form-control input-sm" type="text" value="'.$row['residentname'].'" readonly/>
                </div>
                <div class="form-group">
                    <label>Findings : </label>
                    
					 <select name="txt_edit_findings" class="form-control input-sm">
									  <option selected="" disabled="">'.$row['findings'].' </option>
                                        <option value="No Record on File">No Record on File</option>
                                        <option value="No Derogatory Record">No Derogatory Record</option>
										<option value="With Derogatory Record">With Derogatory Record</option>
										</select>
                </div>
                <div class="form-group">
                    <label>Purpose : </label>
                   
					 <select name="txt_edit_purpose" class="form-control input-sm">
                                        <option selected="" disabled="">'.$row['purpose'].' </option>
                                        <option value="Financial Assistance">Financial Assistance</option>
                                        <option value="Medical Assistance">Medical Assistance</option>
										<option value="Educational Assistance">Educational Assistance</option>
										<option value="General Requirement">General Requirement</option>
                                    </select>        
                </div>
            
                <div class="form-group">
                    <label>Amount : </label>
                    <input name="txt_edit_amount" class="form-control input-sm" type="text" value="'.$row['samount'].'" readonly/>
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