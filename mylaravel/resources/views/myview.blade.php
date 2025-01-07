<h1>แม่สูตรคูณ</h1>
<form action= "{{url ('/mycontroller') }}" 
    method="post">
    @csrf
    <input type ="text" name="myinput">
    <button type="submit">แสดงตารางสูตรคูณ</button>
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['myinput'];
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