<?php
include_once("../Model/ABKezelo.php");

if(isset($_POST['email']) and isset($_POST['jelszo']))
{
  $email = $_POST['email'];
  $jelszo = $_POST['jelszo'];
  ABKezelo::Connenct();
  $a = ABKezelo::Email_Jelszo_Check($email, $jelszo);
  if(Count($a)>0)
  {
    $_SESSION['userid']=$a[0]['id'];
    //include_once('../index.php');
    header("Location: ../index.php?oldal=profilszerkeszto" );
  }
  else
  {
    echo "Nem sikerult belépni!";
    //session_unset(); 
  }
}
else
{
  echo "Nem sikerult belépni!";
  //session_unset(); 
}
?>


