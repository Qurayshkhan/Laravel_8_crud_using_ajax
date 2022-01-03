<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>POST REQUEST USING AJAX</title>
</head>

<body>

    <div class="container">


        <strong id="status">
                <div class="alert  alert-dismissible fade show" role="alert">
                </div>
            </strong>

        <h3>POST REQUEST USING AJAX</h3>
        <form action="" method="POST" id="form">
            @csrf


            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="title" value="" placeholder="Title">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">details</label>
                <div class="col-sm-10">
                    <textarea name="details" class="form-control" id="" cols="30" rows="10"></textarea>
                    <button type="submit" name="submit" id="submit" class="btn btn-success mt-2">Submit</button>
                </div>
            </div>

        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#form').submit(function(e) {
                e.preventDefault();
                $('#submit').attr('disabled', true)
                $.ajax({

                    url: "{{route('post.ajaxpost')}}",
                    type: "POST",
                    data: $('#form').serialize(),
                    success: function(result) {
                        $('status').addClass('alert-success');
                        $('#status').html(result.status);
                        $('#form')[0].reset();
                        $('#submit').attr('disabled', false);
                    }
                });

            });


        })
    </script>
</body>

</html>