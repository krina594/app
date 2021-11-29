<?php
include("header.php");
include("../../db.php");

?>



<div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h1><b>Update About Us</b></h1>
                                </div>
                                <div class="panel-body basic-form-panel">
                                    <form method="post">
<?php

$heading="";
$content="";


if (isset($_POST["btn_sub"])) 
{
    $heading=$_POST["heading"];
    $content=$_POST["content"];


    $qry = "update about_us_1 set  heading='$heading',content='$content'";
    // echo $qry;
    $fire=$conn->query($qry);

    
    // echo "<script>window.location.href='student_details.php';</script>";
}


$qes="Select * from about_us_1";
$qry=$conn->query($qes);
$res=$qry->fetch_assoc();

$heading = $res["heading"];
$content = $res["content"];

?>


                    <div class="form-group">
                      <label for="exampleInputEmail1">HEADING</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="heading" name="heading" value="<?php echo $heading;?>">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">CONTENT</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="CONTENT" name="content" value="<?php echo $content;?>">
                    </div>

                    
                                           
                                      

                    <input type="submit" name="btn_sub" class="btn btn-primary m-t-xs" value="submit" >
                  </form>
                                </div>
                            </div>
                        </div>
<?php
include("footer.php");
?>