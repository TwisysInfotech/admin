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
          
          <div class="col-12">
                <div class="">
                  <div class="card-header">
                    <h4 >Assign Project Status</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                            <thead class="" >
                                <th >S_No</th>
                                <th >Employee_Name</th> 
                                <th >Project_Name</th>   
                                <th >Project_Folder</th>      
                                  <th>Action</th>
                            </thead>
                            <tbody id="customer_product" >
                  
                            <?php
                        echo      $Employee_Name=$_SESSION['user']['Employee_Name'];
    $a=1;
    $sql = mysqli_query($conn,"SELECT * FROM assign_project WHERE Employee_Name='$Employee_Name'"); 
    while($row = mysqli_fetch_array($sql)){ 
       
    ?>
                              <?php echo $row['Project_Folder'];?>  
                         
                        <?php }  ?>
                            </tbody>
                        </table></div></div></div></div>
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