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

    <form action="" method="POST" id="frm">
    
        <p>Name</p>
        <br>
        <input type="text" name="name" id="">
        <br>
        <p>Email</p>
        <input type="email" name="email">
        <br>
        <br>
        <button type="submit" name="submit" id="frmsubmit">Submit</button>
        @csrf
    </form>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $('#frm').submit(function(e) {
        e.preventDefault();
        $('#frmsubmit').attr('disabled',true);
        $('#frmsubmit').attr('value',"Please wait....")
        $.ajax({
                url:"{{url('postinsert')}}" ,
        data: jQuery('#frm').serialize(),
            type: 'POST',
            success: function(result) {
               $('#status').html(result.status);
               $('#frm')[0].reset();
               $('#frmsubmit').attr('disabled',false);
               $('#frmsubmit').attr('value','Submit');
            }
        });
        });
    </script>
</body>

</html>