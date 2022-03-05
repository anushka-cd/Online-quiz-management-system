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
$exam_category='';
 $res=mysqli_query($link,"select * from exam_category where id=$id");
  while($row=mysqli_fetch_array($res)){
      $exam_category=$row["category"];
      //$exam_time=$row["exam_time"];
      
  }
?>
<?php
        include ("admin header try.php");
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
                            <div class="col-lg-6">
                            <form action="" method="post" name="form1" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header"><strong>Add new questions with text</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="name" class=" form-control-label">Question</label><input type="text" name="question" placeholder="Add Question" class="form-control" ></div>
                                <div class="form-group"><label for="name" class=" form-control-label">Add Option1</label><input type="text" name=" opt1" placeholder="Add Option1" class="form-control" ></div>
                                <div class="form-group"><label for="name" class=" form-control-label">Add Optio2</label><input type="text" name=" opt2" placeholder="Add Option2" class="form-control" ></div>
                                <div class="form-group"><label for="name" class=" form-control-label">Add Option3</label><input type="text" name=" opt3" placeholder="Add Option3" class="form-control" ></div>
                                <div class="form-group"><label for="name" class=" form-control-label">Add Option4</label><input type="text" name=" opt4" placeholder="Add Option4" class="form-control" ></div>
                                <div class="form-group"><label for="name" class=" form-control-label">Add Answer</label><input type="text" name="answer" placeholder="Add Answer" class="form-control" ></div>
                                    <div class="form-group">
                                        <input type="submit" name=submit1 value="Add Question" placeholder="" class="btn-light " style="border-radius:5px;color: #ad022d;background-color: transparent;border: 1px solid #ad022d;
"></div>
                                        
                                                    
                                                </div>
                                            </div>
                                    

                            </div>
                            <div class="col-lg-6">
                           
                        <div class="card">
                            <div class="card-header"><strong>Add new questions with images</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="name" class=" form-control-label">Question</label><input type="text" name="fquestion" placeholder="Add Question" class="form-control" ></div>
                                <div class="form-group"><label for="name" class=" form-control-label">Add Option1</label><input type="file" name=" fopt1"  class="form-control"  ></div><!--style="padding-bottom:45px"-->
                                <div class="form-group"><label for="name" class=" form-control-label">Add Optio2</label><input type="file" name=" fopt2"  class="form-control"></div>
                                <div class="form-group"><label for="name" class=" form-control-label">Add Option3</label><input type="file" name=" fopt3"  class="form-control" ></div>
                                <div class="form-group"><label for="name" class=" form-control-label">Add Option4</label><input type="file" name=" fopt4"  class="form-control" ></div>
                                <div class="form-group"><label for="name" class=" form-control-label">Add Answer</label><input type="file" name=" fanswer"  class="form-control" ></div>
                                    <div class="form-group">
                                        <input type="submit" name=submit2 value="Add Question" placeholder="" class="btn-light" style="border-radius:5px;color: #ad022d;background-color: transparent;border: 1px solid #ad022d;"></div>
                                        
                                                    
                                                </div>
                                            </div>
                                    

                            </div></form>
                            
                                    

                            
                                    

                            </div>
                        </div> 

                    </div>
                    <!--/.col-->           
                                            </div>
                                            <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <table class="table table-bordered">
                                        <tr>
                                            <td>No.</td>
                                            <td>Question</td>
                                            <td>Option1</td>
                                            <td>Option2</td>
                                            <td>Option3.</td>
                                            <td>Option4</td>
                                            <td>Edit</td>
                                            <td>Delete</td>
                                           


                                        </tr>


                              
         <?php
 $res= mysqli_query($link,"select * from questions where category='$exam_category' order by question_no asc") or die(mysqli_error($link));
 while($row=mysqli_fetch_array($res))
 {
     echo"<tr>";
     echo"<td>"; echo $row["question_no"]; echo"</td>";
     echo"<td>"; echo $row["question"]; echo"</td>";
     echo"<td>"; 
     if (strpos($row["opt1"],'opt_images/')!==false)
     {
         ?>
         <img src="<?php echo $row["opt1"];?>"height="50" width="50">
         <?php
     }
     else{
echo $row["opt1"];
     }
     echo"</td>";
     echo"<td>"; 
     if (strpos($row["opt2"],'opt_images/')!==false)
     {
         ?>
         <img src="<?php echo $row["opt2"];?>"height="50" width="50">
         <?php
     }
     else{
echo $row["opt2"];
     }
     
     echo"</td>";
     echo"<td>"; 
     if (strpos($row["opt3"],'opt_images/')!==false)
     {
         ?>
         <img src="<?php echo $row["opt3"];?>"height="50" width="50">
         <?php
     }
     else{
echo $row["opt3"];
     }
     
     echo"</td>";
     echo"<td>"; 
     if (strpos($row["opt4"],'opt_images/')!==false)
     {
         ?>
         <img src="<?php echo $row["opt4"];?>"height="50" width="50">
         <?php
     }
     else{
echo $row["opt4"];
     }
     
     
     echo"</td>";
     echo "<td>";
     if (strpos($row["opt4"],'opt_images/')!==false)
     {
         ?>
     <a href="edit_option_images.php?id=<?php echo $row["id"]?>&id1=<?php echo $id; ?>"><i class="fas fa-edit" style="color:darkblue"></i></a>
         <?php
     }
     else{
        ?>
        <a href="edit_option.php?id=<?php echo $row["id"]?>&id1=<?php echo $id; ?>"><i class="fas fa-edit" style="color:darkblue"></i></a>
            <?php
     }


     echo"</td>";

     echo "<td>";
     ?>
     <a href="delete_option.php?id=<?php echo $row["id"]?>&id1=<?php echo $id; ?>"><i class="fas fa-trash-alt" style="color:red"></i></a>
<?php
     echo"</td>";
     echo"</tr>";


 }

         ?>
           </table>
                            </div>
                        </div>
                    </div>
                                            </div>


                                        </div>
                                    </div>
<?php
if (isset($_POST["submit1"]))
{
    $loop=0;
    $count=0;
  
  $res= mysqli_query($link,"select * from questions where category='$exam_category' order by id asc") or die(mysqli_error($link));
        $count=mysqli_num_rows($res);
        if($count==0)
        {

        }
        else{
            while($row=mysqli_fetch_array($res))
            {
                $loop=$loop+1;
                mysqli_query($link,"UPDATE questions set question_no='$loop' where id=$row[id]");
             
        
            }
        }
        $loop=$loop+1;
        mysqli_query($link,"insert into questions values(NULL,'$loop','$_POST[question]','$_POST[opt1]','$_POST[opt2]','$_POST[opt3]','$_POST[opt4]','$_POST[answer]','$exam_category')") or die(mysqli_error($link));

        ?>
<script>
      alert("Question added succesfully");
    window.location.href=window.location.href;
</script>
<?php
}

?>
<?php
if (isset($_POST["submit2"]))
{
    $loop=0;
    $count=0;
  
  $res= mysqli_query($link,"select * from questions where category='$exam_category' order by id asc") or die(mysqli_error($link));
        $count=mysqli_num_rows($res);
        if($count==0)
        {

        }
        else{
            while($row=mysqli_fetch_array($res))
            {
                $loop=$loop+1;
                mysqli_query($link,"UPDATE questions set question_no='$loop' where id=$row[id]");
             
        
            }
        }
        $loop=$loop+1;

        $tm=md5(time());
        $fnm1=$_FILES["fopt1"]["name"];
        $dst1="./opt_images/".$tm.$fnm1;
        $dst_db1="opt_images/".$tm.$fnm1;
        move_uploaded_file($_FILES["fopt1"]["tmp_name"],$dst1);

        $fnm2=$_FILES["fopt2"]["name"];
        $dst2="./opt_images/".$tm.$fnm2;
        $dst_db2="opt_images/".$tm.$fnm2;
        move_uploaded_file($_FILES["fopt2"]["tmp_name"],$dst2);

        $fnm3=$_FILES["fopt3"]["name"];
        $dst3="./opt_images/".$tm.$fnm3;
        $dst_db3="opt_images/".$tm.$fnm3;
        move_uploaded_file($_FILES["fopt3"]["tmp_name"],$dst3);

        $fnm4=$_FILES["fopt4"]["name"];
        $dst4="./opt_images/".$tm.$fnm4;
        $dst_db4="opt_images/".$tm.$fnm4;
        move_uploaded_file($_FILES["fopt1"]["tmp_name"],$dst4);

        $fnm5=$_FILES["fanswer"]["name"];
        $dst5="./opt_images/".$tm.$fnm5;
        $dst_db5="opt_images/".$tm.$fnm5;
        move_uploaded_file($_FILES["fanswer"]["tmp_name"],$dst5);

        mysqli_query($link,"insert into questions values(NULL,'$loop','$_POST[fquestion]','$dst_db1','$dst_db2','$dst_db3','$dst_db4','$dst_db5','$exam_category')") or die(mysqli_error($link));

        ?>

<script>
      alert("Question added succesfully");
    window.location.href=window.location.href;
</script>
<?php
}

?>

      

        <?php
        include ("footer.php");
        ?>
                          