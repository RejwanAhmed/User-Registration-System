<!doctype html>
<html lang="en">

<head>
    <title>User Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class = "body-color">
    <div class="container ">
        <div class="row justify-content-center d-flex align-items-center" style = "height:100vh">
            <div class="col-lg-5 col-md-8 col-sm-8 col-12 shadow p-3 rounded form-setting border text-dark">
                <h3 class = "text-center">Register Yourself</h3>
                <hr>
                {{-- Success Message --}}
                @if (session('msg'))
                    <div class="alert alert-success text-center">
                        {{ session('msg') }}
                    </div>
                @endif

                <form action="{{ route('user.register') }}" method = "POST" id = "registration-form">
                    @csrf
                    {{-- First Name --}}
                    <div class="form-group mt-1">
                        <label for="">First Name: <span class = "text-danger">*</span></label>
                        <input type="text" class = "form-control" name = "firstName" value = "{{ old('firstName') }}"
                            required>
                    </div>
                    @error('firstName')
                        <small id = "firstName" class = "text-danger fw-bold">{{ $message }}</small>
                    @enderror

                    {{-- Last Name --}}
                    <div class="form-group mt-1">
                        <label for="">Last Name: <span class = "text-danger">*</span></label>
                        <input type="text" class = "form-control" name = "lastName" value = "{{ old('lastName') }}"
                            required>
                    </div>
                    @error('lastName')
                        <small id = "lastName" class = "text-danger fw-bold">{{ $message }}</small>
                    @enderror

                    {{-- Email --}}
                    <div class="form-group mt-1">
                        <label for="">Email: <span class = "text-danger">*</span></label>
                        <input type="text" class = "form-control" name = "email" value = "{{ old('email') }}"
                            id = "email" required>
                    </div>
                    <small id = "error_email" class = "text-danger fw-bold">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </small>

                    {{-- Password --}}
                    <div class="form-group mt-1">
                        <label for="">Password: <span class = "text-danger">*</span></label>
                        <input type="password" class = "form-control" name = "password" id = "password">
                    </div>
                    @error('password')
                        <small id = "password" class = "text-danger fw-bold">{{ $message }}</small>
                    @enderror

                    {{-- Confirm Password --}}
                    <div class="form-group mt-1">
                        <label for="">Confirm Password: <span class = "text-danger">*</span></label>
                        <input type="password" class = "form-control" name = "password_confirmation"
                            id = "password_confirmation">
                    </div>

                    <small id = "error_password_confirmation" class = "text-danger fw-bold">
                        @error('password_confirmation')
                            {{ $message }}
                        @enderror
                    </small>


                    {{-- Submit Button --}}
                    <div class="form-group mt-2">
                        <button class = "btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/registration-validation.js') }}"></script>
