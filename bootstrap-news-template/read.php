<?php
include('header.php'); 
if (empty($_GET['id'])){
    echo "<script>window.location='history.back'</script>";
}
$app->increment('views', $_GET['id']);

?>

<body>
    <div id='read' class='row' style='margin-top:50px'>
        <?php echo $app->displayBlogPost($_GET['id'], 'posts'); ?>
    </div>
    
</body>


<?php
include('footer.php');
?>