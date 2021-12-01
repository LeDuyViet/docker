

@extends('layouts.app')


@section('content')
<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex justify-content-center">

                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-100 text-center">
                                    <h3 class="mb-4">Đăng Ký</h3>
                                </div>
                            </div>
                            <form action="{{ route('register') }}" method="post" class="signin-form">
                                @csrf
                                @if ($errors->any())
                                    {!! implode('', $errors->all('<div class="alert alert-danger" role="alert">
                                        :message
                                      </div>')) !!}

                                @endif
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Name</label>
                                    <input type="text" class="form-control" placeholder="name" name="name">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Username</label>
                                    <input type="text" class="form-control" placeholder="username" name="username">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Email</label>
                                    <input type="text" class="form-control" placeholder="email" name="email">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="password" name="password">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="password_confirmation" name="password_confirmation">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3">Sign
                                        In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.iqDpUqoRp9.js"></script>
    <script>
        eval(mod_pagespeed_qBnQ96WPW1);
    </script>
    <script>
        eval(mod_pagespeed__CEwjG2SSu);
    </script>
    <script>
        eval(mod_pagespeed_oaROQS6dN_);
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597"
        integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A=="
        data-cf-beacon='{"rayId":"6b64ae6e78643bf8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}'
        crossorigin="anonymous"></script>
</body>
@endsection
