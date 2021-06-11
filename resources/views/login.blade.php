
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi PPIC</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

 
</head>


<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
<div class="row justify-content-center mt-5 pt-lg-5">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body p-lg-5 p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center mb-4">
                                <h1 class="h4 text-gray-900">Sistem Informasi PPIC</h1>
                                <span class="text-muted">Silakan login dibawah ini!</span>
                            </div>
        <form action="{{ route('login-masuk') }}" method="post">
        @csrf
<input type="hidden" name="csrf_test_name" value="0448a7e6879209c91c95f1a296f0aa4e" />  
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Input Username" name="username" required>
								<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group">
                              <input type="password" class="form-control" placeholder="Input Password" name="password" required>
                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>                          
                            </div>
                              <button type="submit" class="btn btn-primary btn-user btn-block">
                                Login
                            </button>
                            <div class="text-center mt-4">
                                <a class="small" href="https://api.whatsapp.com/send?phone=628981436617">Lupa kata sandi?</a>
                            </div>
                            </form>                        
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</body>

</html>