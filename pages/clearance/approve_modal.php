<!-- ========================= MODAL ======================= -->
            <div id="approveModal<?php echo $row['pid']?>" class="modal fade">
            <form method="post">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Approve Clearance</h4>
                    </div>
                    <div class="modal-body">
                        <?php
                        echo '
                <input type="hidden" value="'.$row['pid'].'" name="hidden_id" id="hidden_id"/>';
                        ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Clearance #:</label>
                                    <input name="txt_cnum" class="form-control input-sm" type="number" placeholder="Clearance #"/>
                                </div>
                                <div class="form-group">
                                    <label>Findings:</label>
                                  <select name="txt_findings" class="form-control input-sm">
									  <option selected="" disabled="">-- Select Findings -- </option>
                                        <option value="No Record on File">No Record on File</option>
                                        <option value="No Derogatory Record">No Derogatory Record</option>
										<option value="With Derogatory Record">With Derogatory Record</option>
										</select>
                                </div>
                                <div class="form-group">
                                    <label>OR Number:</label>
                                    <input name="txt_ornum" class="form-control input-sm" type="number" placeholder="OR Number"/>
                                </div>
                                <div class="form-group">
                                    <label>Amount:</label>
                                      <input name="txt_amount" class="form-control input-sm" type="number" value = "50" readonly/>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" name="btn_approve" value="Approve"/>
                    </div>
                </div>
              </div>
              </form>
            </div>