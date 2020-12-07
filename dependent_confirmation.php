<?php
  $aadhar=$_POST['aadhar'];
  $status=$_POST['status'];
   if(!empty($aadhar)&&!empty($status))
   {
       $host="localhost";
       $dbusername="root";
       $dbpassword="";
       $db="trackchild";
       $con=new mysqli($host,$dbusername,$dbpassword,$db);
       if(mysqli_connect_error())
        {
            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_errno());
        }
       else
        {
            $sql = "SELECT * FROM imgupload WHERE dep_aadhar_no = '$aadhar'";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($result);
            $count = mysqli_num_rows($result);
            if($count>0)
             {
                $fir_no=$row['fir_no'];
                if($status==='FOUND')
                   {
             
                      $sql1="SELECT * from sight where fir_number=$fir_no";
                      $result1 = mysqli_query($con,$sql1);
                      $row1= mysqli_fetch_array($result1);
                      $place=$row1['place_found'];
                      $seen=$row1['date_seen'];
              
                      $date=$row['fir_date'];
                      $image=$row['image'];
                      //echo $image;
              
                      $SELECT ="SELECT fir_no From recovered Where fir_no= ? Limit 1";
              
                      $INSERT="INSERT Into recovered(fir_no,fir_date,image,date_found,place_found) values(?,?,?,?,?)";
                      echo "new record inserted successfully";
                      $stmt=$con->prepare($SELECT);
              
                      $stmt->bind_param("i",$fir_no);
                      $stmt->execute();
                      $stmt->bind_result($fir_no);
    
                      $stmt->store_result();
                      $rnum=$stmt->num_rows;
                      if($rnum==0)
                        {
                             $stmt->close();
            
                             $stmt=$con->prepare($INSERT);
            
                             $stmt->bind_param("issss",$fir_no,$date,$image,$seen,$place);
            
                             $stmt->execute();
                             $stmt->close();
                             $sql2="DELETE FROM imgupload where fir_no=$fir_no";
                             $stmt1=$con->prepare($sql2);
                             $stmt1->execute();
                             $stmt1->close();
                          echo "<br>";
                             echo "CONGRATULIONS!";
                             //header('location:./recovered.php');
                        }
                      else
                        {
                             echo "already registered";
                        }
                   }
               if($status==='NOTFOUND')
                   {
                     $sql2="DELETE FROM sight where fir_number=$fir_no";
                     $stmt2=$con->prepare($sql2);
                     $stmt2->execute();
                     $stmt2->close();
                   } 
            }
       
        /*else
        {
            echo "Aadhar Number Doesn't Match with Person's Dependents Adahar Number";
        }*/
          $con->close();
       }
   }
   else
   {
     echo "All Fields Are Recquired";
   }

?>