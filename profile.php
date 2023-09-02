
<!DOCTYPE html>
<html lang="hu">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vizsga</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
            <link rel="stylesheet" href="style.css">

    </head>

    <body>

<?php 
    include_once("Model/ABKezelo.php");

    $letezoProfile = false;
    if (isset($_GET['id'])) 
    {
        $userid = $_GET['id'];
        ABKezelo::Connenct();
        If(Count(ABKezelo::Id_Check($userid))>0)
        {
            $letezoProfile = true;
        }
    }
    
    if($letezoProfile)
    {
        include_once("View/AlapPHP/profileData.php");
    }
    else
    {
        include_once("View/AlapPHP/error.php");
    }
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="script.js"></script>
    
    </body>
</html>