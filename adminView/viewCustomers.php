<?php
include_once "../AdditionalPHP/connection.php";
include_once "../models/mCustomer.php"; // Include lớp Customer

$customerObj = new Customer($conn); // Tạo một đối tượng của lớp Customer

$customers = $customerObj->getAllCustomers(); // Lấy danh sách khách hàng từ phương thức của lớp Customer

?>

<div>
  <h2>Danh sách khách hàng</h2>
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">STT</th>
        <th class="text-center">Họ</th>
        <th class="text-center">Tên</th>
        <th class="text-center">Email</th>
        <th class="text-center">Ngày tạo</th>
      </tr>
    </thead>
    <?php foreach ($customers as $key => $customer): ?>
    <tr>
      <td><?= $key + 1 ?></td>
      <td><?= $customer["fname"] ?></td>
      <td><?= $customer["lname"] ?></td>
      <td><?= $customer["email"] ?></td>
      <td><?= $customer["createDate"] ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>
<!-- done -->

