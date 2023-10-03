<?php
require_once( $_SERVER['DOCUMENT_ROOT']."/CS/db/sessiondb.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class rep</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-center">
      <!-- <div class="position-absolute top-0 start-50 translate-middle"> -->
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            
        Class form table data. Welcome <?php echo $user['name'];?>
        </a>

        <!-- <div class="position-absolute top-0 start-50 translate-middle">  Class form table data. Welcome <?php echo $user['name'];?></div>  -->

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          
        </ul>


      </div>
    </div>
  </header>

<?php
$number = mysqli_query(
  $connection,
  "SELECT * FROM `students`"
);

$getnumber = mysqli_num_rows($number);
?>
  
<p> The number of students is <?php echo $getnumber;?></p>
<div class="container-fluid">

  <table class="table table-bordered" id="studentTable">
    <thead>
      <tr>
        <th>Student Names</th>
        <th>Student Registration Numbers</th>
      </tr>
      <?php
  $fetchStudents = mysqli_query(
    $connection,
    "SELECT * FROM `students` ORDER BY `id` DESC"
  );
  while($allposts = mysqli_fetch_array($fetchStudents))
  {
  //get user who posted
  $postownerid = $allposts['id'];
  $getuser = mysqli_query(
      $connection,
      "SELECT * FROM `students` WHERE `id` = '$postownerid'"
  );
  $postStudent = mysqli_fetch_array($getuser);
  
  
  ?>
    </thead>
    <tbody>
      <tr>
        
        <td><?php echo $allposts['name'];?></td>
        <td><?php echo $allposts['regNo'];?></td>
        
      </tr>
      <?php
  }
?>
    </tbody>
    
    
  </table>
</div>
</div
</div>
<input type="button" class="btn btn-primary" onclick="PrintTable('studentTable');" value="Print"/>
<script src="extensions/print/bootstrap-table-print.js">

function PrintTable(studentTable) {
            var printdata = document.getElementById(studentTable);
            newwin = window.open("");
            newwin.document.write(printdata.outerHTML);
            newwin.print();
            newwin.close();
        }
  
</script>
<!-- <script>
   function PrintTable(studentTable) {
            var printdata = document.getElementById(studentTable);
            newwin = window.open("");
            newwin.document.write(printdata.outerHTML);
            newwin.print();
            newwin.close();
        }
  
</script>
     -->
</body>
</html>