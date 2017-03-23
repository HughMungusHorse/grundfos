<?php include'header.php' ?>
    <main>
        <header>
            <a href="formular.php"><img class="logo" src="img/logo.png" alt="grundfos green logo"></a>
        </header>
        <?php
$servername = "localhost";
$username = "admin";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=pumper", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


$stmt = $conn->prepare("SELECT * FROM pumps");
$stmt->execute();
//var_dump($stmt);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);



?>
            <nav id="nav_wrap">
                <ul>
                    <li class="pump1"> <a href="formular.php">Tilføj Pumpe</a> </li>
                    <li class="oversigt1"><a>Oversigt</a>
                        <ul>
                            <?php 
		                      foreach ($results as $result) {
			                 ?>
                                <li data-section-id="<?php echo $result["id"];?>">
                                    <?php echo $result["id_name"];?>
                                </li>
                                <?php
                                }?>
                        </ul>
                    </li>
                </ul>
            </nav>
         <article id="wrapper">
            <?php
	       foreach ($results as $result) {
		      ?>
       
                <section id="section-id-<?php echo $result["id"];?>">
                    <article id="wrapper">
                        <form id="form">
                            <table class="otable">
                                <tr>
                                    <td>Pumpe ID:</td>
                                    <td>
                                        <p>
                                            <?php echo $result["id_name"];?>
                                        </p>
                                    </td>
                                    <br> </tr>
                                
                                    <tr>
                                        <td>Pumpe type:</td>
                                        <td>
                                            <p>
                                                <?php echo $result["type"];?>
                                            </p>
                                        </td>
                                        <br> </tr>
                                    <tr>
                                        <td>Serie nr:</td>
                                        <td>
                                            <p> <?php echo $result["serial_number"];?></p>
                                        </td>
                                        <br> </tr>
                                    <tr>
                                        <td>Firmanavn:</td>
                                        <td>
                                            <p> <?php echo $result["company_name"];?></p>
                                        </td>
                                        <br> </tr>
                                    <tr>
                                        <td>Adresse:</td>
                                        <td>
                                            <p> <?php echo $result["address"];?></p>
                                        </td>
                                        <br> </tr>
                                    <tr>
                                        <td>Placering:</td>
                                        <td>
                                            <p> <?php echo $result["placement"];?></p>
                                        </td>
                                        <br> </tr>
                                    <tr>
                                        <td>Fabrikationsdato:</td>
                                        <td>
                                            <p> <?php echo $result["date"];?></p>
                                        </td>
                                        <br> </tr>

                                        
                            </table>
                        </form>
                
                </section>
                                            <?php
	}


?>
                        </article>
    </main>

<script type="text/javascript">
    // Skjul alle sektions når siden loades
    $("section").hide();
    // vis en section når der trykke i menuen
    $(".oversigt1 ul li").click(function () {
    // skjul alle, også dem der tidligere var vist
    $("section").hide();
    // Vis den section som svarer til det menupunkt man trykkede på
    $("#section-id-"+$(this).attr("data-section-id")).show();
});
</script>
    <?php include'footer.php' ?>