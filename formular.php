<?php include'header.php' ?>
    <main>

        <body>
            <header>
                <a href="index.php"><img class="logo" src="img/logo.png" alt="grundfos green logo"></a>
            </header>
            <nav>
                <ul>
                    <li>
                        <p>Tilføj Pumpe</p>
                    </li>
                    <li>
                        <p>Oversigt</p>
                    </li>
                </ul>
            </nav>
            <article id="wrapper">
                <form id="form">
                    <table>
                        <tr>
                            <td>Pumpe ID:</td>
                            <td>
                                <input type="text" name="Pumpe_ID"> </td>
                            <br> </tr>
                        <tr>
                            <td>Serie nr:</td>
                            <td>
                                <input type="text" name="Serie_nr"> </td>
                            <br> </tr>
                        <tr>
                            <td>Firmanavn:</td>
                            <td>
                                <input type="text" name="Firmanavn"> </td>
                            <br> </tr>
                        <tr>
                            <td>Adresse:</td>
                            <td>
                                <input type="text" name="Adresse">
                                <br> </tr>
                        <tr>
                            <td>Placering:</td>
                            <td>
                                <input type="text" name="Placering">
                                <br> </tr>
                        <tr>
                            <td>Fabrikationsdato:</td>
                            <td>
                                <input type="text" name="Fabrikationsdato">
                                <br> </tr>
                    </table>
                </form>
                <input type="submit" value="Submit" id="submit"> </article>
    </main>
    <?php include'footer.php' ?>