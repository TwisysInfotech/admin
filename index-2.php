<!DOCTYPE html>
<html lang="en">
<head>
  <title>File Editor</title>
  <link href="index.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.syncfusion.com/ej2/23.1.36/ej2-base/styles/material.css" rel="stylesheet">
  <link href="https://cdn.syncfusion.com/ej2/23.1.36/ej2-inputs/styles/material.css" rel="stylesheet">
  <link href="https://cdn.syncfusion.com/ej2/23.1.36/ej2-popups/styles/material.css" rel="stylesheet">
  <link href="https://cdn.syncfusion.com/ej2/23.1.36/ej2-buttons/styles/material.css" rel="stylesheet">
  
  
<script src="https://cdn.syncfusion.com/ej2/23.1.36/dist/ej2.min.js" type="text/javascript"></script>
<script src="https://cdn.syncfusion.com/ej2/syncfusion-helper.js" type ="text/javascript"></script>
  <link rel="stylesheet" href="style.css" />
  <script src="ace/ace.js"></script>
  <script src="ace/ext-modelist.js"></script>
  <script src="script.js"></script>
  
  <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$file=$_FILES['UploadFiles']['tmp_name'];
$image_name= addslashes($_FILES['UploadFiles']['name']);
$image_size= getimagesize($_FILES['UploadFiles']['tmp_name']);
move_uploaded_file($_FILES["UploadFiles"]["tmp_name"],"userimage/" . $_FILES["UploadFiles"]["name"]);
      }
?>
  <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $file=$_FILES['UploadFiles']['tmp_name'];
      $image_name= addslashes($_FILES['UploadFiles']['name']);
      move_uploaded_file($_FILES["UploadFiles"]["tmp_name"],"userimage/" . $_FILES["UploadFiles"]["name"]);
    
      
    }
    ?>
</head>
<body onload="load()" onmousedown="closeMenu()" oncontextmenu="event.preventDefault();event.stopPropagation();return false;">
  <div id="sidebar">
 
                        
                        <img id="save" onclick="save()" src="res/save.svg"/>
    <h1 id="file">Editor</h1>
    <p id="file1">Editor     
      
    <button onclick="newFile();" class="btn btn-primary">New File</button>

<form  id="UploadFiles" method="post" enctype="multipart/form-data">

  <input type="file" id="myfile" name="UploadFiles" >
    <button type="submit" class="btn btn-success">Sumbit</button></form>    </p>
    

    <div id="files"></div>
  </div>
  <div id="editor"></div>
  <div id="menu" onmousedown="event.stopPropagation();">
      <div onclick="newFile();">New</div>
      <div onclick="delFile();">Delete</div>
  </div>
  <script type="text/javascript">
  $('#myfile').change(function() {
  // submit the form 
      $('#UploadFiles').submit();
  });
</script>

  <script src="index.js" type="text/javascript"></script>
</body>
</html>
