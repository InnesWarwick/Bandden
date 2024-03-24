<?php 
require_once("classes/db_connection.php");
require_once("classes/sql.php");
require_once("classes/utils.php");
 
class Post{
    public static function getPosts(){ 

        $conn = Connection::connect();
        $stmt = $conn->prepare(SQL::$getAllPosts);
        $stmt -> execute();
        $posts = $stmt->fetchAll();
        $conn = null;
        return $posts;

    }

    public static function getPost($postId){

        $conn = Connection::connect();
        $stmt = $conn->prepare(SQL::$getPost);
        $stmt->execute([$postId]);
        $post = $stmt->fetch();
        $conn = null;
        return $post;
    }

    public static function deletePost($postId){

        $conn = Connection::connect();
        $stmt = $conn->prepare(SQL::$deletePost);
        var_dump($postId);
        $stmt->execute([$postId]);
        $conn = null;
        header("Location: browse.php");
        return "";
    }
    public static function displayPosts($posts){
        session_start();
        foreach ($posts as $post) {
    
            echo "<div class='post'>";
            echo "<h2>" . htmlspecialchars($post["title"]) . "</h2>";
            echo "<p>" . htmlspecialchars($post["content"]) . "</p>";
            if ($post["user_id"] == $_SESSION["user_id"]){
                echo "<form method='POST'>";
                echo "<input type='hidden' name='action' value='delete'>";
                echo "<input type='hidden' name='post_id' value='" . $post["post_id"] . "'>";
                echo "<input type='submit' value='Delete'>";
                echo "</form>";
            }
            echo "</div>";
        }
        if(isset($_POST["action"]) && $_POST["action"] == "delete" && isset($_POST["post_id"])) {
            $postId = $_POST["post_id"];
            $result = self::deletePost($postId); 
            echo "<p>$result</p>";
        }
        
    }
    public static function createPost() {
        if(Utils::postValuesAreEmpty(["title", "content"])) {
            return "<p class='error'> ERROR: Not all form inputs filled</p>";
        }
        $errors = "";
        $title = $_POST["title"];
        $content = $_POST["content"];
        if(strlen($title) < 4 || strlen($title) > 32) {
            $errors .= "<p class='error'>ERROR: Invalid title</p>";
        }
        if(strlen($content) < 4 || strlen($content) > 500) {
            $errors .= "<p class='error'>ERROR: Invalid content</p>";
        }
        if($errors) {
            return $errors;
        }
    
        $title = htmlspecialchars($title);
        $content = htmlspecialchars($content);
        session_start();
        if(!isset($_SESSION["user_id"])) {
            return "<p class='error'> ERROR: User not logged in</p>";
        }
        $user_id = $_SESSION["user_id"];
        $conn = Connection::connect();
        $stmt = $conn->prepare(SQL::$createPost);
        $stmt->execute([$user_id, $title, $content]);
        $conn = null;
        return "";
    }
    
}
?>
