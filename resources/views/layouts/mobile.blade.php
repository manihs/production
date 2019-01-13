<!DOCTYPE html>

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#ff9800">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>
<style>@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro');


*{
  padding: 0px;
  margin: 0px;
}
.logo{
  margin-left: 10px;
}
a{
  text-decoration:none;
}
nav{
  position: fixed;
  background: #ff9800;
  width: 100%;
  box-sizing: border-box;
  -webkit-transition: top 1s; /* Safari */
  transition: top 1s;
  z-index: 4;
  
}
.logo{
  font-family: 'Source Sans Pro', sans-serif;
}
.nav-part-one{
  display:flex;
  justify-content: space-between;
  align-items: center;
}
.nav-part-two{
  display:flex;
  justify-content: space-between;
  align-items: center;
}
.logo{
  display:flex;
}
.logo .nav-icons{
  padding: 10px;
  width: 20px;
  height: 20px;
}
.logo div img{
  width: 100%;
}

.span-message{
 position: relative; 
}

.logo .nav-icons span{
  padding: 0px 5px 0px 5px;
    position: absolute;
    top: -5px;
    right: -11px;
    background: #2d2a2a;
    border-radius: 11px;
    font-size: 13px;
    color: white;
}
.nav-part-two input{
  background: none;
  border: none;
  border-bottom: 1px solid white;
  width: 90%;
  color: white;
  padding: 7px;
}

.nav-part-two input:focus
{
  outline: none;
}
.nav-part-two input::placeholder { 
color: white;
}

.nav-part-two .logo .nav-icons{
  margin:0px;
}
/*  */
.bottom-nav{
  z-index: 3;
    position: fixed;
    bottom: 0;
    width: 100%;
    padding: 5px;
    background-color: #ff9800;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    -webkit-transition: bottom 0.2s; /* Safari */
    transition: bottom 0.2s;
}
.bottom-nav .icon {
     width: 28px;
  height: 20x;
}


.active{
  width:30px;
  height: 30x;
  padding-left: 10px;
  padding-right: 10px;
  display: flex;
  flex-direction: column;
  text-align: center;
}
/*  */
.menu-model{
  display: none;
  position:fixed;
  width: 100%;
  bottom:50px;
}
.menu_post_modal{
  display: flex;
  justify-content: space-evenly;
  align-items: center ;
  background: lightgray;
  width: 90%;
  margin: 0 auto;
  border-radius: 5px;
  padding: 5px;
}
.active_modal{
  display:block;
}


  @-webkit-keyframes hidden {
    from { opacity: 0} 
    to {opacity: 1}
  }
  
  @keyframes hidden {
     from {opacity: 0} 
    to {opacity: 1}
  }
  /*  */
  .model{
    position: fixed;
    z-index: 3;
    bottom: -150px;
    width: 100%;
    margin: 0 auto;
    -webkit-transition: bottom 0.6s; /* Safari */
    transition: bottom 0.6s;

  }

.blur{
  position: fixed;
  width: 100%;
  height: 100vh;
  background: #ffffff00;
  top:0;
  display:none;
  padding:5px;
}
.menu span{
  font-size: 12px;
  color: black;
  display: none;
}
</style>
@yield('css')
<body>
<nav>
  <div class="nav-part-one">
      <div class="logo">
        flyer
      </div>
      <div class="logo">
          <div class="nav-icons" id="search">
            <img src="https://img.icons8.com/ios/50/000000/search.png">
          </div>
          <div class="nav-icons">
            <div class="span-message">
                <img src="https://img.icons8.com/ios/50/000000/sms.png">
                <span>1</span>
            </div>
         </div>
         <div class="nav-icons">
           <div class="span-message">
            <img src="https://img.icons8.com/ios/50/000000/appointment-reminders.png">
            <span>13</span>
           </div>
         </div>
         <a href="/menu">
             <div class="nav-icons">
            <img src="https://img.icons8.com/material-rounded/50/000000/menu.png">
          </div>
        </a>
      </div>
    </div>
  <div style="clear:both;"></div>
</nav>
<!--  -->
<div class="main_body">
@yield('content');
</div>
<!--  -->
<div class="model" id="community">
  <div class="menu_post_modal">
  <div>
          <a href=""><img src="https://img.icons8.com/ios/50/000000/visible.png"></a>
        </div>
        <div>
          <a href=""><img src="https://img.icons8.com/ios/50/000000/edit-administrator.png"></a>
        </div>
        <div>
          <a href="/create/community"><img src="https://img.icons8.com/ios/50/000000/add-user-group-man-man.png"></a>
        </div>
        </div>
  </div>
<div class="model" id="posts">
  <div class="menu_post_modal">
        

        <div>
      <a href="/upload/image"><img src="https://img.icons8.com/ios/50/000000/google-images.png"></a>
    </div>
          <div>
            <a href=""><img src="https://img.icons8.com/ios/40/000000/documentary.png"></a>
  </div>
          <div>
            <a href=""><img src="https://img.icons8.com/ios/40/000000/idea.png"></a>
  </div>
      </div>
  </div>
<!--  -->
<footer>
  <div class="bottom-nav">
        <a href="/home">
          <div class="icon menu active">
             <div> <img class="menu" src="https://img.icons8.com/ios/50/000000/news.png"   style="width:70%"></div>
            <span  style="display:inline; color: black; margin-left: -3px;">home</span>
          </div>
        </a>
        <a href="/video">
            <div class="icon menu">
              <div>
                  <img class="menu" src="https://img.icons8.com/ios/50/000000/tv-show.png" style="width:70%">
                </div>
                  <span style="margin-left: -5px;">Video's</span>
                
            </div>
      </a>
      <div class="icon menu" data-model="community">
        <div>
          <img class="menu" src="https://img.icons8.com/ios/50/000000/user-group-man-man.png" style="width:70%">
          </div>
          <span style="margin-left: -19px;">Community</span>
        
    </div>
      <div class="icon menu" data-model="posts">
        <div>
          <img class="menu" src="https://img.icons8.com/ios/50/000000/plus-2-math.png" style="width:70%">
          </div>
          <span>Post's</span>
        
    </div>
      <div class="icon menu">
        <div>
          <img class="menu" src="https://img.icons8.com/ios/50/000000/idea-sharing.png" style="width:70%">
          </div>
          <span>Idea's</span>
    <a href="/profile">
    </div>
      <div class="icon menu">
        <div>
        <img class="menu" src="https://img.icons8.com/ios/50/000000/home-page.png" style="width:70%">
          </div>
        <span>Profile</span>
          
    </div>
    </div>
    </a>
  </footer>
<div class="blur"></div>
@yield('script')
<script>

    $(document).ready(function(){

    $(".menu").click(function(){
    $('.main_body').css('filter','initial');
    $(".model").css('bottom',-150);   
            if($(this).data('model')){
            $('.main_body').css('filter','blur(5px)');
            $('.blur').show();
            var value = $(this).data('model');
            $("#"+value).css('bottom','50%');     
        }
    });  
    
    $( "html" ).click(function(event) {
    if( !($(event.target).hasClass('menu') || $(event.target).hasClass('model')) ){
        $('.model').css("bottom", -150);
        $('.blur').hide();
        $('.main_body').css('filter','initial');
    }
    });


    var nav = $('nav').innerHeight();
    var footer = $('.bottom-nav').innerHeight();

    $('.main_body').css('padding-top',nav);
    $('.main_body').css('padding-bottom',footer);


    var previousScroll = 0;
    $('body').on('touchmove',function(event) {
    if($(window).scrollTop() >= 50){
    var currentScroll = $(window).scrollTop();
    $('.model').css("bottom", -150);
    $('.blur').hide();
    $('.main_body').css('filter','initial');
        if (currentScroll > previousScroll){
                $('nav').css('top',-50);	        
                $('.bottom-nav').css('bottom',-50);
        } else {
            $('nav').css('top',0);	        
            $('.bottom-nav').css('bottom',0);
            
        }
        previousScroll = currentScroll;
    } 
        
        if( $(window).scrollTop() + window.innerHeight >= document.body.scrollHeight ) { 
            $('nav').css('top',0);	        
        $('.bottom-nav').css('bottom',0);
        }
    });

    $(window).scroll(function(event){
    if($(window).scrollTop() >= 50){
    var currentScroll = $(window).scrollTop();
    $('.model').css("bottom", -150);
    $('.blur').hide();
    $('.main_body').css('filter','initial');
        if (currentScroll > previousScroll){
                $('nav').css('top',-50);	        
                $('.bottom-nav').css('bottom',-50);
        } else {
            $('nav').css('top',0);	        
            $('.bottom-nav').css('bottom',0);
            
        }
        previousScroll = currentScroll;
    } 
        
        if( $(window).scrollTop() + window.innerHeight >= document.body.scrollHeight ) { 
            $('nav').css('top',0);	        
        $('.bottom-nav').css('bottom',0);
        }
    });


    $('body').delegate('#search','click',function(){
    var two_part = "";
    two_part += '<div class="nav-part-two"><div class="logo"><div class="nav-icons" id="search-back"><img src="https://img.icons8.com/ios/50/000000/left.png"></div></div><input type="text" id="search-query" placeholder="search here"></div>';
    two_part += "";
        $('.nav-part-one').replaceWith(two_part);
    });

    $('body').delegate('#search-back','click',function(){
    var one_part = "";
    one_part += '<div class="nav-part-one">';
    one_part +=  '<div class="logo">flyer</div>';
    one_part +=  '<div class="logo">';
    one_part +=  '<div class="nav-icons" id="search"><img src="https://img.icons8.com/ios/50/000000/search.png"></div>';
    one_part +=  '<div class="nav-icons"><div class="span-message"><img src="https://img.icons8.com/ios/50/000000/sms.png"><span>1</span></div></div>';
    one_part +=  '<div class="nav-icons"><div class="span-message"><img src="https://img.icons8.com/ios/50/000000/appointment-reminders.png"><span>13</span></div></div>';
    one_part += '<div class="nav-icons"><img src="https://img.icons8.com/material-rounded/50/000000/menu.png"></div></div></div>';       
    one_part += "";        
        $('.nav-part-two').replaceWith(one_part);
    });


    $(".icon").click(function(){
    $(".icon").each(function(){
    $(this).removeClass('active').find('span').hide().css('color','black');

    });
    $(this).addClass('active').find('span').show();
    });

    var _originalSize = $(window).width() + $(window).height()-130;
    $(window).resize(function(){
        if($(window).width() + $(window).height() <= _originalSize){
        $("footer").css("display","none");  
        }else{
        $("footer").css("display","block");  
        }
    });
        });
</script>
</body>
</html>