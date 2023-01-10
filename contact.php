<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $address=$_POST['address'];
    $col=$_POST['col'];
    try{
        $dsn = 'mysql:dbname=porttry2;host=localhost';
        $user = 'root';
        $password ='nagoya60809';
        $db= new PDO($dsn, $user, $password);
        $sql = 'insert into users(name,address,col) values(?, ?, ?)';
        $stmt = $db->prepare($sql);
        $stmt->execute(array($name, $address, $col));
        $stmt = null;
        $db =null;
    }catch(PDOExcept $e){
        echo $e->getMessage();
        exit;
    }
}       

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ポートフォリオ</title>
  <link rel="stylesheet" type="text/css" href="port.css">
</head>
<div class="backgruoud"> 
<header>

    <div class="header-left">
      
    </div>
    <div class="header-right">
        <div class="one-header">
          <a href="port.php" class="Message">Message</a>
        </div>
        <div class="one-header">    
          <a href="about.php" class="About">About</a>  
        </div>
        <div class="one-header">              
          <a class="Works">Works</a>
        </div>
        <div class="one-header">     
          <a href="contact.php" class="Contact">Contact</a>
        </div>
    </div>      
</header>  
<body>
<div class="main">
    <div class="Entire-form">        
        <div class="Contitle">
           <p>Contact</p>
        </div>        
        <div class="in-form">    
            <form action="" method="POST">
                <p>Name</p>
            <input type="text" name="name">
                <p>Email</p>
            <input type="text" name="address">
                <p>Message</p>
            <textarea name="col"></textarea>
            
            <input type="submit" name="submit" value="Send">
            </form>
        </div>
    </div>
</div>    
</div>  
</body>
</html>