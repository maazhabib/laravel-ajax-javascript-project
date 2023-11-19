

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>TABLE</title>
</head>
<body>
    <div class="container my-5">
        <div class="alert"></div>
        <h1>USER DATA</h1>
        <a href="{{ route('user.create') }}" class="btn btn-success">Add User</a>
        <a href="{{ route('course.index') }}" class="btn btn-info">Show Course</a>
        <table class="table table-dark table-hover my-2 list-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Courses</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr id="tr_{{ $user->id }}">
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->course->cname }}</td>
                        <td><a href="" class="btn btn-warning btn-sm">Edit</a></td>
                        <td><a data-id={{ $user->id }} data-url="{{ route('user.destroy', $user->id) }}" class="btn btn-danger btn-sm deleteRecord">Delete</a></td>
                    </tr>
                @empty
                    <tr class="text-center">
                        <td colspan="100%">No record found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/oop.js') }}"></script>
    <script>
        // Delete data
        // $(document).on('click', '.deleteRecord', function(){
        //     $('.alert').fadeIn();
        //     var id = $(this).data("id");
        //     var token = $("meta[name='csrf-token']").attr("content");
        //     $.ajax(
        //     {
        //         url: $(this).data('url'),
        //         type: 'DELETE',
        //         data: {
        //             "id": id,
        //             "_token": token
        //         },
        //         success: function (data){
        //             $(`#tr_${id}`).remove();
        //             $('.alert').addClass('alert-success').html(data.success);
        //             setTimeout(() => {
        //                 $('.alert').fadeOut();
        //             }, 2000);
        //             if($('.user-table >tbody >tr').length == 0) {
        //                 $('.user-table >tbody').append(`
        //                     <tr class="text-center">
        //                         <td colspan="100%">No record found.</td>
        //                     </tr>
        //                 `);
        //             }
        //         },
        //         error: function(data) {
        //             $('.alert').addClass('alert-danger').html(data.responseJSON.error);
        //             setTimeout(() => {
        //                 $('.alert').fadeOut();
        //             }, 2000);
        //         }
        //     });

        // });
    </script>
</body>
</html>
