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
                        <td>Produktserie:<span class="tooltip">?
                        <span class="tooltiptext">Her indtastes hvilken serie produktet er i, fx "ALPHA2"</span> </span>
                        </td>
                        <td>
                            <input id="pumpetype" type="text" name="Pumpe_ID"> </td>
                        <br> </tr>
                    <tr>
                        <td>Serie nr::<span class="tooltip">?
                        <span class="tooltiptext">Her indtastes pumpens serienummer - Serienummeret ser fx således ud: "521258 PN". </span> </span>
                        </td>
                        <td>
                            <input id="serienr" type="text" name="Serie_nr"> </td>
                        <br> </tr>
                    <tr>
                        <td>Firmanavn::<span class="tooltip">?
                        <span class="tooltiptext">Her indtastes navnet på firmaet.</span> </span>
                        </td>
                        <td>
                            <input type="text" name="Firmanavn"> </td>
                        <br> </tr>
                    <tr>
                        <td>Adresse::<span class="tooltip">?
                        <span class="tooltiptext">Her indtastes adressen hvorpå pumpen er installeret.</span> </span>
                        </td>
                        <td>
                            <input id="adresse" type="text" name="Adresse">
                            <br> </tr>
                    <tr>
                        <td>Placering::<span class="tooltip">?
                        <span class="tooltiptext">Her indtastes pumpens fysiske placering, fx er den placeret i kælderen, indtastes "kælder"</span> </span>
                        </td>
                        <td>
                            <input type="text" name="Placering">
                            <br> </tr>
                    <tr>
                        <td>Fabrikationsdato::<span class="tooltip">?
                        <span class="tooltiptext">Indtast pumpens fabrikationsdato </span> </span>
                        </td>
                        <td>
                            <input id="datovælger" type="text" name="Fabrikationsdato">
                            <br> </tr>
                </table>
            </form>
            <input type="submit" value="Submit" id="submit"> </article>
    </main>
    <?php include'footer.php' ?>