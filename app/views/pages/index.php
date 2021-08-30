<?php require(APPROOT . '/views/inc/header.php') ?>

<h1><?php echo $data['title'] ?></h1>
<ul>
    <?php
    if ($data['posts']) {
        foreach ($data['posts'] as $post) {
            echo '<li>' . $post->title . '</li>';
        }
    } else {
        echo "No posts!";
    }

    ?>
</ul>

<?php require(APPROOT . '/views/inc/footer.php') ?>