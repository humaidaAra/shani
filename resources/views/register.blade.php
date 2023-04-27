<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
</head>

<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/register">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-4">

                <div class="form-outline">
                    <input type="text" id="name" name="name" class="form-control form-control-lg" required />
                    <label class="form-label"  for="name">Name</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4 pb-2">

                <div class="form-outline">
                    <input type="username" id="username" name="username" class="form-control form-control-lg" required />
                    <label class="form-label" for="username">username</label>
                </div>

            </div>

            <div class="col-md-6 mb-4 pb-2">

                <div class="form-outline">
                    <input type="email" id="emailAddress" name="email" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">Email</label>
                </div>

            </div>

            <div class="col-md-6 mb-4 pb-2">

                <div class="form-outline">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" required />
                    <label class="form-label" for="password">Password</label>
                </div>

            </div>
        </div>


        <div class="mt-4 pt-2">
            <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
