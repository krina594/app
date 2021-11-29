<?php
//include("header.php");
include("db.php");
//$admin_id = $_SESSION["admin_id"];
?>







<div >
                            <div >
                                <div>
                                    <h1><b>KARMA INITIATIVES FORM</b></h1>
                                </div>
                            <div>
                                    <form method="post">
<?php

$t_name="";
$t_cno="";
$t_email="";
$t_image="";



if (isset($_POST["btn_sub"])) {
    $t_name=$_POST["t_name"];
    $t_cno=$_POST["t_cno"];
    $t_email=$_POST["t_email"];
    $t_image=$_POST["t_image"];
    




    $qry = "Insert into team (t_name,t_cno,t_email,t_image) values ('$e_name','$t_cno','$t_email','$t_image') ";
    // echo $qry;
    $fire=$conn->query($qry);

    
    echo "<script>window.location.href='index.php';</script>";



}


?>


									  <div>
									    <label>Name</label>
									    <input placeholder="Name" name="e_name">
									  </div>

									  <div>
									    <label>Contact Number</label>
									    <input  placeholder="contact number" name="t_cno" value="<?php echo $t_cno;?>">
									  </div>

									 

									  <div>
									    <label>Email Id</label>
									    <input  placeholder="email" name="t_email" value="<?php echo $t_email;?>">
									  </div>

<div>
                                <label>Select Image File:</label>
                                <input type="file" name="t_image" value="<?php echo $t_image;?>">
                                
                                </div>

									 
<?php

$qes_id="Select * from team;";
$qry_id=$conn->query($qes_id);


?>
                                        
                                                                                                               
                                    </div>

									  <input type="submit" name="btn_sub" class="btn btn-primary m-t-xs" value="submit">

									</form>
                                </div>
                            </div>
                        </div>
<?php
//include("footer.php");
?>