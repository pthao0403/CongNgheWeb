<?php
$lines = file("question.txt", FILE_IGNORE_NEW_LINES);
$questions = [];
$temp = [];

foreach ($lines as $line) {
    if (trim($line) == "") {
        if (!empty($temp)) {
            $questions[] = $temp;
            $temp = [];
        }
    } else {
        $temp[] = $line;
    }
}

// Để đảm bảo câu cuối không bị mất nếu file không có dòng trống cuối
if (!empty($temp)) {
    $questions[] = $temp;
}
?>

<form method="post">
    <?php foreach ($questions as $index => $q): ?>
        <h3><?= htmlspecialchars($q[0]) ?></h3>

        <?php for ($i = 1; $i < count($q); $i++): ?>
            <label>
                <input type="radio" name="cau<?= $index ?>" value="<?= htmlspecialchars($q[$i]) ?>">
                <?= htmlspecialchars($q[$i]) ?>
            </label><br>
        <?php endfor; ?>

        <br>
    <?php endforeach; ?>

    <button type="submit">Nộp bài</button>
    <link rel="stylesheet" href="style.css">

</form>
