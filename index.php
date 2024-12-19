<!DOCTYPE html>
<html>

<head>
    <title>PHP Test</title>
</head>
<body>
    <h1>File index.php</h1>
    <?php
    echo"Hello world";
    echo "<br>";/*เว้นบรรทัด */
    print("Hello world");
    echo "<br>";
    print_r("Hello world");
    echo "<br>";
    printf("Hello world");
    echo "<br>";
    var_dump("Hello world");
    $myvar = "Hello world"//ประกาศตัวแปร
    ?>
    <h1><?php echo$myvar;?></h1>
    <?php 
    echo "<h1>".$myvar."</h1>"
    ?>

    <?php
    $x = 1;
    FUNction myfunction($myparam){
        global $x;
        $x = "HelloX";
        return $myparam;
    }
    echo "<p>". MYFUNCTION("Help2")."</p>" ;
     ?>

     <?php 
     if(1=='1'){
        echo "1==\"1\"";
     }else
     if(true){
        echo "1 !=\"1\"";
     }

     echo"<br>";
     $my_array = array(1,2,3,4,5,);
     for($i=0;$i<count($my_array);$i++){
        echo $my_array[$i];
     }
     echo"<br>";
     foreach($my_array as $index => $value){
        echo $value;
     }
     echo"<br>";
     ?>

</body>
</html>