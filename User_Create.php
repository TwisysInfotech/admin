<?php include('common/session.php');?>
<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  
  <!-- General CSS Files -->
  <?php include('common/link.php');?>
  <!-- General CSS Files -->

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $Employee_Name=$_POST['Employee_Name'];
      $User_Name=$_POST['User_Name'];
      $Password=$_POST['Password'];

     $sql = "INSERT INTO user_create (Employee_Name,User_Name,Password) 
        VALUES ('$Employee_Name','$User_Name','$Password')";
           
    if (mysqli_query($conn, $sql)) {
      $success='  User Create Successfully'; 
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
    }
    ?>
</head>

<body>
  
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
    
       <nav class="navbar navbar-expand-lg main-navbar sticky">
      <?php include('common/navbav.php');?>
      </nav>
      <div class="main-sidebar sidebar-style-2">
      <?php include('sidebar.php');?> 
      
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
          <!-- Main Content -->
  <div class="row">
              
              <div class="col-12 col-md-12 col-lg-12">
               
                <div class="card ">
                <?php include('common/message.php');?>
                  <form class="needs-validation col-lg-12" method="post" novalidate="">
                    <div class="card-header">
                      <h4>User_Create</h4>
                    </div>
                    <div class="card-body">
                      <div class="row">
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-4 col-form-label">Employee Name</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" required="" placeholder="Employee Name"name="Employee_Name" >
                          <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-4 col-form-label">User Name</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" required="" placeholder="User Name"name="User_Name" >
                          <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                        <input type="password" class="form-control" required="" placeholder="Password"name="Password">
                          <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                    </div></div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div></div>
        </section>
    
      </div>
      <!-- Main Content -->
          </div>
        </section>
        <?php include('common/settingSidebar.php');?>
      </div>
       <?php include('common/footer.php');?>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
</html>