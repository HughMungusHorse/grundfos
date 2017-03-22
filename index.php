<?php include'header.php' ?>
    <main>
        <header>
            <a href="index.php"><img class="logo" src="img/logo.png" alt="grundfos green logo"></a>
        </header>
        <div id="login0">
            <div>
                <form action="forside.php" method="POST">
                    <input type="text" name="username" placeholder="Brugernavn" class="inp0">
                    <br>
                    <input type="password" name="password" placeholder="Password" class="inp1">
                    <br>
                    <input type="submit" name="login" value="Login" class="inp2"> </form>
            </div>
        </div>
    </main>
    <?php include'footer.php' ?>