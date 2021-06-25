<?php

?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    <style>
    * {
        box-sizing: border-box;
        font-family: Ubuntu;
        font-size: 16px;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    body {
        background-color: #6db5cf;
        font-family: Ubuntu;
    }
    .login {
        width: 425px;
        background-color: #ffffff;
        box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
        margin: 150px auto;
        border-radius: 20px;


    }
    .login h1 {
        text-align: center;
        color: #5b6574;
        font-size: 24px;
        padding: 20px 0 20px 0;
        border-bottom: 1px solid #dee0e4;
    }
    .login form {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding-top: 20px;
    }
    .login form label {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50px;
        height: 50px;
        background-color: black;
        color: #ffffff;
    }
    .login form input[type="password"], .login form input[type="text"] {
        width: 310px;
        height: 50px;
        border: 1px solid #dee0e4;
        margin-bottom: 20px;
        padding: 0 15px;
        border-radius: 20px;
    }
    .login form input[type="submit"] {
        width: 100%;
        padding: 15px;
        margin-top: 20px;
        background-color: black;
        border: 0;
        cursor: pointer;
        font-weight: bold;
        color: #ffffff;
        transition: background-color 0.2s;
        border-bottom-right-radius: 20px;
        border-bottom-left-radius: 20px;
    }
    .login form input[type="submit"]:hover {
        background-color: gray;
        transition: background-color 0.2s;
    }
    button {
        border-radius: 20px;
        border-style: none;
        background: white;
        box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);7;
        font-size: 30px;
    }
    input {
        box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
        border-style: none;
        border-radius: 15px; 
        font-size: 20px;
    }
    strong {
        font-size: 25px;
    }


</style>



<body>



<center>
<form action="auth.php" method="post">

<div class="login">
    <br>
     <strong><i class="fas fa-user"></i> Username:<br><br></strong>
    <input name="username" placeholder="&nbsp;&nbsp;Username"><br><br>
    <strong><i class="fas fa-lock"></i> Password:<br><br></strong>
    <input name="password" type="password" placeholder="&nbsp;&nbsp;Password " required><br><br>
    <button type="submit">&nbsp;&nbsp;Login&nbsp;&nbsp;</button>
    <br> <br>&nbsp;
</div>

</form>


</body>

<?php
include("head.php");
include("fonts.php");
?>
