<?php
$file = 'files/' . $_GET["file"];

if (isset($_POST['text'])){


    file_put_contents($file, $_POST['text']);
}

?>

<style>
    body {
        margin: 0px;
        font-family: Poppins;
        background: #8d9e9e;
    }
    header {
        text-align: center;
    }
    .header {
        background-color: #8d9e9e;
        border-bottom-right-radius: 20px;
        border-bottom-left-radius: 20px;

    }

    a {
        color: black;
        text-decoration: none;
        background-color: #e0e0e0;
        border-radius: 20px;
        font-family: Ubuntu;
        font-size: 40px;
        box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);7;
    }
    bigtext {
        font-size: 30px;
    }
    textarea {
        resize: none;
        width: 100%;
        background-color: #f8f8f8;
        color: #73706a;
        font-family: Poppins;
        box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);7;
    }
    button {
        color: black;
        border-radius: 20px;
        border-style: solid;
        background-color: white;
        font-size: 25px;
        box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);7;
    }
    right {
        text-align: right;

    }

</style>
<div class="header">
<header>
    <a href="files.php">&nbsp;&nbsp;Open file&nbsp;&nbsp;
    </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="logout.php">&nbsp;&nbsp;Logout&nbsp;&nbsp;
    </a>


</header>
    <br>
</div>
<form action="home.php?file=<?php echo $_GET["file"];?>" method="post">
    <textarea cols="100" rows="30" class="textarea" id="text" name="text" ><?php
        echo file_get_contents($file);
        ?>


    </textarea>
    <br> <br><center>
    <button type="submit">&nbsp;&nbsp;&nbsp;<strong>Save&nbsp;&nbsp;&nbsp;</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <right>
            <button type="reset">&nbsp;&nbsp;&nbsp;<strong>Reset&nbsp;&nbsp;&nbsp;</button>
</form>
<meta name="viewport" content="width=device-width, initial-scale=1">



<?php
include("red.php");
include("head.php");

?>

