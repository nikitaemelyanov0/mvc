<?php 

class MainController{

    public function indexGet() {
        // Если пользователь не авторизован, то его переносит на страницу регистрации
        if(isset($_SESSION['name'])) {
            return new View("index");
        }
        else header('location: registration');
    }

}