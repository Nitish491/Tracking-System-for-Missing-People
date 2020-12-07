<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/homepage1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/details.css">

</head>

<body>
    <form action="#" method="post" enctype="multipart/form-data">
         <nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="container ">
                    <ul class="navbar-nav mr-auto nav nav-tabs justify-content-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="homepage.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">About TrackChild<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="law.html">Children Related Law<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="contact.html">Contact Us<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        
        <div class="container-fluid" style="background-color: #b09799">

            <h2>
                <center>MISSING PERSON REPORT</center>
            </h2>
            <hr>
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">
                        <label for="fir_no" class="col-sm-3 col-form-label"><b>Fir Number:</b></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Fir number" name="fir_no">
                        </div>
                        <label for="fir_date" class="col-sm-3 col-form-label"><b>Fir Date:</b></label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" placeholder="Fir Date" name="fir_date">
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-2"><button> <img src="" id="profile-img-tag" class="img-rounded" height="100px" width="100px" />

                    </button> <input type="file" name="file" id="profile-img"></div>
            </div>
        </div>

        <div class="container-fluid">
            <h4>
                <center>GENERAL INFORMATION</center>
            </h4>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <label for="nmae" class="col-sm-3 col-form-label"><b>NAME :</b></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="NAME" name="name">
                        </div>
                        <label for="age" class="col-sm-3 col-form-label"><b>AGE :</b></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Age" name="age">
                        </div>
                    </div>
                    <div class="row">
                        <label for="gender" class="col-sm-3 col-form-label"><b>GENDER :</b></label>
                        <div class="col-sm-9">
                            <select class="form-control" style="padding: 5px;margin: 5px 0 22px 0;display: inline-block;
  border: none;background-color: #f1f1f1;" name="gender">
                                <option value="MALE">MALE</option>
                                <option value="FEMALE">FEMALE</option>
                                <option value="OTHERS">OTHERS</option>
                            </select>
                        </div>
                        <label for="desig" class="col-sm-3 col-form-label"><b>DESIG. :</b></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Designation" name="desig">
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row">
                        <label for="placemis" class="col-sm-3 col-form-label"><b>PLACE MISSING:</b></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Place Missing" name="p_missing">
                        </div>
                        <label for="d_missing" class="col-sm-3 col-form-label"><b>DATE MISSING:</b></label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" placeholder="Date Missing" name="d_missing">
                        </div>
                    </div>
                    <div class="row">
                        <label for="address" class="col-sm-3 col-form-label"><b>ADDRESS :</b></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Address" name="address">
                        </div>
                        <label for="mob_no" class="col-sm-3 col-form-label"><b>MOBILE NUMBER:</b></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Contact Information" name="con_no">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="container-fluid">
                        <h4>
                            <center>PHYSICAL FEATURES</center>
                        </h4>
                        <div class="row">
                            <label for="complexion" class="col-sm-3 col-form-label"><b>Complexion :</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Complexion" name="complexion">
                            </div>
                            <label for="weight" class="col-sm-3 col-form-label"><b>WEIGHT :</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Weight in KG" name="weight">
                            </div>
                            <label for="height" class="col-sm-3 col-form-label"><b>HEIGHT :</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Height in cms" name="height">
                            </div>
                            <label for="build" class="col-sm-3 col-form-label"><b>BUILD :</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Build" name="build">
                            </div>
                            <label for="eye" class="col-sm-3 col-form-label"><b>EYE :</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Eye" name="eye">
                            </div>
                            <label for="hair" class="col-sm-3 col-form-label"><b>HAIR :</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Hair" name="hair">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="container-fluid">
                        <h4>
                            <center>IDENTIFICATION MARKS</center>
                        </h4>
                        <div class="row">
                            <label for="mole" class="col-sm-3 col-form-label"><b>MOLES :</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Moles" name="moles">
                            </div>
                            <label for="voice" class="col-sm-3 col-form-label"><b>VOICE :</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Voice" name="voice">
                            </div>
                            <label for="burn_marks" class="col-sm-3 col-form-label"><b>BURN MARKS:</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Burn Marks" name="burn_marks">
                            </div>
                            <label for="deformity" class="col-sm-3 col-form-label"><b>DEFORMITY :</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Deformity" name="deforms">
                            </div>
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                                <button style="background-color: #3480eb; color: white;width:95.4%;height:5%;padding:40px,40px;border:1px solid;border-radius: 6px;" type="submit" name="submit"> SUBMIT DETAILS</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#profile-img-tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#profile-img").change(function() {
            readURL(this);
        });

    </script>
    <?php
    if(isset($_POST['submit'])){
 $fir_number=$_POST['fir_no'];
 $fir_date=$_POST['fir_date'];

 $files = $_FILES['file'];
 $filename = $files['name'];
 $fileerror = $files['error'];
 $filetmp = $files['tmp_name'];
 $fileext = explode('.',$filename);
 $filecheck = strtolower(end($fileext));
 $fileextstored = array('png','jpg','jpeg');
 
 $aadhar=$_GET['aadhar'];

 // echo $aadhar;

 $name=$_POST['name'];
 $age=$_POST['age'];
 $gender=$_POST['gender'];
 $designation=$_POST['desig'];
 $place_missing=$_POST['p_missing'];
 $date_missing=$_POST['d_missing'];
 $address=$_POST['address'];
 $mobile_number=$_POST['con_no'];

 $complexion=$_POST['complexion'];
 $weight=$_POST['weight'];
 $height=$_POST['height'];
 $build=$_POST['build'];
 $eye=$_POST['eye'];
 $hair=$_POST['hair'];

 $moles=$_POST['moles'];
 $voice=$_POST['voice'];
 $burn_marks=$_POST['burn_marks'];
 $deformity=$_POST['deforms'];

 $host="localhost";
 $dbusername="root";
 $dbpassword="";
 $dbname="trackchild";
 $con=new mysqli($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_errno());
}
else{
      if(in_array($filecheck, $fileextstored)){

		      	$destinationfile='uploaded/'.$filename;
		      	move_uploaded_file($filetmp, $destinationfile);
		      	$q="INSERT INTO imgupload(fir_no,fir_date,image,dep_aadhar_no) VALUES('$fir_number','$fir_date','$destinationfile','$aadhar');";
		      	//$query = mysqli_query($con,$q);
		      	if (mysqli_query($con, $q)) {
    echo "image record created successfully";
              } else {
    echo "Error: " . $q. "<br>" . mysqli_error($con);
      }

		      }else{
		      	echo "Extension is not matching";
		      }

      if(!empty($name)&&!empty($age)&&!empty($gender)&&!empty($designation)&&!empty($place_missing)&&!empty($date_missing)&&!empty($address)&&!empty($mobile_number)){
           $SELECT ="SELECT fir_no From general_info Where fir_no= ? Limit 1";
        $INSERT="INSERT Into general_info(name,age,gender,address,designation,mob_no,missing_date,missing_place,fir_no) values(?,?,?,?,?,?,?,?,?)";
      
        $stmt=$con->prepare($SELECT);
        $stmt->bind_param("i",$fir_number);
        $stmt->execute();
        $stmt->bind_result($fir_number);
        $stmt->store_result();
        $rnum=$stmt->num_rows;
        if($rnum==0){
            $stmt->close();
            $stmt=$con->prepare($INSERT);
            $stmt->bind_param("sisssissi",$name,$age,$gender,$address,$designation,$mobile_number,$date_missing,$place_missing,$fir_number);
            $stmt->execute();
             echo "general_info registered successfully";
        }
        else{
            echo "already registered general_info";
        }
        $stmt->close();
      }
    else{
        echo "all fields are recquired for general information";
    }
    
    if(!empty($moles)&&!empty($voice)&&!empty($burn_marks)&&!empty($deformity)){
        $SELECT ="SELECT fir_no From identification_marks Where fir_no= ? Limit 1";
        $INSERT="INSERT Into identification_marks(burn_mark,moles,voice,if_any_deformities,fir_no) values(?,?,?,?,?)";
       
        $stmt=$con->prepare($SELECT);
        $stmt->bind_param("i",$fir_number);
        $stmt->execute();
        $stmt->bind_result($fir_number);
        $stmt->store_result();
        $rnum=$stmt->num_rows;
        if($rnum==0){
            $stmt->close();
            $stmt=$con->prepare($INSERT);
            $stmt->bind_param("ssssi",$burn_marks,$moles,$voice,$deformity,$fir_number);
            $stmt->execute();
             echo "identification_marks registered successfuly";
        }
        else{
            echo "already registered identification_marks ";
        }
        $stmt->close();
      }
    else{
        echo "all fields are recquired for identification_marks";
    }
    if(!empty($complexion)&&!empty($weight)&&!empty($height)&&!empty($build)&&!empty($eye)&&!empty($hair)){
        $SELECT ="SELECT fir_no From physical_features Where fir_no= ? Limit 1";
        $INSERT="INSERT Into physical_features(complexion,eye,hair,	build,height,weight,fir_no) values(?,?,?,?,?,?,?)";
       
        $stmt=$con->prepare($SELECT);
        $stmt->bind_param("i",$fir_number);
        $stmt->execute();
        $stmt->bind_result($fir_number);
        $stmt->store_result();
        $rnum=$stmt->num_rows;
        if($rnum==0){
            $stmt->close();
            $stmt=$con->prepare($INSERT);
            $stmt->bind_param("ssssiii",$complexion,$eye,$hair,$build,$height,$weight,$fir_number);
            $stmt->execute();
            echo "physical_features registered successfully";
        }
        else{
            echo "already registered";
        }
        $stmt->close();
      }
    else{
        echo "all fields are recquired for physical features";
        die();
    }      
       $con->close();
 }}
?>
</body>

</html>
