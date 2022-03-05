<?php
session_start();
include "connection.php";
include "Header.php";
if(!isset($_SESSION["username"]))
{
        ?>
        <script>
window.location="login.php";

        </script>
        <?php
}
?>

        <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

            <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">
<h3 style="text-align: center;"> Results</h3>

         <?php

         $count=0;
         $res=mysqli_query($link,"select * from exam_results where username='$_SESSION[username]' order by id desc")  or die(mysqli_error($link));
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




        <?php

include "footer.php";

        ?>
        