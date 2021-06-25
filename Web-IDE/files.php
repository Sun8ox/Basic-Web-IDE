<?php
?>

<style>
    body {
        margin: 0px;
        font-family: Poppins;

    }
    header {
        font-size: 40px;
    }
    .header {
        background-color: #8d9e9e;

    }
    a {
        color: black;
        text-decoration: none;
        background-color: lightgray;
        border-radius: 20px;
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
    }
    button {
        color: black;
        border-radius: 20px;
        border-style: solid;
        background-color: white;
        box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);7;
        font-size: 25px;
    }
    right {
        text-align: right;

    }
    file {
    font-size: 20px;

    }
    .footer {
        background: #e3e3e3;
        font-size: 25px;
    }
    input {
        resize: none;
        border-style: solid;
        border-radius: 10px;
        font-size: 25px;
    }


</style>

<body>
<div class="header">
<header>
    Select file:


</header>

</div>
<footer class="footer" id="footer">

    <form action="files.php" method="post">
        Create new file: &nbsp; <input type="text" name="filename" placeholder="Filename"> &nbsp;
        <button type="submit" onclick="location.reload();">Create</button>
    </form>

</footer>
<br>
<?php


if ($handle = opendir('files')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            echo "&nbsp; <file><a href='files/" . $file . "'>&nbsp;&nbsp;<i class='fas fa-file'></i>&nbsp;" . $file . "&nbsp;</a></file> &nbsp; - &nbsp; <a href='/Web-IDE/home.php?file=" . $file . "'>&nbsp;&nbsp;edit&nbsp;&nbsp;</a>"
               . " - <a href='remove.php?rem=" . $file . "'>&nbsp;&nbsp;Remove&nbsp;&nbsp;</a>"
                . "&nbsp;&nbsp;<br>";

        }
    }
    closedir($handle);
}



?>






<?php
include("red.php");
include("fonts.php");
include("head.php");


$filename = "files/" . $_POST["filename"];

$fileop = fopen($filename, w);

fclose($fileop);

?>
<br>


</body>


