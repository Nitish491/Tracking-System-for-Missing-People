<html>

<head>
    <title></title>
    <style>
        /**{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;} */

        /* Full-width input fields */
        /*input[type=text], input[type=password] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	font-size:16px;
}
*/
        /* Set a style for all buttons 
 button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
	font-size:20px;
}
button:hover {
    opacity: 0.8;
}
*/
        /* Center the image and position the close button */
        .imgcontainer1 {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        .avatar {
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        /* Modal Content Box */
        .modal-content {
            background-color: #fefefe;
            margin: 4% auto 15% auto;
            border: 1px solid #888;
            width: 40%;
            padding-bottom: 30px;
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            animation: zoom 0.6s
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
     
    <div class="container">
        <br>
        <h1 class="text-white bg-dark text-center">MATCHED PEOPLE PHOTOGRAPHS
        </h1>
        <br>
        <h6>Confirm the MISSING PERSON by clicking on image</h6>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover text-center">
                <thead class="bg-dark text-white">
                    <th>FIR NO</th>
                    <th>FIR DATE</th>
                    <th>PROFILE PIC</th>
                </thead>
                <tbody>
                    <?php

		      $con = mysqli_connect('localhost','root','','trackchild');
		     // mysqli_select_db($con,'displayupload');
		      if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


		  /*    if(isset($_POST['submit'])){

		      $username =$_POST['username']; 
		       $files = $_FILES['file'];

		     // print_r( $username);
		     // echo "<br>";

		      $filename = $files['name'];
		      $fileerror = $files['error'];
		      $filetmp = $files['tmp_name'];

		      $fileext = explode('.',$filename);
		      $filecheck = strtolower(end($fileext));

		      $fileextstored = array('png','jpg','jpeg');

		      if(in_array($filecheck, $fileextstored)){

		      	$destinationfile='upload/'.$filename;
		      	move_uploaded_file($filetmp, $destinationfile);
		      	echo "<br>$destinationfile<br>";
		          
                echo "<br>".$username."<br>";
		      	$q="INSERT INTO imgupload(username,image) VALUES('$username','$destinationfile');";
		      	//$query = mysqli_query($con,$q);
		      	if (mysqli_query($con, $q)) {
    echo "New record created successfully";
              } else {
    echo "Error: " . $q. "<br>" . mysqli_error($con);
}   */


		      	$displayquery ="select * from imgupload,matched where imgupload.fir_no=matched.fir_number ";
		      	$querydisplay = mysqli_query($con,$displayquery);
		      
		       while($result =mysqli_fetch_array($querydisplay)){
		       	?>

                    <tr>

                        <td> <?php echo $result['fir_no'];$firno=$result['fir_no'];
                            ?></td>
                        
                        <td> <?php echo $result['fir_date']; ?></td>
                        <td>
                            
                            
                            <a href='./confirm.php?firno=<?php echo "$firno"; ?>'><button>
                                <img src=" <?php echo $result['image'];  ?>" height="100px" width="100px"></button></a> </td>
                    </tr>

                    <?php  
		       }
		  /*    }else{
		     	echo "Extension is not matching";
		      } */
		  




		    ?>


                </tbody>

            </table>
        </div>
    </div>
    <div id="modal-wrapper" class="modal">

        <form class="modal-content animate" action="/action_page.php">

            <div class="imgcontainer1">
                <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                <img src="img/1.png" alt="Avatar" class="avatar">
                <h1 style="text-align:center">Modal Popup Box</h1>
            </div>

            <div class="container">
                <?php 
                
  	            $query ="select * from general_info where fir_no=101 ";
		      	$display = mysqli_query($con,$query); 
           while( $result1 =mysqli_fetch_array($display) ){?>


                <div class="row " style="height:15rem">
                    <div class="col-sm-4  ">

                        <ul style="list-style-type:circle;">GENERAL INFORMATION

                            <li>NAME:<?php echo $result1['name'];?></li>
                            <li>GENDER:<?php echo $result1['gender'];?> </li>
                            <li>AGE:<?php echo $result1['age'];?> </li>
                            <li>ADDRESS:<?php echo $result1['address'];?></li>
                            <li>MOB_NO:<?php echo $result1['mob_no'];?></li>
                            <li>MISSING_DATE:<?php echo $result1['missing_date'];?></li>
                            <li>MISSING_PLACE:<?php echo $result1['missing_place'];?></li>
                        </ul>
                    </div>
                      <?php 
  	            $query1 ="select * from identification_marks where fir_no=101 ";
		      	$display1 = mysqli_query($con,$query1); 
           while( $result2 =mysqli_fetch_array($display1) ){?>
                    <div class="col-sm-4 ">
                        <ul style="list-style-type:circle;">IDENTIFICATION MARKS

                            <li>BURN MARKS:<?php echo $result2['burn_mark'];?></li>
                            <li>MOLES:<?php echo $result2['moles'];?> </li>
                            <li>VOICE:<?php echo $result2['voice'];?> </li>
                            <li>IF ANY DEFORMITIES:<?php echo $result2['if_any_deformities'];?> </li>
                        </ul>
                    </div>   <?php }  ?>
                    
                    <?php 
  	            $query2 ="select * from physical_features where fir_no=101 ";
		      	$display2 = mysqli_query($con,$query2); 
           while( $result3 =mysqli_fetch_array($display2) ){?>
                    <div class="col-sm-4 ">
                        <ul style="list-style-type:circle;">PHYSICAL FEATURES

                            <li>COMPLEXION:<?php echo $result3['complexion'];?></li>
                            <li>EYE:<?php echo $result3['eye'];?> </li>
                            <li>HAIR:<?php echo $result3['hair'];?> </li>
                            <li>BUILD:<?php echo $result3['build'];?> </li>
                             <li>HEIGHT:<?php echo $result3['height'];?> </li>
                             <li>WEIGHT:<?php echo $result3['weight'];?> </li>
                        </ul>
                    </div>   <?php }  ?>
                </div>
                <?php }  ?>
            </div>

        </form>

    </div>

    <script>
        // If user clicks anywhere outside of the modal, Modal will close

        var modal = document.getElementById('modal-wrapper');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

    </script>


   
</body>

</html>
