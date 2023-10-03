<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill the form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<style>
        body {
        background-image: url("Untitled design.png");
        background-size: 1;
        }
        /* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
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
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
/* #snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: red;
  color: white;
  text-align: center;
  border-radius: 40px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
} */
#snack_bar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: white;
  text-align: center;
  border-radius: 40px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}
 #alert {
    visibility: hidden;
    /* min-width: 250px;
    margin-left: -125px;
    background-color: white;
    text-align: center;
    border-radius: 40px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px; */
}

#alert.show{
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
} 
#snack_bar.show{
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}



@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

#btn{
    position:absolute;
    bottom: 81px;
    right: 210px; 
}

#link{
    padding: 30px;
    width: 335px;
    border-radius: 50px;
}
</style>
</head>

<body>
  

<nav class="navbar navbar-expand-sm justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
      <!-- <a class="btn btn-success"onclick="document.getElementById('id01').style.display='block'" type="button" class="btn btn-info nav-link text-light">Tap to fill form</a> -->
      <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->

    </li>
  </ul>
</nav>

        <!-- <p style="color:red;">
            <?php
                echo $_GET['msg'];
            ?>
        </p>
        <p style="color:green">
            <?php
                    echo $_GET['success'];
            ?>
        </p> -->
    <!-- <div id= "alert" class="alert alert-warning alert-dismissible fade show" role="alert">
        <?php echo $_GET['msg']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> -->
<div id="id01" class="modal">
<div class="container">
        <div class="row">
       
            
            <form class="modal-content animate" method="POST" action="lib/form.php">
            <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            
            </div>
        
            <div class="mb-3">
                <label for="username" class="form-label">Enter your full names</label>
                <input required type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Enter your registration number</label>
                <input required type="text" name="regNo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <div class="mb-3">
                <label for="confirm password" class="form-label">Confirm registration number</label>
                <input required type="text" name="cregNo" class="form-control" id="password">
            </div>
            <button type="submit" name="upload" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div> 


</div>
<div id="btn">
<a id ="link"class="btn btn-success"onclick="document.getElementById('id01').style.display='block'" type="button" class="btn btn-info nav-link text-light">Tap to fill form</a>
</div>
<script>
  
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> 
<script>
  
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> 
<!-- <div id= "alert"><p style="color:red"><?php echo $_GET['msg']; ?></p></div> -->
<div id= "snack_bar"><p style="color:green"><?php echo $_GET['success']; ?></p><p style="color:red"><?php echo $_GET['msg']; ?></p></div>
<!-- <script>
    var x = document.getElementById("alert");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
</script> -->
<script>
    var x = document.getElementById("snack_bar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
</script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill the form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<style>
        body {
        background-image: url("Untitled design.png");
        background-size: 1;
        }
        /* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
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
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
/* #snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: red;
  color: white;
  text-align: center;
  border-radius: 40px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
} */
#snack_bar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: white;
  text-align: center;
  border-radius: 40px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}
 #alert {
    visibility: hidden;
    /* min-width: 250px;
    margin-left: -125px;
    background-color: white;
    text-align: center;
    border-radius: 40px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px; */
}

#alert.show{
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
} 
#snack_bar.show{
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}



@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

#btn{
    position:absolute;
    bottom: 81px;
    right: 210px; 
}

#link{
    padding: 30px;
    width: 335px;
    border-radius: 50px;
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-sm justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
      <!-- <a class="btn btn-success"onclick="document.getElementById('id01').style.display='block'" type="button" class="btn btn-info nav-link text-light">Tap to fill form</a> -->
      <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->

    </li>
  </ul>
</nav>
        <!-- <p style="color:red;">
            <?php
                echo $_GET['msg'];
            ?>
        </p>
        <p style="color:green">
            <?php
                    echo $_GET['success'];
            ?>
        </p> -->
    <!-- <div id= "alert" class="alert alert-warning alert-dismissible fade show" role="alert">
        <?php echo $_GET['msg']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> -->
<div id="id01" class="modal">
<div class="container">
        <div class="row">
       
            
            <form class="modal-content animate" method="POST" action="lib/form.php">
            <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            
            </div>
        
            <div class="mb-3">
                <label for="username" class="form-label">Enter your full names</label>
                <input required type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Enter your registration number</label>
                <input required type="text" name="regNo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <div class="mb-3">
                <label for="confirm password" class="form-label">Confirm registration number</label>
                <input required type="text" name="cregNo" class="form-control" id="password">
            </div>
            <button type="submit" name="upload" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div> 


</div>
<div id="btn">
<a id ="link"class="btn btn-success"onclick="document.getElementById('id01').style.display='block'" type="button" class="btn btn-info nav-link text-light">Tap to fill form</a>
</div>
<script>
  
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> 
<script>
  
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> 
<!-- <div id= "alert"><p style="color:red"><?php echo $_GET['msg']; ?></p></div> -->
<div id= "snack_bar"><p style="color:green"><?php echo $_GET['success']; ?></p><p style="color:red"><?php echo $_GET['msg']; ?></p></div>
<!-- <script>
    var x = document.getElementById("alert");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
</script> -->
<script>
    var x = document.getElementById("snack_bar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
</script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill the form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<style>
        body {
        background-image: url("Untitled design.png");
        background-size: 1;
        }
        /* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
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
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
/* #snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: red;
  color: white;
  text-align: center;
  border-radius: 40px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
} */
#snack_bar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: white;
  text-align: center;
  border-radius: 40px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}
 #alert {
    visibility: hidden;
    /* min-width: 250px;
    margin-left: -125px;
    background-color: white;
    text-align: center;
    border-radius: 40px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px; */
}

#alert.show{
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
} 
#snack_bar.show{
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}



@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

#btn{
    position:absolute;
    bottom: 81px;
    right: 210px; 
}

#link{
    padding: 30px;
    width: 335px;
    border-radius: 50px;
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-sm justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
      <!-- <a class="btn btn-success"onclick="document.getElementById('id01').style.display='block'" type="button" class="btn btn-info nav-link text-light">Tap to fill form</a> -->
      <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->
      <a type="button" class="btn btn-warning" href="classreplogin.php">Log-in For Class Rep</a>
    </li>
  </ul>
</nav>
        <!-- <p style="color:red;">
            <?php
                echo $_GET['msg'];
            ?>
        </p>
        <p style="color:green">
            <?php
                    echo $_GET['success'];
            ?>
        </p> -->
    <!-- <div id= "alert" class="alert alert-warning alert-dismissible fade show" role="alert">
        <?php echo $_GET['msg']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> -->
<div id="id01" class="modal">
<div class="container">
        <div class="row">
       
            
            <form class="modal-content animate" method="POST" action="lib/form.php">
            <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            
            </div>
        
            <div class="mb-3">
                <label for="username" class="form-label">Enter your full names</label>
                <input required type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Enter your registration number</label>
                <input required type="text" name="regNo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <div class="mb-3">
                <label for="confirm password" class="form-label">Confirm registration number</label>
                <input required type="text" name="cregNo" class="form-control" id="password">
            </div>
            <button type="submit" name="upload" class="btn btn-primary">Submit</button>
          

            </form>

        </div>
    </div>
</div> 


</div>
<div id="btn">
<a id ="link"class="btn btn-success"onclick="document.getElementById('id01').style.display='block'" type="button" class="btn btn-info nav-link text-light">Tap to fill form</a>
</div>
<script>
  
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> 
<script>
  
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> 
<!-- <div id= "alert"><p style="color:red"><?php echo $_GET['msg']; ?></p></div> -->
<div id= "snack_bar"><p style="color:green"><?php echo $_GET['success']; ?></p><p style="color:red"><?php echo $_GET['msg']; ?></p></div>
<!-- <script>
    var x = document.getElementById("alert");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
</script> -->
<script>
    var x = document.getElementById("snack_bar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
</script>
</body>
</html>