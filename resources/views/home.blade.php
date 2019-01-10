@extends('layouts.mobile')
@section('content')
{{ csrf_field() }}  
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="posts">
            @include('data')  
            </div>
            <div class="ajax-load text-center" style="display:none">
                <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
            </div>             
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
$(document).ready(function(){    
    var page = 1;    
    $(window).scroll(function() {
	    if($(window).scrollTop() + $(window).height() >= $(document).height()) {
	        page++;
            $('nav').css('top',0);	        
            $('.bottom-nav').css('bottom',0);
	        loadMoreData(page);
	    }
	});
    
    function loadMoreData(page){
	  $.ajax({
            url: '?page=' + page,
            type: "get",
            beforeSend: function(){
                $('.ajax-load').show();
            }
	    })
	    .done(function(data)
	    {
	        if(data.html == " "){
	            $('.ajax-load').html("No more records found");
	            return;
            }
            $('.ajax-load').hide();
	        $(".posts").append(data.html);
	    })
	    .fail(function(jqXHR, ajaxOptions, thrownError)
	    {
	        alert('server not responding...');
	    });
	}

$("body").delegate(".feed_icon","click",function(){
  var obj = $(this);
  var value = obj.data('icon-type');
  if(value=='like'){
  var value = obj.data('txt');
  var cont = obj.data('like');
  var _token = $('input[name="_token"]').val();
  if(cont=='no'){
    $.ajax({
        url : "{{ route('post.like') }}",
        method : "POST",
        data : {value: value, _token: _token},
        success: function(data){
          alert('likeed');
          var _la = "";
          _la += "<div class='feed-like feed_icon liked'  data-txt='"+data+"' data-like='yes' data-icon-type='like'>";
          _la += "                  Like";
          _la += "</div>";
          _la += "";
          obj.replaceWith(_la);
      }
    })
  }else{
    $.ajax({
        url : "{{ route('post.dislike') }}",
        method : "POST",
        data : {value: value, _token: _token},
        success: function(data){
          alert(data);
          var _la = "";
          _la += "<div class='feed-like feed_icon'  data-txt='"+data+"' data-like='no' data-icon-type='like'>";
          _la += "                  Like";
          _la += "</div>";
          _la += "";
          obj.replaceWith(_la);
      }
    })
  }
  }
});

});

</script>
@endsection

