<?php include 'includes/db.php'; include 'includes/header.php';
$result = mysqli_query($conn, "SELECT * FROM products");
?>
<h2 class="mb-4">All Products</h2>
<div class="row">
<?php while($p = mysqli_fetch_assoc($result)): ?>
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
            <img src="assets/images/<?php echo $p['image']; ?>" class="card-img-top" style="height:250px;object-fit:cover;">
            <div class="card-body">
                <h5><?php echo $p['name']; ?></h5>
                <p class="text-success fw-bold">Rs <?php echo $p['price']; ?></p>
                <a href="product_detail.php?id=<?php echo $p['id']; ?>" class="btn btn-primary">View</a>
            </div>
        </div>
    </div>
<?php endwhile; ?>
</div>
<?php include 'includes/footer.php'; ?>