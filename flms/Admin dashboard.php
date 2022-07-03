<!DOCTYPE html>
<html lang="en">
<head>
    <title>Leave Portal | PIET</title>
    <link href="images/u.png" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/split.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" type="text/css" href="css/fac_info.css">
    <link rel="stylesheet" type="text/css" href="css/app_ad.css">
</head>
<body>
    <div class="topnav">
        <a href="login.html">Log Out</a>
        <a href="Admin recod.html">Record</a>
        <a href="Admin dashboard.html">Home</a>
        <img class="himg" src="images/r.png">
    </div>

    <!-- <div class="row">
        <div class="column1">
            <div class="info">
                <p><strong>Leave Applications</strong></p>
                <div class="applicant">
                    <div class="row">
                        <div class="columna">
                            <img src="images/OIP.jpeg" class="imgg">
                        </div>
                        <div class="columnd">
                            <p>Anubhav</p>
                        </div>
                        <div class="columnb">
                            <button>Approve</button>
                        </div>
                        <div class="columnc">
                            <button>Deny</button>
                        </div>
                    </div>
                    -->
                    <div class="row">
        <div class="column1">
            <div class="info">
                <p><strong>Leave Applications</strong></p>
                <div class="applicant">
                    <table>
                        <tr>
                        <th>Serial No</th>
                        <th>Name</th>
                        <th>Departement</th>
                        <th>Designation</th>
                        <th>Emp_code</th>
                        <th>Replacement</th>
                        <th>No of leaves</th>
                        <th>To</th>
                        <th>From</th>
                        <th>Decision</th>
                        
                        </tr>
                        <!-- <tr>
                        <td>02-01-2022</td>
                        <td>123</td>
                        <td>8</td>
                        <td>2</td>
                        <td>04-01-2022</td>
                        <td>05-01-2022</td>
                        <td>Anant Jain</td>
                        </tr> -->

                        <?php
                    session_start();
                    include "sims.php";
                    include "login.php";

                    $selectquery = " select * from flms.form ;";
                    $query = mysqli_query($conn,$selectquery);
                    $count = mysqli_num_rows($query);
                    $i = 1;
                    while($res = mysqli_fetch_array($query)){

                      ?>
                      <tr id="<?php if(fmod($i, 2)==0) echo"even";?>">
                      <td id="num"><?php echo $i;?>.</td>
                      <td><?php echo $res['Name'];?></td>
                      <td><?php echo $res['Department'];?></td>
                      <td><?php echo $res['Designation'];?></td>
                      <td><?php echo $res['Emp_code'];?></td>
                      <!-- <td><?php echo $res['Hod_name'];?></td> -->
                      <td><?php echo $res['Replacement_faculty'];?> </td>
                      <td><?php echo $res['No_of_leaves'];?> </td>
                      <td><?php echo $res['Date_from'];?> </td>
                      <td><?php echo $res['date_to'];?> </td>
                      <td> <select name="approve" id="">
                          <option value="approve">Approve</option>
                          <option value="deny">deny</option>
                      </select> </td>
                      
                      <td><a href=""  style="color: <?php if(fmod($i, 2)==0) echo"white";?>;"></a></td>
                    </tr>
                    
                      <?php
                      $i++;
                    }
                      ?>
                    
                    </table>
                    </div>
                    </div>
                </div> 
          <!--      <br>
                <div class="applicant">
                    <div class="row">
                        <div class="columna">
                            <img src="images/OIP.jpeg" class="imgg">
                        </div>
                        <div class="columnd">
                            <p>Anant Jain</p>
                        </div>
                        <div class="columnb">
                            <button>Approve</button>
                        </div>
                        <div class="columnc">
                            <button>Deny</button>
                        </div>
                    </div>
                   
                    <table>
                        <tr>
                        <th>Date Applied</th>
                        <th>Emp Code</th>
                        <th>Leaves Remaining</th>
                        <th>Number of Leaves</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Replacement</th>
                        </tr>
                        <tr>
                        <td>05-01-2022</td>
                        <td>234</td>
                        <td>12</td>
                        <td>4</td>
                        <td>06-01-2022</td>
                        <td>10-01-2022</td>
                        <td>Anubhav</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div> -->
        <div class="column3">
            <div class="vl"></div>
        </div>
        <div class="column2">
            <img class="pimg" src="images/OIP.jpeg" alt="Loading Error">
            <h2>ADMIN</h2>
            <p>Poornima Institute of Engineering and Technology</p>
            <p>Departement: Computer Science</p>
            <!-- <p>Designation: Associate Professor</p> -->
            <!-- <p>Mobile No.: 1234567890</p> -->
        </div>
    </div>
</body>
</html>