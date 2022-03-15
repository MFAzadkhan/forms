<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
  initial-scale=1.0">
    <title>PHP opdracht - vertaler</title>
</head>
<body>
<form method="post" action="">
    Naam: <input type="text" name="name" placeholder=" your
  name" required /><br /> Land:
    <select name="Country">
        <option value="NL">Nederland</option>
        <option value="DE">Deutschland</option>
        <option value="EN">Engeland</option>
        <option value="FR">France</option>
        <option value="ES">España</option>
        <option value="IT">Italia</option>


    </select>
    <br />
    <input type="submit" name="submit" value="gegevens
 versturen" /> </form>

<?php
if(isset($_POST["submit"])){
    $name= $_POST["naam"];
    $land= $_POST ["land"];
    if($land=='NL'){
        echo 'Goedemorgen!'.$name;
    }
    elseif ($land=='DE'){
        echo'Guten Morgen!'.$name;
    }
    elseif ($land=='EN'){
        echo 'Good morning!'.$name;
    }
    elseif ($land=='FR'){
        echo 'Bon Jour!'.$name;
    }
    elseif($land=='ES'){
        echo 'Buenos días'.$name;
    }
    elseif($land=='IT'){
        echo 'Buon giorno'.$name;
    }


}