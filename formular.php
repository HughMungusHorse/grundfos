<?php include'header.php' ?>
<main>
    <header>
        <a href="forside.php"><img class="logo" src="img/logo.png" alt="grundfos green logo"></a>
    </header>
    <nav>
        <ul>
            <li class="pump0"> <a>Tilføj Pumpe</a> </li>
            <li class="oversigt0"> <a href="oversigt.php">Oversigt</a> </li>
        </ul>
    </nav>
    <article id="wrapper">
        <form id="form">
            <table class="ftable">
                <tr>
                    <td>Pumpe ID:<span>?</span> </td>
                    <td>
                        <input id="pumpetype" type="text" name="Pumpe_ID"> </td>
                    <br> </tr>
                <tr>
                    <td>Serie nr:<span>?</span> </td>
                    <td>
                        <input id="serienr" type="text" name="Serie_nr"> </td>
                    <br> </tr>
                <tr>
                    <td>Firmanavn:<span>?</span> </td>
                    <td>
                        <input type="text" name="Firmanavn"> </td>
                    <br> </tr>
                <tr>
                    <td>Adresse:<span>?</span> </td>
                    <td>
                        <input id="adresse" type="text" name="Adresse">
                        <br> </tr>
                <tr>
                    <td>Placering:<span>?</span> </td>
                    <td>
                        <input type="text" name="Placering">
                        <br> </tr>
                <tr>
                    <td>Fabrikationsdato:<span>?</span> </td>
                    <td>
                        <input id="datovælger" type="text" name="Fabrikationsdato">
                        <br> </tr>
            </table>
        </form>
        <input type="submit" value="Submit" id="submit"> </article>
</main>
<?php include'footer.php' ?>
