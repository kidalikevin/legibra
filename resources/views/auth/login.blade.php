@extends('layouts.app')

@section('content')
<div style="padding-top:10%;" class="container">
    <div class="row">
        <div style="padding:4%;" class="col-lg-4 col-lg-offset-3">
        <div class="panel panel-default" style="border-radius:0px;">
                <!-- <div class="panel-heading">Login</div> -->
                <div  class="panel-body">

                <section class="row">
                <section class="col-lg-8 col-lg-offset-2">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col l12 control-label">E-Mail Address</label>

                            <div class="col 12">
                                <input autocomplete="new-email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col l12 control-label">Password</label>

                            <div class="col 12">
                                <input autocomplete="new-password" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col l12">
                                <center>
                                    <button style="background:#4A86E8;border-radius:0px;" type="submit" class="btn btn-primary btn-large">
                                        Login
                                    </button>
                                </center>


                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col l12">
                             <center><span>You don't have an account.<br/><a href="{{ url('register') }}">Sign up</a></span></center>
                         </div>
                     </div>

                 </form>

                 </section>
                 </section>



             </div>
         </div>
     </div>
 </div>
</div>
@endsection
