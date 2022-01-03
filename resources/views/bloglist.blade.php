<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{route('pdf')}}">

        <button id="pdf">Export Pdf</button>
    </a>


    <br><br>
    <table border="2px" width="100%" style="text-align: center;">
        <tr>
            <th>
                Post
            </th>
            <th>
                Comments
            </th>
        </tr>
        @foreach ($list as $item)
        <tr>
            <td>{{$item->post}}</td>
            <td>{{$item->comments}}</td>
        </tr>
        @endforeach
    </table>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    </script>
</body>

</html>