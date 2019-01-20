<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">
    <title>add product</title>
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="form-validation.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
</head>

<body class="bg-light">

<div class="container">
    <div class="py-5 text-center">

        <p class="lead">Welcome to the admin panel</p>
    </div>


    <div class="row">
    <div class="col-md-5 mb-3">
        <form class="needs-validation"  action="result" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="row">
                <div class="col-md-5 mb-3">
                    <label for=" product name">product name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid product name is required.
                    </div>
                </div>

            </div>


            <label for="product type">  product type</label>

            <div > <select class="custom-select d-block w-100" id="type"   name="type"  required>
                    <option value="">...</option>
                    <option value="1">چرم مردانه</option>
                    <option value="2">ورزشی مردانه</option>
                    <option value="3">کالج مردانه</option>
                    <option value="4">چرم زنانه</option>
                    <option value="5">ورزشی زنانه</option>
                    <option value="6">مجلسی زنانه</option>
                    <option value="7">کالج زنانه</option>
                    <option value="8">بچه گانه دخترانه</option>
                    <option value="9">بچه گانه پسرانه</option>

                </select>
            </div>
            <div class="invalid-feedback">
                Please select a valid product type.
            </div>






    <hr class="mb-4">



    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="cc-name">price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="" required>
            <div class="invalid-feedback">
                price is required
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="cc-number">count</label>
            <input type="number" class="form-control" id="count"  name="count" placeholder="" required>
            <div class="invalid-feedback">
                count is required
            </div>
        </div>
    </div>



            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="description">description</label>
                    <textarea  colss="form-control" name="description"  id="description" placeholder="">
                        </textarea>
                </div>
            </div>


            <hr class="mb-4">
            <div class="row">

                    <label for="fileupload"> Select a image to upload</label><br>
                    <input type="file" name="file"  id="file" >




            <button class="btn btn-primary btn-lg btn-block" type="submit">ADD PRODUCT</button>
</form>



</div>

<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1"></p>

</footer>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';

            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <script>
        $(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
        var myDropzone = new Dropzone("div#dropzone", {
            url: "{{route('uploadDropzonePost')}}"
        });
    </script>
</div>
</body>
</html>
