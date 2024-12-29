<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('_partial/head') ?>
</head>
<body>
<?php $this->load->view('_partial/navbar') ?>
    <h1>List Artikel</h1>
    <ul>
        <?php foreach($articles as $article): ?>
        <li><?= $article['title'] ?></li>
        <?php endforeach ?>
    </ul>

    <?php $this->load->view('_partial/footer') ?> 
</body>
</html>