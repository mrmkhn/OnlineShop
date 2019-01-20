<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>show product</title>
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
</head>

<body >



<div class="row">
    <div class="col-md-12">
        <br>
        <h3 align="center">pruduct data</h3>
        <br>

<table>

    <tr>
        <th>name</th>
        <th>type</th>
        <th>price</th>
        <th>count</th>
        <th>description</th>
        <th>file</th>

    </tr>
    @foreach($t as $post)

        <tr>
            <td> {{ $post->name }} </td>
            <td> {{ $post->type }} </td>
            <td> {{ $post->price }} </td>
            <td> {{ $post->count }} </td>
            <td> {{ $post->description }} </td>
            <td> {{ $post->file }} </td>

        </tr>
    @endforeach



</table>
    </div>






</div>

















</body>
</html>
