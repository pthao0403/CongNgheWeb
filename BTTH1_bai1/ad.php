<?php
require_once 'flowers.php';
$success = $_GET['success'] ?? "";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Quản lý danh sách hoa</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="navbar">
    <h1>Quản lý danh sách hoa</h1>
     <a href="?action=create" class="add-new"> Thêm hoa mới</a>
</div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Hoa</th>
                <th style="width: 30%;">Mô Tả</th> <th>Hình Ảnh</th> <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flowers as $h): ?>
            <tr>
                <td><?=  $h['id']; ?></td>
                <td><?=  $h['ten_hoa']; ?></td>
                <td><?= $h['mo_ta']; ?></td>
                <td>
                    <img src="<?= $h['hinh_anh']; ?>" alt="<?= $h['ten_hoa']; ?>" class="flower-image">
                </td>
                <td class="actions">
                    <a href="?action=read&id=<?= $h['id']; ?>" class="view">Xem</a>
                    <a href="?action=update&id=<?= $h['id']; ?>" class="edit">Sửa</a>
                    <a 
                        href="?action=delete&id=<?= $h['id']; ?>" 
                        class="delete" 
                        onclick="return confirm('Bạn có chắc chắn muốn xóa hoa <?=$h['ten_hoa']; ?>?');"
                    >Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
   <p class="back-link">
    <a href="user.php" class="btn-back">Quay lại Trang Khách</a>
</p>

</body>
</html>