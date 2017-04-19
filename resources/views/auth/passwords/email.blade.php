@extends('layouts.default')
@section('content')

@include('header.header')



<!-- SECTION THREE -->
<section style="background:#fff;padding-top: 0%;margin-top:-2.8% !important;" id="contacts" class="row">
    {{--MENU TOP SECTION--}}
    @include('header.menubar')
    @if (session('status'))
    <div class="col l6 offset-l6 center">
    <div style="font-family: Segoe UI;font-size:18px;" class="alert alert-success">
         <i class="material-icons left">done</i> {{ session('status') }}
    </div>
     </div>
    @endif



    <form id="reset_form" class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
        {{ csrf_field() }}

         <div class="col l6 offset-l4">

         <div class="col l6 offset-l2">
<!--
                <section style="margin-bottom: 3%;" class="col l2">
                </section>
                <section style="margin-bottom: 3%;padding-top:3%;" class="col l10 left">
                    <span style="font-family: Segoe UI Regular;font-size:20px;">GET NEW PASSWORD</span>
                </section> -->
            </div>
            </div>


        <article style="padding-top:5%;padding-bottom:5%;" class="col l4 offset-l4 s12">
            <div class="col l5">
               <h6 class="register_labels">EMAIL ADDRESS*</h6>
           </div>
           <div class="col l7">

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                <div class="col-md-6">
                    <input style="font-family:Georgia;" id="email" type="email" class="form-control inputs" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                    <span style="color:red;font-family:Segoe UI Light;" class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span><br/><br/>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div style="padding-left:4%" class="col-md-6 col-md-offset-5">
                  <img style="cursor:pointer;" id="reset_btn" src="{{ asset('Colored buttons/imageedit_139_6080648042.png') }}" class="responsive-img">
                    <!-- <button style="background:#4a86e8;height:50px;font-family:Segoe UI;font-size:10px;" type="submit" class="btn btn-primary z-depth-0 btn_actions">
                        Send Password Reset Link
                    </button> -->
                </div>
            </div>
        </form>
    </div>

</article>


</section>


<!-- FOOTER SECTION -->
@include('footer.footer')
@include('modal.editcontact')

@endsection
