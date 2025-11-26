<?php
header('Content-Type: text/html; charset=utf-8');

$file_path = '65HTTT_Danh_sach_diem_danh.csv';

echo "<!DOCTYPE html><html lang='vi'><head>";
echo "<meta charset='UTF-8'>";
echo "<title>Danh sách Sinh viên</title>";

echo "<link rel='stylesheet' href='style.css'>";
// Kiểm tra file CSV
if (!file_exists($file_path)) {
    die("Lỗi: Không tìm thấy tệp CSV tại đường dẫn: " . $file_path);
}

$handle = fopen($file_path, "r");
if ($handle === FALSE) die("Lỗi: Không thể mở tệp CSV.");

// Biến kiểm tra tiêu đề
$header = true;

echo "<table>";

while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

    // Bỏ BOM nếu có
    if (isset($data[0]) && substr($data[0], 0,3) === "\xEF\xBB\xBF") {
        $data[0] = substr($data[0],3);
    }

    if ($header) {
        echo "<thead><tr>";
        foreach ($data as $col_name) {
            echo "<th>" . htmlspecialchars($col_name) . "</th>";
        }
        echo "</tr></thead><tbody>";
        $header = false;
        continue;
    }

    echo "<tr>";
    foreach ($data as $col_value) {
        echo "<td>" . htmlspecialchars($col_value) . "</td>";
    }
    echo "</tr>";
}

echo "</tbody></table>";
fclose($handle);
echo "</body></html>";
?>
