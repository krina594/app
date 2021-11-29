<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];

$t_id=$_GET["t_id"];

?>



<div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h1><b>Update Team</b></h1>
                                </div>
                                <div class="panel-body basic-form-panel">
                                    <form method="post">
<?php



$t_name="";
$t_cno="";
$t_email="";
$t_image="";


if (isset($_POST["btn_sub"])) 
{
    $t_name=$_POST["t_name"];
    $t_cno=$_POST["t_cno"];
    $t_email=$_POST["t_email"];
    $t_image=$_POST["t_image"];
  


    $qry = "update team set  t_name='$t_name',t_cno='$t_cno',t_email='$t_email',t_image='$t_image' where t_id='$t_id'";
    // echo $qry;
    $fire=$conn->query($qry);

    
    // echo "<script>window.location.href='team.php';</script>";
}


$qes="Select * from team where t_id = $t_id;";
$qry=$conn->query($qes);
while($res=$qry->fetch_assoc())
{


$t_name = $res["t_name"];
$t_cno = $res["t_cno"];
$t_email = $res["t_email"];
$t_image = $res["t_image"];




}






?>



                   <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="e_name" value="<?php echo $t_name;?>">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Contact Number</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" placeholder="contact number" name="t_cno" value="<?php echo $t_cno;?>">
                    </div>

                   

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email Id</label>
                      <input type="Email" class="form-control" id="exampleInputEmail1" placeholder="email" name="t_email" value="<?php echo $t_email;?>">
                    </div>


                                      
<div class="form-group">
                                <label>Select Image File:</label>
                                <input type="file" name="t_image" value="<?php echo $t_image;?>">
                                
                                </div>

                                      </div> 
                    



                    <input type="submit" name="btn_sub" class="btn btn-primary m-t-xs" value="submit">

                  </form>
                                </div>
                            </div>
                        </div>
<?php
include("footer.php");
?>