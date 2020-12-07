<?php
    $complexion=$_POST['complexion'];
 $weight=$_POST['weight'];
 $height=$_POST['height'];
 $build=$_POST['build'];
 $eye=$_POST['eye'];
 $hair=$_POST['hair'];

 $moles=$_POST['moles'];
 $voice=$_POST['voices'];
 $burn_marks=$_POST['burn_marks'];
 $deformity=$_POST['deformity'];
 $c=0;

 $host="localhost";
 $dbusername="root";
 $dbpassword="";
 $dbname="trackchild";
 $con=new mysqli($host,$dbusername,$dbpassword,$dbname);
 echo "all fields are required";
if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_errno());
}
else{
    if(!empty($moles)&&!empty($voice)&&!empty($burn_marks)&&!empty($deformity)&&!empty($complexion)&&!empty($weight)&&!empty($height)&&!empty($build)&&!empty($eye)&&!empty($hair)){
     $result1 = $con->query("SELECT * FROM identification_marks ORDER BY fir_no ASC");
   $result2 = $con->query("SELECT * FROM physical_features ORDER BY fir_no ASC"); 
while (($row1 = $result1->fetch_object())&&($row2=$result2->fetch_object())){
       $c=0;
      echo $row1->fir_no;
      echo $row2->fir_no;
        echo  "<br>";
   if($row1->moles==$moles){
        $c=$c+1;
    }
    if($row1->voice==$voice)
    {
        $c=$c+1;
    }
    if($row1->burn_mark==$burn_marks)
    {
        $c=$c+1;
    }
    if($row1->if_any_deformities==$deformity)
    {
        $c=$c+1;
         echo $c;
    }
   /* if($row2->complexion==$complexion)
    {
        $c=$c+1;
    }*/
    if($row2->height==$height)
    {
        $c=$c+1;
         echo $c;
    }
    if($row2->weight==$weight)
    {
        $c=$c+1;
    }
    if($row2->hair==$hair)
    {
$c=$c+1;
          echo $c;
    }
    if($row2->build==$build)
    {
        $c=$c+1;
    }
    if($row2->eye==$eye)
    {
        $c=$c+1;
    }
  
    if($c>6)
    {
         $SELECT ="SELECT fir_number From matched Where fir_number= ? Limit 1";
        $INSERT="INSERT Into matched(fir_number) values($row2->fir_no)";
        echo "new record inserted successfully";
        $stmt=$con->prepare($SELECT);
        $stmt->bind_param("i",$fir_number);
        $stmt->execute();
        $stmt->bind_result($fir_number);
        $stmt->store_result();
        $rnum=$stmt->num_rows;
        if($rnum==0){
            $stmt->close();
            $stmt=$con->prepare($INSERT);
            $stmt->bind_param("i",$fir_number);
            $stmt->execute();
            echo "registered successfully";
        }
        else{
            echo "already registered";
        }
        $stmt->close();
    }
}
        
         header('location:./matched.php');
    }
}
$con->close();
?>