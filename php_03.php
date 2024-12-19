<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel ="stylesheet" type="text/css"href = "style_03.css">
    </head>
    <style>
    body {
        padding-left: 100px;
        padding-right: 200px;
    }
    </style>
    <body>
    <div class="container mt-5">
    <form method="POST" action="">
        <label for="number">กรุณาเลือกแม่สูตรคูณ:</label>
        <input type="number" id="number" name="number" min="1" required>
        <button type="submit">แสดงตารางสูตรคูณ</button>
    </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        echo "<h2>ตารางสูตรคูณแม่ $number</h2>";
        echo "<table border='1' cellpadding='10' >";
        for ($i = 1; $i <= 12; $i++) {
            $result = $number * $i;
            echo "<tr>";
            echo "<td>$number x $i</td>";
            echo "<td>=</td>";
            echo "<td>$result</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>