
<!DOCTYPE html>
<html>
 
<?php
include('./config/database.php');
session_start();
    // if(!isset($_SESSION['x']))
    //     header("location:userlogin.php");
    
    
    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
        die("could not connect".mysqli_connect_error());
    }
    mysqli_select_db($conn, "crime_portal");
    
//     $u_id=$_SESSION['u_id'];
        
//         $result=mysqli_query($conn,"SELECT a_no FROM user where u_id='$u_id' ");
//         $q2=mysqli_fetch_assoc($result);
//         $a_no=$q2['a_no'];
    
//         $result1=mysqli_query($conn,"SELECT u_name FROM user where u_id='$u_id' ");
//         $q2=mysqli_fetch_assoc($result1);
//         $u_name=$q2['u_name'];
        
    



// if(isset($_POST['s'])){
  
//     $con=mysqli_connect('localhost','root','');
//     if(!$con)
//     {
//         die('could not connect: '.mysqli_error());
//     }
//     if($_SERVER["REQUEST_METHOD"]=="POST")
//     {
        
//       $a_no=$_POST['aadhar_number'];
//         $location=$_POST['location'];
//         $type_crime=$_POST['type_crime'];
//         $d_o_c=$_POST['d_o_c'];
//         $description=$_POST['description'];
        
//         $var=strtotime(date("Ymd"))-strtotime($d_o_c);

        
        
        
//     if($var>=0)
//     {
     
//       $comp="INSERT into complaint(a_no,location,type_crime,d_o_c,description) values('$a_no','$location','$type_crime','$d_o_c','$description')";
//       mysqli_select_db($conn,"crime_portal"); 
//       $res=mysqli_query($conn,$comp);
      
//       if(!$res)
//       {
//         $message1 = "Complaint already filed";
//         echo "<script type='text/javascript'>alert('$message1');</script>";
//       }
//       else
//       {
//           $message = "Complaint Registered Successfully";
//           echo "<script type='text/javascript'>alert('$message');</script>";
//       }

     
//     }
//     else
//     {
//      $message = "Enter Valid Date";
//       echo "<script type='text/javascript'>alert('$message');</script>";
//     }
//   }
// }


// extract($_POST);
// if(isset($_POST['s']))
// {
// $que=mysqli_query($conn,"select * from user WHERE aadhar_number='$aadhar_number'");


	
// $row=mysqli_num_rows($que);
// 	if($row)
// 	{
// 	$err="<font color='red'>This user already exists</font>";
// 	}
// 	else
// 	{
//     $image=$_FILES['pic']['name'];	
		
//        mysqli_query($conn,"insert into complaint               values('','$aadhar_number','$location','$type_crime','$d_o_c','$image','$description',now())");	
//        move_uploaded_file($_FILES['pic']['tmp_name'],"../uploads".$_FILES['pic']['name']);

// 	$err="<font color='blue'>Congrats Your Data Saved!!!</font>";
// }
// }
session_start();

    
    
    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
        die("could not connect".mysqli_connect_error());
    }
    mysqli_select_db($conn, "crime_portal");
    

    



    $con=mysqli_connect('localhost','root','');
    if(!$con)
    {
        die('could not connect: '.mysqli_connect_error());
    }
    



    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        
      $a_no=$_POST['aadhar_number'];
      $loc=$_POST['location'];
      $type_crime=$_POST['type_crime'];
      $d_o_c=$_POST['d_o_c'];
      $pic=$_POST['pic'];
        $description=$_POST['description'];
        $msg='';
    
        

        
        
        
    if($a_no>=0)
    {
      

      // Backup for Image
      // $comp="INSERT into complaint(a_no,location,type_crime,d_o_c,images,description) values('$a_no','$loc','$type_crime','$d_o_c','$pic','$description')";
      // mysqli_select_db($conn,"crime_portal"); 
      // $res=mysqli_query($conn,$comp);
      
      $comp="INSERT into complaint(a_no,location,type_crime,d_o_c,description) values('$a_no','$loc','$type_crime','$d_o_c','$description')";
      mysqli_select_db($conn,"crime_portal"); 
      $res=mysqli_query($conn,$comp);
     
      if(!$res)
      {
        
        $message1 = "Feedback already filed";
        echo "<script type='text/javascript'>alert('$message1');</script>";
      }
      else
      {
       
          $message = "Feedback Registered Successfully";
          echo "<script type='text/javascript'>alert('$message');</script>";
      }

     
    }
  }


?>
    
 <script>
     function f1()
        {
           var sta1=document.getElementById("desc").value;
           var x1=sta1.trim();
          if(sta1!="" && x1==""){
          document.getElementById("desc").value="";
          document.getElementById("desc").focus();
          alert("Space Found");
        }
}
 </script>
   
<head>
	<title>Complainer Home Page</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<link href="complainer_page.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body style="background-size: cover;
    background-image: url(home_bg1.jpeg);
    background-position: center;">
	<nav  class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"><b>Home</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li ><a href="userlogin.php">User Login</a></li>
        <li class="active"><a href="complainer_page.php">User Home</a></li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="complainer_page.php">Log New Complain</a></li>
        <li class="active"><a href="add-image.php">Add Images</a></li>
        <li><a href="complainer_complain_history.php">Complaint History</a></li>
        <li><a href="logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>
    
    
<div class="video" style="margin-top: 5%"> 
	<div class="center-container">
		 <div class="bg-agile" style="background-color: #3056d3;">
			<br><br>
			<div class="login-form"><p><h2 style="color:white">Welcome <?php echo "$u_name" ?></h2></p><br>
                                    <p><h2 style="color: #fff;">Log New Complain</h2><?php echo "$msg"; ?></p><br>	
				<form action="#" method="post" style="color: #fff" enctype="multicart/form-data">Aadhar
					<input type="text"  name="aadhar_number" placeholder="Aadhar Number" required="" >
					
				<div class="top-w3-agile" style="color: #fff">Location of Crime
                    
                    <select class="form-control" name="location">
						<?php
                        $loc=mysqli_query($conn,"select location from police_station");
                        while($row=mysqli_fetch_array($loc))
                        {
                            ?>
                                	<option> <?php echo $row[0]; ?> </option>
                            <?php
                        }
                        ?>
					
				    </select>
				</div>
				<div class="top-w3-agile" style="color: #fff">Type of Crime
					<select class="form-control" name="type_crime">
						<option>Theft</option>
						<option>Robbery</option>
                        <option>Pick Pocket</option>
                        <option>Murder</option>
                        <option>Rape</option>
                        <option>Molestation</option>
                        <option>Kidnapping</option>
                        <option>Missing Person</option>
				    </select>
				</div>
        <p>
	</p>
					<div class="Top-w3-agile" style="color: #fff">
					Date Of Crime : &nbsp &nbsp  
						<input style="background-color: #3056d3; color: white" type="date" name="d_o_c" required>
					</div>
					<br>
          <!-- <div class="row" style="margin-bottom: 10px;">
        <input type="file" class="form-control" placeholder="Pic" name="pic"/>
    </div> -->
					<div class="top-w3-agile" style="color: #fff">
					Description
						<textarea  name="description" rows="20" cols="50" placeholder="Describe the incident in details with time" onfocusout="f1()" id="desc" required></textarea>
					</div>
					<input type="submit" value="Submit" name="s" style="background-color: #fff; color:#3056d3">
				</form>	
			</div>	
		</div>
	</div>	
</div>	
<div style="position: relative;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 30px;
   background-color: #3056d3;
   color: white;
   text-align: center;">
  <h4 style="color: white;">&copy <b>Crime Portal 2022</b></h4>
</div>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>