<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('_partial/head') ?>
</head>
<body>
    <?php $this->load->view('_partial/navbar') ?>
    <h1>contact us</h1>
    <p>Hubungi kami melalui form berikut</p>
    <form action="" method="post">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="your name" id="" REQUIRED>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="your email address" id="" REQUIRED>
        </div>
        <div>
            <label for="message">Message</label><br>
            <textarea name="message" id="" cols="30" rows="10" placeholder="write your message" REQUIRED></textarea>
        </div>
        <div>
            <input type="submit" value="kirim">
            <input type="reset" value="Reset">
        </div>
    </form>
    <?php $this->load->view('_partial/footer') ?>  
</body>
</html>