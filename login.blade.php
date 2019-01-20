<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>login admin</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
<form class="form-signin"  action="/add-product" method="post">

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <img class="mb-4" src="../img/logo.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputusername" class="sr-only">UserName</label>
    <input type="text" id="username" name="username" class="form-control" placeholder="UserName" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="text"  id="password" name="password" class="form-control" placeholder="password" required autofocus>
    <div class="checkbox mb-3">
        <div><br></div>


    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

</form>
</body>
</html>
