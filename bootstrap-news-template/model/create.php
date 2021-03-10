<?php
include('../controller/BlogHandler.php');
$app = new BlogHandler();
$title = $_POST['title'];
$content = $_POST['content'];
$name = $_POST['name'];
$email = $_POST['email'];
$cat = $_POST['cat'];
//upload(string $name, $dir, bool $create_dir_if_not_exists,  array $extensions, int $size)
$app->upload('file', 'uploads', true, array('jpeg', 'png', 'jpg'), 0);
$file = $app->newname;
echo $app->createPost('posts', '../index#rr', $title, $content, $name, $cat, $file, $email);
?>