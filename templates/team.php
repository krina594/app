<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

  <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">OUR TEAM</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                   
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Contact Number</th>
                                                <th>Email</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        

                                            	<?php
                                            	$stu="Select * from team;";
												$qry=$conn->query($stu);
												//$res=$qry->fetch_assoc()

                                                while($res=$qry->fetch_assoc())
                                                {

                                                                                                     
                                                    

                                                    if($res["t_name"]==NULL)
                                                    {
                                                        $e_name=" ";
                                                    }
                                                    else
                                                    {

                                                        $t_name = $res["t_name"];

                                                    }

                                                    if($res["t_cno"]==NULL)
                                                    {
                                                        $t_cno=" ";
                                                    }
                                                    else
                                                    {

                                                        $t_cno = $res["t_cno"];

                                                    }

                                                   

                                                    if($res["t_email"]==NULL)
                                                    {
                                                        $t_email=" ";
                                                    }
                                                    else
                                                    {

                                                        $t_email = $res["t_email"];

                                                    }

                                                    if($res["t_image"]==NULL)
                                                    {
                                                        $t_image=" ";
                                                    }
                                                    else
                                                    {

                                                        $t_image = $res["t_image"];

                                                    }


                                                    
                                                ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $res["t_name"]; "<br>";?></td>
                                                <td><?php echo $res["t_cno"];?></td>
                                                <td><?php echo $res["t_email"];?></td>
                                                <td><?php echo $res["t_image"];?></td>
                                                <td>
<?php
$str_go = "<a  style='margin-top: -4px;' onclick='return Confirm_Delete()' href='delete_team.php?t_id=".$res['t_id']."' class='btn btn-danger btn-rounded m-b-xxs'><i class='far fa-trash-alt'></i></a> <a  style='margin-top: -4px;' href='update_team.php?t_id=".$res['t_id']."' class='btn btn-success btn-rounded m-b-xxs'> <i class='far fa-edit'></i> </a>";
echo $str_go;
}
?>
                                                </td>                                          

                                             </tr>   

                                            
                                        </tbody>
                                    </table>
                                   
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