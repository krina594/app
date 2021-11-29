<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>







<div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h1><b>EVENT FORM</b></h1>
                                </div>
                                <div class="panel-body basic-form-panel">
                                    <form method="post">
<?php

$ev_img="";
$alter_img="";
$ev_head="";
$ev_place="";
$ev_date="";

if (isset($_POST["btn_sub"])) {
    $ev_img=$_POST["ev_img"];
    $alter_img=$_POST["alter_img"];
    $ev_head=$_POST["ev_head"];
    $ev_place=$_POST["ev_place"];
    $ev_date=$_POST["ev_date"];




    $qry = "Insert into events (ev_img,alter_img,ev_head,ev_place,ev_date) values ('$ev_img','$alter_img','$ev_head','$ev_place','$ev_date') ";
    // echo $qry;
    $fire=$conn->query($qry);

    
    echo "<script>window.location.href='events.php';</script>";



}


?>
<div class="form-group">

                                      <label>Select Image File:</label>
                                <input type="file" name="ev_img">
                                
                                </div>

                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Alter Text</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Alter Text" name="alter_img">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Event Heading</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="heading" name="ev_head">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Event Place</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Place" name="ev_place">
                                      </div>


                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Event Date</label>
                                        <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Date" name="ev_date">
                                      </div>

                                     


                                      <!--<div class="form-group">
                                        <label for="exampleInputEmail1">Upload Photo</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1" placeholder="photo" name="e_img">
                                      </div>
                                      --> 
<?php

$qes_id="Select * from events;";
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