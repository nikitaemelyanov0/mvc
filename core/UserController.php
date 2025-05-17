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
        // Проверка на уже существующий логин
        if (isset($_SESSION[$_POST['login']])) {
            echo 'Пользователь с таким логином уже существует';
        }
        else {
            // Добавление переменных в сессию
            $userlogin = $_POST['login'];
            $_SESSION[$userlogin]['name'] = $_POST['name'];
            $_SESSION[$userlogin]['age'] = $_POST['age'];
            $_SESSION[$userlogin]['password'] = $_POST['password'];
            $_SESSION[$userlogin]['login'] = $_POST['login'];
            return new View("index", $_POST);
        }
    }

    public function authorizationGet() {
        // Возврат шаблона авторизации
        return new View("authorization");
        echo var_dump($_GET);
    }

    public function authorizationPost() {
        // Проверка введенного логина и пароля на соответствие логину и паролю, сохранненных в сессии
        $userlogin = $_POST['login'];
        if($userlogin==$_SESSION[$userlogin]['login'] & $_POST['password']==$_SESSION[$userlogin]['password']) {
            return new View('index', (array) $_POST);
        }
        else {
            echo 'неправильно набран логин или пароль';
        }
    }
}