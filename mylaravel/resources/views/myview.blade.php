<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แม่สูตรคูณ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
        body {
            background-color: #ffe6f2;
        }
        h1 {
            color: #ff4da6;
        }
        .btn-primary {
            background-color: #ff66b2;
            border-color: #ff66b2;
        }
        .btn-primary:hover {
            background-color:rgb(204, 51, 255);
            border-color: #ff3399;
            box-shadow: 0px 0px 5px 5px rgb(92, 169, 250);
        }
        .table-bordered {
            border-color: #ff99cc;
        }
        .text-center {
            color: #cc0066;
        }
        .table-pink {
        background-color: #ffb3d9 !important; /* บังคับให้เปลี่ยนเป็นสีชมพู */
        color: white !important; /* บังคับให้ข้อความเป็นสีขาว */
    }
    </style>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">แม่สูตรคูณ</h1>
        <form action="{{url('/mycontroller')}}" method="post" class="text-center">
            @csrf
            <div class="mb-3">
                <input type="text" name="myinput" class="form-control w-50 mx-auto" placeholder="กรอกแม่สูตรคูณ" required>
            </div>
            <button type="submit" class="btn btn-primary">แสดงตารางสูตรคูณ</button>
        </form>
        <div class="mt-5">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number = $_POST['myinput'];
                echo "<h2 class='text-center'>ตารางสูตรคูณแม่ $number</h2>";
                echo "<table class='table table-bordered mt-3'>";
                echo "<thead class='table-pink'>
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
                    echo "<td>$number x $i</td>";
                    echo "<td>=</td>";
                    echo "<td>$result</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            }
            ?>
        </div>
    </div>

</body>
</html>
