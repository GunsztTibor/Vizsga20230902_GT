<?php
include_once("DBException.php");

//AB konfiguracios beallitasok
$cfg = array();
$cfg["dbhost"] = "localhost";
$cfg["dbdb"] = "vizsga_webfejleszto_gt";
$cfg["port"] = 3306;
$cfg["user"] = "root";
$cfg["pass"] = "";

class ABKezelo
{
    private static PDO $con;

    public static function Connenct(): void
    {
        global $cfg;

        try {
            self::$con = new PDO("mysql:host={$cfg["dbhost"]};dbname={$cfg["dbdb"]}", $cfg["user"], $cfg["pass"]);
            self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            throw new DBException("Csatlakozas sikertelen!", $ex);
        }
    }

    public static function Id_Check(int $id): array
    {
        try {
            $sql =
                "SELECT * FROM felhasznalo WHERE `id`='" . $id . "' ";
            $result = self::$con->query($sql);
            $returnArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $result->closeCursor();
            return $returnArray;
        } 
        catch (Exception $ex) 
        {
            throw new DBException("A listazas sikertelen!", $ex);
        }
    }

    public static function Email_Jelszo_Check(string $email, string $jelszo): array
    {
        try {
            $sql =
                "SELECT * FROM felhasznalo WHERE email='" . $email . "' AND  jelszo='" . $jelszo . "'";
            $result = self::$con->query($sql);
            $returnArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $result->closeCursor();
            return $returnArray;
        } 
        catch (Exception $ex) 
        {
            throw new DBException("A listazas sikertelen!", $ex);
        }
    }

    public static function AlapadatokBetolt(string $id): array
    {
        try {
            $sql =
                "SELECT `id`, `email`, `vnev` , `knev`, `unev`, `orszag`, `telepules`, `irsz`, `szuletesidatum`, `allampolgarsag`, `bemutatkozas`, `kepId1`, `kepId2`, `kepId3`, `foprofilkepSzam`  
            FROM `felhasznalo` 
            WHERE `id`='" . $id . "' ";
            $result = self::$con->query($sql);
            $returnArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $result->closeCursor();
            return $returnArray;
        } 
        catch (Exception $ex) 
        {
            throw new DBException("A listazas sikertelen!", $ex);
        }
    }

    public static function AlapadatokMentes(int $id, array $a): void
    {
        try {
            $sql = "UPDATE `felhasznalo` SET ";
            $sql .= "`email`= '" . $a['email'] . "'," ;
            $sql .= "`vnev`= '" . $a['vnev'] . "'," ;
            $sql .= "`knev`= '" . $a['knev'] . "'," ;
            $sql .= "`unev`= '" . $a['unev'] . "'," ;
            $sql .= "`orszag`= '" . $a['orszag'] . "'," ;
            $sql .= "`telepules`= '" . $a['telepules'] . "'," ;
            $sql .= "`irsz`= '" . $a['irsz'] . "'," ;
            $sql .= "`szuletesidatum`= '" . date('Y-m-d',strtotime($a['szuletesidatum'])). "' ";
            $sql .= " WHERE `id` = '" . $id. "'" ;
            $prep = self::$con->prepare($sql);
            $prep->execute();
            $prep->closeCursor();
        } catch (Exception $ex) {
            throw new DBException("A modositas sikertelen!", $ex);
        }
    }

    public static function MasodlagosadatokBetolt(string $id): array
    {
        try {
            $sql =
            "SELECT `allampolgarsag`, `bemutatkozas`
            FROM `felhasznalo` 
            WHERE `id`='" . $id . "' ";
            $result = self::$con->query($sql);
            $returnArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $result->closeCursor();
            //
            return $returnArray;
        } 
        catch (Exception $ex) 
        {
            throw new DBException("A listazas sikertelen!", $ex);
        }
    }

    public static function MasodlagosadatokMentes(int $id, array $a): void
    {
        try {
            $sql = "UPDATE `felhasznalo` SET ";
            $sql .= "`allampolgarsag`= '" . $a['allampolgarsag'] . "'," ;
            $sql .= "`bemutatkozas`= '" . $a['bemutatkozas'] . "' " ;
            $sql .= " WHERE `id` = '" . $id. "'" ;
            $prep = self::$con->prepare($sql);
            $prep->execute();
            $prep->closeCursor();
        } catch (Exception $ex) {
            throw new DBException("A modositas sikertelen!", $ex);
        }
    }

    public static function jelszoadatokMentes(int $id, array $a): void
    {
        try {
            $sql = "UPDATE `felhasznalo` SET ";
            $sql .= "`jelszo`= '" . $a['ujjelszo'] . "'" ;
            $sql .= " WHERE `id` = '" . $id. "' AND `jelszo`= '". $a['regijelszo'] . "'" ;
            $prep = self::$con->prepare($sql);
            $prep->execute();
            $prep->closeCursor();
        } catch (Exception $ex) {
            throw new DBException("A modositas sikertelen!", $ex);
        }
    }

    public static function RegisztracioMentes(array $data): void
    {
        try {
            $sql = "INSERT INTO `felhasznalo` (`id`, `jelszo`, `email`, `vnev`, `knev`, `unev`, `orszag`, `telepules`, `irsz`, `szuletesidatum`, `allampolgarsag`, `bemutatkozas`, `kepId1`, `kepId2`, `kepId3`, `foprofilkepSzam`)
            VALUES (NULL, ". $data[`jelszo`].", ".  $data[`email`].", ".  $data[`vnev`].", ". $data[`knev`].", ".  $data[`unev`].", ". $data[`orszag`].", ". $data[`telepules`].", ". $data[`irsz`].", ". $data[`szuletesidatum`].",  NULL, '', NULL,NULL,NULL, 0)";
            $prep = self::$con->prepare($sql);
            $prep->execute($data);
            $prep->closeCursor();
        } catch (Exception $ex) {
            throw new DBException("A felhasznaló mentés sikertelen!", $ex);
        }
    }
}
