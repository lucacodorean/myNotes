<?php

class Task {
    protected $idAssignment;
    protected $description; 
    protected $status;
    protected $commments;

    public function __construct($id, $description, $status, $comments) {
        $this->description = $description;
        $this->status = $status;
        $this->comments = $comments;
        $this->idAssignment = $id;
    }

    public function setStatus($value) { 
        $this->status = $value;
    }

    public function getID() {
        return $this->idAssignment;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getTask() {
        return $this->description;
    }

    public function setIcon() {
        return $this->status == 1 ? "&#9745" : "&#9746";
    }
    
    public function getComments() {
        return $this->comments;
    }
}

?>