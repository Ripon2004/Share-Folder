<!doctype html>
<!-- Simple File Upload Challenge For Noob,
if You Have Brain, Then Use it -->    
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>File Upload Challenge, By Black_Phish</title>
    <meta charset="UTF-8">
<meta name="description" content="Establishing friendship for the sake of Allah and enmity for that.">
<meta name="keywords" content="Black_Phish,Ummah Cyber Mujahideen,Mujahid,Me Black_Phish,MCA-BD,Muslim Cyber Army-BD">
<meta name="author" content="BLACK_PHISH">
  </head>
  <body style="background-image:url('https://i.pinimg.com/originals/80/6a/e9/806ae94cc5957cd2b3c636bc0cf84076.gif');background-repeat:no-repeat;background-size:cover;">
  <div class="container mt-3">
    <div class="card">
    <div class="card-header bg-success">
    <h2><center class="text-light">File Uploader</center></h2>
    </div>
    <div class="card-body">
  <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="file" class="form-control" id="exampleInputEmail1" name="up" required>
    <small id="emailHelp" class="form-text text-muted">Select your uploaded file & submit the form</small>
</div>
<input type="submit" class="btn btn-success">
    <?php
   if(isset($_FILES['up'])){
   $name = $_FILES['up']['name'];
   if(preg_match('(.jpg|.jpeg|.png|.gif)',strtolower($name))){
   //echo "File Upload Done";
   $contenttype = $_FILES['up']['type'];
   $type = explode("/", $contenttype)[1];
   if(move_uploaded_file($_FILES["up"]["tmp_name"],$name.".".$type)){
   echo "<br><a href='./".$name.".".$type."'>Uploaded Done!</a>";
   }else{
   echo "Upload Failed";
   }
   }else{
   echo "<br>Upload jpg,jpeg,png and gif files";
   }
   }?>
  </form> 
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <br>
      <br>
      <center class="text-light">© Copyright 2020 | Black_Phish</center>
        <br>
          <br>
            <br>
              <br>
  </body>
</html>
