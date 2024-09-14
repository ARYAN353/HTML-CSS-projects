<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
#main{
    z-index: -1;
    background-color: white;
    margin-top:400px;
    position: absolute;
    float: center;
    height: 1250px;
    width: 1250px;
    margin-left: 126px;

}
h1{
    margin-top: -120px;
    margin-left: 125px;
    position: relative;
    font-size: 40px;
    font-weight: 400;
    color: #fff;
    font-family: "Rubik",sans-serif;
}
#collap{
    margin-top: 440px;
    margin-left: 126px;
    height:100px;
    width: 1250px;
    position: relative;
    font-size: 20px;
    font-weight: 400;
    color: black;
    background-color: white;
    font-family: "Rubik",sans-serif;
}
#main1{
background-color: white;
float: center;
height: 700px;
width: 1100px;
position: relative;
margin: 70px;
}
form{
    font-family: "Rubik",sans-serif;
    color: #808080;
}
p{
        font-size: 15px;
        font-family: "Rubik",sans-serif;
        color: #808080;
}
.input{
    height: 50px;
    width: 520px;
    font-family: "Rubik",sans-serif;
    color: #808080;
    
} 
#send{
    text-align: center;
    background-color: #1ea69a;
    height: 53px;
    border: 0px;
    width: 150px;
    color: white;
    font-size: 15px;
    font-family: "Rubik",sans-serif;
} 
.label{
    position: absolute;
    top: 1px;
    right: 440px;
    font-size: 15px;
    font-family: "Rubik",sans-serif;
    color: #808080;
} 
.an{
    position: absolute;
    text-decoration-line: none;
    top: 30px;
    right: 390px;
    font-size: 15px;
    font-family: "Rubik",sans-serif;
    color: #808080;   
}
i{
    font-size: 10px;
    font-family: "Rubik",sans-serif;
    color: #808080;   
}
.label1{
    position: absolute;
    top: 70px;
    right: 440px;
    font-size: 15px;
    font-family: "Rubik",sans-serif;
    color: #808080;
} 
.an1{
    position: absolute;
    text-decoration-line: none;
    top: 95px;
    right: 390px;
    font-size: 15px;
    font-family: "Rubik",sans-serif;
    color: #808080;   
}
.label2{
    position: absolute;
    top: 130px;
    right: 455px;
    font-size: 15px;
    font-family: "Rubik",sans-serif;
    color: #808080;
} 
.an2{
    position: absolute;
    text-decoration-line: none;
    top: 155px;
    right: 385px;
    font-size: 15px;
    font-family: "Rubik",sans-serif;
    color: #808080;   
}
.label3{
    position: absolute;
    top: 190px;
    right: 440px;
    font-size: 15px;
    font-family: "Rubik",sans-serif;
    color: #808080;
} 
.an3{
    position: absolute;
    text-decoration-line: none;
    top: 215px;
    right: 315px;
    font-size: 15px;
    font-family: "Rubik",sans-serif;
    color: #808080;   
}
.label4{
    position: absolute;
    top: 250px;
    right: 422px;
    font-size: 15px;
    font-family: "Rubik",sans-serif;
    color: #808080;
} 
.an4{
    position: absolute;
    text-decoration-line: none;
    top: 275px;
    right: 100px;
    font-size: 15px;
    font-family: "Rubik",sans-serif;
    color: #808080;   
}

</style>
</head>
<body bgcolor="whitesmoke">

<img src="banner.jpg" height="300px" width="101%" style="filter:brightness(40%); margin: -8px; z-index:-1;">

<h1>Contact</h1>

<div id="collap"><?php include 'middle.php';?></div><br><br><br><br>
<?php include 'menu.php';?>
<div id="main"><div id="main1">
     <form id="usrform">
    <p>Name</p>
    <input type="text" name="username" placeholder="Your Name" class="input">
    <br>
    <p>Email</p>
    <input type="text" name="email_id" placeholder="Your Email" class="input">
    <br>
    <p>Phone Number</p>
    <input type="text" name="phoneno" placeholder="Your Phone" class="input">
    <br>
    <p>Message</p>
    <textarea rows="6" cols="50" name="message" placeholder="Your Message" class="input"></textarea>
    <br><br>
    GDPR Agreement *
    <br><br>
    <input type="checkbox" name="check">I consent to having this website store my submitted information so they<br> 
    &nbsp;&nbsp;&nbsp; can respond to my inquiry.
    <br><br><br>
    <input type="submit" value="Send Message" id="send">
  </form>
  <br><br>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114312.50877234389!2d80.26834223702242!3d26.44715662895882!
  2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c4770b127c46f%3A0x1778302a9fbe7b41!2sKanpur%2C%20Uttar%20Pradesh!5e0!3m2!
  1sen!2sin!4v1645262520082!5m2!1sen!2sin" width="1110" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  <span class="label">Phone</span><br>
  <a href="tel:+123-456-789" class="an">+123-456-789</a>
  <i style="font-size:22px;position: absolute;top: -2px;right: 500px;" class='fas'>&#xf879;</i><br>



  <span class="label1">Mobile</span><br>
  <a href="tel:+133-456-787" class="an1">+133-456-787</a>
  <i style='font-size:28px; position: absolute;top: 60px;right: 500px;' class='fas'>&#xf3cd;</i><br>



  <span class="label2">Fax</span><br>
  <a href="tel:+122-456-788" class="an2">+122-456-788</a>
  <i style='font-size:28px; position: absolute;top: 120px;right: 500px;' class='fas'>&#xf1ac;</i><br>



  <span class="label3">Email</span><br>
  <a href="mailto:sales@yourwebsite.com" class="an3">sales@yourwebsite.com</a>
  <i style='font-size:28px; position: absolute;top: 180px;right: 500px;' class='fas'>&#xf0e0;</i><br>



  <span class="label4">Address</span><br>
  <a class="an4">3015 Grand Ave, Coconut Grove, Merrick Way, FL 12345</a>
  <i style='font-size:28px; position: absolute;top: 240px;right: 500px;' class='fas'>&#xf3c5;</i><br>

  
  
 </div>
    
   
    </div>   
</div>
</body>
</html>
