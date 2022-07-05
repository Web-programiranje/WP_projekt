<?php

class Recommend extends Dbh{
    
    protected function setRecommendation($uname, $rname, $location, $review, $image) {
        $stmt = $this->connect()->prepare('INSERT INTO recommendations (recommendations_user, recommendations_name, recommendations_location, recommendations_review, recommendations_image) VALUES (?, ?, ?, ?, ?);');
        
        if(!$stmt->execute(array($uname, $rname, $location, $review, $image))) {
            $stmt = null;
            header ("Location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }
}