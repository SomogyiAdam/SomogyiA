<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>somafood</title>
</head>
<body>

    <h1> Ciao!</h1>
    <form action="index.php" method="POST">
        <input type="number" name="number1"><br>
        <input type="submit" value="send">
    </form>
</body>
</html>

<?php

if(isset($_POST['number1']))
{
    $ho=$_POST['number1'];

if(!empty($ho))
{
if($ho<=0){
        echo("<h2>szilárd.</h2>");
}
else if($ho<100){
    echo("folyékony.");
}
else{
    echo("légnemű.");
}
}
else{
    echo("Nem írtál semmit!");
}  

}
#$nev="Somogyi Ádám";
#echo("<h2>Ciao: $nev Have a nice day!:)</h2>");
?>