<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(232, 255, 163);
            padding: 20px;
        }

        .container {
            background:rgb(254, 224, 251);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(86, 30, 30, 0.1);
        }
        .btn{
            background-color: #a11cff;
                color: #ffffff;
                border: none;
                padding: 10px 15px;
                border-radius: 5px;
                font-size: 18px;
                cursor: pointer;
        }
        button:hover {
                box-shadow: 0px 0px 5px 5px yellow;
            }
        .form-label{
            text-align: center;
            margin-bottom: 20px;
            color:rgb(8, 32, 170);
            font-size: medium;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color:rgb(8, 32, 170);
        }

        .even {
            color: #28a745;
            font-weight: bold;
        }

        .odd {
            color: #dc3545;
            font-weight: bold;
        }
        h2{
            color:rgb(38, 115, 193);
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1>ตรวจสอบเลขคู่หรือเลขคี่</h1>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="start" class="form-label">เริ่มต้น:</label>
                <input type="number" class="form-control" id="start" name="start" required>
            </div>
            <div class="mb-3">
                <label for="end" class="form-label">สิ้นสุด:</label>
                <input type="number" class="form-control" id="end" name="end" required>
            </div>
            <button type="submit" class="btn btn-primary">ตรวจสอบ</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $start = $_POST['start'];
            $end = $_POST['end'];

            if ($start > $end) {
                echo "<div class='alert alert-danger mt-3'>กรุณาใส่ค่าเริ่มต้นให้น้อยกว่าหรือเท่ากับค่าที่สิ้นสุด</div>";
            } else {
                echo "<h2 class='mt-4'>ผลลัพธ์จาก $start ถึง $end</h2>";
                echo "<div class='mt-3'>";
                for ($i = $start; $i <= $end; $i++) {
                    echo "<p>เลข $i : <span class='" . ($i % 2 == 0 ? "even" : "odd") . "'>" . ($i % 2 == 0 ? "เลขคู่" : "เลขคี่") . "</span></p>";
                }
                echo "</div>";
            }
        }
        ?>
    </div>
</body>

</html>
