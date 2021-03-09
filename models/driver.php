<?php 

class Driver{
    private $id;
    private $name;
    private $email;
    private $contactNo;
    private $joinDate;
    private $status;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name=$name;
    }


    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email=$email;
    }


    public function getContactNo(){
        return $this->contactNo;
    }

    public function setContactNo($contactNo){
        $this->contactNo=$contactNo;
    }

    public function getJoinDate(){
        return $this->joinDate;
    }

    public function setJoinDate($joinDate){
        $this->joinDate=$joinDate;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status=$status;
    }
}