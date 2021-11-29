<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

 <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">KARMA INITIATIVE</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Heading</th>
                                                <th>Description</th>
                                                <th>Content</th>
                                                <th>Image</th>
												<th>Status</th>
                                                <th>Link</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        

                                            	<?php
                                            	$stu="Select * from karma_ini;";
												$qry=$conn->query($stu);
												//$res=$qry->fetch_assoc()

                                                while($res=$qry->fetch_assoc())
                                                {

                                                                                                     
                                                    

                                                    if($res["e_name"]==NULL)
                                                    {
                                                        $e_name=" ";
                                                    }
                                                    else
                                                    {

                                                        $e_name = $res["e_name"];

                                                    }

                                                    if($res["e_heading"]==NULL)
                                                    {
                                                        $e_heading=" ";
                                                    }
                                                    else
                                                    {

                                                        $e_heading = $res["e_heading"];

                                                    }

                                                   

                                                    if($res["e_description"]==NULL)
                                                    {
                                                        $e_description=" ";
                                                    }
                                                    else
                                                    {

                                                        $e_description = $res["e_description"];

                                                    }

                                                    if($res["e_content"]==NULL)
                                                    {
                                                        $e_content=" ";
                                                    }
                                                    else
                                                    {

                                                        $e_content = $res["e_content"];

                                                    }


                                                    if($res["e_img"]==NULL)
                                                    {
                                                        $e_img=" ";
                                                    }
                                                    else
                                                    {

                                                        $e_img = $res["e_img"];

                                                    }
													if($res["status"]==NULL)
                                                    {
                                                        $status=" ";
                                                    }
                                                    else
                                                    {

                                                        $status = $res["status"];

                                                    }
                                                    if($res["link"]==NULL)
                                                    {
                                                        $link=" ";
                                                    }
                                                    else
                                                    {

                                                        $link = $res["link"];

                                                    }
                                                ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $res["e_name"]; "<br>";?></td>
                                                <td><?php echo $res["e_heading"];?></td>
                                                <td><?php echo $res["e_description"];?></td>
                                                <td><?php echo $res["e_content"];?></td>
                                                <td><?php echo $res["e_img"];?></td>
                                                <td><?php echo $res["status"];?></td>
                                                <td><?php echo $res["link"];?></td>
                              
												<td>
<?php
$str_go = "<a  style='margin-top: -4px;' href='update_karma_ini.php?e_id=".$res['e_id']."' class='btn btn-success btn-rounded m-b-xxs'> <i class='far fa-edit'></i> </a>";
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