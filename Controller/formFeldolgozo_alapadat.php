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
        $sqlAdatok = ABKezelo::AlapadatokBetolt($_SESSION["id"]);
        if (count($sqlAdatok) < 1) {
            unset($sqlAdatok);
            $sqlAdatok["hiba"] = "Nincs felhasznalo belepve!";
        }
        echo json_encode($sqlAdatok);
    } 
    else if($muvelet == "profile")
    {
        ABKezelo::Connenct();
        $sqlAdatok = ABKezelo::AlapadatokBetolt($_POST['userid']);
        if (count($sqlAdatok) < 1) {
            unset($sqlAdatok);
            $sqlAdatok["hiba"] = "Nincs ilyen felhasznalo!";
        }
        echo json_encode($sqlAdatok);
    }
    else if ($muvelet == "mentes") 
    {
        
        if(isset($_POST['email']) and isset($_POST['vnev']) and isset($_POST['knev']) and isset($_POST['unev']) and isset($_POST['orszag']) and isset($_POST['telepules']) and isset($_POST['irsz']) and isset($_POST['szuletesidatum']))
        {
            $data = [
                "email" => $_POST['email'],
                "vnev" => $_POST['vnev'],
                "knev" => $_POST['knev'],
                "unev" => $_POST['unev'],
                "orszag" => $_POST['orszag'],
                "telepules" => $_POST['telepules'],
                "irsz" => $_POST['irsz'],
                "szuletesidatum" => $_POST['szuletesidatum']
            ];
            
            ABKezelo::Connenct();
            ABKezelo::AlapadatokMentes($_SESSION["id"], $data);
            $sqlAdatok["siker"] = "Sikerült a mentes!";
        }
        else
        {
            $sqlAdatok["hiba"] = "Nem sikerült a mentes!";
            echo "hiba";
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

?>