@extends('layouts.mobile')
@section('css')
<style>
 p{
  padding:0;
  margin:0;
}

body{
  font-family: 'Montserrat', sans-serif;
}

.t_menu
{
  padding:40px 40px ;
}
.t_menu_body{
  padding: 0px 5px;
}
.t_menu_body .t_menu_top{
  display:flex;
  justify-content:space-between ;

  
}
.t_user_detail{
  display:flex;
  padding:10px 5px;
  flex-direction: column;
}
.t_menu_user{
  display: flex;
}
.t_menu_user .avatar{
  border:1px solid;
  width: 45px;
  height:45px;
  border-radius: 50%;
}

.t_menu_user .avatar img{
  height:100%;
  width:100%;
  overflow:hidden;
  border-radius:50%;
}

.t_menu_user .user_detail{
  margin-left: 10px;
  display:flex;
  flex-direction: column;
  justify-content:space-evenly;

}

.user_detail-name{
  font-size:18px;
  font-weight:bold;
}

.user_detail-desc{
  align-self:flex-start
}

.t_menu_logout{
  padding:20px 0px;
}

.btn{
  font-size:15px;
  font-weight:bold;
  display:flex;
  border:0;
  border-radius: 5px;
  background:grey;
  padding:10px;
}

.btn i{
 padding:1px 5px 1px 0px;
}

.t_menu_nightmode{
    display: flex;
    padding: 10px 0px;
    border-bottom: 1px solid #c9c3c3;
    justify-content: space-between;
}

.t_menu_nightmode-title{
  font-weight:bold;
  font-size:15px;
  padding:4px 0px 0px 0px;
}

.t_menu_nightmode-toggle{
  
}

.switch {
    display: inline-block;
    height: 25px;
    position: relative;
    width: 50px;
}

.switch input {
  display:none;
}

.slider {
  background-color: #ccc;
  bottom: 0;
  cursor: pointer;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  transition: .4s;
}

.slider:before {
  background-color: #fff;
  bottom: 3px;
  content: "";
  height: 19px;
  left: 3px;
  position: absolute;
  transition: .4s;
  width: 19px;
}

input:checked + .slider {
  background-color: #0e87ff;
}

input:checked + .slider:before {
  transform: translateX(25px);
}

.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

.t_menu_list{
  
}

.t_menu_list-item{
  padding:10px 0px;
  display:flex;
}

.t_menu_list-item-image{
  border:1px solid;
  width:40px;
  height:40px;
  border-radius:5px;
}

.t_menu_list-item-image img{
  height:100%;
  width:100%;
  border-radius:5px;
  overflow:hidden;
}

.t_menu_list-item-name{
  display:flex;
  margin-left:10px;
  flex-direction:column;
}

.t_menu_list-item-title{
  font-size:16px;
  font-weight:bold;
}

.t_menu_list-item-desc{
  font-size:12px; 
  margin-top:4px;
}

</style>
@endsection
@section('content')
{{ csrf_field() }}  
<div class="t_menu">
  <div class="t_menu_body">
    <div class="t_menu_top">
      <div>profile</div>
      <div class="t_menu_icon">
        <i class="fas fa-cog"></i>
      </div>
    </div>
    <hr>
    <div class="t_user_detail">
      <div class="t_menu_user">
        <div class="avatar">
          <img src="https://dummyimage.com/600x400/000/fff">
        </div>
        <div class="user_detail">
          <div class="user_detail-name">Manish</div>  
          <div class="user_detail-desc">manish</div>
        </div>
      </div>
  </div>
    <div class="t_menu_logout">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
      <button class="btn" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

      
        <i class="fas fa-sign-out-alt"></i>
        <p>Logout</p>
      </button>
      
    </div>
  <!--     <div style="height: 40px;"></div>
    Use full For You
    <hr> -->
    <div class="t_menu_nightmode">
      <div class="t_menu_nightmode-title">
        Night-mode
      </div>
      <div class="t_menu_nightmode-toggle">
        <label class="switch" for="checkbox">
          <input type="checkbox" id="checkbox"/>
          <div class="slider round"></div>
        </label>
      </div>
    </div>
    <div class="t_menu_list">
      <div class="t_menu_list-item">
        <div class="t_menu_list-item-image">
          <img src="https://dummyimage.com/600x400/000/fff">
        </div>
        <div class="t_menu_list-item-name">
          <div class="t_menu_list-item-title">
            Idea
          </div>
          <div class="t_menu_list-item-desc">
            Paste your ideas
          </div>
        </div>
      </div>
      <div class="t_menu_list-item">
        <div class="t_menu_list-item-image">
          <img src="https://dummyimage.com/600x400/000/fff">
        </div>
        <div class="t_menu_list-item-name">
          <div class="t_menu_list-item-title">
            Idea
          </div>
          <div class="t_menu_list-item-desc">
            Paste your ideas
          </div>
        </div>
      </div>
      <div class="t_menu_list-item">
        <div class="t_menu_list-item-image">
          <img src="https://dummyimage.com/600x400/000/fff">
        </div>
        <div class="t_menu_list-item-name">
          <div class="t_menu_list-item-title">
            Idea
          </div>
          <div class="t_menu_list-item-desc">
            Paste your ideas
          </div>
        </div>
      </div>
      <div class="t_menu_list-item">
        <div class="t_menu_list-item-image">
          <img src="https://dummyimage.com/600x400/000/fff">
        </div>
        <div class="t_menu_list-item-name">
          <div class="t_menu_list-item-title">
            Idea
          </div>
          <div class="t_menu_list-item-desc">
            Paste your ideas
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

