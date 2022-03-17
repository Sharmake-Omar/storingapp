<?php

//Variabelen vullen
$type_ = $_POST['type_'];
$capaciteit = $_POST['capaciteit']; 
$attractie = $_POST['attractie'];
$prioriteit = $_POST['prioriteit'];
$melder = $_POST['melder'];
$overige_info = $_POST['overig'];
if(empty($attractie))
{
    $errors[] = "vul de attractie in.";
}
if(!is_numeric($capaciteit))
{
    $errors[] = "vul voor capaciteit een geldig getal in.";
}
if(isset($_POST['prioriteit']))
{
    $prioriteit = true;
}
else
{
    $prioriteit = false;
}

//1. Verbinding
require_once 'conn.php';

//2. Query
//merk op: 'id' en 'gemeld op' noemen we niet, want deze hebben een standaarde
$query = "INSERT INTO meldingen (attractie, type_, capaciteit, prioriteit, melder, overige_info)
VALUES(:attractie, :type_, :capaciteit, :prioriteit, :melder, :overige_info)";
//3. Prepare
$statement = $conn->prepare($query);
//4. Execute
$statement->execute([
    ":attractie" => $attractie,
    ":type_" => $type_,
    ":capaciteit" => $capaciteit,
    ":prioriteit" => $prioriteit,
    ":melder" => $melder,
    ":overige_info" => $overige_info
   ]);
   $items = $statement->fetchAll(PDO::FETCH_ASSOC);

   //ga terug naar index
   header("Location: ../meldingen/index.php?msg=Melding opgeslagen");
?>