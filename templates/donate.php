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
                                                <th>Contact Number</th>
                                                <th>Email ID</th>
                                                <th>Amount</th>
                                                <th>Comment</th>
                                            </tr>
                                        </thead>
                                        

                                                <?php
                                                $stu="Select * from donation;";
                                                $qry=$conn->query($stu);
                                                //$res=$qry->fetch_assoc()

                                                while($res=$qry->fetch_assoc())
                                                {

                                                                                                     
                                                    

                                                    if($res["d_name"]==NULL)
                                                    {
                                                        $d_name=" ";
                                                    }
                                                    else
                                                    {

                                                        $d_name = $res["d_name"];

                                                    }

                                                    if($res["d_cno"]==NULL)
                                                    {
                                                        $d_cno=" ";
                                                    }
                                                    else
                                                    {

                                                        $d_cno = $res["d_cno"];

                                                    }

                                                    if($res["d_email"]==NULL)
                                                    {
                                                        $d_email=" ";
                                                    }
                                                    else
                                                    {

                                                        $d_email = $res["d_email"];

                                                    }
                                                   

                                                    if($res["d_amount"]==NULL)
                                                    {
                                                        $d_amount=" ";
                                                    }
                                                    else
                                                    {

                                                        $d_amount = $res["d_amount"];

                                                    }

                                                    if($res["d_comm"]==NULL)
                                                    {
                                                        $d_comm=" ";
                                                    }
                                                    else
                                                    {

                                                        $d_comm = $res["d_comm"];

                                                    }


                                                    
                                                ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $res["d_name"]; "<br>";?></td>
                                                <td><?php echo $res["d_cno"];?></td>
                                                <td><?php echo $res["d_email"];?></td>
                                                <td><?php echo $res["d_amount"];?></td>
                                                <td><?php echo $res["d_comm"];?></td>
                              
                                                <td>
<?php
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