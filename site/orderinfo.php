<?php
require 'database.php';
// Retrieve the order_id from the query string
$order_id = $_GET['id'];

// Retrieve the order information from the database
$stmt = $conn->prepare("
  SELECT *
  FROM bestelling_content
  WHERE order_id = :order_id
");
$stmt->bindParam(':order_id', $order_id);
$stmt->execute();

// Retrieve the product names from the database
$stmt2 = $conn->prepare("
  SELECT id, flavor
  FROM ice_cream
");
$stmt2->execute();
$products = $stmt2->fetchAll(PDO::FETCH_ASSOC);
$product_names = array();
foreach ($products as $product) {
  $product_names[$product['id']] = $product['flavor'];
}
?>

<table>
  <thead>
    <tr>
      <th>Product</th>
      <th>Quantity</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
      <tr>
        <td><?php echo $product_names[$row['product_id']]; ?></td>
        <td><?php echo $row['quantity']; ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>