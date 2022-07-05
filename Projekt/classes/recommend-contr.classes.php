<?php

class RecommendContr extends Recommend {

    private $uname;
    private $rname;
    private $location;
    private $review;
    private $image;

    public function __construct($uname, $rname, $location, $review, $image) {
        $this->uname = $uname;
        $this->rname = $rname;
        $this->location = $location;
        $this->review = $review;
        $this->image = $image;
    }

    public function addRecommendation() {
        if($this->isEmptyInput() == false) {
            header("Location: ../recommend.php?error=emptyinput");
            exit();
        }
        
        $this->setRecommendation($this->uname ,$this->rname, $this->location, $this->review, $this->image);
    }

    private function isEmptyInput() {
        $result;
        if(empty($this->rname) || empty($this->location) || empty($this->review) || empty($this->image)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
}
