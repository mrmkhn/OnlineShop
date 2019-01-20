<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <style>
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button1 {width: 250px;}
        .button2 {width: 50%;}
        .button3 {width: 100%;}
    </style>
</head>
<body>

<div class="jumbotron text-center" style=" background-color:white">
    <h4 style=" color:darkgreen ; background-color:white" >!محصول جدید با موفقیت ثبت شد</h4>
    <p></p>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">

            <a href="/add-product">  <button class="button button3">افزودن محصول جدید</button></a>

            <a href="/retrieved">  <button class="button button3">مشاهده تمام محصولات</button></a>

        </div>
        <div class="col-sm-4">

        </div>
    </div>
</div>

</body>
</html>
