Email
<input type="email" class="form-control" required="">
phone
<input type="text" class="form-control phone-number">
password
<input type="password" class="form-control pwstrength" data-indicator="pwindicator">
currency
<input type="text" class="form-control currency">
purchase-code
<input type="text" class="form-control purchase-code" >
date
<input type="text" class="form-control datepicker">
select
<select class="form-control">
    <option>Option 1</option>
    <option>Option 2</option>
    <option>Option 3</option>
  </select>
Checkbox
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
    <label class="form-check-label" for="inlineCheckbox1">1</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
    <label class="form-check-label" for="inlineCheckbox2">2</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
    <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
  </div>
  Textarea
  <textarea class="form-control"></textarea>
  File
  <input type="file" class="form-control">
  Auto indicator
  <?php

        $query = "select * from Table_name order by id desc limit 1";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result);
        $last_id = $row['id'];
        if ($last_id == "")
        {
            $customer_ID = "0001";
        }
        else
        {
            $customer_ID = $last_id + 1;
          }
      
    ?>
  Add Database
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $brands = $_POST['brands'];
        $sql = "INSERT INTO Table_name  (Table_name) VALUES ('$customer_ID')";
           
    if (mysqli_query($conn, $sql)) {
      $success='  Successfully Update'; 
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
    }
    ?>
Add Image
<!-- add to from --> enctype="multipart/form-data"

$file=$_FILES['img']['tmp_name'];
$image_name= addslashes($_FILES['img']['name']);
$image_size= getimagesize($_FILES['img']['tmp_name']);
move_uploaded_file($_FILES["img"]["tmp_name"],"image/" . $_FILES["img"]["name"]);
$location=$_FILES["img"]["name"];

<!-- end -->
<!-- add table -->
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
                                <th >Category</th>
                                <th >Image</th>           <th >Action</th>            
                            </thead>
                            <tbody>
                            
                      
                            <?php
    $a=1;
        $sql = mysqli_query($conn,"select * from  category "); 
        while($row = mysqli_fetch_array($sql)){
           
       
    ?>
                            <tr>
                                <td><?php echo $a;?></td>     
                                <td><?php echo $row['title'];?></td>     
                                 
                                <td style="">
                                <div >
                                    <a href="#" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Edit</a>
                                    <a href="#" class="btn btn-icon icon-left btn-danger"  title="Click To Delete" onclick="return confirm('Are you sure you want to delete this item?')"><i class="fas fa-times"></i> Delete</a>
                              </div></td>  
                     
                        
                            </tr>
                        <?php }  ?>
                            </tbody>
                        </table></div></div></div></div></div>
<!-- add table -->

<?php

$id=$_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM category where id='$id'");
    while($row = mysqli_fetch_array($result))
        {
            
            $cat=$row['title'];
            $img =$row['img'];
        }
    
?>



