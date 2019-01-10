@extends('layouts.mobile')
@section('css')
<style>
    *{
  font-family: 'Roboto', sans-serif;
}

.video_list_v{
 margin-bottom: 20px;
margin-top: 5px;
}

.video_detail{
  display: flex;
  justify-content: space-between;
margin-bottom: 10px;
margin-top: 10px;
}

.video_detail .avatar{
  min-width: 37px;
  border: 1px solid;
        width: 37px;
    height: 37px;
    border-radius: 50%;
}
.video_detail .avatar img {
    height: 100%;
    width: 100%;
    overflow: hidden;
    border-radius: 50%;
}
.video_details .title_video{
  width: 100%;
 
}
.video_detail > * {
  margin: 5px 10px;
}

.video_detail .video_details{
flex-grow: 2;
  display: flex;
  flex-direction: column;
}

.video_details .title_video{ 
  margin-bottom: 5px;
}
.username_video,.video_views_like_detail{
  font-size: 12px;
  color: gray;
}

  
</style>
@endsection
@section('content')
{{ csrf_field() }}  
<div class="video_list_v">
  <div class="video_model">
    <div class="video_themnail">
      <img src="https://i.ytimg.com/vi/9OPfm2fQ9JU/maxresdefault.jpg" alt="" width="100%">
    </div>
    <div class="video_detail">
      <div class="avatar">
        <img src="https://dummyimage.com/600x330/000/fff" alt="">
      </div>
      <div class="video_details">
        <div class="title_video">proble with every one in toda</div>
        <div class="username_video">Mhello man 1.6M views 1 year ago</div>
       
      </div>
      <div class="video_menu">
        <img src="https://img.icons8.com/material/24/000000/menu-2.png">
      </div>
    </div>
  </div>
  <hr>
</div>

<div class="video_list_v">
  <div class="video_model">
    <div class="video_themnail">
      <img src="https://www.interestfree4cars.com/themes/32f6b534-1a08-4e02-8df8-046382427d35/frontend/if4c/s3/homepage/video-thumbnail.jpg" alt="" width="100%">
    </div>
    <div class="video_detail">
      <div class="avatar">
        <img src="https://dummyimage.com/600x330/000/fff" alt="">
      </div>
      <div class="video_details">
        <div class="title_video">proble with every one in toda</div>
        <div class="username_video">Mhello man 1.6M views 1 year ago</div>
       
      </div>
      <div class="video_menu">
        <img src="https://img.icons8.com/material/24/000000/menu-2.png">
      </div>
    </div>
  </div>
  <hr>
</div>

<div class="video_list_v">
  <div class="video_model">
    <div class="video_themnail">
      <img src="https://i.ytimg.com/vi/tnz_yuK9qoM/maxresdefault.jpg" alt="" width="100%">
    </div>
    <div class="video_detail">
      <div class="avatar">
        <img src="https://dummyimage.com/600x400/000/fff" alt="">
      </div>
      <div class="video_details">
        <div class="title_video">proble with every one in toda</div>
        <div class="username_video">Mhello man 1.6M views 1 year ago</div>
       
      </div>
      <div class="video_menu">
        <img src="https://img.icons8.com/material/24/000000/menu-2.png">
      </div>
    </div>
  </div>
  <hr>
</div>




@endsection
@section('script')
<script>

</script>
@endsection

