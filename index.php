<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
          <img src="bg.jpg" class="b">
         
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>REPUBLIC BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="logo.png" class="img-fluid pt-2">
              </div>
            </div>
            <p class="p">  Steps to transfer money between two customers :
</p>
                <p class="p1">
                  <br> 1. Create a user
                  <br> 2. Make a Transcation 
                  <br> 3. Click Transt then choose the Reciever 
                  <br> 4. Enter the amount
                  <br> 5. After end of transcation you can see your transfer history.
                  </p>
                  <br>
                  <br style = "line-height:225px;">
                  <br>
                  
            <div class="row activity text-center">
                  <div class="col-md act">
                    <br>
                    <a href="createuser.php"><button>Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021 . Made by <b>RUPESH JADHAV</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>