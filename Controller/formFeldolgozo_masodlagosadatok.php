<?php
include_once("../Model/ABKezelo.php");

$_SESSION["id"]=1;

$sqlAdatok;
unset($sqlAdatok);


if(isset($_POST['muvelet']))
{

    $muvelet = $_POST['muvelet'];
    if ($muvelet == "lekeres") 
    {
        $email = "teszt@teszt.hu";
        ABKezelo::Connenct();
        $sqlAdatok = ABKezelo::MasodlagosadatokBetolt($_SESSION["id"]);
        if (count($sqlAdatok) < 1) {
            unset($sqlAdatok);
            $sqlAdatok["hiba"] = "Nincs felhasznalo belepve!";
        }
        echo json_encode($sqlAdatok);
    } 
    else if ($muvelet == "mentes") 
    {
        
        if(isset($_POST['allampolgarsag']) and isset($_POST['bemutatkozas']))
        {
            $data = [
                "allampolgarsag" => $_POST['allampolgarsag'],
                "bemutatkozas" => $_POST['bemutatkozas']
            ];
            
            ABKezelo::Connenct();
            ABKezelo::MasodlagosadatokMentes($_SESSION["id"], $data);
            $sqlAdatok["siker"] = "Sikerült a mentes!";
        }
        else
        {
            $sqlAdatok["hiba"] = "Nem sikerült a mentes!".$_POST['allampolgarsag'].$_POST['bemutatkozas'];
        }
        echo json_encode($sqlAdatok);
    } 
    else 
    {
        unset($sqlAdatok);
        $sqlAdatok["hiba"] = "Hibas paraméter! [" . $muvelet . "]";
        echo json_encode($sqlAdatok);
    }
}
else
{
    unset($sqlAdatok);
    $sqlAdatok["hiba"] = "Hiányzó paraméter! [muvelet]";
    echo json_encode($sqlAdatok);
}