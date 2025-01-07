<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Number to Binary</title>
</head>
<body>
    <h1>Convert Number to Binary</h1>
    <form method="post" action="">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Convert</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // รับค่าจากแบบฟอร์ม
        $number = intval($_POST["number"]);

        // ตรวจสอบว่าเป็นตัวเลขหรือไม่
        if (is_numeric($number)) {
            // แปลงเป็นฐาน 2
            $binary = decbin($number);
            echo "<h2>Result:</h2>";
            echo "<p>Decimal: $number</p>";
            echo "<p>Binary: $binary</p>";
        } else {
            echo "<p style='color: red;'>Please enter a valid number.</p>";
        }
    }
    ?>
</body>
</html>
