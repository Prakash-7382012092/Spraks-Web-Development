<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <div class="logo">
            <img src="images/logo.png" height="70px" />
            <p>Sparks Foundation</p>
        </div>
        <ul>
            <li><a href="first.php"class="active">Home</a></li>
       <li><a href="second.php">Registration</a></li>
       <li><a href="fourth.php">Transfer Money</a></li>
            <li><a href="show.php">portfolio</a></li>
            <li><a href="fifth.php">contact</a></li>

        </ul>
    </nav>
     
    <section>   
            
       <div class="center">         
			<img src="./images/logo.png" style="border-radius:10px;background-color:skyblue"class="avatar" alt="not found image">
			<h1>Transfer Money</h1>
			<form method="post">
				<div class="txt_field">
					<input type="text" required="" name="from">
					<span></span>
					<label>From ID</label>
				</div>

				<div class="txt_field">
					<input type="text" required="" name="to">
					<span></span>
					<label>To Id</label>
				</div>

				<div class="txt_field">
					<input type="text" required="" name="amount">
					<span></span>
					<label>Amount</label>
				</div>		
				<input type="submit" value="Transfer Money" name="update"><br>		
						
			</form>
			<!-- vreate here no... -->
		</div>
    </section>
    <?php
    if(isset($_POST['update'])){
        $from=$_POST['from'];
        $to=$_POST['to'];
        $amount=$_POST['amount'];
        echo "$from,$to,$amount";
        include 'move.php';
        $obj = new TransactionDemo();
        $obj->transfer($from, $to, $amount);
        
    }
    ?>
</body>
</html>