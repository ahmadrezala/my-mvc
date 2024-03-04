<?php


namespace Core\Router\web;
class Route{

    public static function get($route , $context){

       
        $controller = explode("\\",$context[0]);
        $controller = array_splice($controller,-1)[0];
        $method = $context[1];


        global $routes;

        array_push($routes['get'] , ['route' => trim($route, '/') , 'controller' => $controller, 'method' => $method]);

    //    echo ;
        echo '<pre>';
       var_dump($routes);
       echo '</pre>';


    }


    public static function post($route , $context){

       
        $controller = explode("\\",$context[0]);
        $controller = array_splice($controller,-1)[0];
        $method = $context[1];


        global $routes;

        array_push($routes['post'] , ['route' => trim($route, '/') , 'controller' => $controller, 'method' => $method]);

    //    echo ;
        echo '<pre>';
       var_dump($routes);
       echo '</pre>';


    }



    public static function put($route , $context){

       
        $controller = explode("\\",$context[0]);
        $controller = array_splice($controller,-1)[0];
        $method = $context[1];


        global $routes;

        array_push($routes['put'] , ['route' => trim($route, '/') , 'controller' => $controller, 'method' => $method]);


        echo '<pre>';
       var_dump($routes);
       echo '</pre>';


    }


    
    public static function delete($route , $context){

       
        $controller = explode("\\",$context[0]);
        $controller = array_splice($controller,-1)[0];
        $method = $context[1];


        global $routes;

        array_push($routes['delete'] , ['route' => trim($route, '/') , 'controller' => $controller, 'method' => $method]);

    //    echo ;
        echo '<pre>';
       var_dump($routes);
       echo '</pre>';


    }




}