<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>COURSE</title>
</head>
<body>
    <div class="container my-5">
        <div class="alert"></div>
        <h1>Courses</h1>

        <a href="{{ route('course.create') }}"><button class="btn btn-success">Add Course</button></a>
        <a href="{{ route('user.index') }}"><button class="btn btn-info">show user</button></a>

        <table class="table table-hover table-dark my-2 list-table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($course_data as $key => $course)
                    <tr id="tr_{{ $course->cid }}">
                        <th scope="row">{{ $course->cid }}</th>
                        <td>{{ $course->cname }}</td>
                        <td><a href="" class="btn btn-warning btn-sm">Edit</a></td>
                        <td><a data-id={{ $course->cid }} data-url="{{ route('course.destroy', $course->cid) }}" class="btn btn-danger btn-sm deleteRecord">Delete</a></td>
                    </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="100%">No record found.</td>
                        </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/oop.js') }}"></script>
</body>
</html>

