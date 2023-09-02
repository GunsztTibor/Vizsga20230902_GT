<?php

include_once("model/abKezelo.php");
include_once("model/felhasznalo.php");
include_once("model/intezmeny.php");
include_once("model/kepek.php");

function FooldalView(){
    return include("view/fooldalView.php");
}
function RegisztracioView(){
    return include("view/regisztracioView.php");
}
function ProfilSzerkesztoView(){
    return include("view/profilSzerkesztoView.php");
}
function BejelentkezesView(){
    return include("view/bejelentkezesView.php");
}
function ErrorView(){
    return include("view/errorView.php");
}
function Main(){
    if(array_key_exists("oldal", $_GET)){
        $oldal = $_GET["oldal"];
    }
    else{
        $oldal = "fooldal";
    }

    switch($oldal){
        case "fooldal":
            return FooldalView();
            //break;

        case "regisztracio":
            return RegisztracioView();
            //break;

        case "profilszerkeszto":
            return ProfilSzerkesztoView();
            //break;

        case "bejelentkezes":
            return BejelentkezesView();
            //break;

            case "kilepes":
                //if (session_status() == PHP_SESSION_ACTIVE) { session_destroy(); }
                session_unset(); 
                return FooldalView();
                //break;

        default:
            return ErrorView();
            //break;
    }
}

return main();