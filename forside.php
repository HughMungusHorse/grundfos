<?php include'header.php' ?>
    <main>
        <?php
    $username="grundfos";
    $password="grundfos";
    
    $user=isset($_GET['username']) ? $_GET['username'] : $_POST['username'];
    $pass=isset($_GET['password']) ? $_GET['password'] : $_POST['password'];
    
    if ($user==$username && $pass==$password) {
        echo '<img class="logo1" src="img/logo.png" alt="grundfos green logo">
        <article id="forside"> <a href="">Privat</a> <a href="formular.php">Erhverv</a> </article>';
    } 
    else {
      ?>
            <article class="bruger0">
                <p>
                    <?php echo "Brugernavn og/eller password matcher ikke.";?>
                </p>
            </article>
            <?php } ?>
    </main>
    <?php include'footer.php' ?>