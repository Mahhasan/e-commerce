<!DOCTYPE html>
<html lang="en">
<head>
    <title>Karupalli Enterprise Solution</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/ico" href="image/logo.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="allfile/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="allfile/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="allfile/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="allfile/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="image/logo.png" alt="IMG">
            </div>
            @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                    @endif
            <form class="login100-form" method="POST" action="{{ route('login') }}">
                @csrf
					<span class="login100-form-title">
						Karupalli Enterprise Solution
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>
            </form>
            <div class="suppliar" style="margin-top:10px">
                            <a class="btn btn-success" href="{{ route('suppliarregistrationform')}}">Supplier Registration</a>
                    </div>
        </div>
    </div>
</div>
<script src="allfile/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="allfile/bootstrap/js/popper.js"></script>
<script src="allfile/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="allfile/select2/select2.min.js"></script>
<script src="allfile/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>
