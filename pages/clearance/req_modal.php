<!-- ========================= MODAL ======================= -->
<link href="modal1.css" rel="stylesheet" type="text/css" />       
	   <div id="reqModal" class="modal fade">
            <form method="post">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Manage Clearance</h4>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Purpose:</label>
                                   
									 <select name="txt_purpose" class="form-control input-sm">
                                        <option selected="" disabled="">-- Select Purpose -- </option>
                                        <option value="Financial Assistance">Financial Assistance</option>
                                        <option value="Medical Assistance">Medical Assistance</option>
										<option value="Educational Assistance">Educational Assistance</option>
										<option value="General Requirement">General Requirement</option>
                                    </select>      
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" name="btn_req" value="Request Clearance"/>
                    </div>
                </div>
              </div>
              </form>
            </div>