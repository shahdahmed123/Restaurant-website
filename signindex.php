<!DOCTYPE html>
<html>
    <head>
    <meta charset="en"/>
        <meta name="description" content="Welcome to MAMMA MIA Restaurant and Cafe. 
        We wish you to spend a happy time in our private space. We are glad that you are our shining star on this short trip.">
        <title> Sign Up</title>
        <link rel="stylesheet" href="decoration.css">
        <link rel="stylesheet" href="sign_style.css">
        <style>
            
body{
    background-color: white;
}
.all{
    background-color: white;
    font-family: 'Courier New', Courier, monospace;

}
h1{
    text-align: center;
    padding: 15px;
    font-size: 45px;
    font-family:"Brush Script MT", cursive;
    color: rgb(235, 226, 107);
}
h3{
    text-align: center;
    font-size: 35px;
    font-family: Copperplate, Papyrus, fantasy;
    color: red;
}
form{
    width: 450px;
    margin-left: 100px;
}
form label{
    color:red;
    display: flex;
    margin-top: 20px;
    font-size: 45px;
    font-family:"Brush Script MT", cursive;
}
form input{
    width: 100%;
    padding: 7px;
    border: none;
    border: 1px solid rgba(158, 20, 20, 0.945)(128, 128, 128, 0.493);
    border-radius: 6px;
    outline: none;
}
input[type="submit"]{
    width: 250px;
    height: 25x;
    margin-top: 30px;
    
    background-color: rgb(235, 226, 107);
    color:rgb(0, 0, 0);
    font-size: 30px;
    font-family: Copperplate, Papyrus, fantasy;

}
p{
    text-align: center;
    padding-top: 20px;
    font-size: 15px;

}
.para-2{
    text-align: center;
    color: rgb(10, 41, 41);
    font-size: 300px;
    margin-top: -10px;
    color: black;
    background-color: rgba(227, 236, 102, 0.062);
    font-family: Copperplate, Papyrus, fantasy;
}
.para-2 a{
    color: rgb(1, 11, 12);
}
.sign-box{
    width: 900px;
    height: 900px;
    margin: auto;
    background-color: rgb(0, 0, 0);
    border-radius: 20px;
}
.first{
background-color: rgb(3, 0, 0);
}
h2{
color:rgb(65, 5, 5);
font-size: 45px;
font-family: Copperplate, Papyrus, fantasy; 
}


        </style>
</head>

<body>
    

<script>
            function myFunction(x) {
              x.style.background = "rgb(235, 226, 107)";
            }
            </script>
            























        <div class="all">
        <div class="second"></div>
        <div class="first" style="background-color: black;">
            <ul>
        <li><a  href="HOME .html.HTML" target="_self"> <font color="red"><strong><i> HOME</i></strong></font> </a></li>
        <li><a  href="MAMMA MIA MENU.HTML.html" target="_self"><font color="red">Restaurant menu</font> </a>  </li> 
        <li><a  href="appetizers.html" target="_self"> <font color="red">Appetizers& Sauces</font> </a></li>
        <li><a  href="sign.html" target="_self"> <font color="red">About us</font></a></li>
            </ul>
    </div>

    
    <br>
    <br>
    











    <br><br>
    


        <div class="sign-box">
            
            <h1> Sign Up </h1>

               <center> <h3>
                    It is free and only takes a minuts
                </h3></center>


                
                <form action="HOME .html.HTML" method="get" onsubmit="newFunction()">
                    <label> First Name</label>
                    <input type="text" placeholder="First Name" onfocusin="myFunction(this)" 
                    oninvalid="alert('You must fill out the form!');" name="fname" required>
                 
                    <label>Last Name</label>
                    <input type="text" placeholder=" Last Name" onfocusin="myFunction(this)"
                    name="lname" required>
                    <label> E-mail</label>
                    <input type="email" placeholder=" E-mail" onfocusin="myFunction(this)"
                    oninvalid="alert('You must fill out the form!');" name="email" required>
                    <label> Password</label>
                    <input type="password" placeholder="Password" onfocusin="myFunction(this)"
                    oninvalid="alert('You must fill out the form!');" name="pass" required>
                    
                    <br><br><br>
                     <center> <a href="HOME .html.HTML" target ="_blank"><input type="submit" value="Sign In"> </a></center>
                     
                </form>
               
            

        </div>

       <br>

      

    
    
    
  

    
</div>



<?php
        


   $CustomerName = $_POST["fname"];
   $LastName = $_POST["lname"];
   $CustomerEmail = $_POST["email"];
     $connection = new mysqli("localhost", "root", "", "restaurant");
 $stmt = $connection->prepare("insert into customer_info(Customer_Name,lastname,Customer_Email) values(?,?,?)" );
 $stmt->bind_param("sss",$CustomerName,$LastName, $CustomerEmail);
 $stmt->execute();


?>




<br><br><br>




</body>




</html>