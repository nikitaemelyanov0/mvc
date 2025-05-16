<?php 

class UserController{

    public function registrationGet() {
        // Возврат шаблона регистрации
        return new View("registration");
        echo var_dump($_GET);
    }

    public function registrationPost() {
        // Валидация пароля по длинне
        if(strlen($_POST['password'])<6) {
            echo 'Пароль должен содержать минимум 6 символов';
        } 
        else {
            // Добавление переменных в сессию
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['age'] = $_POST['age'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['login'] = $_POST['login'];
            return new View("test", $_POST);
        }
    }

    public function authorizationGet() {
        // Возврат шаблона авторизации
        return new View("authorization");
        echo var_dump($_GET);
    }

    public function authorizationPost() {
        // Проверка введенного логина и пароля на соответствие логину и паролю, сохранненных в сессии
        if($_POST['login']==$_SESSION['login'] & $_POST['password']==$_SESSION['password']) {
            return new View('test', (array) $_POST);
        }
        else {
            echo 'неправильно набран логин или пароль';
        }
    }
}