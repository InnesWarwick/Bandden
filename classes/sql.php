<?php
class SQL {
    public static $getAllPosts = "SELECT * FROM posts";
    public static $getPost = "SELECT * FROM posts WHERE id = ?";
    public static $createUser = "INSERT INTO users (username,email,password) VALUES(?,?,?)";
    public static $getUser = "SELECT user_id, username, password, user_role FROM users WHERE username = ?";
    public static $createPost = "INSERT INTO posts (user_id,title,content) VALUES (?,?,?)";
    public static $deletePost = "DELETE FROM posts WHERE post_id = ?";
    public static $getAllPostsOfUser = "SELECT * FROM posts WHERE user_id = ?";
    public static $changePassword = "SELECT * FROM users";
}
//UPDATE users SET password = ? WHERE user_id = ?
?>
