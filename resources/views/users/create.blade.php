<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>FORM</title>
</head>
<body>

    <div class="container my-5">
        <h1>ADD USER</h1>
        <form id="user_form">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="course">Choose Courses:</label>
                <select name="course_id" class="form-control" >
                    @foreach ($course as $corse)
                        <option value="{{ $corse->cid }}">{{ $corse->cname }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $('#user_form').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: "{{ route('user.store') }}",
                method:"POST",
                data:$('#user_form').serialize(),
                success: function (response)
                {
                    alert("User Added Successfully");
                    window.location.href="{{ route('user.index') }}";
                },
                    error: function(err)
                {
                    console.error(`Error: ${err}`);
                }
            });
        })
    </script>


</body>
</html>
