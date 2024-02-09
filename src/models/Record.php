<?php

namespace models;

class Record {
    private $id;
    private $date;
    private $bodyTemperature;
    private $bloodPressure;
    private $wellBeing;
    private $comment;
    private $image;



    public function __construct($id, $date, $bodyTemperature = 0, $bloodPressure = 0, $wellBeing = 0, $comment = ' ', $image = [])
    {
        $this->id = $id;
        $this->date = $date;
        $this->bodyTemperature = $bodyTemperature;
        $this->bloodPressure = $bloodPressure;
        $this->wellBeing = $wellBeing;
        $this->comment = $comment;
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getBodyTemperature()
    {
        return $this->bodyTemperature;
    }

    /**
     * @return mixed
     */
    public function getBloodPressure()
    {
        return $this->bloodPressure;
    }

    /**
     * @return mixed
     */
    public function getWellBeing()
    {
        return $this->wellBeing;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }




}