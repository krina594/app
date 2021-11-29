<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];

$ev_id=$_GET["ev_id"];

?>



<div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h1><b>Update Event</b></h1>
                                </div>
                                <div class="panel-body basic-form-panel">
                                    <form method="post">
<?php



$ev_img="";
$alter_img="";
$ev_head="";
$ev_place="";
$ev_date="";

if (isset($_POST["btn_sub"])) 
{
    $ev_img=$_POST["ev_img"];
    $alter_img=$_POST["alter_img"];
    $ev_head=$_POST["ev_head"];
    $ev_place=$_POST["ev_place"];
    $ev_date=$_POST["ev_date"];

    $qry = "update events set  ev_img='$ev_img',alter_img='$alter_img',ev_head='$ev_head',ev_place='$ev_place',ev_date='$ev_date' where ev_id='$ev_id'";
    // echo $qry;
    $fire=$conn->query($qry);

    
    // echo "<script>window.location.href='karma_ini.php';</script>";
}


$qes="Select * from events where ev_id = $ev_id;";
$qry=$conn->query($qes);
while($res=$qry->fetch_assoc())
{


$ev_img = $res["ev_img"];
$alter_img = $res["alter_img"];
$ev_head = $res["ev_head"];
$ev_place = $res["ev_place"];
$ev_date = $res["ev_date"];


}






?>


                   <div class="form-group">
                                <label>Select Image File:</label>
                                <input type="file" name="ev_img" value="<?php echo $ev_img;?>">
                                
                                </div>

                              

                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Alter Text</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="alter text" name="alter_img" value="<?php echo $alter_img;?>">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Event Heading</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="heading" name="ev_head"
                                        value="<?php echo $ev_head;?>">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Event Place</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Place" name="ev_place"value="<?php echo $ev_place;?>">
                                      </div>


                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Event Date</label>
                                        <input type="date" class="form-control" id="exampleInputEmail1" placeholder="heading" name="ev_date"value="<?php echo $ev_date;?>">
                                      </div>

                   
                        

                  
                    <!-- <div class="form-group">
                      <label for="exampleInputEmail1">Upload Photo</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" placeholder="photo" name="photo">
                    </div> -->                                     

                    



                    <input type="submit" name="btn_sub" class="btn btn-primary m-t-xs" value="submit">

                  </form>
                                </div>
                            </div>
                        </div>
<?php
include("footer.php");
?>