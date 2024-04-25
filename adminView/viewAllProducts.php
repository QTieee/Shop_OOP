
<div >
  <h2>Product Items</h2>
  <table class="table ">
    <thead>
    <tr>
        <th class="text-center">STT</th>
        <th class="text-center">Hình ảnh</th>
        <th class="text-center">Tên sản phẩm</th>
        <th class="text-center">Mô tả sản phẩm</th>
        <th class="text-center">Giá</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../AdditionalPHP/connection.php";
      $sql="SELECT * FROM products_test";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
    <td><?=$count?></td>
      <td><img height='100px' src='<?=$row["p_img"]?>'></td>
      <td><?=$row["p_name"]?></td>
      <td><?=$row["p_desc"]?></td>      
      <td><?=$row["p_price"]?></td>  

      <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['p_id']?>')">Sửa</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['p_id']?>')">Xóa</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Thêm Sản Phẩm
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Sản phẩm mới</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
            <div class="form-group">
              <label for="name">Tên sản phẩm:</label>
              <input type="text" class="form-control" id="p_name" required>
            </div>
            <div class="form-group">
              <label for="price">Giá:</label>
              <input type="number" class="form-control" id="p_price" required>
            </div>
            <div class="form-group">
              <label for="qty">Mô tả:</label>
              <input type="text" class="form-control" id="p_desc" required>
            </div>
            <div class="form-group">
              <label>Danh mục bánh:</label>
              <select id="category" >
                <option disabled selected>Chọn danh mục bánh</option>
                <?php

                  $sql="SELECT * from categories";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['categoryID']."'>".$row['p_cat_name'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
                <label for="file">Chọn hình ảnh:</label>
                <input type="file" class="form-control-file" id="file">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Thêm</button>
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
   