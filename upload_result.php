<?php include("header.php");include("config.php");session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
 {
      $ID = $_POST['ID'];
      $Sub1 = $_POST['sub1'];
      $Sub2 = $_POST['sub2'];
      $Sub3 = $_POST['sub3'];
      $Sub4 = $_POST['sub4'];
      $Sub5 = $_POST['sub5'];
      $Sub6 = $_POST['sub6'];      
      $count = 1;
      $search_user = "SELECT Username FROM reg WHERE Username = '$ID'";
      $result1 = mysqli_query($db,$search_user);
      $count = mysqli_num_rows($result1);    	
      //echo $count;
      $src = "SELECT ID FROM result1 WHERE ID = '$ID'";
      $r = mysqli_query($db,$src);
      $c = mysqli_num_rows($r);    	
      
      if($count > 0) 
      {
        if($c > 0)
        {
        	echo "<script type ='text/javascript'>alert('Result allready submitted');</script>";
        }
        else
        {
	        if(isset($_POST['sub']))
	        {
	         	$sql = "insert into result1(ID,Sub1,Sub2,Sub3,Sub4,Sub5,Sub6) values('$ID','$Sub1','$Sub2','$Sub3','$Sub4','$Sub5','$Sub6');";
	            mysqli_query($db,$sql);
	            //header("location: reg_succes.php");
	        	echo "<script type ='text/javascript'>alert('inserted');</script>";
	        }
    	}
      }
      else
      {
      	echo "<script type ='text/javascript'>alert('Wrong reg. no.');</script>";
      }
     }// if close
?>

<html>
   <head>
      <title>Upload Results</title>
   </head>
   <center>
   <div id = "all">
    <table width="50%" border="4">
    <tr>
    <td width="20%" bgcolor="gray">
     <div id ="userreg" align="center" class="style1">Result for First Year </div><br>
   <form action = "" method = "post" onsubmit = "validation()" enctype='multipart/form-data'>
    
      <div id="IDD">Reg No.</div> <div id = "id"> <input type = "text"  name = "ID"></div>
      <div id="reg">
	      <div id="sub1">Sub1</div><div id="s1"><input type = "text"  id="subject1" name = "sub1"><br></div>
	      <div id="sub2">Sub2</div><div id="s2"><input type = "text"  name = "sub2"><br></div>
	      <div id="sub3">Sub3</div><div id="s3"><input type = "text"  name = "sub3"><br></div>
	      <div id="sub4">Sub4</div><div id="s3"><input type = "text"  name = "sub4"><br></div>
	      <div id="sub5">Sub5</div><div id="s3"><input type = "text"  name = "sub5"><br></div>
	      <div id="sub6">Sub6</div><div id="s3"><input type = "text"  name = "sub6"><br></div>
	      <div id="submit"><input type = "submit" value = " Submit " name="sub"/><br></div>
      </div>
      </td>
      </tr>
      </table>
      </div>
    </form>  
<body style="background-color:lightblue;">
<script type="text/javascript" language="javascript"></script>
<link rel="stylesheet" type="text/css" href="upload_result.css">
<script src="reg.js"></script>   
<a href = "loginn.php">Login <br><br><br>
<a href = "Home.html">Go to Home!
<script type="text/javascript">
function validation()[]
	{
		var x1=document.getElementById("subject1").value;
		var x2=document.getElementById("e").value;
		var x3=document.getElementById("p").value;
		var x4=document.getElementById("u").value;
		var x5=document.getElementById("ps").value;
	    if(x1=="")
	    {
	       alert("Name should not be blank.");	
	    }
	    
	    else if(x2=="")
	    {
	    	alert("Email Id should not be blank.");
	    }
	    else if(x3 =="")
	    {
	    	alert("Contact number should not be blank.");
	    }
	    else if(x4 == "")
	    {
	    	alert("Username should not be blank.");
	    }
	    else if(x5 == "")
	    {
	    	alert("Password should not be blank.");
	    }
	}
	</script>
   </body>
   </center>
</html>