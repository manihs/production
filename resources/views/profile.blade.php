@extends('layouts.mobile')
@section('css')
<style>

/********************************************************/

body{
  margin:0;
  padding:0;
  font-family: 'Raleway', sans-serif;
}

p{
  padding:0;
  margin:0;
}

h1{
  margin:0;
  padding:0;
}
.profile-container{
  display:flex;
  flex-direction:column;
}

.cover-body{
  position:relative;
  width:100%;
  height:150px;
  background:grey;
}

.cover-pic{
  
}

.profilepic-container{
  position:absolute;
  border-radius:50%;
  width:120px;
  height:120px;
  right:0;
  left:0;
  bottom:-65px;
  margin:auto;
  border:3px solid white;
  box-shadow: 0 0px 15px rgba(0, 0, 0, .3);
  background:grey;
}

.mid-section{
  display:flex;
  flex-direction:column;
}

.mid-stats{
  display:flex;
  justify-content:space-between;
}

.mid-stats-followers{
  width:20%;
  padding:10px 20px;
  text-align:center;
}

.mid-stats-followers-title{
  font-size:12px; 
  color:#0093ff;
}

.mid-stats-followers-count{
  text-align:center;
  font-size:18px;
  font-weight:bold;
  color:#4b4f56;
}

.mid-stats-followings{
  padding:10px 20px;
  width:20%;
  text-align:center;
}

.mid-stats-followings-title{
  font-size:13px; 
  color:#0093ff;
}

.mid-stats-followings-count{
  text-align:center;
  font-size:18px;
  font-weight:bold;
  color:#4b4f56;
}

.profile-name{
  text-align:center;
}

.profile-name h1{
  font-size:24px;
  padding:10px 10px;
}

.mid-button-section{
  display:flex;
  justify-content:center;
  padding:10px 0px;
}

.mid-button{
    padding: 10px 10px;
    width: 35%;
    border: 1px solid #bbbaba;
    display: flex;
    justify-content: center;
    background: #ececec;
    color: #4b4f56;
    font-size:13px;
  font-weight:bold;
    border-radius:5px;
}

.mid-button-icon{
  margin:0px 5px;
}

.mid-button-title{
  margin:0px 0px;
}
.message-button{
    padding:10px 10px ;
    width:10%;
    text-align: center;
    font-weight:bold;
    font-size: 15 px;
/*     background: #ececec;
    color: #4b4f56;
    border: 1px solid #bbbaba; */
}

.more-button{
  margin:10px 0px;
  padding:0px 10px;
  width:10%;
  text-align: center;
    font-weight:bold;
  position: relative;
/*     background: #ececec;
    color: #4b4f56;
    border: 1px solid #bbbaba; */
}

.more-option-div{
    display: none;
    position: absolute;
    top: 30px;
    right: 0;
    height: 200px;
    width: 230px;
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, .15);
    border-radius: 3px;
    box-shadow: 0 3px 40px rgba(0, 0, 0, .3);
}

.more-option-arrow{
    display: none;
    border-bottom: 8px solid #fff;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    content: '';
    position: absolute;
    top: 25px;
    margin: 0px 0px 0px -8px;
    left: 50%;
}

.selected{
    display: block !important;
}

.profile-tabs-section{
  display:flex;
  box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
/*   box-shadow: 0px 0px 60px #b9b5b9; */
}

.profile-tab{
  width:25%;
  padding:10px 0px;
  color: #4b4f56;
  border-bottom:3px solid transparent;
  font-size:15px;
  font-family: Roboto, 'Droid Sans', Helvetica, sans-serif;
  text-align:center;
}

.active{
  border-bottom:3px solid #ffc700;
  transition:0.3s;
}

.tabcontent{
  display:none;
}
</style>
@endsection
@section('content')
{{ csrf_field() }}  
    
<div class="profile-container">
  <div class="cover-body">
    <div class="cover-pic">
      
    </div>
    <div class="profilepic-container">
    </div>
  </div>
  <div class="mid-section">
    <div class="mid-stats">
      <div class="mid-stats-followers">
        <div class="mid-stats-followers-count">
          31
        </div>
        <div class="mid-stats-followers-title">
          followers
        </div>
      </div>
      <div class="mid-stats-followings">
        <div class="mid-stats-followings-count">
          46
        </div>
        <div class="mid-stats-followings-title">
          followings
        </div>
      </div>
    </div>
    <div class="profile-name">
      <h1>Saurabh Nigudkar</h1>
    </div>
    <div class="mid-button-section">
      <div class="message-button">
        <div class="message-button-icon">
          <i class="far fa-envelope"></i>
        </div>
      </div>
      <div class="mid-button">
        <div class="mid-button-icon">
          <i class="fas fa-user-plus"></i>
        </div>
        <div class="mid-button-title">
          Follow
        </div>
      </div>
      <div class="more-button">
         <i class="fas fa-ellipsis-v"></i>
         <div class="more-option-div">

         </div>
         <div class="more-option-arrow">

         </div>           
      </div>
    </div>
  </div>
  <div class="profile-tabs-section">
    <div class="profile-tab" id="defaultOpen" onclick="openCity(event, 'Feed')">
      Feed
    </div>
    <div class="profile-tab" onclick="openCity(event, 'About')">
      About
    </div>
    <div class="profile-tab" onclick="openCity(event, 'Photos')">
      Photos
    </div>
    <div class="profile-tab" onclick="openCity(event, 'More')">
      More
    </div>
  </div>
  <div class="tabcontent" id="Feed">
  </div>
  <div class="tabcontent" id="About">
  </div>
  <div class="tabcontent" id="Photos">
  </div>
  <div class="tabcontent" id="More">
  </div>
</div>    



@endsection
@section('script')
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
if($(window).scrollTop() >= 70){
 var currentScroll = $(window).scrollTop();
 console.log(currentScroll);
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
    //
    
    
    
    function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("profile-tab");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

$("body").delegate( '.more-button', 'click', function (){ 
        var obj = $(this).children();
        if(obj.hasClass('selected')){
            var obj = $(this).children().removeClass('selected');
        }else{
            var obj = $(this).children().addClass('selected');
        }
    });



    
    </script>

@endsection




