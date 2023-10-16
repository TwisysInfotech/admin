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
    
        $Material_Code=$_POST['Material_Code'];
        $Material_Description=$_POST['Material_Description'];
        $Material_Type=$_POST['Material_Type'];
        $Base_Unit_Of_Measure=$_POST['Base_Unit_Of_Measure'];
        $Alternate_Units_Of_Measure=$_POST['Alternate_Units_Of_Measure'];
        $Conversion_Factors=$_POST['Conversion_Factors'];
        $Weight_And_Volume=$_POST['Weight_And_Volume'];
        $Stock_Keeping_Unit=$_POST['Stock_Keeping_Unit'];
        $Costing_Information=$_POST['Costing_Information'];
        $Safety_Stock_Level=$_POST['Safety_Stock_Level'];
        $Reorder_Point=$_POST['Reorder_Point'];
        $Lead_Time=$_POST['Lead_Time'];
        $Storage_Conditions=$_POST['Storage_Conditions'];
        $Quality_Control_Information=$_POST['Quality_Control_Information'];

     $sql = "INSERT INTO material_master (Material_Code,Material_Description,Material_Type,Base_Unit_Of_Measure,
     Alternate_Units_Of_Measure,Conversion_Factors,Weight_And_Volume,Stock_Keeping_Unit,Costing_Information,Safety_Stock_Level,
   	Reorder_Point,Lead_Time,Storage_Conditions,Quality_Control_Information) 
        VALUES ('$Material_Code','$Material_Description','$Material_Type',' $Base_Unit_Of_Measure','$Alternate_Units_Of_Measure',
        ' $Conversion_Factors','$Weight_And_Volume','$Stock_Keeping_Unit','$Costing_Information', '$Safety_Stock_Level',
        '$Reorder_Point',' $Lead_Time','$Storage_Conditions','$Quality_Control_Information')";
           
    if (mysqli_query($conn, $sql)) {
      $success='  Material Master Data Add Successfully '; 
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
                      <h4>Assign_Project</h4>
                    </div>
                    <div class="card-body">
                      <div class="row">
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-6 col-form-label">Material_Code</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" required1="" name="Material_Code" >
                          <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-6 col-form-label">Material_Description</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" required1="" name="Material_Description">
                          <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-6 col-form-label">Material_Type </label>
                        <div class="col-sm-6">
                        <select class="form-control" name="Material_Type">
                              <option>Material-1</option>
                                  <option>Material-2</option>
                                      <option>Material-3</option>
                                      </select>
                          <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-6 col-form-label">Base_Unit_Of_Measure </label>
                        <div class="col-sm-6">
                        <select class="form-control" name="Base_Unit_Of_Measure">
                              <option>Measure-1</option>
                                  <option>Measure-2</option>
                                      <option>Measure-3</option>
                                      </select>
                          <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-6 col-form-label">Alternate_Units_Of_Measure</label>
                        <div class="col-sm-6">
                        <select class="form-control" name="Alternate_Units_Of_Measure">
                              <option>Measure-1</option>
                                  <option>Measure-2</option>
                                      <option>Measure-3</option>
                                      </select>
                          <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-6 col-form-label">Conversion_Factors</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" required1="" name="Conversion_Factors">
                          <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                     
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-6 col-form-label">Weight_And_Volume</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" required1="" name="Weight_And_Volume">
                          <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-6 col-form-label">Stock_Keeping_Unit</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" required1="" name="Stock_Keeping_Unit">
                          <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-6 col-form-label">Costing_Information</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" required1="" name="Costing_Information">
                          <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-6 col-form-label">Safety_Stock_Level</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" required1="" name="Safety_Stock_Level">
                          <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-6 col-form-label">Reorder_Point</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" required1="" name="Reorder_Point">
                          <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-6 col-form-label">Lead_Time</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" required1="" name="Lead_Time">
                          <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-6 col-form-label">Storage_Conditions</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" required1="" name="Storage_Conditions">
                          <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-6 col-form-label">Quality_Control_Information</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" required1="" name="Quality_Control_Information">
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
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Table With State Save</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                            <thead class="" >
                                <th >S_No</th>
                                <th >Material_Code</th>      
                                <th >Material_Description</th>   
                                <th >Material_Type</th>   
                                <th >Base_Unit_Of_Measure</th> 
                                  <th >Action</th>            
                            </thead>
                            <tbody>
                            
                            
                            <?php
    $a=1;
        $sql = mysqli_query($conn,"select * from  Material_Master"); 
        while($row = mysqli_fetch_array($sql)){
           
       
    ?>
                            <tr>
                            <td><?php echo $a++;?></td>     
                                <td><?php echo $row['Material_Code'];?></td>
                                <td><?php echo $row['Material_Description'];?></td>    
                                <td><?php echo $row['Material_Type'];?></td>     
                                <td><?php echo $row['Base_Unit_Of_Measure'];?></td>     

                                <td style="">
                                <div >
                                    <a href="Material_Master_Edit.php?id=<?php echo $row['Material_Code'];?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Edit</a>
                                    <a href="Material_Master_Delete.php?id=<?php echo $row['Material_Code'];?>" class="btn btn-icon icon-left btn-danger"  title="Click To Delete" onclick="return confirm('Are you sure you want to delete this item?')"><i class="fas fa-times"></i> Delete</a>
                              </div></td>  
                                                 </tr>
                        <?php }  ?>
                            </tbody>
                        </table></div></div></div></div></div>
          </div>
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