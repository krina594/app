<?php
include("header.php");
include("../../db.php");
//$admin_id = $_SESSION["admin_id"];
?>

 <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">about us</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>MAIN ADDRESS</th>
                                                <th>NEAR</th>
                                                <th>CITY AND PINCODE</th>
                                                <th>CONTACT NUMBER</th>
                                                <th>EMAIL</th>
                                        </tr>
                                    </thead>

                                                <?php
                                                $abo="Select * from address;";
                                                $qry=$conn->query($abo);
                                                $res=$qry->fetch_assoc()
                                                ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $res["main_address"]; "<br>";?></td>
                                                <td><?php echo $res["near"];?></td>
                                                <td><?php echo $res["city"];?></td>
                                                <td><?php echo $res["a_cno"];?></td>
                                                <td><?php echo $res["a_email"];?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                             <a href="update_address.php" class="btn btn-info btn-rounded m-b-xxs"><i class="fas fa-user-plus"></i></a>                    
                                </div>
                                   
                            </div>


<?php
include("footer.php");
?>