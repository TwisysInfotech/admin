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
                  <form class="needs-validation col-lg-12" novalidate="">
                    <div class="card-header">
                      <h4>Form Title</h4>
                    </div>
                    <div class="card-body">
                      <div class="row">
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-3 col-form-label">Your Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" required="">
                          <div class="invalid-feedback">
                          Required!!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" required="">
                          <div class="invalid-feedback">
                            Email is invalid.
                          </div>
                        </div>
                      </div>
                      <div class="form-group row  col-lg-6">
                        <label class="col-sm-3 col-form-label">Subject</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control">
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