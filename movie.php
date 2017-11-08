<?php

class Movie
{
    public $name;
    public $describe;
    public $year;
    public $duration;
    
    public function __construct($nameC,$describeC,$yearC,$durationC)
    {
        $this->name = $nameC;
        $this->describe = $describeC;
        $this->year = $yearC;
        $this->duration = $durationC;
    }
    public function __destruct()
    {
        print 'destruction de' . $this->name;
    }
    public function getName()
    {
        echo $this->name;
    }
    public function setName($name = "")
    {
        $this->name = $name;
    }
    public function getDescribe()
    {
        echo $this->describe;
    }
    public function setDescribe($describe = "")
    {
        $this->describe = $describe;
    }
    public function getYear()
    {
        echo $this->year;
    }
    public function setYear($year = "")
    {
        $this->year = $year;
    }
    public function getDuration()
    {
        echo $this->duration;
    }
    public function setDuration($duration = "")
    {
        $this->duration = $duration;
    }
    
    }
    
    $movie = new Movie('MEGA SHARK VS. MECHA SHARK','Au large des côtes égyptiennes, un mégalodon réapparait du fond des mers. Pour contrer cette nouvelle menace, le gouvernement américain a mis au point un projet top-secret : la création d’un requin mécanique gigantesque doté des mêmes caractéristiques que le mégalodon. Un couple de scientifiques va devoir piloter ce sous-marin ultra sophistiqué pour faire face à ce terrible adversaire. Mais la bataille est loin d’être gagnée…','7 avril 2015','1h 25min');
    $movie->getName();
    