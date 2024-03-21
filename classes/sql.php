<?php
class SQL {
    public static $getAllPosts = "SELECT * FROM posts";
    public static $getPost = "SELECT * FROM posts WHERE id = ?";
    public static $createUser = "INSERT INTO users (username,email,password) VALUES(?,?,?)";
    public static $getUserByEmail = "SELECT * FROM users WHERE email = ?";
}
?>
