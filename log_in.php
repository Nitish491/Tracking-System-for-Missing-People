<?php
   $username=$_POST['uname'];
   $password=$_POST['pwd'];
   $user=$_POST['user'];
   if(!empty($username)&&!empty($password))
   {
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $db="trackchild";
    $con=new mysqli($host,$dbusername,$dbpassword,$db);
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_errno());
    }
    else{
        if($user=='DEPENDENT')
        {
     $sql = "SELECT aadhar_no FROM dependent WHERE aadhar_no = '$username' and password = '$password'";
       $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
        // $_SESSION['login_user'] = $myusername;
         
         header("location: ./details.php?aadhar=".$username);
      }else {
         echo "Your Login Name or Password is invalid";
      }
      $con->close();
        }
        else if($user=='INFORMANT')
        {
     $sql = "SELECT aadhar_no FROM informant WHERE aadhar_no = '$username' and password = '$password'";
       $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
        // $_SESSION['login_user'] = $myusername;
         
         header("location: ./sighted_child_details.html");
      }else {
         echo "Your Login Name or Password is invalid";
      }
      $con->close();
        }
        else{
            echo "not in dependent or informant";
        }
     
    }
   }
   else{
    echo "All Fields Are Recquired";
    die();
}
?>