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
    private $user_id;



    public function __construct($id, $date, $bodyTemperature, $bloodPressure, $wellBeing, $comment, $image, $user_id)
    {
        $this->id = $id;
        $this->date = $date;
        $this->bodyTemperature = $bodyTemperature;
        $this->bloodPressure = $bloodPressure;
        $this->wellBeing = $wellBeing;
        $this->comment = $comment;
        $this->image = $image;
        $this->user_id = $user_id;
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

    public function getUserId() {
        return $this->user_id;
    }
}