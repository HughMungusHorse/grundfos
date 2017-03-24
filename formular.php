<?php include'header.php' ?>
    <main>
        <header>
            <a href="formular.php"><img class="logo" src="img/logo.png" alt="grundfos green logo"></a>
        </header>
        <nav>
            <ul>
                <li class="pump0"> <a>Tilføj Pumpe</a> </li>
                <li class="oversigt0"> <a href="oversigt.php">Oversigt</a> </li>
            </ul>
        </nav>
        <article id="wrapper">
            <form id="form" method="POST">
                <table class="ftable">
                     <tr>
                        <td>Pumpe ID:<span class="tooltip">?
                        <span class="tooltiptext">Tilføj et personligt navn til din pumpe.</span> </span>
                        </td>
                        <td>
                            <input type="text" name="name" required> </td>
                        <br> </tr>
                    <tr>
                        <td>Produktserie:<span class="tooltip">?
                        <span class="tooltiptext">Her indtastes hvilken serie produktet er i, fx "ALPHA2"</span> </span>
                        </td>
                        <td>
                            <input id="pumpetype" type="text" name="type_name" required> </td>
                        <br> </tr>
                    <tr>
                        <td>Serie nr:<span class="tooltip">?
                        <span class="tooltiptext">Her indtastes pumpens serienummer -  fx: "521258 PN". </span> </span>
                        </td>
                        <td>
                            <input id="serienr" type="text" name="serial" required> </td>
                        <br> </tr>
                    <tr>
                        <td>Firmanavn:<span class="tooltip">?
                        <span class="tooltiptext">Her indtastes navnet på firmaet.</span> </span>
                        </td>
                        <td>
                            <input type="text" name="company" required> </td>
                        <br> </tr>
                    <tr>
                        <td>Adresse:<span class="tooltip">?
                        <span class="tooltiptext">Her indtastes adressen hvorpå pumpen er installeret.</span> </span>
                        </td>
                        <td>
                            <input id="adresse" type="text" name="adresse" required>
                            <br> </tr>
                    <tr>
                        <td>Placering:<span class="tooltip">?
                        <span class="tooltiptext">Her indtastes pumpens fysiske placering, fx "Kælderen. Rum 26"</span> </span>
                        </td>
                        <td>
                            <input type="text" name="placering" required>
                            <br> </tr>
                    <tr>
                        <td>Fabrikationsdato:<span class="tooltip">?
                        <span class="tooltiptext">Indtast pumpens fabrikationsdato </span> </span>
                        </td>
                        <td>
                            <input id="datovælger" type="text" name="dato" required>
                            <br> </tr>
                </table>
                 <input type="submit" value="Submit" id="submit" name="submit">
            </form>
            </article>
    </main>
    <?php 
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "admin";
$password = "";
$dbname = "pumper";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO pumps (id_name, serial_number, type, placement, address, company_name, date) 
    
    VALUES ('".$_POST["name"]."','".$_POST["serial"]."','".$_POST["type_name"]."','".$_POST["placering"]."','".$_POST["adresse"]."','".$_POST["company"]."','".$_POST["dato"]."')"; 
    
        // use exec() because no results are returned
    $conn->exec($sql);
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}

$conn = null;
    

    include'footer.php' ?>