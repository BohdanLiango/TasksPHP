<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="style/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create Task</h1>
            <hr>
            <form action="store.php" method="post">
                <h4 class="text-center">Title</h4>
                <div class="form-group">
                    <input type="text" class="form-control" name="title">
                </div>

                <h4 class="text-center">Text</h4>
                <div class="form-group">
                    <textarea name="content" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn-success" type="submit">Create</button>
                </div>

            </form>
            <a href="/" class="btn btn-success">Go Back!</a>
        </div>
    </div>
</div>
</body>
</html>