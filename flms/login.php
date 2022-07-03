<?php
include "flms.php";
if (isset($_POST['un']) && isset($_POST['ps'])) 
{
  $email = $_POST['un'];
  $pass = $_POST['ps'];

      

     
        $sql = "SELECT * FROM flms.login WHERE email='$email' && pass='$pass' && user='faculty' ;";
        $result = mysqli_query($conn,$sql); 
        if (mysqli_num_rows($result)==1){

          header("Location: Faculty Dashboard.php");
        }
        else
     
        { header("Location: login.php");

      }
}

if (isset($_POST['aun']) && isset($_POST['aps'])) 
{
  $email = $_POST['aun'];
  $pass = $_POST['aps'];

      

     
        $sql = "SELECT * FROM flms.login WHERE email='$email' && pass='$pass' && user='admin' ;";
        $result = mysqli_query($conn,$sql); 
        if (mysqli_num_rows($result)==1){

          header("Location: Admin dashboard.php");
          echo "Success";
        }
        else
     
        { header("Location: login.php");

      }
}


