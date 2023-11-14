<!-- Trắc nghiệm: 
Câu 1: 
Kết quả in ra màn hình của đoạn mã đã cho là: 
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
    [6] => 9
)
Câu 2: A: true
Câu 3: A: a) array()
Câu 4: A: a) readfile()
Câu 5: B: chuyển đổi 1 đối tượng thành một chuỗi -->

<!-- Bài tập thực hành:
Bài 1:   -->
<?php
function generateFibonacci($n) {
    $fibonacci = array();
    if ($n >= 1) {
        $fibonacci[] = 0;
    }
    if ($n >= 2) {
        $fibonacci[] = 1;
    }
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}

$n = 10;
$fibonacciSequence = generateFibonacci($n);

echo "Dãy số Fibonacci đầu tiên có $n phần tử là: ";
foreach ($fibonacciSequence as $number) {
    echo $number . " ";
}
?>

<!-- Bài 2:  -->
<?php
// Tạo một mảng kết hợp chứa thông tin về học sinh
$students = [
    [
        'id' => 1,
        'name' => 'Pham Quynh Quynh',
        'age' => 15,
        'score' => 9
    ],
    [
        'id' => 2,
        'name' => 'Nguyen Thi To Uyen',
        'age' => 16,
        'score' => 8
    ],
    [
        'id' => 3,
        'name' => 'Nguyen Yen Linh',
        'age' => 15,
        'score' => 10
    ]
];

// Hiển thị thông tin của tất cả học sinh trong mảng
echo "Thông tin của tất cả học sinh:"."<br>";
foreach ($students as $student) {
    echo "ID: " . $student['id'] . "<br>";
    echo "Tên: " . $student['name'] . "<br>";
    echo "Tuổi: " . $student['age'] . "<br>";
    echo "Điểm: " . $student['score'] . "<br>";
    echo "\n";
}

// Hàm tìm học sinh có điểm cao nhất (score)
function findStudentWithHighestScore($students) {
    $highestScore= 0;
    $studentWithHighestScore = null;

    foreach ($students as $student) {
        if ($student['score'] > $highestScore) {
            $highestscore = $student['score'];
            $studentWithHighestScore = $student;
        }
    }

    return $studentWithHighestScore;
}

// Gọi hàm findStudentWithHighestScore() để tìm học sinh có điểm cao nhất
$studentWithHighestScore = findStudentWithHighestScore($students);

// Kiểm tra xem có học sinh có điểm cao nhất hay không
if ($studentWithHighestScore) {
    echo "Học sinh có điểm cao nhất:\n";
    echo "ID: " . $studentWithHighestScore['id'] . "<br>";
    echo "Tên: " . $studentWithHighestScore['name'] . "<br>";
    echo "Tuổi: " . $studentWithHighestScore['age'] . "<br>";
    echo "Điểm: " . $studentWithHighestScore['score'] . "<br>";
} else {
    echo "Không có học sinh nào trong danh sách"."<br>";
}
?>


