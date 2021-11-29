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
                                                <th>HEADING</th>
                                                <th>CONTENT</th>
                                                
                                        </tr>
                                    </thead>

                                                <?php
                                                $abo="Select * from about_us_1;";
                                                $qry=$conn->query($abo);
                                                $res=$qry->fetch_assoc()
                                                ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $res["heading"]; "<br>";?></td>
                                                <td><?php echo $res["content"];?></td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                             <a href="update_about_us.php" class="btn btn-info btn-rounded m-b-xxs"><i class="fas fa-user-plus"></i></a>                    
                                </div>
                            </div>


<?php
include("footer.php");
?>