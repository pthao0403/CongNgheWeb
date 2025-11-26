<?php
require_once 'flowers.php'; 
$success = $_GET['success'] ?? "";
?>
<html lang="vi">
<head>
 <link rel="stylesheet" href="style1.css?v=1">
</head>
<body>
    <h1>Danh sách 14 loài hoa tuyệt đẹp thích hợp trồng để khoe hương sắc dịp xuân hè</h1>
        <?php foreach ($flowers as $h): ?>
    <div class="flower-item">
        <img src="<?= $h['hinh_anh']; ?>" alt="<?= $h['ten_hoa']; ?>">
          <h3><?= $h['ten_hoa']; ?></h3>
                
        <p><?= $h['mo_ta']; ?></p>
                </div>
        <?php endforeach; ?>
    </div>
    
    <hr>
      <p class="back-link">
    <a href="ad.php" class="btn-back">Quay lại Trang Quản Trị </a>
</p>

</body>
</html>