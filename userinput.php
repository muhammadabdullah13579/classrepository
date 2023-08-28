<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container"><form method="post"><div class="mb-3">
    <label for="exampleInputEmail" class="form-label" >name</label>
    <input type="text" class="form-control" name="uname">
    </div>
    <div class="mb-3"><label for="exampleInputEmail" class="form-label" >email</label>
    <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3"><label for="exampleInputEmail" class="form-label" >qualification</label>
    <input type="text" class="form-control" name="qual">
    </div>
    <div class="mb-3"><label for="exampleInputEmail" class="form-label" >work experience</label>
    <input type="text" class="form-control" name="exp">
    </div>
    <button type="submit" class="btn btn-primary" name="getinfo">submit</button>
    </form></div>

    <div class="conatiner">
    <table class="table">
    <thead>
    <tr><th scope="col">name</th><th scope="col">email</th><th scope="col">qualification</th><th scope="col">work experience</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if(isset($_POST['getinfo'])){
        $name = $_POST['uname'];
        $email = $_POST['email'];
        $qual = $_POST['qual'];
        $exp = $_POST['exp'];
        ?>
     <tr>
        <td scope="row"><?php echo $name;?></td>
        <td><?php echo $email ?></td>
        <td><?php echo $qual ?></td>
        <td><?php echo $exp ?></td>
     </tr>
    <?php
    }
    ?></tbody></table></div>
</body>
</html>