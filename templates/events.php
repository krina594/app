<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

 <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">EVENTS</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Event Image Name</th>
                                                <th>Alter Text</th>
                                                <th>Event Heading</th>
                                                <th>Event PLace</th>
                                                <th>Event Date</th>
                                            </tr>
                                        </thead>
                                        

                                            	<?php
                                            	$stu="Select * from events;";
												$qry=$conn->query($stu);
												//$res=$qry->fetch_assoc()

                                                while($res=$qry->fetch_assoc())
                                                {

                                                                                                     
                                                    

                                                    if($res["ev_img"]==NULL)
                                                    {
                                                        $ev_img=" ";
                                                    }
                                                    else
                                                    {

                                                        $ev_img = $res["ev_img"];

                                                    }

                                                    if($res["alter_img"]==NULL)
                                                    {
                                                        $alter_img=" ";
                                                    }
                                                    else
                                                    {

                                                        $alter_img = $res["alter_img"];

                                                    }
                                                    
                                                    if($res["ev_head"]==NULL)
                                                    {
                                                        $ev_head=" ";
                                                    }
                                                    else
                                                    {

                                                        $ev_head = $res["ev_head"];

                                                    }
                                                    
                                                    if($res["ev_place"]==NULL)
                                                    {
                                                        $ev_place=" ";
                                                    }
                                                    else
                                                    {

                                                        $ev_place = $res["ev_place"];

                                                    }
                                                    
                                                    if($res["ev_date"]==NULL)
                                                    {
                                                        $ev_date=" ";
                                                    }
                                                    else
                                                    {

                                                        $ev_date = $res["ev_date"];

                                                    }

                                                   
                                                ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $res["ev_img"]; "<br>";?></td>
                                                <td><?php echo $res["alter_img"];?></td>
                                                <td><?php echo $res["ev_head"];?></td>
                                                <td><?php echo $res["ev_place"];?></td>
                                                <td><?php echo $res["ev_date"];?></td>

                                                <td>
<?php
$str_go = "<a  style='margin-top: -4px;' onclick='return Confirm_Delete()' href='delete_events.php?ev_id=".$res['ev_id']."' class='btn btn-danger btn-rounded m-b-xxs'><i class='far fa-trash-alt'></i></a>     <a  style='margin-top: -4px;' href='update_events.php?ev_id=".$res['ev_id']."' class='btn btn-success btn-rounded m-b-xxs'> <i class='far fa-edit'></i> </a>";
echo $str_go;
}
?>
                                                </td>                                          

                                             </tr>   

                                            
                                        </tbody>
                                    </table>
                                    <a href="insert_events.php" class="btn btn-info btn-rounded m-b-xxs"><i class="fas fa-user-plus"></i></a>
                                </div>
                            </div>

<script>
    function Confirm_Delete()
    {


    var x=confirm("Are You sure you want to delete");
    if(x)
    {
        return true;
    }
    else
    {
        return false;
    }
}
    </script>

<?php
include("footer.php");
?>