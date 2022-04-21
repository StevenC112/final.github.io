<?php 
$dsn='mysql:host=localhost;dbname=test';
$adm='root';
$pw='413mlukK';
$db=new PDO($dsn, $adm, $pw);
$random = mt_rand();
$date=date("Y/m/d h:ia");
$lifetime = 60 * 60 * 24 * 365;
session_set_cookie_params($lifetime, '/');
session_start();
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'home';
    }
}
if (empty($session['INFO'])){$_SESSION['INFO']= array();}
switch($action){
    case 'home':
        include('main.php');
        break;
    case 'login':
        include('login.php');
        break;

    case 'help':
        include('help.php');
        $username = filter_input(INPUT_POST,'Username');
        $email = filter_input(INPUT_POST,'Email');
        $query = "INSERT INTO info(Username, Email, Case_No) VALUES(:Username,:Email,:Case_No)";  
        $statement = $db->prepare($query);
        $statement->bindValue('Username',$username);
        $statement->bindValue('Email',$email);
        $statement->bindValue('Case_No',$random);
        $statement->execute();
        $statement->CloseCursor();
        break;

    case 'end':
        $_SESSION = array();
        session_destroy();
        $name = session_name();
        $expire = strtotime('-1 year');
        $params = session_get_cookie_params();
        $path = $params['path'];
        $domain = $params['domain'];
        $secure = $params['secure'];
        $httponly = $params['httponly'];
        $logged_in=0;
        setcookie($name,'',$expire, $path, $domain, $secure, $httponly);
        include('main.php');
    break;
    }
    
?>