
<?php
session_start();
include "../connection.php";
        include ("admin header try.php");
        if(!isset($_SESSION["admin"]))
{
        ?>
        <script>
window.location="login.php";

        </script>
        <?php
}
        ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Exam</h1>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="card-body">
                             
                            <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Exam Name</th>
                                            <th scope="col">Duration</th>
                                            <th scope="col">Select</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count=0;
                                        $res=mysqli_query($link,"select * from exam_category");
                                        while($row=mysqli_fetch_array($res)){
                                             $count=$count+1;
                                            ?>
                                               
                                        <tr>
                                            <th scope="row"><?php echo ($count);?></th>
                                            <td><?php echo ($row["category"]);?></td>
                                            <td><?php echo ($row["exam_time"]);?></td>
                                            <td><a href="add_edit_questions.php?id=<?php echo $row["id"]?>">Select</a></td>
                                            
                                        </tr>
                                                <?php
                                        }
                                        ?>
                                        
                                        
                                    </tbody>
                                </table>      

                            </div>
                        </div> 

                    </div>
                    <!--/.col-->           
                                            </div>
                                        </div>
                                    </div>
        <?php
        include ("footer.php");
        ?>
                                