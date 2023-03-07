@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َAnimated Login Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

<form class="box" method="POST" action="{{ route('register') }}" >
    @csrf
  <h1>مستخدم جديد</h1>
  <input id="name" type="text" placeholder="الأسم" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
  @error('name')
  <span class="invalid-feedback" role="alert">
      <strong class="error-mess">يرجي كتابت أسمك</strong>
  </span>
@enderror
  <input id="email" type="email" placeholder="الأيميل" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
  @error('name')
  <span class="invalid-feedback" role="alert">
      <strong class="error-mess">يرجي كتابة ايميل صالح</strong>
  </span>
@enderror
  <input id="password" type="password" placeholder="كلمة المرور" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
  @error('password')
  <span class="invalid-feedback" role="alert">
      <strong class="error-mess">يرجي ان تكتب ما لا يقل عن 8 احرف</strong>
  </span>
@enderror
<input id="password-confirm" placeholder="تأكيد كلمة المرور" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
@error('password')
<span class="invalid-feedback" role="alert">
    <strong class="error-mess">كلمة المرور غير متطابقة</strong>
</span>
@enderror
  <input type="submit" name="" value="Signup">
</form>


  </body>
</html>
@endsection
