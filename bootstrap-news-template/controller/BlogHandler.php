<?php 
include('BaseClass.php');
class BlogHandler extends BaseClass{
    public $conn;
     public function __construct(){
      $conn = new mysqli('', '', '', '') or die("error");
      $this->conn = $conn;
      $this->con = $this->conn;
  }
public function createPost($tbl, $url, $title, $content, $name, $cat, $file, $email){
    $title = $this->con->real_escape_string($title);
    $content = $this->con->real_escape_string($content);
    $name = $this->con->real_escape_string($name);
    $keys = array('name', 'email', 'title', 'category', 'content', 'file');
    $vals = array($name, $email, $title, $cat, $content, $file);
    $this->insert($tbl, $keys, $vals);
    if($this->output['outcome'] == "data inserted"){
        echo "<script>alert('posted'); window.location='$url'</script>";
    }else{
        echo "<script>alert('failed to publish blog post'); </script>";
    }
}
//other methods are hidden

?>
