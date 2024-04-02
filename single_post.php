
<?php
 require_once('config.php');
 require_once('includes/functions.php'); 
 require_once('includes/headSec.php') ;
 if(isset($_GET['topic'])){
    $post_slug = $_GET["post_slug"];
    $posts = getPost($post_slug);
 }
 ?>


<title>LifeBlog | <?= $post[0]['title']  ?> </title>
</head>

<body>
        <?php require_once('includes/header.php') ?>
    <div class="container">
        <div class="content">

        </div>
    </div>
        <?php require_once('includes/footer.php') ?>
</body>


12312323123123123