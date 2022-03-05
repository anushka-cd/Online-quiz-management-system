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
$id1=$_GET["id1"];
$question='';
$opt1='';
$opt3='';
$opt4='';
$answer='';
 $res=mysqli_query($link,"select * from questions where id=$id");
  while($row=mysqli_fetch_array($res)){
      $question=$row["question"];
      $opt1=$row["opt1"];
      $opt2=$row["opt2"];
      $opt3=$row["opt3"];
      $opt4=$row["opt4"];
      $answer=$row["answer"];
      
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
                            <div class="col-lg-12">
                            <form action="" method="post" name="form1" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header"><strong>Update questions with text</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="name" class=" form-control-label">Question</label><input type="text" name="question" placeholder="Add Question" class="form-control" value="<?php  echo "$question";?>"></div>
                                <div class="form-group"><label for="name" class=" form-control-label">Add Option1</label><input type="text" name=" opt1" placeholder="Add Option1" class="form-control" value="<?php  echo "$opt1";?>"></div>
                                <div class="form-group"><label for="name" class=" form-control-label">Add Optio2</label><input type="text" name=" opt2" placeholder="Add Option2" class="form-control" value="<?php  echo "$opt2";?>"></div>
                                <div class="form-group"><label for="name" class=" form-control-label">Add Option3</label><input type="text" name=" opt3" placeholder="Add Option3" class="form-control" value="<?php  echo "$opt3";?>"></div>
                                <div class="form-group"><label for="name" class=" form-control-label">Add Option4</label><input type="text" name=" opt4" placeholder="Add Option4" class="form-control" value="<?php  echo "$opt4";?>"></div>
                                <div class="form-group"><label for="name" class=" form-control-label">Add Answer</label><input type="text" name="answer" placeholder="Add Answer" class="form-control" value="<?php  echo "$answer";?>" ></div>
                                    <div class="form-group">
                                        <input type="submit" name=submit1 value="Update Question" placeholder="" class="btn-light" style="border-radius:5px;color: #ad022d;background-color: transparent;border: 1px solid #ad022d;"></div>
                                        
                                                    
                                                </div>
                                            </div>
                                    

                            </div></form>
                                    

                            </div>
                        </div> 

                    </div>
                    <!--/.col-->           
                                            </div>
                                        </div>
                                    </div>

                                    <?php
if (isset($_POST["submit1"]))
{
    
    mysqli_query($link,"UPDATE questions set question='$_POST[question]',opt1='$_POST[opt1]',opt2='$_POST[opt2]',opt3='$_POST[opt3]',opt4='$_POST[opt4]',answer='$_POST[answer]' where id=$id") ;
    ?>
    <script>
        window.location="add_edit_questions.php?id=<?php echo $id1; ?>";
    </script>
    <?php

}
?>
        <?php
        include ("footer.php");
        ?>
                                
