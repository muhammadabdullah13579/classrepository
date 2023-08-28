<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div class="container">
        <form  method="post">
        <div class="mn-3">
            <label for="example" class="form-label">entry code</label>
            <input type="text" class="form-control" name="c_code">
            </div>
        <button type="submit" class="btn btn-primary" name="getinfo"  >submit</button>
        </form>
        </div>
        <?php
        if(isset($_POST['getinfo'])){
            $code=$_POST['c_code'];
            $pak= "+92";
            $flag =strcmp($pak,$code);
            if($flag==0){
                echo  "<script> alert('pakistan code')</script>";
            }else {
                echo "<script> alert('invalid code')</script>";
            }
            }
            ?>
    
</body>
</html>