<?php include 'includes/header.php' ?>

        <!-- Form Section -->

            <div class="side-form">
                        <div class="form-group mt-3">
                            <label class="form-title">Register Employee Data</label> <hr>
                        </div>

                        <?php
                        if(isset($_GET['editId']))
                        {
                            $editId = $_GET['editId'];
                            $rec = $obj->displayRecordById($editId);
                        ?>
                        <!--Update form -->
                     <form id="formValidation" action=index.php method="post">
                        <div class="form-group mb-3" >
                            <label>Fullname:</label>
                            <input type="text" name="fname" id="fname"  value = "<?php echo $rec['emp_fname'] ?>" class="form-control">
                        </div>
                        <div class="form-group mb-3" >
                            <label>Position:</label>
                            <input type="text" name="position" value = "<?php echo $rec['emp_position'] ?>" id="position" class="form-control">
                        </div>
                        <div class="form-group mb-3" >
                            <label>Department:</label>
                            <input type="text" name="dept" id="dept" value = "<?php echo $rec['emp_department'] ?>" class="form-control">
                        </div>
                        <div class="form-group mb-3" >
                            <label>Status:</label>
                            <input type="text" name="status" id="status" value = "<?php echo $rec['emp_status'] ?>" class="form-control">
                        </div>
                        <input type="hidden" name="hidden" value="<?php echo $rec['emp_id'] ?>">
                        <button type="submit" id="btn-primary" name="btn_update" class="btn btn-primary"><i class="fa fa-user" aria-hidden="true"></i> Update</button>
                        <button type="submit" id="btn-danger" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Clear  </button>
                    </form>

                        <?php } else { ?>       <!--end of Update form -->
                    <form id="formValidation" action=index.php method="post">
                        <div class="form-group mb-3" >
                            <label>Fullname:</label>
                            <input type="text" name="fname" id="fname" placeholder="ex: Dela Cruz, Juan" class="form-control">
                        </div>
                        <div class="form-group mb-3" >
                            <label>Position:</label>
                            <input type="text" name="position" id="position" placeholder="ex: Manager   " class="form-control">
                        </div>
                        <div class="form-group mb-3" >
                            <label>Department:</label>
                            <input type="text" name="dept" id="dept" placeholder="ex: IT Department " class="form-control">
                        </div>
                        <div class="form-group mb-3" >
                            <label>Status:</label>
                            <input type="text" name="status" placeholder="ex: Active" id="status" class="form-control">
                        </div>
                
                        <button type="submit" id="btn-primary" name="btn_submit" class="btn btn-primary"><i class="fa fa-user" aria-hidden="true"></i> Submit</button>
                        <button type="submit" id="btn-danger" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Clear  </button>
                    </form>
                    <?php } ?>
            </div> 

    
        <!-- table section -->

        <div class="right-table">
                
            <label style="font-weight:bold;font-size:25px;  "> Employee's Data </label>
                <table id="example" class="display nowrap cell-border" width="100%">
                <thead>
                  <tr>
                    <th width="5%" scope="col">No.</th>
                    <th  scope="col">Fullname</th>
                    <th scope="col">Position</th>
                    <th scope="col">Department</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $data = $obj->displayRecord();
                    $count = 1;
                    foreach ($data as $value) {
                        ?>
                  <tr>

                    <td><?php echo $count++; ?> </td>
                    <td><?php echo $value['emp_fname'] ?></td>
                    <td><?php echo $value['emp_position'] ?></td>
                    <td><?php echo $value['emp_department'] ?></td>
                    <td><?php echo $value['emp_status'] ?></td>
                    <td width="20%" style="text-align: center">
                    <a style="width:120px;" name="btn_update" class="btn btn-primary text-white" href="index.php?editId=<?php echo $value['emp_id'];?>"><i class="fa fa-edit"></i> Update</a>
                    <a style="width:120px;"name="btn_delete" class="btn btn-danger text-white"href="index.php?deleteid=<?php echo $value['emp_id'];?>"><i class="fa fa-trash"></i> Delete</a> </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
        </div>
</div>



<?php include 'includes/footer.php' ?>




