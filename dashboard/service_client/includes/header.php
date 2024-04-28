<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/all.min.css">
  <script src="./js/jquery.js"></script>
  <title>Service Client</title>
  <style>
    body{
      font-family: Roboto;
      font-size: 15px;
      background-image: url(../assets/images/background.jpg) !important;
      background-size: cover !important;
      background-position: center !important;
      background-repeat: no-repeat;
      background-attachment: fixed;
      height: 100vh;
      padding-bottom: 100px !important;
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