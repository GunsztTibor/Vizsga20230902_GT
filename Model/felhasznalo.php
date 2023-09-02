<?php
class Felhasznalo
{
    //Adattagok
    private int $id;
    private string $emailCim;
    private string $jelszo;
    private string $teljesNev;
    private string $szuletesiHely;
    private DateTime $szuletesiDatum;
    private string $allampolgarsag;
    private string $bemutatkozas;
    private $hobbik = array();
    private $telefonszamok = array();
    private $intezmenyek = array();
    private $kepek = array();

    //Konstruktor
    public function __construct($emailCim, $jelszo, $teljesNev, $szuletesiHely, $szuletesiDatum, $id=null)
    {
        $this->setId($id);
        $this->setEmailCim($emailCim);
        $this->setJelszo($jelszo);
        $this->setTeljesNev($teljesNev);
        $this->setSzuletesiHely($szuletesiHely);
        $this->setSzuletesiDatum($szuletesiDatum);
    }

    //Tulajdonsagok
    public function getId(): int
    {
        return $this->id;
    }
    public function getEmailCim(): string
    {
        return $this->emailCim;
    }
    public function getJelszo(): string
    {
        return $this->jelszo;
    }
    public function getTeljesNev(): string
    {
        return $this->teljesNev;
    }
    public function getSzuletesiHely(): string
    {
        return $this->szuletesiHely;
    }
    public function getSzuletesiDatum(): DateTime
    {
        return $this->szuletesiDatum;
    }
    public function getAllampolgarsag(): string
    {
        return $this->allampolgarsag;
    }
    public function getBemutatkozas(): string
    {
        return $this->bemutatkozas;
    }
    public function getHobbik(): array
    {
        return $this->hobbik;
    }
    public function getTelefonszamok(): array
    {
        return $this->telefonszamok;
    }
    public function getIntezmenyek(): array
    {
        return $this->intezmenyek;
    }
    public function getKepek(): array
    {
        return $this->kepek;
    }
    public function setId($id)
    {
            $this->id = $id;
    }
    public function setEmailCim($emailCim)
    {
        if (strlen($emailCim) == 0) {
            throw new InvalidArgumentException;
        } else {
            $this->emailCim = $emailCim;
        }
    }
    public function setJelszo($jelszo)
    {
        if (strlen($jelszo) == 0) {
            throw new InvalidArgumentException;
        } else {
            $this->jelszo = $jelszo;
        }
    }
    public function setTeljesNev($teljesNev)
    {
        if (strlen($teljesNev) == 0) {
            throw new InvalidArgumentException;
        } else {
            $this->teljesNev = $teljesNev;
        }
    }
    public function setSzuletesiHely($szuletesiHely)
    {
        if (strlen($szuletesiHely) == 0) {
            throw new InvalidArgumentException;
        } else {
            $this->szuletesiHely = $szuletesiHely;
        }
    }
    public function setSzuletesiDatum($szuletesiDatum)
    {
        $this->szuletesiDatum = $szuletesiDatum;
        /*if (strlen($szuletesiDatum) == 0) {
            throw new InvalidArgumentException;
        } else {
            $this->szuletesiDatum = $szuletesiDatum;
        }*/
    }
    public function setAllampolgarsag($allampolgarsag)
    {
        if (strlen($allampolgarsag) == 0) {
            throw new InvalidArgumentException;
        } else {
            $this->allampolgarsag = $allampolgarsag;
        }
    }
    public function setBemutatkozas($bemutatkozas)
    {
        if (strlen($bemutatkozas) == 0) {
            throw new InvalidArgumentException;
        } else {
            $this->bemutatkozas = $bemutatkozas;
        }
    }
    public function setHobbik($hobbik)
    {
        $this->hobbik = $hobbik;
        /*if (strlen($szuletesiDatum) == 0) {
            throw new InvalidArgumentException;
        } else {
            $this->szuletesiDatum = $szuletesiDatum;
        }*/
    }
    public function setTelefonszamok($telefonszamok)
    {
        $this->telefonszamok = $telefonszamok;
        /*if (strlen($szuletesiDatum) == 0) {
            throw new InvalidArgumentException;
        } else {
            $this->szuletesiDatum = $szuletesiDatum;
        }*/
    }
    public function setIntezmenyek($intezmenyek)
    {
        $this->intezmenyek = $intezmenyek;
        /*if (strlen($szuletesiDatum) == 0) {
            throw new InvalidArgumentException;
        } else {
            $this->szuletesiDatum = $szuletesiDatum;
        }*/
    }
    public function setKepek($kepek)
    {
        $this->kepek = $kepek;
        /*if (strlen($szuletesiDatum) == 0) {
            throw new InvalidArgumentException;
        } else {
            $this->szuletesiDatum = $szuletesiDatum;
        }*/
    }

}