<!DOCTYPE html>
<html>
    <head>
        <title>Class form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>
<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        Class form
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          
        </ul>


      </div>
    </div>
  </header>
  <div class="container">
    <div class="row">
        <div class="col mt-2">
            <img src="" style="width:200px;" class="rounded-circle mx-auto d-block"/>
        </div>
        <form method = "POST" action = "lib/classreplogin.php">
 
         <div class="alert alert-info alert-dismissible fade show" role="alert">
            <p style="color:red;">

                <?php
                    echo $_GET['msg'];
                ?>
            </p>
            <p style="color:green;">

                <?php
                    echo $_GET['success'];
                ?>
            </p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        </div>
            
        <div class="mb-3">
            <label for="Email" class="form-label">Name</label>
            <input required type="text" name="name" class="form-control" id="name" placeholder="Enter your full names">
        </div>
        <div class="mb-3">
            <label for="registration" class="form-label">Registration Number</label>
            <input required type="text" name="regNo" class="form-control" id="email" placeholder="Enter your registration number"/>
        </div>
        <button type="submit" class="btn btn-primary" id="toastbtn">Submit</button>
    </form>
</div>
</div>

</body>
</html>