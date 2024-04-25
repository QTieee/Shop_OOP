<div class="container p-5">
    <h4>Edit Product Detail</h4>
    <?php
    include_once "../AdditionalPHP/connection.php";
    $ID = $_POST['record'];
    $qry = mysqli_query($conn, "SELECT * FROM products_test WHERE p_id='$ID'");
    $numberOfRow = mysqli_num_rows($qry);
    if ($numberOfRow > 0) {
        while ($row1 = mysqli_fetch_array($qry)) {
            $catID = $row1["p_cat_id"];
            ?>
            <form id="update-Items-<?= $row1['p_id'] ?>" onsubmit="updateItems(<?= $row1['p_id'] ?>)" enctype='multipart/form-data'>
                <div class="form-group">
                    <input type="text" class="form-control" id="p_id" value="<?= $row1['p_id'] ?>" hidden>
                </div>
                <div class="form-group">
                    <label for="name">Product Name:</label>
                    <input type="text" class="form-control" id="p_name" value="<?= $row1['p_name'] ?>">
                </div>
                <div class="form-group">
                    <label for="desc">Product Description:</label>
                    <input type="text" class="form-control" id="p_desc" value="<?= $row1['p_desc'] ?>">
                </div>
                <div class="form-group">
                    <label for="price">Unit Price:</label>
                    <input type="number" class="form-control" id="p_price" value="<?= $row1['p_price'] ?>">
                </div>
                <div class="form-group">
                    <label>Category:</label>
                    <select id="categories">
                        <?php
                        $sql = "SELECT * from categories WHERE categoryID='$catID'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['categoryID'] . "'>" . $row['p_cat_name'] . "</option>";
                            }
                        }
                        ?>
                        <?php
                        $sql = "SELECT * from categories WHERE categoryID!='$catID'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['categoryID'] . "'>" . $row['p_cat_name'] . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <div>
                        <label for="file">Choose Image:</label>
                        <input type="text" id="existingImage" class="form-control" value="<?= $row1['p_img'] ?>" hidden>
                        <input type="file" id="newImage" value="">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
                </div>
            </form>
            <?php
        }
    }
    ?>
</div>
