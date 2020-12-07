<!DOCTYPE html>
<html>

<head>
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <style>
        .li-prop {
            font-weight: 600;
            font-size: 15px;

        }

        .ul-prop {
            text-transform: uppercase;

        }

        .head-prop h3 {
            text-decoration: underline;
        }
        .a-dhaar{
            margin-top: 30px;
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
    <link rel="stylesheet" href="css/index1.css">
</head>

<body>

    <?php
    // Connecting with database and executing query
    $con = mysqli_connect('localhost','root','','trackchild');
     $firnoo=$_GET['firno'];
       
      ?>
    <?php 
                
  	            $query ="select * from general_info where fir_no=$firnoo ";
		      	$display = mysqli_query($con,$query); 
           while( $result1 =mysqli_fetch_array($display) ){?>

    <form action="#" method="post">
        <br>
        <br>
        <center>
            <h1><span><i class="fas fa-info-circle fa-1x" style="color:blue"></i></span> DETAILS <span><i>of</i></span> FIR NUMBER: <?php echo $firnoo;?></h1>
        </center>
        <br>
        <div class="container mt-5">
            <div class="row border border-primary head-prop" style="height:20rem">
                <div class="col-sm-4 border ">

                    <ul style="list-style-type:circle;" class="ul-prop">
                        <h3>GENERAL INFORMATION
                        </h3>
                        <li class="mt-4 "><label class="li-prop">NAME :</label> <?php echo $result1['name'];?></li>
                        <li><label class="li-prop">GENDER :</label> <?php echo $result1['gender'];?> </li>
                        <li><label class="li-prop">AGE :</label> <?php echo $result1['age'];?> </li>
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
                    <ul style="list-style-type:circle;" class="ul-prop">
                        <h3>IDENTIFICATION MARKS</h3>

                        <li class="mt-4"><label class="li-prop">BURN MARKS :</label> <?php echo $result2['burn_mark'];?></li>
                        <li><label class="li-prop">MOLES :</label> <?php echo $result2['moles'];?> </li>
                        <li><label class="li-prop">VOICE :</label> <?php echo $result2['voice'];?> </li>
                        <li><label class="li-prop">IF ANY DERORMITIES :</label> <?php echo $result2['if_any_deformities'];?> </li>
                    </ul>
                </div> <?php }  ?>

                <?php 
  	            $query2 ="select * from physical_features where fir_no=$firnoo ";
		      	$display2 = mysqli_query($con,$query2); 
           while( $result3 =mysqli_fetch_array($display2) ){?>
                <div class="col-sm-4 border ">
                    <ul style="list-style-type:circle;" class="ul-prop">
                        <h3>PHYSICAL FEATURES</h3>

                        <li class="mt-4"><label class="li-prop">COMPLEXION :</label> <?php echo $result3['complexion'];?></li>
                        <li><label class="li-prop">EYE :</label> <?php echo $result3['eye'];?> </li>
                        <li><label class="li-prop">HAIR :</label> <?php echo $result3['hair'];?> </li>
                        <li><label class="li-prop">BUILD :</label> <?php echo $result3['build'];?> </li>
                        <li><label class="li-prop">HEIGHT :</label> <?php echo $result3['height'];?> </li>
                        <li><label class="li-prop">WEIGHT :</label> <?php echo $result3['weight'];?> </li>
                    </ul>
                </div> <?php }  ?>
            </div>
            <?php }  ?>







        </div>
    </form>
    <form action='#' method="post">

        <div class="container">
            <h3>
                <center>CONFIRMATION</center>
            </h3>
            <hr>
            <div class="row">
                <label for="P_FOUND" class="col-sm-3 col-form-label"><b>PLACE FOUND :</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="PLACE" name="p_found">
                </div>
                <label for="date_seen" class="col-sm-3 col-form-label"><b>DATE SEEN :</b></label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" placeholder="DATE" name="date">
                </div>
                <label for="aadhar" class="col-sm-3 col-form-label a-dhaar"><b>AADHAR NUMBER :</b></label>
                <div class="col-sm-8 mt-4">
                    <input type="password" class="form-control" placeholder="INFORMANT Aadhar Number" name="aadhar">
                </div>
                <label for="aadhar" class="col-sm-3 col-form-label"><b>FIR NUMBER :</b></label>
                <div class="col-sm-8">
                    <input type="fir_no" class="form-control" placeholder="Fir Number" name="fir">
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="col-sm-6">
                        <button style="background-color: #3480eb; color: white;width:95.4%;height:5%;padding:4px,4px;border:1px solid;border-radius: 6px;margin-top:5%;" type="submit" name="submit"> SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
      if(isset($_POST['submit'])){
     $con = mysqli_connect('localhost','root','','trackchild');
    $fir=$_POST['fir'];
    $place_found=$_POST['p_found'];
    $date_seen=$_POST['date'];
    $inf_aadhar_no=$_POST['aadhar'];
     
    $SELECT ="SELECT fir_number From sight Where fir_number= ? Limit 1";
        $INSERT="INSERT Into sight(fir_number,place_found,date_seen,inf_aadhar_no) values(?,?,?,?)";
        echo "new record inserted successfully";
        $stmt=$con->prepare($SELECT);
        $stmt->bind_param("i",$fir);
        $stmt->execute();
    echo "$firnoo";
        $stmt->bind_result($fir);
        $stmt->store_result();
        $rnum=$stmt->num_rows;
        if($rnum==0){
            $stmt->close();
            $stmt=$con->prepare($INSERT);
            $stmt->bind_param("issi",$fir,$place_found,$date_seen,$inf_aadhar_no);
            $stmt->execute();
            echo "registered successfully";
            $stmt->close();
    /*$DELETE="DELETE FROM matched";
    $stmt=$con->prepare($DELETE);
    $stmt->execute();*/
        }
        else{
            echo "already registered";
        }
        $stmt->close();
    
    $con->close();}
    ?>

    </form>


</body>

</html>
