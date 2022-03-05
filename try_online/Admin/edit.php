<?php 
session_start();
include "../connection.php";
if(!isset($_SESSION["admin"]))
{
        ?>
        <script>
window.location="login.php";

        </script>
        <?php
}
$id=$_GET["id"];

 $res=mysqli_query($link,"select * from exam_category where id=$id");
  while($row=mysqli_fetch_array($res)){
      $exam_category=$row["category"];
      $exam_tim=$row["exam_time"];
      
  }
?>
<?php
        include ("admin header try.php");
        ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Exam</h1>
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
                            <div class="card-header"><strong>Edit Exam</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="name" class=" form-control-label">New Exam category</label><input type="text" name="examname" placeholder="Add exam category" class="form-control" value="<?php echo $exam_category; ?>"></div>
                                    <div class="form-group"><label for="time" class=" form-control-label">Exam Time 
                                        (in minutes)</label><input type="text" name="examtime" placeholder="" class="form-control" value="<?php echo $exam_tim; ?>"></div>
                                    <div class="form-group">
                                        <input type="submit" name=submit1 value="Update" placeholder="" class="btn-light" style="border-radius:5px;color: #ad022d;background-color: transparent;border: 1px solid #ad022d;"></div>
                                        
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
    
    mysqli_query($link,"UPDATE exam_category set category='$_POST[examname]',exam_time='$_POST[examtime]' where id=$id")
        or die(mysqli_error($link));

?>

<script>

    window.location.href="exam_category.php";
</script>
<?php
}
?>
                                