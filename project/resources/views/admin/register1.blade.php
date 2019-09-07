<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Admin | Register</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- BEGIN STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/css/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/css/uniform.default.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/css/components-rounded.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{asset('assets/admin/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/css/login.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END STYLES -->

    <link rel="shortcut icon" href="{{asset('assets/images/logo/foody.png')}}" />

</head>

<body class=" login">
<div class="menu-toggler sidebar-toggler"></div>
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="{{url('/')}}"><img src="{{asset('assets/images/logo/foody.png')}}" alt="-" style="max-width: 150px"/> </a>
</div>


 <div class="card-body">
                    <form method="POST" action="#">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>









<!-- END LOGO -->

<div class="copyright"><?php echo date("Y");?> &copy; All Copyright Reserved.</div>

<!-- BEGIN SCRIPTS -->
<script src="{{asset('assets/admin/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/app.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/login.min.js')}}" type="text/javascript"></script>
<!-- END SCRIPTS -->

</body>
</html>