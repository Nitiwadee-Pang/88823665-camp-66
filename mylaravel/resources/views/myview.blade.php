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
            background-color:rgb(255, 107, 178);
        }
        .container {
            background:rgb(255, 214, 246);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 10px;
            max-width: 700px;
            margin: auto;
        }
        .table-bordered td:nth-child(1) {
            color:rgb(209, 0, 198);
        }
        .table-bordered td:nth-child(2) {
            color:rgb(255, 0, 162);
        }
        .table-bordered td:nth-child(3) {
            color:rgb(209, 0, 198);
        }
        h1 {
            color: #ff4da6;
        }
        .btn-primary {
            background-color:rgb(2, 2, 2);
            border-color: #ff66b2;
        }
        .btn-primary:hover {
            background-color:rgb(255, 51, 177);
            border-color: #ff3399;
            box-shadow: 0px 0px 5px 5px rgb(30, 1, 21);
        }
        .table-bordered {
            border-color:rgb(27, 1, 14);
            
        }
        .text-center {
            color: #cc0066;
        }
        .table-dark{
            background-color: #ff3399 !important;
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
                echo "<thead class='table table-dark'>
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
