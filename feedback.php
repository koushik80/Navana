<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="Koushik" content="NAVANA TRADING"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>NAVANA FEEDBACK</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300i,400,400i,500,600,700,800%7CLora:400,400i,700,700i" rel="stylesheet">
    <link rel = "stylesheet" href="fd.css">
</head>
<body>
  <div>
  <a class="nav-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
</div>
   <div class="container">
   <form method="post" action="fd_ac.php">
   <div class="heading">Feedback
 </div>
 <br/>
 <div class="main-content">
 <label for="name" id="name-label">Name</label>
 <input type="text" name="name" id="name" class="form-content" required placeholder="Write your name" />
 <label for="email" id="email-label">Email</label>
 <input type="email" name="email" id="email" class="form-content" required placeholder="Write your email" />
 <label for="phone" id="phone-label">Phone number </label>
 <input type="number" name="phone" id="phone" class="form-content" required placeholder="Enter your phone number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />  <br>
 <div>
 <p>What do you think about the quality of our service?</p>
 <div>
   <div class="pic">
   <img src="images/bd.png" alt=""> <br/>
    <input type="radio" name="quality" value="0">Bad
   </div>
   <div class="pic">
     <img src="images/ntrl.png" alt=""> <br/>
     <input type="radio" name="quality" value="1"> Okay
   </div>
   <div class="pic">
     <img src="images/gd.png" alt=""> <br/>
     <input type="radio" name="quality" value="2"> Good
   </div>
 </div><br/><br/>
 <p>Do you have any suggestion for us?</p>
 <textarea name=" suggestion" rows="8" cols="40"></textarea>

 <p>Please select your preferred contact method (Optional):</p>
 <label>
  <input type="radio" id="contactChoice1"
     name="contact" value="email">Email</label><br>
  <label>
 <input type="radio" id="contactChoice2"
     name="contact" value="phone">Phone</label><br>
 <label>
<input type="radio" id="contactChoice3"
     name="contact" value="mail">Mail</label>
 <div class="form-group">
<input class="form-control button" type="submit" name="submit" value="Send"> </div>
</form>
 </div>
</body>
</html>