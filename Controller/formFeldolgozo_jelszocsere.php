<?php
include_once("../Model/ABKezelo.php");

$_SESSION['userid']=1;

$sqlAdatok;
unset($sqlAdatok);


if (isset($_POST['muvelet'])) {

    $muvelet = $_POST['muvelet'];
    if ($muvelet == "mentes") {

        if (isset($_POST['regijelszo']) and isset($_POST['ujjelszo'])) {
            $data = [
                "regijelszo" => $_POST['regijelszo'],
                "ujjelszo" => $_POST['ujjelszo']
            ];

            ABKezelo::Connenct();
            ABKezelo::jelszoadatokMentes($_SESSION['userid'], $data);

            $sqlAdatok["siker"] = "Sikerült a mentes!";

        } else {
            $sqlAdatok["hiba"] = "Nem jöttek át adatok";
            echo "hiba";
        }
        echo json_encode($sqlAdatok);
    } else {
        unset($sqlAdatok);
        $sqlAdatok["hiba"] = "Hibas paraméter! [" . $muvelet . "]";
        echo json_encode($sqlAdatok);
    }
} else {
    unset($sqlAdatok);
    $sqlAdatok["hiba"] = "Hiányzó paraméter! [muvelet]";
    echo json_encode($sqlAdatok);
}

?>