<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/all.min.css">
  <script src="./js/jquery.js"></script>
  <title>Admin </title>
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
    $(document).ready(function(){
      $("#myInputs").on("keyup",function(){
        var value = $(this).val().toLowerCase();
        $("#myTables tr").filter(function(){
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    $(document).ready(function(){
      $("#myInput1").on("keyup",function(){
        var value = $(this).val().toLowerCase();
        $("#myTable1 tr").filter(function(){
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    $(document).ready(function(){
      $("#myInput2").on("keyup",function(){
        var value = $(this).val().toLowerCase();
        $("#myTable2 tr").filter(function(){
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    $(document).ready(function(){
      $("#myInput3").on("keyup",function(){
        var value = $(this).val().toLowerCase();
        $("#myTable3 tr").filter(function(){
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
</head>
<body>