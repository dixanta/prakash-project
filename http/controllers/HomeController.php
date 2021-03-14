<?php
namespace http\Controllers{
    use providers\DriverProvider;

    class HomeController{
        function index(){
            $provider=new DriverProvider();
            $data=$provider->getDrivers();
            include_once('resources/views/index.php');
        }

        function about(){
            echo '<h1>This is about us page</h1>';
        }

        function contact(){
            echo '<h1>Contact us page</h1>';
        }
    }
}