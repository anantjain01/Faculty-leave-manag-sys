<?php
session_start();
include "flms.php";
if (isset($_POST['name']) && isset($_POST['dp']) && isset($_POST['dg']) && 
isset($_POST['ec']) && isset($_POST['hod']) && isset($_POST['rf']) && isset($_POST['nol']) 
&& isset($_POST['from']) && isset($_POST['to'])) 
{


  
  $name = $_POST['name'];
  $dp = $_POST['dp'];
  $dg = $_POST['dg'];
  $ec = $_POST['ec'];
  $hod = $_POST['hod'];
  $rf = $_POST['rf'];
  $nol = $_POST['nol'];
  $from = $_POST['from'];
  $to = $_POST['to'];


     
        
           $sqlll = "INSERT INTO flms.form(Name,Department,Designation,Emp_code,Hod_name,Replacement_faculty,No_of_leaves,Date_from,date_to) VALUES ('$name','$dp','$dg','$ec','$hod','$rf',$nol,'$from','$to');";

            if ($conn->query($sqlll) === TRUE) {
               echo "Done";
            }
              else
              {echo "Failed";}
        }
   