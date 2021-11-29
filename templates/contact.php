<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

 <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Contact</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact Number</th>
                                                <th>Messege</th>
                                            </tr>
                                        </thead>
                                        

                                            	<?php
                                            	$stu="Select * from contact;";
												$qry=$conn->query($stu);
												//$res=$qry->fetch_assoc()

                                                while($res=$qry->fetch_assoc())
                                                {

                                                                                                     
                                                    

                                                    if($res["c_name"]==NULL)
                                                    {
                                                        $c_name=" ";
                                                    }
                                                    else
                                                    {

                                                        $c_name = $res["c_name"];

                                                    }


                                                    if($res["c_email"]==NULL)
                                                    {
                                                        $c_email=" ";
                                                    }
                                                    else
                                                    {

                                                        $c_email = $res["c_email"];

                                                    }
													if($res["c_cno"]==NULL)
                                                    {
                                                        $c_cno=" ";
                                                    }
                                                    else
                                                    {

                                                        $c_cno = $res["c_cno"];

                                                    }
                                                    if($res["c_mess"]==NULL)
                                                    {
                                                        $c_mess=" ";
                                                    }
                                                    else
                                                    {

                                                        $c_mess = $res["c_mess"];

                                                    }
                                                ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $res["c_name"]; "<br>";?></td>
                                                <td><?php echo $res["c_email"]; "<br>";?></td>
                                                <td><?php echo $res["c_cno"]; "<br>";?></td>
                                                <td><?php echo $res["c_mess"]; "<br>";?></td>
                                                
                              
												                                          

                                             
                                             <td> 

          <?php
$str_go = "<a  style='margin-top: -4px;' onclick='return Confirm_Delete()' href='delete_contact.php?c_id=".$res['c_id']."' class='btn btn-danger btn-rounded m-b-xxs'><i class='far fa-trash-alt'></i></a>";
echo $str_go;

           } ?>                                </td>  
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