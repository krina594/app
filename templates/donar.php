<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

 <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Donor</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Donar Image Name</th>
                                                
                                            </tr>
                                        </thead>
                                        

                                            	<?php
                                            	$stu="Select * from donars;";
												$qry=$conn->query($stu);
												//$res=$qry->fetch_assoc()

                                                while($res=$qry->fetch_assoc())
                                                {

                                                                                                     
                                                    

                                                    if($res["do_img"]==NULL)
                                                    {
                                                        $do_img=" ";
                                                    }
                                                    else
                                                    {

                                                        $do_img = $res["do_img"];

                                                    }

                                                    

                                                   
                                                ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $res["do_img"]; "<br>";?></td>
                                                

                                                <td>
<?php
$str_go = "<a  style='margin-top: -4px;' onclick='return Confirm_Delete()' href='delete_donar.php?do_id=".$res['do_id']."' class='btn btn-danger btn-rounded m-b-xxs'><i class='far fa-trash-alt'></i></a>";
echo $str_go;
}
?>
                                                </td>                                          

                                             </tr>   

                                            
                                        </tbody>
                                    </table>
                                    <a href="insert_donar.php" class="btn btn-info btn-rounded m-b-xxs"><i class="fas fa-user-plus"></i></a>
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