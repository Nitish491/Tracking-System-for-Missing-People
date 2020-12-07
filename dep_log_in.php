<?php
$name=$_POST['name'];
$mobilenumber=$_POST['contactnumber'];
$aadharnumber=$_POST['aadhar'];
$missingperson=$_POST['Mis_Per'];
$relation=$_POST['relation'];
$password=$_POST['pwd'];
$address=$_POST['address'];
if(!empty($name)&&!empty($mobilenumber)&&!empty($aadharnumber)&&!empty($missingperson)&&!empty($relation)&&!empty($password)&&!empty($address)){
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="trackchild";
    $con=new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_errno());
    }
    else{
        $SELECT ="SELECT aadhar_no From dependent Where aadhar_no= ? Limit 1";
        $INSERT="INSERT Into dependent(dep_name,mob_no,aadhar_no,missing_name,relation,password,address) values(?,?,?,?,?,?,?)";
        echo "new record inserted successfully";
        $stmt=$con->prepare($SELECT);
        $stmt->bind_param("i",$aadharnumber);
        $stmt->execute();
        $stmt->bind_result($aadharnumber);
        $stmt->store_result();
        $rnum=$stmt->num_rows;
        if($rnum==0){
            $stmt->close();
            $stmt=$con->prepare($INSERT);
            $stmt->bind_param("siissss",$name,$mobilenumber,$aadharnumber,$missingperson,$relation,$password,$address);
            $stmt->execute();
             header('location:./log_in.html');
        }
        else{
            echo "already registered";
        }
        $stmt->close();
        $con->close();
        
    }
}
else{
    echo "All Fields Are Recquired";
    die();
}
?>