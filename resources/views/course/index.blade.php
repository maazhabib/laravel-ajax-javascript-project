<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>COURSE</title>
</head>
<body>
    <div class="container my-5">
        <h1>Courses</h1>

        <a href="{{ route('course.create') }}"><button class="btn btn-success">Add Course</button></a>
        <a href="{{ route('user.index') }}"><button class="btn btn-info">show user</button></a>

        <table class="table table-hover table-dark my-2">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($course_data as $key => $course)
                    <tr>
                        <th scope="row">{{ $course->cid }}</th>
                        <td>{{ $course->cname }}</td>
                        <td><a href="" class="btn btn-warning btn-sm">Edit</a></td>
                        <td><a href="" class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

