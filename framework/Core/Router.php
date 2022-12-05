<?php
/**
 * Router
 */
class Router{
    /**
     * l'ensemble des routes de l'apk
     * 
     * @var array
     */
    protected $routes = [];

    /**
     * Permet d'ajouter une route à la table des routes 
     * 
     * @param string $url: l'url à ajouter
     * @param array $param: l'ensemble des paramètres de la route
     * @return void
     */
    public function add($url, $params = []){
        $this->routes[$url] = $params;
    }

    /**
     * Renvoie les routes
     */
    public function getRoutes(){
        return $this->routes;
    }
}
?>