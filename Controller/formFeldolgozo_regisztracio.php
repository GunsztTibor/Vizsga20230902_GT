<?php
include_once("../Model/ABKezelo.php");


if (isset($_POST['email']) and isset($_POST['jelszo']) and isset($_POST['vnev']) and isset($_POST['knev']) and isset($_POST['unev']) and isset($_POST['orszag']) and isset($_POST['telepules']) and isset($_POST['irsz']) and isset($_POST['szuletesidatum'])) {
    $data = [
        "email" => $_POST['email'],
        "jelszo" => $_POST['jelszo'],
        "vnev" => $_POST['vnev'],
        "knev" => $_POST['knev'],
        "unev" => $_POST['unev'],
        "orszag" => $_POST['orszag'],
        "telepules" => $_POST['telepules'],
        "irsz" => $_POST['irsz'],
        "szuletesidatum" => $_POST['szuletesidatum']
    ];

    ABKezelo::Connenct();
    ABKezelo::RegisztracioMentes($data);
    $sqlAdatok["siker"] = "Sikerült a mentes!";
} else {
    $sqlAdatok["hiba"] = "Nem sikerült a mentes!";
    echo "hiba";
}
echo json_encode($sqlAdatok);


?>