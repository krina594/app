<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>







<div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h1><b>KARMA INITIATIVES FORM</b></h1>
                                </div>
                                <div class="panel-body basic-form-panel">
                                    <form method="post">
<?php

$e_name="";
$e_heading="";
$e_description="";
$e_content="";
$e_img="";
$status="";
$link="";

if (isset($_POST["btn_sub"])) {
    $e_name=$_POST["e_name"];
    $e_heading=$_POST["e_heading"];
    $e_description=$_POST["e_description"];
    $e_content=$_POST["e_content"];
    $e_img=$_POST["e_img"];
    $status=$_POST["status"];
    $link=$_POST["link"];



    $qry = "Insert into karma_ini (e_name,e_heading,e_description,e_content,e_img,status,link) values ('$e_name','$e_heading','$e_description','$e_content','$e_img','$status','$link';) ";
    // echo $qry;
    $fire=$conn->query($qry);

    
    echo "<script>window.location.href='karma_initiative.php';</script>";



}


?>


									  <div class="form-group">
									    <label for="exampleInputEmail1">Name</label>
									    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="e_name">
									  </div>

									  <div class="form-group">
									    <label for="exampleInputEmail1">Heading</label>
									    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="heading" name="e_heading">
									  </div>

									 

									  <div class="form-group">
									    <label for="exampleInputEmail1">Description</label>
									    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="description" name="e_description">
									  </div>


                                      <div class="form-group">
                      <label for="exampleInputEmail1">Content</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="content" name="e_content">
                    </div>

									  <div class="form-group">
                                       <label>Select Image File:</label>
                                <input type="file" name="e_img">
                                </div>
									  <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="status" name="status" >
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Link</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="link" name="link">
                                      </div>
									  
                                       
<?php

$qes_id="Select * from karma_ini;";
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