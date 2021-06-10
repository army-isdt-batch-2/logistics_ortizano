<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <form enctype="multipart/form-data" action="{{ URL::route('app.registration.verify')}}" method="post"
                class="col-4">
                @csrf
                <form class='col-4'>

                    <div class="mb-3">

                        <label class="form-label">Avatar</label>
                        <input type="file" class="form-control" name="file">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">

                    </div>
                    <div class="mb-3">

                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email">

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <a href="{{ URL::route('app.login')}}">Login to your Account</a>
                    <br>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
</body>

</html>