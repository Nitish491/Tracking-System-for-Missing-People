<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color:#ecf0f1">
    <center>
        <div class="container mt-5 rounded shadow" style="height:500px; width:600px;background-color:#dad0f2; border-radius:50px">
   
          
            <h1 class="mt-5">CHECK THE STATUS OF YOUR MISSING CHILDREN</h1>
            <form action="status.php" method="post">
             <label class="mt-5"><b>ENTER THE FIR NUMBER :</b></label>
                <input type="text" placeholder="FIR NUMBER" name="firno">
                <button type="submit" name="submit">CHECK</button>

                <?php
       $con = mysqli_connect('localhost','root','','trackchild');
         
           $flag=0;
      ?>
                <?php 
     if(isset($_POST['submit'])) {
          $firnoo=$_POST['firno'];
                 $query="select s.* from sight s,imgupload i where s.fir_number=i.fir_no";
		      	$display = mysqli_query($con,$query);
         while($result=mysqli_fetch_array($display))  {
           
          if($result['fir_number']==$firnoo){
              
                 $flag=1;
              break;
           }
             else{
                 $flag=2;
             }
           
         }
           if($flag==1){
               echo "<br>";
                echo "<br>";
                echo "<br>";
           echo "<b>Missing Person with fir number $firnoo  is Sighted..<b>";
               echo "<br>";
                 echo "<br>";
             echo '<div class="username"><a href="sighted_people_confirmation.php" class="button" title="">CLICK to get inormation...</a></div>';
           }
        if($flag==2){
             echo "<br>";
             echo "<br>";
             echo "<br>";
             echo "<b>SORRY! MISSING PERSON WITH FIR NUMBER  $firnoo  IS  NOT FOUND YET.<b>" ;   
                
            
         }
           
     }     
             ?>
            </form>
        </div>
    </center>
</body>

</html>
<!--
 <label class="mt-5"><b>Missing Person with fir number //<?php //echo $firnoo ?> is Sighted Check the link PHOTOGRAPHS OF SIGHTED CHILDREN to get more inormation</b></label> 
<label class="mt-5"><b>SORRY! MISSING PERSON WITH <?php// echo $firnoo ?> IS  NOT FOUND YET</b></label> 