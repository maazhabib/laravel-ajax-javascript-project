

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>TABLE</title>
</head>
<body>
    <div class="container my-5">
        <h1>USER DATA</h1>
        <a href="{{ route('user.create') }}" class="btn btn-success">Add User</a>
        <a href="{{ route('course.index') }}" class="btn btn-info">Show Course</a>
        <table class="table table-dark table-hover my-2">
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
                @foreach ($users as $user)

                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->course_id }}</td>
                        <td><a href="" class="btn btn-warning btn-sm">Edit</a></td>
                        <td><a href="" class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
                    @php
                    dd($user);
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
