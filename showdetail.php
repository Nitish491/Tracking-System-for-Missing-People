<!DOCTYPE html>
<html>
<head>
    <title></title>
     <!-- Latest compiled and minified CSS -->
    <style>
        .li-prop{
          font-weight: 600;
            font-size: 15px;
            
        }
        .ul-prop{
            text-transform: uppercase;
            
        }
        .head-prop h3{
            text-decoration: underline;
        }
        
    
    
    </style>
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
<body style="background:#ecf0f1 ;">
  
        <?php
    // Connecting with database and executing query
    $con = mysqli_connect('localhost','root','','trackchild');
     $firnoo=$_GET['firno'];
       $firn=$firnoo;
      ?>
       <?php 
                
  	            $query ="select * from general_info where fir_no=$firnoo ";
               $display = mysqli_query($con,$query); 
                 $query2="select image from imgupload where fir_no=$firnoo";
		      	
                 $display2=mysqli_query($con,$query2);
                  $result2=mysqli_fetch_array($display2);
           while( $result1 =mysqli_fetch_array($display) ){?>

  <form action="#" method="post">
      <br>  
      <br>
      <div class="container" style="background: #dad0f2;;">
      <div class="row">
          <div class="col-sm-8">
              <center><h1 class="mt-5"><span><i class="fas fa-info-circle fa-1x" style="color:blue"></i></span>  DETAILS <span><i>of</i></span> FIR NUMBER: <?php echo $firnoo;?></h1></center>
          </div>
          <div class="col-sm-4">
          <center><button class="mt-2"><img src=" <?php echo $result2['image'];  ?>" height="100px" width="100px"></button>   <h6>missing person image</h6></center>
           
          </div>
          </div>
      </div>
    <div class="container mt-4" style="background:#dad0f2;">
                <div class="row border border-primary head-prop " style="height:20rem">
                    <div class="col-sm-4 border " >

                        <ul style="list-style-type:circle;" class="ul-prop"><h3 >GENERAL INFORMATION
</h3>
                            <li class="mt-4 "><label class="li-prop">NAME :</label> <?php echo $result1['name'];?></li>
                            <li><label class="li-prop">GENDER :</label> <?php echo $result1['gender'];?> </li>
                            <li><label class="li-prop">AGE :</label>  <?php echo $result1['age'];?> </li>
                            <li><label class="li-prop">ADDRESS :</label> <?php echo $result1['address'];?></li>
                            <li><label class="li-prop">MOB_NO :</label> <?php echo $result1['mob_no'];?></li>
                            <li><label class="li-prop">MISSING_DATE :</label> <?php echo $result1['missing_date'];?></li>
                            <li><label class="li-prop">MISSING_PLACE :</label> <?php echo $result1['missing_place'];?></li>
                        </ul>
                    </div>
                      <?php 
  	            $query1 ="select * from identification_marks where fir_no=$firnoo ";
		      	$display1 = mysqli_query($con,$query1); 
           while( $result2 =mysqli_fetch_array($display1) ){?>
                    <div class="col-sm-4 border">
                        <ul style="list-style-type:circle;" class="ul-prop"><h3>IDENTIFICATION MARKS</h3>

                            <li class="mt-4"><label class="li-prop">BURN MARKS :</label> <?php echo $result2['burn_mark'];?></li>
                            <li><label class="li-prop">MOLES :</label> <?php echo $result2['moles'];?> </li>
                            <li><label class="li-prop">VOICE :</label> <?php echo $result2['voice'];?> </li>
                            <li><label class="li-prop">IF ANY DERORMITIES :</label> <?php echo $result2['if_any_deformities'];?> </li>
                        </ul>
                    </div>   <?php }  ?>
                    
                    <?php
                            $sql= "CALL progeninfo($firn);";
                            $display2=mysqli_query($con,$sql);
  	          //  $query2 ="select * from physical_features where fir_no=$firnoo ";
		      //	$display2 = mysqli_query($con,$query2); 
           while( $result3 =mysqli_fetch_array($display2) ){?>
                    <div class="col-sm-4 border ">
                        <ul style="list-style-type:circle;" class="ul-prop"><h3>PHYSICAL FEATURES</h3>

                            <li class="mt-4"><label class="li-prop">COMPLEXION :</label> <?php echo $result3['complexion'];?></li>
                            <li><label class="li-prop">EYE :</label> <?php echo $result3['eye'];?> </li>
                            <li><label class="li-prop">HAIR :</label> <?php echo $result3['hair'];?> </li>
                            <li><label class="li-prop">BUILD :</label> <?php echo $result3['build'];?> </li>
                             <li><label class="li-prop">HEIGHT :</label> <?php echo $result3['height'];?> </li>
                             <li><label class="li-prop">WEIGHT :</label> <?php echo $result3['weight'];?> </li>
                        </ul>
                    </div>   <?php }  ?>
                </div>
                <?php }  ?>
            






        </div>
    </form>
  
    
</body>
</html>
