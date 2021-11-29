<?php
include("header.php");
include("../../db.php");

?>



<div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h1><b>Update Address</b></h1>
                                </div>
                                <div class="panel-body basic-form-panel">
                                    <form method="post">
<?php

$main_address="";
$near="";
$city="";
$donation="";
$a_email="";

if (isset($_POST["btn_sub"])) 
{
    $main_address=$_POST["main_address"];
    $near=$_POST["near"];
    $city=$_POST["city"];
    $a_cno=$_POST["a_cno"];
    $a_email=$_POST["a_email"];


    $qry = "update address set  main_address='$main_address',near='$near',city='$city',a_cno='$a_cno',a_email='$a_email'";
    // echo $qry;
    $fire=$conn->query($qry);

    
    // echo "<script>window.location.href='student_details.php';</script>";
}


$qes="Select * from address";
$qry=$conn->query($qes);
$res=$qry->fetch_assoc();

$main_address = $res["main_address"];
$near = $res["near"];
$city = $res["city"];
$a_cno = $res["a_cno"];
$a_email = $res["a_email"];




?>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Address</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="address" name="main_address" value="<?php echo $main_address;?>">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Near</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="near" name="near" value="<?php echo $near;?>">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">City And Pincode</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="city" name="city" value="<?php echo $city;?>">
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Contact Number</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="contact" name="a_cno" value="<?php echo $a_cno;?>">
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="EVENTS" name="a_email" value="<?php echo $a_email;?>">
                    </div>

                                           
                                      

                    <input type="submit" name="btn_sub" class="btn btn-primary m-t-xs" value="submit" >
                  </form>
                                </div>
                            </div>
                        </div>
<?php
include("footer.php");
?>