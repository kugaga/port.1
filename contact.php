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
          <p class="About">About</p>  
      </div>
      <div class="one-header">              
          <p class="Works">Works</p>
      </div>
      <div class="one-header">     
          <p class="Contact">Contact</p>
      </div>
    </div>      
</header>  
<body>
<div class="main">
    <div class="Entire-form">        
        <div class="Contitle">
           <p>Contact</p>
        </div>        
        <div class="-form">    
            <form action="portsent.php" method="post">
                <p>Name</p>
            <input type="text" name="name">
                <p>Email<p>
            <input type="text" name="email">
                <p>Message</p>
            <textarea name="body"></textarea>
            
            <input type="submit" value="Send">
            </form>
        </div>
    </div>
</div>    
</div>  
</body>
</html>