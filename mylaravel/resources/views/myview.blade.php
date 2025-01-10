<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แม่สูตรคูณ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container mt-5 p-4 bg-pink rounded shadow-lg">
        <h1 class="text-center mb-4 text-danger">แม่สูตรคูณ</h1>
        <form action="{{url('/mycontroller')}}" method="post" class="text-center">
            @csrf
            <div class="mb-3">
                <input type="text" name="myinput" class="form-control w-50 mx-auto border-danger" placeholder="กรอกแม่สูตรคูณ" required>
            </div>
            <button type="submit" class="btn btn-danger">แสดงตารางสูตรคูณ</button>
        </form>
        <div class="mt-5">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number = $_POST['myinput'];
                echo "<h2 class='text-center text-danger'>ตารางสูตรคูณแม่ $number</h2>";
                echo "<table class='table table-bordered mt-3'>";
                echo "<thead class='table-danger'>
                        <tr>
                            <th>การคำนวณ</th>
                            <th>=</th>
                            <th>ผลลัพธ์</th>
                        </tr>
                      </thead>";
                echo "<tbody>";
                for ($i = 1; $i <= 12; $i++) {
                    $result = $number * $i;
                    echo "<tr>";
                    echo "<td class='text-danger'>$number x $i</td>";
                    echo "<td class='text-danger'>=</td>";
                    echo "<td class='text-danger'>$result</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQjM8m4oS0xqXJeX3x5aL7Iu3SYx2Xt6N7CjoYLrRFgygUmgXL5LK
