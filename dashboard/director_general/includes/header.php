<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./notify.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="../icons/css/all.min.css">
  <script src="./js/jquery.js"></script>
  <title>Director General</title>
  <style>
    body{
      font-family: Roboto;
      font-size: 15px;
      background-image: linear-gradient(rgba(6, 3, 131, 0.767),rgba(0, 0, 0, 0.644)),url(./image/preview.jpg);
      background-size: cover !important;
      background-position: center !important;
      background-repeat: no-repeat;
      background-attachment: fixed;
      height: 100vh;
      padding-bottom: 130px !important;
    }
  </style>
  <script>
    $(document).ready(function(){
      $("#myInput").on("keyup",function(){
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function(){
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
</head>
<body>