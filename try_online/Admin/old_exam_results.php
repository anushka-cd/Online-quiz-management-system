

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
                            <h3 style="text-align: center;"> Results</h3>

<?php

$count=0;
$res=mysqli_query($link,"select * from exam_results  order by id desc")  or die(mysqli_error($link));
$count=mysqli_num_rows($res);

if($count ==0)
{
?>
<h1 style="text-align: center;">No Results Found!</h>
<?php

}
else{
echo "<table  class='table table-bordered'>"; /*class='table table-bordered'*/
echo "<tr style='background-color:#353535'>";
echo "<th style='color:white;'>";    echo  "Username";  echo "</th>";
echo "<th style='color:white;'>";   echo "Exam Name";        echo "</th>";
echo "<th style='color:white;'>";   echo "Total Questions";         echo "</th>";
echo "<th style='color:white;'>";  echo "Correct Answers";             echo "</th>";
echo "<th style='color:white;'>";  echo "Wrong Answers" ;          echo "</th>";
echo "<th style='color:white;'>";    echo "Exam Date" ;       echo "</th>";

echo "</tr>";
while($row =mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>";    echo $row["username"] ; echo "</td>";
echo "<td>";    echo $row["exam_type"] ;    echo "</td>";
echo "<td>";   echo $row["total_question"]  ;      echo "</td>";
echo "<td>";   echo $row["correct_answer"];         echo "</td>";
echo "<td>";    echo $row["wrong_answer"];           echo "</td>";
echo "<td>";    echo $row["examtime"]  ;    echo "</td>";

echo "</tr>"; 
}
echo "</table>";
}

?>
                                    

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
                                