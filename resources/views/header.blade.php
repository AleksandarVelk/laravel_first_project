
<script async type='text/javascript' src='//cdn.fancybar.net/ac/fancybar.js?zoneid=1502&serve=C6ADVKE&placement=w3layouts' id='_fancybar_js'></script>


<!--header start here-->
<div class="header">
    <div class="container">
        <div class="header-main">
               <div class="head-left">
                    <div class="phone">
                        <p>Telefon<span class="ph-numb">+389 071 238 558</span></p>
                    </div>
                    <div class="search">        
                          <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i> </i></a>
                    </div>
                     <div id="small-dialog" class="mfp-hide">
                    <div class="search-top">
                            <div class="login">
                                <input type="submit" value="">
                                <input type="text" value="Search Here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">     
                            </div>
                            <p>Agrom</p>
                        </div>              
                    </div>
            <!---->
                  <div class="clearfix"> </div>
                </div>
               <div class="header-right">
                   <div class="logo">
                       <h1><a href="index.html">Agrom</a></h1>
                   </div>
                   <div class="header-login">
                     <div class="top-nav-right">
                        <div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
                                <div id="loginBox">                
                                    <form id="loginForm">
                                            <fieldset id="body">
                                                <fieldset>
                                                      <label for="email">Email Address</label>
                                                      <input type="text" name="email" id="email">
                                                </fieldset>
                                                <fieldset>
                                                        <label for="password">Password</label>
                                                        <input type="password" name="password" id="password">
                                                 </fieldset>
                                                <input type="submit" id="login" value="Sign in">
                                                <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                                            </fieldset>
                                        <span><a href="#">Forgot your password?</a></span>
                                 </form>
                            </div>
                      </div>
                   </div>
              </div>
            <div class="clearfix"> </div>
         </div>
         <div class="clearfix"> </div>
     </div>
   </div>
</div>
<!--header end here-->
<!--top nav start here-->
<div class="top-navg-main">
    <div class="container">
        <div class="top-navg">
                       <span class="menu"> <img src="images/icon.png" alt=""/></span>
                <ul class="res">
                @if(count($elements) > 0)
                  @foreach($elements as $element)
                  
                    <li><a href="index.html" class="active hvr-sweep-to-bottom">{{ $element->title }}</a></li> 
              
                  @endforeach
                @endif 
                 </ul>
                    <!-- script-for-menu -->
                         <script>
                           $( "span.menu" ).click(function() {
                             $( "ul.res" ).slideToggle( 300, function() {
                             // Animation complete.
                              });
                             });
                        </script>
                <!-- /script-for-menu -->
           </div>
     </div>
</div>
<!--top nav end here-->
