<?php
 

 namespace providers{
    use services\DriverService;
    
    class DriverProvider{
        private $service=null;
        private $drivers=[]; ///data cache 

        public function __construct(){
            $this->service=new DriverService();
            if(empty($this->drivers)){
                echo "i got hit";
                $this->drivers=$this->service->getDrivers();
            }
        }

        public function getDrivers(){
            
            return $this->drivers;

        }

        public function getActiveDrivers(){
            return $this->_getDrivers(true);
        }

        public function getInActiveDrivers(){
            return $this->_getDrivers(false);
        }


        private function _getDrivers($status){
            $drivers=[];
            foreach($this->drivers as $driver){
                if($driver->getStatus()==$status){
                    echo $status;
                    $drivers[]=$driver;
                }
            }
            return $drivers;
        }

        
        
    }
}
