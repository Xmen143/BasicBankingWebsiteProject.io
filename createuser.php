<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
</head>

<body>
  <style>
    background-colour:  lightblue;
    </style>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>

        <h2 class="text-center pt-4">Create a User</h2>
        <br>

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="data:image/png;base64,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" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>