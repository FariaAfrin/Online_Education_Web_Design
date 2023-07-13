



<html>

<head>
    
<title>Online Education | Faria Afrin</title>
  <style>
body{  background-color:#333;}

      nav{
    width:100%;
    height:80px;
    background-color:#0005;
    line-height:85px;
}
nav ul{
    float:right;
    margin:0;
    margin-right:1.9rem;
}
nav ul li{
    list-style-type:none;
    display:inline-block;
}
nav ul li a{
    text-decoration:none;
    color:#fff;
    padding:20px;
}
img{
    width:14%;
    margin-left:1.9rem;
    margin-top:-4%;
}
nav ul li:hover{
    background-color: coral;
    color: #000;
    font-weight:bold;
    font-size:1.2rem;

}



footer{
    background-color:#0005;
    color:#fff;
    text-align:center;
    padding:1.2rem;
    margin-top:33.5%;
}
  
    
<!-- signin style.css -->
{
margin: 0 ;
padding:0  ;
font-family: sans-serif  ;
/* background:url(bg.jpg) no-repeat ; */
background-image: url("bg.jpg");
/* background-repeat: no-repeat; */
background-size: cover ;
}

.login-box{
width: 280px;
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
color:white;
}

.login-box  h1{
float:left;
font-size:40px;
border-bottom:6px solid  #4caf51;
margin-bottom:50px;
padding:13px 0;
}

.text-box{
width:100%;
overflow:hidden;
font-size:20px;
padding:8px 0;
margin:8px 0;
border-bottom:1px solid #4caf50;
opacity: 0.7;

}
.text-box input{
    border:none;
    outline:none;
    background:none;
    color:white;
    font-size:45 px;
    width:80 px;
    float:left;
    margin:0 10px;
}
.btn{
width:100%;
background:none;
border:2px solid #4caf50;
color:white;
padding:5px;
font-size:18px;
cursor:pointer;
}

</style>
</head>

<body>

<nav>
        <img src="images/ca.ico"  class="img" alt="logo">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="signin.php">SIGN IN</a></li>
            <li><a href="regi.php">REGISTRATION</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>
    </nav>

    <div class="login-box">
        <h1>Log In</h1>
        <div class="text-box">
            <input type="text" placeholder="Username" name="" value="">
        </div>
        <div class="text-box">
         
            <input type="password" placeholder="Password" name="" value="">
        </div>
        <input class="btn" type="button" name="" value="Sign In">
    </div>



    <footer>
    <p>Copyright &copy 2019-<?php echo date('Y'); ?> ~ Faria Afrin | All Rights Reserved. </p>
</footer>

</body>



</html>



