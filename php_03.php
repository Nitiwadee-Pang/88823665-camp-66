<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <style>
    body {
                font-size: 20pt;
                background-color: #f9f9f9;
                color: #e681ff;
                padding: 50px;
                background-color: pink;
            }
            .container {
                background: #ffffff;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
                border-radius: 10px;
                margin: auto;
                
            }
            .number{
                box-shadow: 0px 0px 5px 5px yellow;
            }
            h2 {
                color: #a11cff;
                font-weight: bold;
                text-align: center;
            }
            table {
                margin: 20px auto;
                border-collapse: collapse;
                width: 70%;
                background-color:rgb(255, 255, 255);
            }
            table, th, td {
                border: 1px solid #a11cff;
            }
            td {
                text-align: center;
                padding: 10px;
            }
            button {
                background-color: #a11cff;
                color: #ffffff;
                border: none;
                padding: 10px 15px;
                border-radius: 5px;
                font-size: 18px;
                cursor: pointer;
            }
            button:hover {
                background-color:rgb(255, 48, 214);
                box-shadow: 0px 0px 5px 5px yellow;
            }
    </style>
    <body>
    <div class="container mt-5">
    <form method="POST" action="">
        <label for="number">ฝึกท่องสูตรคูณแม่</label>
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