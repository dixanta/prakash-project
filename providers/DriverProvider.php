<?php
    include_once('services/DriverService.php');

    class DriverProvider{
        private $service=null;

        public function __construct(){
            $this->service=new DriverService();
        }

        public function getDrivers($status){
            if($status==null){
                return $this->service->getDrivers();
            }
            if($status){
                $drivers=[];
                foreach($this->service->getDrivers() as $driver){
                    if($driver->getStatus()){
                        $drivers[]=$driver;
                    }
                }
                return $drivers;
             }
             
            $drivers=[];
            foreach($this->service->getDrivers() as $driver){
                if(!$driver->getStatus()){
                    $drivers[]=$driver;
                }
            }
            return $drivers;
            
            
        }

        
        
    }


?>