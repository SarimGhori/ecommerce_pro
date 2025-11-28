<?php
session_start();
include 'includes/db.php';
include 'includes/header.php';

$total = 0;
?>
<h2>Your Cart</h2>
<ul class="list-group mb-3">
<?php
if(!empty($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $id){
        $p = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM products WHERE id=$id"));
        $total += $p['price'];
        echo "<li class='list-group-item d-flex justify-content-between'>
                {$p['name']}
                <strong>Rs {$p['price']}</strong>
              </li>";
    }
}
?>
</ul>
<h3>Total: Rs <?php echo $total; ?></h3>
<a class="btn btn-success" href="#">Proceed to Payment</a>
<?php include 'includes/footer.php'; ?>