<!DOCTYPE html>
<html lang="en">
<head>
    <title>Leave Portal | PIET</title>
    <link href="images/u.png" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>
    <div class="topnav">
        <a href="login.html">Log Out</a>
        <a href="contact us.html">Contact</a>
        <a href="#contact">Record</a>
        <a href="leave form.html">Apply Leave</a>
        <a href="Faculty dashboard.html">Home</a>
        <img class="himg" src="images/r.png">
    </div>
    <div class="info">
        <div class="row">
            <div class="column1">
                <p>Name: Anubhav</p>
                <p>Employe Code: 34</p>
                <p>Mobile No.: 1234567890</p>
            </div>
            <div class="column2">
                <p>Departement: Computer Science</p>
                <p>Designation: Assistant Professor</p>
                <p>HOD Name: xyz</p>
            </div>
        </div>
    </div>
    <div class="mar">
        <table>
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
                                </tr>
        
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
        </table>
    </div>
</body>
</html>