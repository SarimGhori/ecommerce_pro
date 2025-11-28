<?php
include 'includes/db.php';
include 'includes/header.php';
$id = $_GET['id'];
$p = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM products WHERE id=$id"));
?>
<div class="row">
    <div class="col-md-6">
        <img src="assets/images/<?php echo $p['image']; ?>" class="img-fluid rounded shadow">
    </div>
    <div class="col-md-6">
        <h2><?php echo $p['name']; ?></h2>
        <p class="fs-4 text-success fw-bold">Rs <?php echo $p['price']; ?></p>
        <p><?php echo $p['description']; ?></p>
        <a href="cart.php?id=<?php echo $p['id']; ?>" class="btn btn-warning btn-lg">Add to Cart</a>
    </div>
</div>
<?php include 'includes/footer.php'; ?>