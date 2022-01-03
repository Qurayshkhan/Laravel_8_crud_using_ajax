<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>

<body>

    <div class="alert alert-success">
        <p id="status"></p>
    </div>

    <h1>Insert Data Using Ajex in Laravel</h1>

    <form action="" method="POST" id="form">
        @csrf
        <p>Post</p>
        <br>
        <input type="text" name="post" id="">
        <br>
        <p>Comment</p>
        <input type="text" name="comment">
        <br>
        <br>
        <button type="submit" name="submit" id="submit">Submit</button>
        <br><br>
        <a href="{{route('list')}}"><button>Show</button></a>
     

    </form>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#form').submit(function(e) {
                e.preventDefault();
                $('#submit').attr('disabled', true);
                $.ajax({
                    url: "{{route('postreq')}}",
                    type: "POST",
                    data: $('#form').serialize(),
                    success: function(result) {
                        console.log('Data send Successfully');
                        $('#submit').attr('disabled', false);
                    }
                });
            });
        });
    </script>
</body>

</html>