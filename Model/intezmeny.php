<?php
class Intezmeny
{
    // Adattagok
    private int $id;
    private string $nev;
    private DateTime $kezdes;
    private DateTime $befejezes;
    private string $megnevezes;

    public function __construct($nev, $kezdes, $befejezes, $megnevezes, $id)
    {
        $this->setNev($nev);
        $this->setKezdes($kezdes);
        $this->setBefejezes($befejezes);
        $this->setMegnevezes($megnevezes);
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getNev(): string
    {
        return $this->nev;
    }
    public function getKezdes(): DateTime
    {
        return $this->kezdes;
    }
    public function getBefejezes(): DateTime
    {
        return $this->befejezes;
    }
    public function getMegnevezes(): string
    {
        return $this->megnevezes;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNev($nev)
    {
        if (strlen($nev) == 0) {
            throw new InvalidArgumentException;
        } else {
            $this->nev = $nev;
        }
    }
    public function setKezdes($kezdes)
    {
        $this->kezdes = $kezdes;
        /*if (strlen($kezdes) == 0) {
            throw new InvalidArgumentException;
        } else {
            $this->kezdes = $kezdes;
        }*/
    }
    public function setBefejezes($befejezes)
    {
        $this->befejezes = $befejezes;
        /*if (strlen($befejezes) == 0) {
            throw new InvalidArgumentException;
        } else {
            $this->befejezes = $befejezes;
        }*/
    }
    public function setMegnevezes($megnevezes)
    {
        if (strlen($megnevezes) == 0) {
            throw new InvalidArgumentException;
        } else {
            $this->megnevezes = $megnevezes;
        }
    }

}