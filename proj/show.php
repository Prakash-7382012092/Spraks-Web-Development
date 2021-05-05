<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav>
        <div class="logo">
            <img src="images/logo.png" height="70px" />
            <p>Navbar</p>
        </div>
        <ul>
            <li><a href="first.php"class="active">Home</a></li>
       <li><a href="second.php">Registration</a></li>
       <li><a href="fourth.php">Transfer Money</a></li>
            <li><a href="show.php">portfolio</a></li>
            <li><a href="fifth.php">contact</a></li>

        </ul>
    </nav>
    <div class="row">
    <div class="container">
    <div class="col-md-10">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Account</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $conn=mysqli_connect("localhost","root","","banking") or die("query unsucessfull");
  $sql5="SELECT * FROM visitor";
  $res=mysqli_query($conn,$sql5) or die("query unsucessfull");
  while($row=mysqli_fetch_assoc($res)){
  ?>
    <tr>
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['phone'];?></td>
      <td><?php echo $row['amount'];?></td>
    </tr>
    <?php } ?>
    
  </tbody>
</table>
</div>
</div>
</div>
</body>
</html>