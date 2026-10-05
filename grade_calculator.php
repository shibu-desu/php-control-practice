<?php
foreach ($students as $student) {
    echo $student["田中太郎"];
    echo $student["85"];
    echo $student["佐藤花子"];
    echo $student["92"];
    echo $student["鈴木一郎"];
    echo $student["78"];
    echo $student["高橋美咲"];
    echo $student["65"];
    echo $student["伊藤健太"];
    echo $student["58"];
}
if ($score >= 90) {
    $grade = "A";
    $status = "優秀";
} elseif ($score >= 80) {
    $grade = "B";
    $status = "良好";
} else {
    $grade = "F";
    $status = "不合格";
}
$pass_count = 0;
$fall_count = 0;


foreach ($students as $student) {
    if ($student["score"] >= 60) {
        $pass_count++;
    } else {
        $fall_count++;
    }
}
$total_score = 0;
foreach ($students as $student) {
    $total_score += $student["score"];
}
$average = $total_score / count($students);
    