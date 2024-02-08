<?php 
require_once("db_connection.php");
require_once("sql.php");
class Post{
    public static function getPosts(){ 

        $conn = Connection::connect();
        $stmt = $conn->prepare(SQL::$getAllBooks);
        $stmt -> execute();
        $posts = $stmt->fetchAll();
        $conn = null;
        return $posts;

    }
    public static function getPost($postId){

        $conn = Connection::connect();
        $stmt = $conn->prepare(SQL::$getPost);
        $stmt->execute([$postId]);
        $post = $stmt-fetch();
        $conn = null;
        return $book;
    }

}
$post = new Post();
$posts = $post->getPosts();
foreach ($posts as $post) {
    echo "<div class='post'>";
    echo "<h2>" . htmlspecialchars($post["title"]) . "</h2>";
    echo "<p>" . htmlspecialchars($post["content"]) . "</p>";
    echo "</div>";
}
?>
