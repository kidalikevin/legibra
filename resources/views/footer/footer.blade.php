@if(!Auth::user())
<div class="fixed-action-btn">
  <a href="{{ url('view-cart') }}" style="background:#4a86e8;" class="btn-floating btn-large">
    <i class="small material-icons left">shopping_cart</i>
  </a>

</div>
@elseif (Auth::user() -> user_type == 0)
  <div class="fixed-action-btn">
    <a href="{{ url('view-cart') }}" style="background:#4a86e8;" class="btn-floating btn-large">
      <i class="small material-icons left">shopping_cart</i>
    </a>

  </div>
  @else

@endif

<footer style="background:#000;margin-top:0px !important;" class="page-footer">
  <div id="container-fluid" style="background:#000;height:60vh;padding-top:5%;" class="container-fluid">
    <diV class="row">
      <div class="col l4 s12">

        <section class="col l8 s8">
          <h5 class="white-text footer_titles">FOLLOW US</h5>

<span class="hide-on-med-and-up">

          <article class="col s4 l3"><img width="70%" src="{{ asset('images/facebook-logo.png') }}" class="img-responsive"></article>
          <article class="col s4 l3"><img width="70%" src="{{ asset('images/twitter-logo-on-black-background.png') }}" class="img-responsive"></article>
            <article class="col s4 l3"><img width="70%" src="{{ asset('images/instagram-logo.png') }}" class="img-responsive"></article>
          </span>

          <span class="hide-on-med-and-down">

          <article class="col s4 l3"><img width="100%" src="{{ asset('images/facebook-logo.png') }}" class="img-responsive"></article>
          <article class="col s4 l3"><img width="100%" src="{{ asset('images/twitter-logo-on-black-background.png') }}" class="img-responsive"></article>
             <article class="col s4 l3"><img width="100%" src="{{ asset('images/instagram-logo.png') }}" class="img-responsive"></article>
          </span>

        </section>

      </div>
      <div class="col l4 s12">
        <article class="col l12 s12">

        <h5 class="white-text footer_titles hide-on-med-and-down">COMPANY INFO</h5>
        <h5 style="margin-top:10% !important;" class="white-text footer_titles hide-on-med-and-up">COMPANY INFO</h5>
        <ul id="footer_list">
          <li><a class="grey-text text-lighten-3" href="#header">ABOUT US</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ url('contact') }}">CONTACT US</a></li>
          <li><a class="grey-text text-lighten-3" href="#header">LOG IN/REGISTER</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ url('view-cart') }}">YOUR CART ( {{ Cart::count() }} )</a></li>
        </ul>
        </article>
      </div>
      <div class="col l4 s12">
        <article class="col l9">
        <h5 class="white-text footer_titles">SUBSCRIBE</h5>
        <p class="newsletter_text">
          To receive NEWSLETTERS  and UPDATES please subscribe and stay in the know.
        </p>
        </article>
        <div style="padding-top:5%;" class="col l12 s12">
          <article id="loader_display" class="col l6 s12 offset-s0 offset-l3">
            <div class="progress">
              <div class="indeterminate"></div>
            </div>
          </article>
          <form action="{{ url('subscribeform') }}" method="post" id="subscribeform">
           <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
           <section style="padding-right:0px !important;" class="col l8 s6 m8">
            <input id="sub_email" style="font-family: Segoe UI Regular;background:#fff;" placeholder="Your email address" type="text" name="email" class="inputs subscribe_email">
          </section>
          <section style="padding-left:0px !important;" class="col l4 s6 m4 hide-on-med-and-down">
            <img style="cursor:pointer:margin-top:10% !important;" src="{{ asset('Colored buttons/subscribe.png') }}" class="responsive-img">

           <!--  <button type="button" style="	font-family:Segoe UI Regular !important;;height:52.4px;background:#999;" class="sub_one_btn" id="subscribe">SUBSCRIBE</button> -->
          </section>
          <!-- phone -->
           <section style="padding-left:0px !important;" class="col l4 s6 m4 hide-on-med-and-up">
            <!--<button type="button" style="margin-top:4% !important;font-family:Segoe UI Regular !important;;height:52px;background:#999;" class="sub_one_btn" id="subscribe">SUBSCRIBE</button>-->
             <img style="cursor:pointer:margin-top:10% !important;" src="{{ asset('Colored buttons/subscribe.png') }}" class="responsive-img">
          </section>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="footer-copyright">
  <div style="background:#000;" class="container-fluid center">
    <span class="copy">Copyright <?php echo date('Y'); ?>. All Rights Reserved. Techlink Limited</span>
  </div>
</div>
</footer>
