<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">

    <title>LibraFire Test</title>
</head>
<body>

<div class="container">
    <?php include '_header.php'?>
    <div class="row">
        <div class="col-md-12 mt-5">
            <a class="btn btn-danger float-right" href="../../students" role="button">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mt-5">
            <h5>Student</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mt-5">
            <?php strpos($data, 'xml') ? print_r(htmlspecialchars($data, ENT_QUOTES))  : print_r($data)  ?>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous">
</script>

</body>
</html>
