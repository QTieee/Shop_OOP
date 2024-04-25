<?php
include_once "../AdditionalPHP/connection.php";
include_once "../models/CategoryModel.php"; // Include lớp CategoryModel

$categoryObj = new CategoryModel($conn); // Tạo một đối tượng của lớp CategoryModel

$categories = $categoryObj->getAllCategories(); // Lấy danh sách danh mục từ phương thức của lớp CategoryModel

?>
<div>
  <h3>Danh mục bánh sẵn có</h3>
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">STT</th>
        <th class="text-center">Danh mục bánh</th>
        <th class="text-center" colspan="2">Hành động</th>
      </tr>
    </thead>
    <?php foreach ($categories as $key => $category): ?>
      <tr>
        <td><?= $key + 1 ?></td>
        <td><?= $category["p_cat_name"] ?></td>
        <td><button class="btn btn-danger" style="height:40px"
            onclick="categoryDelete('<?= $category['categoryID'] ?>')">Xóa</button></td>
      </tr>
    <?php endforeach; ?>
  </table>

  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Thêm
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Danh mục mới</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form enctype='multipart/form-data' action="./controller/addCatController.php" method="POST">
            <div class="form-group">
              <label for="c_name">Tên danh mục:</label>
              <input type="text" class="form-control" name="c_name" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Thêm</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Đóng</button>
        </div>
      </div>
    </div>
  </div>
</div>
