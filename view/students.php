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
        <div class="col-lg-6 mt-5">
            <h5>Students</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mt-5">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">School Board</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $student) { ?>
                    <tr>
                        <td><?php echo $student['full_name'] ?></td>
                        <td><?php echo $student['name'] ?></td>
                        <td><?php echo $student['created_at'] ?></td>
                        <td>
                            <a class="btn btn-info" href="/students/<?php echo $student['id'] ?>" role="button">View</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
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
