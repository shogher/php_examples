<!DOCTYPE html>
<html>
  <head>
<link rel="stylesheet" href="css/libs/bootstrap.css" type="text/css" >
    <style>
    .form-inline .form-control {
      width: 70px; 
    }
    </style> 
  </head>
  <body>
    <form action="check.php" method="post">
      <div class="form-group">
        <div class="form-inline">
          <input hidden type="number">
        </div>
        <?php
            require("functions.php");
            echo drawInput(3, 3);
            echo changeImage("photos");
        ?>
        <div class="form-inline">
          D/Summ <input type='number' class='form-control' name='result[]'></br>
          Max <input type='number' class='form-control' name='result[]'></br>
          T/Summ <input type='number' class='form-control' name='result[]'></br>
          <input class="btn btn-success" type="submit" value="Submit">
        </div>
      </div>
    </form>
  </body>
<html>
