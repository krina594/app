<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>







<div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h1><b>DONORS FORM</b></h1>
                                </div>
                                <div class="panel-body basic-form-panel">
                                    <form method="post">
<?php

$do_img="";
if (isset($_POST["btn_sub"])) {
    $do_img=$_POST["do_img"];



    $qry = "Insert into donars (do_img) values ('$do_img') ";
    // echo $qry;
    $fire=$conn->query($qry);

    
    echo "<script>window.location.href='donar.php';</script>";



}


?>


                                      


                                     
<div class="form-group">
                                <label>Select Image File:</label>
                                <input type="file" name="do_img" value="<?php echo $do_img;?>">
                                
                                </div>
                                     


                                      <!--<div class="form-group">
                                        <label for="exampleInputEmail1">Upload Photo</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1" placeholder="photo" name="e_img">
                                      </div>
                                      --> 
<?php

$qes_id="Select * from donars;";
$qry_id=$conn->query($qes_id);


?>
                                        
                                                                                                               
                                            </select>
                                        </div>

                                      <input type="submit" name="btn_sub" class="btn btn-primary m-t-xs" value="submit">

                                    </form>
                                </div>
                            </div>
                        </div>
<?php
include("footer.php");
?>