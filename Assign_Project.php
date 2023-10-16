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
        $Project_Name=$_POST['Project_Name'];
        $Project_Folder=$_POST['Project_Folder'];
        if(!is_dir($Project_Folder)) mkdir($Project_Folder);
        foreach($_FILES['files']['name'] as $i => $name)
      {
            if(strlen($_FILES['files']['name'][$i]) > 1)
            {  move_uploaded_file($_FILES['files']['tmp_name'][$i],$Project_Folder."/".$name);
            }
        }
     $sql = "INSERT INTO assign_project (Employee_Name,Project_Name,Project_Folder) 
        VALUES ('$Employee_Name','$Project_Name','$Project_Folder')";
           
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
      <?php  include('common/navbav.php');?>
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
                  <form class="needs-validation col-lg-12" method="post" enctype="multipart/form-data">
                    <div class="card-header">
                      <h4>Assign_Project </h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group row ">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-3 col-form-label">Employee Name</label>
                        <div class="col-sm-4">
                        <select class="form-control" name="Employee_Name">     
                        <?php
                        $sql = mysqli_query($conn,"SELECT *FROM user_create "); 
                        while($row = mysqli_fetch_array($sql)){
                        ?>
                        <!-- <option value=""s>Select Employee</option> -->
                        <option value=<?php echo $row['Employee_Name'];?>><?php echo $row['Employee_Name'];?></option>
                        <?php } ?>
                        </select>      
                          <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row ">
                      <div class="col-sm-1"></div>
                        <label class="col-sm-3 col-form-label">Project Name</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" required="" placeholder="Project Name"name="Project_Name">
                          <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row ">
                      <div class="col-sm-1"></div>
                      <label class="col-sm-3 col-form-label">Project Folder With Name</label><br><br>
                        <div class="col-sm-4">
                        <input type="text" class="form-control"  name="Project_Folder"></div>
                        <div class="col-sm-4">     
                           <input type="file" class="form-control" Id="files"  multiple directory="" webkitdirectory="" mozdirectory=""  name="files[]">
                          </div>     
                        <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                    </div>
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