<?php
    //on appelle le fichierRouter.php
    require "../Core/Router.php";

    $router = new Router();
    echo get_class($router);

    //QUERY_STRING
    echo "Chaîne de requête ==> '" .$_SERVER['QUERY_STRING'] ." '<br>";

    //ajout de quelques routes
    $router->add("",["controller"=> "Home", "action"=>"index"]);
    $router->add("posts",["controller"=> "Posts", "action"=>"index"]);
    $router->add("",["controller"=> "Home", "action"=>"index"]);

    echo "<pre>";
    print_r($router->getRoutes());
    echo "</pre>";
?>