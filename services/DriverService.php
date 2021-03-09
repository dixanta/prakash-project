<?php
include_once('models/driver.php');
class DriverService{

    private $drivers=[];

    public function __construct(){
        $this->_init();
    }
    private function _init(){

        $driver=new Driver();
        
        $driver->setId(1);
        $driver->setName('John Smith');
        $driver->setEmail('john@citizen.com');
        $driver->setContactNo('785797876978');
        $driver->setJoinDate(Date('Y-m-d H:i:s'));
        $driver->setStatus(true);
        
        $this->drivers[]=$driver;

        $driver=new Driver();
        $driver->setId(2);
        $driver->setName('mary Smith');
        $driver->setEmail('mary@citizen.com');
        $driver->setContactNo('785797876978');
        $driver->setJoinDate(Date('Y-m-d H:i:s'));
        $driver->setStatus(false);
        $this->drivers[]=$driver;

        $driver=new Driver();
        $driver->setId(3);
        $driver->setName('nancy Smith');
        $driver->setEmail('nancy@citizen.com');
        $driver->setContactNo('785797876978');
        $driver->setJoinDate(Date('Y-m-d H:i:s'));
        $driver->setStatus(false);
        $this->drivers[]=$driver;
    }

    public function getDrivers(){
        return $this->drivers;
    }
}


