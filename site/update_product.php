<?php
header('location: producten.php');

require 'database.php';
// Productgegevens bijwerken in de database met PDO
$id = $_POST["id"];
$naam = $_POST["naam"];
$beschrijving = $_POST["beschrijving"];
$prijs = $_POST["prijs"];

$stmt = $conn->prepare("UPDATE ice_cream SET flavor=:naam, description=:beschrijving, price=:prijs WHERE id=:id");
$stmt->bindParam(":naam", $naam);
$stmt->bindParam(":beschrijving", $beschrijving);
$stmt->bindParam(":prijs", $prijs);
$stmt->bindParam(":id", $id);

try {
    $stmt->execute();
    echo "Product succesvol bijgewerkt.";
} catch (PDOException $e) {
    echo "Er is een fout opgetreden: " . $e->getMessage();
}
