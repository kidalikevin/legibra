@extends('layouts.default')
@section('content')
<input type="hidden" value="<?php $sliders = DB::select( DB::raw('SELECT * FROM sliders') ); ?>">
<input type="hidden" value="<?php $logos = DB::select( DB::raw('SELECT * FROM logos') ); ?>">
<input type="hidden" value="<?php $categories = DB::select( DB::raw('SELECT * FROM category') ); ?>">

<input type="hidden" value="<?php $contacts = DB::select( DB::raw('SELECT * FROM contact') ); ?>">
<input type="hidden" value="<?php $names = DB::select( DB::raw('SELECT * FROM sub_cat') ); ?>">

@include('header.header')


<section style="background:#fff;padding-top: 0%;margin-top:-1% !important;" id="contacts" class="row">
    {{--MENU TOP SECTION--}}
    @include('header.menubar')
       @if (session('status'))
    <div class="col l6 offset-l4 center">
    <div style="font-family: Segoe UI;font-size:18px;" class="alert alert-success">
         <i class="material-icons left">done</i> {{ session('status') }}
    </div>
     </div>
    @endif
 <div class="col l6 offset-l3">
       <div class="col l16 offset-l4">

                <section style="margin-bottom: 3%;" class="col l2">
                    <img width="80%" id="img_login" src="{{ asset('images/reuse.png') }}" class="responsive-img">
                </section>
                <section style="margin-bottom: 3%;padding-top:3%;" class="col l10 left">
                    <span style="font-family: Segoe UI;font-size:18px;">Change your password</span>
                </section>
            </div>
         
    <form id="changepass_btn_form" class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
        {{ csrf_field() }}

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" style="text-align:right;" class="col l4">E-Mail Address</label>

            <div class="col l6">
            <input id="email" type="email" class="form-control inputs" name="email" value="{{ $email or old('email') }}" required autofocus>

                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" style="text-align:right;" class="col l4">Password</label>

            <div class="col l6">
            <input id="password" type="password" class="form-control inputs" name="password" required>

                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label for="password-confirm" style="text-align:right;" class="col l4">Confirm Password</label>
            <div class="col l6">
            <input id="password-confirm" type="password" class="form-control inputs" name="password_confirmation" required>

                @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="col l6 offset-l6">
        <img style="cursor:pointer;" id="changepass_btn" src="{{ asset('Colored buttons/imageedit_139_6080648042.png') }}" class="responsive-img">
           <!-- <button style="background:#4a86e8;font-family:'Segoe U';height:45px;font-size: 12px;margin-top: 5%;" class="btn center">RESET</button>-->
        </div>
    </form>
    </div>



</section>






<!-- FOOTER SECTION -->
@include('footer.footer')


@endsection
