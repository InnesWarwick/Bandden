<?php
require_once("classes/db_connection.php");
require_once("classes/sql.php");
require_once("classes/utils.php");
 
class User {
    public static function login() {
        if(Utils::postValuesAreEmpty(["email", "username", "password"])) {
            return "<p class='error'> ERROR: Not all form inputs filled</p>";
        }
        $conn = Connection::connect();
        $stmt = $conn->prepare(SQL::$getUser);
        $stmt->execute([$_POST["username"]]);
        $user = $stmt->fetch();
        $conn = null;
        if(empty($user)) {
            return "<p class='error'> ERROR: User does not exist</p>";
        }
 
        if (!password_verify($_POST["password"], $user["password"])) {
            return "<p class='error'> ERROR: Incorrect password</p>";
        }
 
        $_SESSION["loggedIn"] = true;
        $_SESSION["user_id"] = $user["user_id"];
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["user_role"] = $user["user_role"];
        return "";
    }
 
    public static function register() {
        if(Utils::postValuesAreEmpty(["email", "username", "password"])) {
            return "<p class='error'> ERROR: Not all form inputs filled</p>";
        }
        $errors = "";
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        if(strlen($username) < 4 || strlen($username) > 32) {
            $errors .= "<p class='error'>ERROR: Invalid username</p>";
        }
        $filteredEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
        if(!$filteredEmail) {
            $errors .= "<p class='error'>ERROR: Invalid email</p>";
        }
        if (strlen($password) < 5) {
            $errors .= "<p class='error'>ERROR: password must be 5 characters</p>";
        }
        if($errors) {
            return $errors;
        }
        $conn = Connection::connect();
 
        $stmt = $conn->prepare(SQL::$getUser);
        $stmt->execute([$username]);
        $user = $stmt->fetch();
 
        if (!empty($user)) {
            return "<p class='error'>ERROR: User already exists</p>";
        }
 
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $conn->prepare(SQL::$createUser);
        $stmt->execute([$username, $filteredEmail, $hashedPassword]);
        $insertId = $conn->lastInsertId();
        $conn = null;
 
        $_SESSION["loggedIn"] = true;
        $_SESSION["user_id"] = $insertId;
        $_SESSION["username"] = $username;
        $_SESSION["user_role"] = "Member";
        return "";
    }
}
?>