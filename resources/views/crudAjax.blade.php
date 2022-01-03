<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <title>Hello, world!</title>
</head>

<body>


    <div class="container bg-dark text-white px-5 py-4 mt-2">
        <h1>Crud Using Ajax</h1>
    </div>
    <div class="container mt-2">


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#insertdata">
Add Data
</button>
        <!-- Modal strat add form -->
        <div class="modal fade" id="insertdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Insert Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                    </div>
                    <form action="" id="form" method="POST">
                        @csrf
                        <div class="modal-body">


                            <div class="form-group">
                                <label for="">Email address</label>
                                <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" id="" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="">post</label>
                                <input type="text" class="form-control" name="post" id="" placeholder="Enter post">
                            </div>
                            <div class="form-group">
                                <label for="">Comments</label>
                                <input type="text" class="form-control" name="comment" id="" placeholder="Enter comments">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- End add Form --}} {{-- start Edit data --}}

        <div class="modal fade" id="editdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
                    </div>
                    <form action="" id="editform" method="POST">
                        @csrf
                        <div class="modal-body">
                            <input type="hidden" id="id" name="id">
                            <div class="form-group">
                                <label for="">Email address</label>
                                <input type="email" class="form-control" name="email" id="editemail" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" id="editname" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="">post</label>
                                <input type="text" class="form-control" name="post" id="editpost" placeholder="Enter post">
                            </div>
                            <div class="form-group">
                                <label for="">Comments</label>
                                <input type="text" class="form-control" name="comment" id="editcomment" placeholder="Enter comments">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" id="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- End edit data --}}



        <div class="container mt-3">
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Email</th>
                        <th scope="col">Name</th>
                        <th scope="col">Post</th>
                        <th scope="col">Comments</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->email}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->post}}</td>
                        <td>{{$item->comment}}</td>
                        <td>
                            <button type="button" class="edit btn btn-success btn-lg editbtn" data-toggle="modal" data-target="#editdata" id="{{$item->id}}">
            Edit
            </button>

                            <button class="btn btn-danger btn-lg delete" data-id="{{ $item->id }}" data-token="{{ csrf_token() }}">Delete</button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>




    </div>













    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>



    <script>
        $(document).ready(function() {
            $('#form').submit(function(e) {

                e.preventDefault();
                $('#submit').attr('disabled', true);
                $.ajax({
                    type: "POST",
                    url: "{{route('submitform')}}",
                    data: $('#form').serialize(),
                    success: function(result) {
                        console.log(result);
                        $('#submit').attr('disabled', false);
                        $('#form')[0].reset();
                        location.reload();


                    }
                });
            });



        });
    </script>

    <script>
        $(document).ready(function() {

            edits = document.getElementsByClassName('edit');
            Array.from(edits).forEach((element) => {
                element.addEventListener("click", (e) => {
                    console.log("edit ", );
                    tr = e.target.parentNode.parentNode;

                    email = tr.getElementsByTagName("td")[0].innerText;
                    name = tr.getElementsByTagName("td")[1].innerText;
                    post = tr.getElementsByTagName("td")[2].innerText;
                    comments = tr.getElementsByTagName("td")[3].innerText;
                    console.log(email, name, post, comments);

                    editemail.value = email;
                    editname.value = name;
                    editpost.value = post;
                    editcomment.value = comments;
                    id.value = e.target.id;
                    console.log(e.target.id);

                });
            });
            $('#editform').submit(function(e) {
                e.preventDefault();
                var id = $('#id').val();
                $.ajax({
                    url: "editform/" + id,
                    type: "POST",
                    data: $('#editform').serialize(),
                    success: function(result) {
                        console.log(result);
                        location.reload();
                        $('#editform')[0].reset();
                    }
                });
            });

            $(".delete").click(function() {
                var id = $(this).data("id");
                var token = $(this).data("token");
                $.ajax({
                    url: "deleteform/" + id,
                    type: 'PUT',
                    dataType: "JSON",
                    data: {
                        "id": id,
                        "_method": 'DELETE',
                        "_token": token,
                    },
                    success: function() {
                        console.log("Data Delete Successfully");
                        location.reload();
                    }
                });

                console.log("It failed");
            });
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>