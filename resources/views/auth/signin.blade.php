<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pro-Ukom | Signin</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/icon/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <form action="/signin" class="ms-auto me-auto mt-3" style="width: 500px" method="post">
            @csrf
            <div class="border border-secondary rounded-4">
                <h1 class="text-center"><b>Sign In</b></h1>
                <div class="m-3">
                    <div class="mt-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-outline-success rounded-4 w-100">Sign In</button>
                    </div>
                    <div class="mt-3" style="text-align: center">
                        Don't Have An Account? <a href="/signup" class="text-primary" style="text-decoration: none"><b>Signup</b></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="/js/bootstrap.bundle.min.js"></script>

</html>
