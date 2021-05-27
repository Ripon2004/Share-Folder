<!doctype html>
<!-- 
Don't Harm Any Data... Just Upload A Text File, & Put A Text: Hacked By YourSelf.
Don't Harm Any Data, or Do Harm site You Proof You Are Real Skiddos.
Simple File Upload Challenge For Noob,
if You Have Brain, Then Use it -->    
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>File Upload Challenge, Level: 3</title>
    <meta charset="UTF-8">
<meta name="description" content="Establishing friendship for the sake of Allah and enmity for that.">
<meta name="keywords" content="Black_Phish,Ummah Cyber Mujahideen,Mujahid,Me Black_Phish,MCA-BD,Muslim Cyber Army-BD">
<meta name="author" content="BLACK_PHISH">
  </head>
  <body style="background-image:url('https://i.pinimg.com/originals/80/6a/e9/806ae94cc5957cd2b3c636bc0cf84076.gif');background-repeat:no-repeat;background-size:cover;">
<!---
/*
This is a Hint For Noob :
	
File Extension Check Filter [Low Lebel]
Image File Validation [Good]
File Mime Type Detected : True
Shell Code Block: True
Small & Big File Check: True
*/
-->
  <div class="container mt-3">
    <div class="card">
    <div class="card-header bg-success">
    <h2><center class="text-light">File Uploader</center></h2>
    </div>
    <div class="card-body">
  <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="file" class="form-control" id="exampleInputEmail1" name="up" accept="image/*" required>
    <small id="emailHelp" class="form-text text-muted">Select your uploaded file & submit the form<exit;ll>
</div>
<input type="submit" class="btn btn-success">
    <?php
   if(isset($_FILES['up'])){
   $checker = preg_match('(<?php|echo|print|eval|getcwd|scandir|system|putenv|show_source|exec|shell_exec|proc_open|passthru|set_time_limit|ini_restore|mysql_list_dbs|ini_alter|pfsockopen|openlog|syslog|symlink|mb_send_mail|virtual|apache_setenv|apache_note|apache_getenv|escapeshellcmd|link|chgrp|popen|base64_decode)',strtolower(file_get_contents($_FILES["up"]["tmp_name"])),$matches);
   if($checker){
   print_r($matches);
   echo "<br>Melicious File Detected! File Not Uploaded!";
   exit;
   }
   $name = $_FILES['up']['name'];
   $size = getimagesize($_FILES["up"]["tmp_name"]);
   if(!$size){
   echo "<br>Upload Real Image & Photo!";
   exit;
   }
   if($_FILES["up"]["size"] > 5000000){
   echo "<br>Upload File Size is Big.!";
   exit;
   }
   if($_FILES["up"]["size"] < 50000){
   echo "<br>Upload File Size is Small!";
   exit;
   } if(preg_match('(.jpg|.jpeg|.png|.gif)',strtolower($name))){
   //echo "File Upload Done";
   $contenttype = $_FILES['up']['type'];
   $type = explode("/", $contenttype)[0];
   if($type == "image") {
   $type = explode("/", $contenttype)[1];
   }else{
   echo "<br>This is not image file, File Detected: ".$type;
   exit;
   }
   $name = explode(".",$name)[0];   
   if(move_uploaded_file($_FILES["up"]["tmp_name"],$name.'.'.explode("/", $contenttype)[1])){
   echo "<br><a href='./".$name.'.'.explode("/", $contenttype)[1]."'>Uploaded Done!</a>";
   }else{
   echo "<br>File Upload Failed!";
   }
   }else{
   echo "<br>Upload jpg,jpeg,png and gif type files";
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
