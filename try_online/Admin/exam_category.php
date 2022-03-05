
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
                            <form action="" method="post" name="form1">
                            
                            <div class="card-body">
                             
                                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Add Exam</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="name" class=" form-control-label">New Exam category</label><input type="text" name="examname" placeholder="Add exam category" class="form-control"></div>
                                    <div class="form-group"><label for="time" class=" form-control-label">Exam Time 
                                        (in minutes)</label><input type="text" name="examtime" placeholder="" class="form-control"></div>
                                    <div class="form-group"><input type="submit" name=submit1 value="Add "placeholder="" class="btn-light" style="border-radius:5px;color: #ad022d;background-color: transparent;border: 1px solid #ad022d;"></div>
                                        
                                                    </div>
                                                </div>
                                            </div>
                                   <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Exam Categories</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Exam Name</th>
                                            <th scope="col">Duration</th>
                                            <th scope="col">Edit</th>
                                             <th scope="col">Delete</th>
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
                                            <td><a href="edit.php?id=<?php echo $row["id"]?>"><i class="fas fa-edit" style="color:darkblue"></i></a></td>
                                            <td><a href="delete.php?id=<?php echo $row["id"]?>"><i class="fas fa-trash-alt" style="color:red"></i></a></td>
                                        </tr>
                                                <?php
                                        }
                                        ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                            </div>
                            </form>
                        </div> 

                    </div>
                    <!--/.col-->           
                                            </div>
                                        </div>
                                    </div>
        <?php
        include ("footer.php");
        ?>
<?php
if (isset($_POST["submit1"]))
{
    
    mysqli_query($link,"insert into exam_category values(NULL,'$_POST[examname]','$_POST[examtime]')")
        or die(mysqli_error($link));
    

?>

<script>

alert("added exam successfully");
    window.location.href=window.location.href;
</script>
<?php
}
?>
                                