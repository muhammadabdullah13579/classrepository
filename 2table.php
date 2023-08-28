<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
 
<table border="3">
<?Php
for($i = 1; $i<=10; $i++){
    $result = 2 * $i;
    if($i % 2==0){
        echo '<tr style="background-color:green;">';
    }
    else{
        echo '<tr style="background-color:blue;">';
    }
    echo "<td>2 * $i<?td><td>$result<?td><?tr>";
}
?>   
 </table>

</body>
</html>























