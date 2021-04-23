<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>

    <style>
        .parsley-errors-list li {
            list-style:none;
            color: red;
        }
    </style>
</head>
<body>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h1>Register</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{route('auth.registersubmit')}}" id="registerForm" method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required data-parsley-pattern="[a-zA-Z ]+$" data-parsley-trigger="keyup" />
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required data-parsley-type="email" data-parsley-trigger="keyup">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required data-parsley-length="[6,12]" data-parsley-trigger="keyup">
                            </div>
                            <div class="form-group">
                                <label for="password">Confirm Password</label>
                                <input type="cpassword" name="cpassword" id="cpassword" class="form-control" required data-parsley-equalto="#password"  data-parsley-trigger="keyup">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="phone" name="phone" id="phone" class="form-control" required data-parsley-pattern="[0-9]+$" data-parsley-length="[10, 13]" data-parsley-trigger="keyup">
                            </div>
                            <button class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    $(function(){
        $("#registerForm").parsley();
    });
</script>


</body>
</html>