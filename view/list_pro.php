<!DOCTYPE html>
<?php
if (!isset($_SESSION["\/m&coppy;admin"])) {
    header("Location:admincontroller.php?action=admin");
}
$dssp = new product();
$result = $dssp->getList();
?>
<html>
    <?php
    include '../view/head.php';
    ?>

    <form class="list">
        <h2>Product List</h2>
        <table>
            <tr class="manage1">
                <td>ID</td>
                <td>Name</td>
                <td>Price</td>
                <td>Category</td>
                <td>Image</td>

            </tr>
            <?php while ($set = $result->fetch()): ?>
                <tr>
                    <td><?php echo $set['Id']; ?></td>
                    <td><?php echo $set['name']; ?></td>
                    <td><?php echo $set['price']; ?></td>
                    <td><?php echo $set['category']; ?></td>
                    <td><img width="100" height="70" src="images/<?php echo $set['img']; ?>" alt=""/></td>


                </tr>
            <?php endwhile; ?>


        </table>
    </form>
    <article class="link">
        <a href="admincontroller.php?action=add_pro_form">Add New</a>
        <a href="admincontroller.php?action=update_pro_form">Update</a>
        <a href="admincontroller.php?action=del_pro_form">Delete</a>
        <br clear="both">
    </article>




<?php
include '../view/footer.php';
?>
</body>
</html>