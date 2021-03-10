<?php 
include('BaseClass.php');
class BlogHandler extends BaseClass{
    public $conn;
     public function __construct(){
      $conn = new mysqli("localhost", "lsmojcom_production", "litEMOJ@%2020", "lsmojcom_production") or die("error");
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
public function increment($tbl, $blog_id){
    $sel = $this->con->query("SELECT * FROM $tbl WHERE page_id = '$blog_id'");
    if ($sel->num_rows == 0){
        $curCount = 1;
        $keys = array('page_id', 'count');
        $vals = array($_GET['id'], $curCount);
        $this->insert($tbl, $keys, $vals);
       
    }else{
        $this->con->query("UPDATE $tbl SET count = (count + 1) WHERE page_id = '$blog_id'");
        $go = $sel->fetch_assoc();
        $count = $go['count'];
        
    }
}

public function countViews($tbl, $id){
    $sel = $this->con->query("SELECT * FROM $tbl WHERE page_id = '$id' ");
    $total = $sel->fetch_assoc();
   if($total['count'] != null){
    return $total['count'];
   }else{
       return 0;
   }
   
}

public function uniqueUsers($tbl){
    $ip = $this->getIPAddress();
   // echo $ip;
    $sql = "SELECT ip FROM $tbl";
    $keys = array("ip");  $arr = array();
    $sel = $this->con->query($sql);
    while($r = $sel->fetch_assoc()){
        array_push($arr, $r['ip']);
    }
        if (!in_array($ip, $arr)){
            $vals = array($ip);
            $this->insert($tbl, $keys, $vals);
        }
    
}
public function getUniqueViewers($tbl){
    $sel = $this->con->query("SELECT * FROM $tbl");
    if ($sel->num_rows > 0){
    return $sel->num_rows;
    }else{
        return 0;
    }
}

public function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
} 

public function fetchBlogPosts($offset){
    $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT $offset";
    $sel = $this->con->query($sql);
    while($r = $sel->fetch_assoc()){
        $file = $r['file']; $title = $r['title']; $cat = $r['category']; $id = $r['id']; $content = substr($r['content'], 0, 160); 
        if (empty($file)){
            $file = 'img/alt.png';
        }
        else{
            $file = "model/$file";
        }
        echo " <div  class='col-lg-3 col-sm-12 col-md-12'style='margin-top:30px; margin-left:30px; '>
        <p class='text-primary'><b>" . strtoupper($title) . "</b> &nbsp <small>$cat</small></p>
        <img src='$file' style='height:220px; width:100%;' alt='open blog image'/><br><br>
        
        <p>$content ... <b class='text-info'><u>" . $this->countViews('views', $id) . " views</u></b> &nbsp &nbsp <a class='btn btn-danger text-dark' href='read?id=$id'>Read More</a></p></div>";
    }
}

public function displayBlogPost($id, $tbl){
    $sql = "SELECT * FROM $tbl WHERE id = '$id' ";
    $sel = $this->con->query($sql);
    while($r = $sel->fetch_assoc()){
        $title = $r['title'];
        $content = $r['content'];
        $cat = $r['category'];
        $name = $r['name'];
        $file = $r['file'];
        $date = $r['date_registered'];
        if (empty($file)){
            $file = 'img/alt.png';
        }
        else{
            $file = "model/$file";
        }
        echo "<div class='col-lg-5 col-md-12 col-sm-12' id='dv1'><p><h3 class='text-primary' style='text-transform:uppercase'>$title</h3> <small class='' style='font-size:15px'>posted by : $name .. category : $cat .. <b class='text-info'><u>" . $this->countViews('views', $id) . " views</u></b> </small></p>
        <img src='$file' style='height:350px; width:100%;'/><hr>
        </div><div class='col-lg-5 col-md-12 col-sm-12' id='dv2'><p>$content<br><br><span class='text-primary'> posted on : $date</span></p> </div>
        ";
        
        
    }
}

}


?>