<html>
<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];

$e_id=$_GET["e_id"];

?>

<head>
<script type="text/javascript">
                    function GEEKFORGEEKS() {
                var name =
                    document.forms["RegForm"]["e_name"];
                var email =
                    document.forms["RegForm"]["e_heading"];
                var phone =
                    document.forms["RegForm"]["e_description"];

                var image =
                    document.forms["RegForm"]["e_image"];

                

                if (name.value == "") {
                    window.alert("Please enter your name.");
                    name.focus();
                    return false;
                }


                if (email.value == "") {
                    window.alert(
                    "Please enter a valid heading");
                    email.focus();
                    return false;
                }

                if (image.value == "") {
                    window.alert("Please upload Image.");
                    image.focus();
                    return false;
                }

                

                

                return true;
            }
        </script>
</head>
                  <body>

<div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h1><b>Update Karma Initiatives</b></h1>
                                </div>
                                <div class="panel-body basic-form-panel">


               



                                   <form name="RegForm" 
            onsubmit="return GEEKFORGEEKS()" method="post">
<?php



$e_name="";
$e_heading="";
$e_description="";
$e_content="";
$e_img="";
$status="";
$link="";



if (isset($_POST["btn_sub"])) 
{
    $e_name=$_POST["e_name"];
    $e_heading=$_POST["e_heading"];
    $e_description=$_POST["e_description"];
    $e_content=$_POST["e_content"];
    $e_img=$_POST["e_img"];
	  $status=$_POST["status"];
    $link=$_POST["link"];

    $qry = "update karma_ini set  e_name='$e_name',e_heading='$e_heading',e_description='$e_description',e_content='$e_content',e_img='$e_img',status='$status',link='$link' where e_id='$e_id'";
    // echo $qry;
    $fire=$conn->query($qry);

    
    // echo "<script>window.location.href='karma_ini.php';</script>";
}


$qes="Select * from karma_ini where e_id = $e_id;";
$qry=$conn->query($qes);
while($res=$qry->fetch_assoc())
{


$e_name = $res["e_name"];
$e_heading = $res["e_heading"];
$e_description = $res["e_description"];
$e_content = $res["e_content"];
$e_img = $res["e_img"];
$status= $res["status"];
$link= $res["link"];


}






?>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name" name="e_name" value="<?php echo $e_name;?>">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Heading</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="e_heading" value="<?php echo $e_heading;?>">
                    </div>

                    <!-- <div class="form-group">
                      <label for="exampleInputEmail1">Upload Photo</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" placeholder="photo" name="photo">
                    </div> -->

                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="e_description" value="<?php echo $e_description;?>">
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Content</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="e_content" value="<?php echo $e_content;?>">
                    </div>    

                  
                     <div class="form-group">
                                <label>Select Image File:</label>
                                <input type="file" name="e_img" value="<?php echo $e_img;?>">

                                
                                
                                </div> 

                    <div class="form-group">
                      <label for="exampleInputEmail1">Status</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="status" name="status" value="<?php echo $status;?>">
                    </div> 


                    <div class="form-group">
                      <label for="exampleInputEmail1">Link</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="link" name="link" value="<?php echo $link;?>">
                    </div>
                    



                    <input type="submit" name="btn_sub" class="btn btn-primary m-t-xs" value="submit">

                  </form>
                                </div>
                            </div>
                        </div>

<?php
include("footer.php");
?>
</body>
</html>