<?php

// define variables and set to empty values
$nameErr =$l_nameErr= $mobileErr = $genderErr = $websiteErr=$dobErr=$relErr=$ageErr=$rescityErr = "";
$name=$l_name = $mobile = $gender = $comment = $website =$dob=$rel=$age=$rescity= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first_name"])) {
 $nameErr = "first name is required";
  } else {
    $name = test_input($_POST["first_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["last_name"])) {
    $l_nameErr = "last Name is required";
  } else {
    $l_name = test_input($_POST["last_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$l_name)) {
      $l_nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["dob"]))
      // the user's date of birth cannot be a null string
     { $dobErr= "You must supply a date of birth.";}
  // elseif (!preg_match("^([0-9]{2})/([0-9]{2})/([0-9]{4})$"));
  //         $formVars["dob"], $parts))
  //     // Check the format
  //     $errorString .=
  //       "The date of birth is not a valid date in the " .
  //       "format DD/MM/YYYY";
  if (empty($_POST["age"]))
      // the user's date of birth cannot be a null string
     { $ageErr= "please enter the age";}
  if (empty($_POST["rel"]))
  // the user's date of birth cannot be a null string
  {$relErr= "Please enter religion";}
  else {
    $rel = test_input($_POST["rel"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$rel)) {
      $relErr = "Only letters are allowed";
    }
  }
  if (empty($_POST["rescity"])) {
    $l_rescityErr = "last Name is required";
  } else {
    $rescity = test_input($_POST["rescity"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$rescity)) {
      $rescityErr = "Only letters are allowed";
    }
  }
  if (empty($_POST["mobile"])) {
    $mobileErr = "mobile number is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^([0-9]{10})$/",$mobile)) {
      $mobileErr = "Only letters are allowed";
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  }
   else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!doctype html>
<html lang="en">
 
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
<link href="css/bootstrap.css" rel="stylesheet">
    <title>Profile Builder</title>
    <style>
        .fg{
            width: 130px;
            color: whitesmoke;
            
        }
        .bwar:hover{
          background-color: red;
        }
        
        .error {color: #FF0000;}

    </style>
  </head>
  <body>
   <!-- first navbar -->
   <nav class="navbar navbar-expand-lg navbar-light nvh"style="background-color:darkgreen; height: 30px;">
    <div class="container-fluid">
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav"  style="padding-right:200px;">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link nvh" aria-current="page" href="member.html" style="color: aliceblue;"> &nbsp;TEST RESULTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nvh" aria-current="page" href="member.html" style="color: aliceblue;"> &nbsp;SAVED JOBS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nvh" aria-current="page" href="member.html" style="color: aliceblue;"> &nbsp;APPLIED JOBS</a>
          </li>


          <li class="nav-item">
            <a class="nav-link nvh" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-current="page" href="#" style="color: aliceblue;">PROFILE BUILDER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nvh"  data-bs-toggle="modal" data-bs-target="#exampleModal" aria-current="page" href="" style="color: aliceblue;" > &nbsp;PROFILR </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nvh" aria-current="page" href="member.html" style="color: aliceblue;"> &nbsp;LOGOUT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- second navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
       <img src="images/fmfg92mxthkzitxghxwr.png" style="padding-left: 180px;">
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav" style="padding-right: 200px;">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.html">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  active" aria-current="page" href="jobs.html">JOBS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  active" aria-current="page" href="#">DEPARTMENTALS CONTACTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  active" aria-current="page" href="FAQS.html">FAQS</a>
            </li>
          </ul>
        </div>
      </div>
      

  </div>
  <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
    </nav>
    <!-- nav and tabs -->
    <div  class="container"style="background-color: rgb(213, 218, 223); margin-top: 35px;">
    <h3 class="text-center">Profile Build</h3>
    <div class="container bg bg-light" style="border: 1px solid black;">
    <div class="container" style="background-color: white;">

      <ul class="nav nav-tabs bg bg-success" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link bwar fg" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
          
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link bg bwar fg" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Experience</button>


        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link bwar fg" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Academicac</button>
          
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link bwar fg" id="contact-tab" data-bs-toggle="tab" data-bs-target="#skill" type="button" role="tab" aria-controls="skill" aria-selected="false">Skill</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link bwar fg" id="contact-tab" data-bs-toggle="tab" data-bs-target="#training" type="button" role="tab" aria-controls="training" aria-selected="false">Training</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link bwar fg" id="contact-tab" data-bs-toggle="tab" data-bs-target="#certification" type="button" role="tab" aria-controls="cetfication" aria-selected="false">Certification</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link bwar fg" id="contact-tab" data-bs-toggle="tab" data-bs-target="#achievements" type="button" role="tab" aria-controls="achievements" aria-selected="false">Achievements</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link bwar fg" id="contact-tab" data-bs-toggle="tab" data-bs-target="#resreach" type="button" role="tab" aria-controls="resreach" aria-selected="false">Resreach Work</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link bwar fg" id="contact-tab" data-bs-toggle="tab" data-bs-target="#targetjob" type="button" role="tab" aria-controls="targetjob" aria-selected="false">Target Job</button>
          </li>
      </ul>

      <h6 class="mt-3 text text-success">Personal Information</h6>
      <hr>

      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                      
                            <label for="exampleInputEmail1" class="form-label mt-3">First Name</label>
              <input type="text" name="first_name" value="<?php echo $name;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <span class="error">* <?php echo $nameErr;?></span><br>
                            <label for="exampleInputEmail1" class="form-label mt-5">Gender</label>    
                  <select class="form-select " aria-label="Default select example">
                    <option selected>select gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                    <option value="3">Transgender</option>
                  </select>
                  <label for="exampleInputEmail1" class="form-label mt-2">Religion</label>
              <input type="Religion" name="rel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <span class="error">* <?php echo $relErr;?></span><br>
              <label for="exampleInputEmail1" class="form-label mt-4">Select Domicile</label>    
                  <select class="form-select" aria-label="Default select example">
                    <option selected>select domicile</option>
                    <option selected>Not Apllicable</option>
                    <option value="1">upper kohistan</option>
                    <option value="2">chitral</option>
                    <option value="3">punjab</option>
                    <optio4e3n value="4">kohistan</option>
                    <option value="5">pakpattan</option>
                  </select>
                  <label for="exampleInputEmail1" class="form-label mt-2">CNIC</label>
                <input type="CNIC" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">  
                <label for="exampleInputEmail1" class="form-label mt-2">Hafiz e quran</label>    
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select Option</option>
                    <option value="1">yes</option>
                    <option value="2">no</option>
                  </select>
                  <label class="form-check-label mt-5" for="exampleCheck1">Are you disable?</label>
                <input type="checkbox" class="form-check-input  " style="margin-top: 53px;" id="exampleCheck1">
                        <!-- </form>    -->
                    </div>
                    <div class="col-md-3">
                        <label for="exampleInputEmail1" class="form-label mt-3">Last Name</label>
              <input type="last name" name="l_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <span class="error">* <?php echo $l_nameErr;?></span><br>
              <label for="exampleInputEmail1" class="form-label mt-5">Martial Status</label>    
                  <select class="form-select " aria-label="Default select example">
                    <option selected>select statues</option>
                    <option value="1">Married</option>
                    <option value="2">Unmarried</option>
                  </select>
                  <label for="exampleInputPassword1" class="form-label mt-1">Mobile Number</label>
                <input type="number" name="mobile"class="form-control" id="exampleInputPassword1" placeholder="+92-312-4877906">
                <p>For Example +92-312-4877906</p>
                <span class="error">* <?php echo $mobileErr;?></span>
                <label for="exampleInputEmail1" class="form-label">Residential Country</label>    
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select Country</option>
                    <option selected>Pakistan</option>
                    <option value="1">INDIA</option>
                    <option value="2">CHINA</option>
                    <option value="3">UAE</option>
                    <option value="4">AMERICA</option>
                    <option value="5">TURKEY</option>
                  </select>
                  <label for="exampleInputEmail1" class="form-label" aria-placeholder="--Sellect Expiry--">Select CNIC Expiry</label>    
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select Expiry</option>
                    <option selected>2021</option>
                    <option value="1">2022</option>
                    <option value="2">2023</option>
                    <option value="3">2024</option>
                    <option value="4">2025</option>
                    <option value="5">2026</option>
                  </select>
                  <label for="exampleInputEmail1" class="form-label" aria-placeholder="Sellect">Ex-Service official</label>    
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select Ex-Service official</option>
                    <option selected>Yes</option>
                    <option value="1">No</option>
                  </select>
                  <label class="form-check-label mt-5" for="exampleCheck1">Are you Goverment Servent<br>Son/Daughter?</label>
                <input type="checkbox" class="form-check-input " id="exampleCheck1" style="margin-top: 20px; margin-right: 200px;">
                    </div>
                    <div class="col-md-3">
                        <!-- <form  action=""> -->
                            <label for="exampleInputEmail1" class="form-label mt-3">Date of birth</label><br>
                             <input type="date" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                             <span class="error">* <?php echo $dobErr;?></span>
                             <label for="exampleInputEmail1" class="form-label mt-5">Husband Name</label>
              <input type="Husband Nmae" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
              <label for="phone" class="form-label mt-1">Land Line</label>
                <input type="tel" name="phone"class="form-control" id="phone" placeholder="+92-312-4877906">
                <p>For Example +92-312-4877906</p>
                <label for="exampleInputEmail1" class="form-label">Residential City</label>
                <input type="residential city" name="rescity"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <span class="error">* <?php echo $rescityErr;?></span><br>
                <label class="form-check-label " style="margin-top: 100px;" for="exampleCheck1">Are you a Goverment official?</label>
                <input type="checkbox" class="form-check-input" style="margin-top: 105px;" id="exampleCheck1">
                        <!-- </form> -->
                    </div>
                    <div class="col-md-3">
                        <!-- <form action=""> -->
                            <label for="exampleInputEmail1" class="form-label mt-3">Age</label>
              <input type="number" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <span class="error">* <?php echo $ageErr;?></span><br>
              <label for="exampleInputEmail1" class="form-label mt-5">Father Name</label>
              <input type="first name" class="form-control" placeholder="Father Name" id="exampleInputEmail1" aria-describedby="emailHelp">
              <label for="exampleInputEmail1" class="form-label">Postal Address</label>
              <input type="first name" class="form-control" placeholder="House#133,Ali Block,Awan Town,Lah" id="exampleInputEmail1" aria-describedby="emailHelp">
              <label for="exampleInputEmail1" class="form-label mt-5">Nationality</label>    
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select Nationality</option>
                    <option value="1">pakistan</option>
                    <option value="2">uae</option>
                    <option value="3">overseas</option>
                  </select>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>

        <input type="submit" name="submit" value="Submit">  
      </form>


        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
        <div class="tab-pane fade" id="skill" role="tabpanel" aria-labelledby="skill-tab">...</div>
        <div class="tab-pane fade" id="training" role="tabpanel" aria-labelledby="training-tab">...</div>
        <div class="tab-pane fade" id="certification" role="tabpanel" aria-labelledby="certification-tab">...</div>
        <div class="tab-pane fade" id="achievements" role="tabpanel" aria-labelledby="achievements">
          <div class="table-responsive">
            <table class="table">
              <tr>
                <td>sahar</td>
                <td>From</td>
                <td>To</td>
                <td>Company Name</td>
                <td>Job Level</td>
                <td>Job Responsibility</td>
                <td>Action</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="resreach" role="tabpanel" aria-labelledby="resreach">...</div>
        <div class="tab-pane fade" id="targetjob" role="tabpanel" aria-labelledby="targetjob">...</div>
      </div>
      <div class="container-fluid mt-3">
          <label for="">Experience</label>
          <div class="text" style="height: 100px; width: 100%; border: 1px solid black;">
            
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <td>Position Title</td>
                  <td>From</td>
                  <td>To</td>
                  <td>Company Name</td>
                  <td>Job Level</td>
                  <td>Job Responsibility</td>
                  <td>Action</td>
                </tr>
              </table>
            </div>
            

          </div>

          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
            ADD
          </button>
      
           
      



    
      </div>
      
      </div>
      <button type="button" class="btn btn-success mt-3 ms-4 mb-3">Prev</button>
      <button type="button" class="btn btn-success mt-3 mb-3">Next</button>
    </div>
  </div>
<!-- modal -->
<div class="modal fade " id="exampleModalCenter" tabindex="-1"role="dialog" aria-labelledby="exampleModalLabelCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLongTitle" style="padding-right: 30px;">Add Job Information</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-4 ml-auto">
                  <form action="">
                      <label for="exampleInputEmail1" class="form-label mt-3">Position Title</label>
        <input type="first name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="col-md-4 ml-auto">
        <form action="">
            <label for="exampleInputEmail1" class="form-label mt-3">From</label>
<input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="col-md-4 ml-auto">
  <form action="">
      <label for="exampleInputEmail1" class="form-label mt-3">To</label>
<input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
    </div>
      </div>

      <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 ml-auto">
                <form action="">
                    <label for="exampleInputEmail1" class="form-label mt-3">Company Name</label>
      <input type="first name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-md-4 ml-auto">
      <form action="">
        <label for="exampleInputEmail1" class="form-label mt-3">select job level</label>    
<select class="form-select " aria-label="Default select example">
  <option selected>select job level</option>
  <option value="1">student</option>
  <option value="2">entry level</option>
  <option value="3">management</option>
</select>
</div>

<div class="col-md-4 ml-auto">
  <form action="">
  <label for="exampleInputEmail1" class="form-label mt-3">Country</label>    
<select class="form-select " aria-label="Default select example">
<option selected>select Country</option>
<option value="1">Pakistan</option>
<option value="2">Afghanistan</option>
<option value="3">America</option>
</select>
     
</div>

<div>
  <p style="padding-top: 10px;">Experience certificate</p>
  <form>
    <div class="form-group">
      <label for="exampleFormControlFile1">Example file input</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
  </form>
</div>

<div>
  <p style="padding-top: 30px;">Job Responsibilities</p>
  
</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Save and Continue</button>
        <button type="button" class="btn btn-success close"data-bs-dismiss="modal" aria-label="Close">Exit</button>
      </div>
    </div>

    
  </div>
</div>
</div>
</div>
</div>
   <!-- footer -->
<div style="background-color: rgba(37, 35, 35, 0.89);min-height: 300px;">
  <div class="container">
    <div class="row">
        <div class="col-3">
       <img src="images/fmfg92mxthkzitxghxwr.png" style="padding-top: 50px;padding-left: 80px;">
        </div>
    <div class="col-3">
  <h4 style="color: white; padding-top: 50px;">Sitemap</h4>
  <br>
  
  <a href="home.html" style="color: aliceblue;">Home</a><br>
  <a href="jobs.html"style="color:aliceblue;">Jobs</a><br>
  <a href=""style="color: aliceblue;">Departmental Contacts</a><br>
  <a href="FAQS.html"style="color: aliceblue;">FAQS</a><br>
      </div>
    <div class="col-3">
      <h4 style="color: white; padding-top: 50px;">Career Center</h4>
      <br>
      
      <a href="" style="color: aliceblue;">Interview Guides</a><br>
      <a href=""style="color:aliceblue;">Job Search Guides</a><br>
      <a href=""style="color: aliceblue;">Career Development</a><br>
      <a href=""style="color: aliceblue;">Career News</a><br>
    </div>
    <div class="col-3">
      <h4 style="color: white; padding-top: 50px;">Contact Us</h4>
      <br>
    
      <a href="https://www.google.com/search?q=facebook.+login&rlz=1C1CHZN_enPK948PK948&oq=facebook.+login&aqs=chrome..69i57j0i512l2j0i22i30l2j69i60l3.9723j0j7&sourceid=chrome&ie=UTF-8" style="color: aliceblue;"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
      </svg>  &nbsp;&nbsp;  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
      </svg></a><br><br>
      <a href=""style="color:aliceblue;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
      </svg> &nbsp;&nbsp;+92 42 35880062 Ext:1222 </a><br>
      <a href=""style="color: aliceblue;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
      </svg>  &nbsp;&nbsp;jobsonlinesupport@punjab.gov.pk</a><br>
      
    </div>
      </div>
  
  </div>
  
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>