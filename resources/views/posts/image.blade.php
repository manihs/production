
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#ff9800">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>
*{
  padding:0px;
  margin: 0px;
  box-sizing: border-box;
}

.image_post_form .ipf_top{
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.image_post_form .ipf_top a .lft{ padding: 10px 20px; font-size: 20px;}
.image_post_form .ipf_top .mid{ padding: 10px;}
.image_post_form .ipf_top .rft{ padding: 10px 20px; }


.image_post_form .ipf_middel{
  height: 100vh;
  weight: 100vh;
  display:none;
  position: absolute;
  left: 0;
  top: 0;
  right:0;
  background: white;
  padding: 5px;
}
.image_post_form .ipf_bottom{
 text-align: center;
 margin-top: 40px;
  display: flex;
  flex-direction: column;
}
.image_post_form .ipf_bottom #editor{
margin-top: 20px;

}
[contenteditable]:focus {
    outline: 0px solid transparent;
}

[contentEditable=true]:empty:not(:focus):before{
    content:attr(data-text);
    color:gray;
}
.image_post_form .ipf_bottom .upload_image_input{
 width: 50px;
    height: 50px;
    margin: 0 auto;
    margin-top: 30px;   
    margin-bottom: 30px;
    display: flex;
    border: 1px solid;
    box-sizing: border-box;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    border: 2px solid gray;
}
#upload_trigger_btn{
    display: none;
}
.image_post_form .ipf_bottom .upload_image_input img{
    width: 30px;
}
.ipf_bottom button{
  width: 130px;
  padding:8px;
  margin: 0 auto;
  border-radius: 5px;
  border: none;
  background: tomato;
  color: white;
}
/*  */
.flyr-upload-community-name p {font-size: 20px;}

.flyr-upload-community-list-item{
    display: flex;
    font-family: 'Arvo', serif;
}
.flyr-upload-community-image{
    height: 45px;
    width: 45px;
    margin-left:17px;
}
.flyr-upload-community-image img{
    height: 100%;
    width: 100%;
    border-radius: 50%;
}
.flyr-upload-community-name{
    padding: 3% 2% 2% 2%;
    width: 80%;
    color: #888491;
    font-size: 16px;
}
/*...................label..................*/
.flyermob-checkbox-container {
    display: flex;
    width:100%;
    padding: 3% 0%;
    position: relative;
    margin-top: 0px;
    cursor: pointer;
    user-select: none;
}
/* Hide the browser's default checkbox */
.flyermob-checkbox-container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.flyermob-checkbox-checkmark {
  position: absolute;
  top:0;
  left:0;
  height: 100%;
  display:none;
  width: 12px;
  background-color: #eee;
}
/* When the checkbox is checked, add a blue background */
.flyermob-checkbox-container input:checked ~ .flyermob-checkbox-checkmark {
  display:flex;
  background-color: #2196F3;
}
/* Style the checkmark/indicator */
.flyermob-checkbox-container .flyermob-checkbox-checkmark:after {
  left: -9999px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.selected{
    background: #eeeeee;
}
.ipf_middel .search{
  margin: 4px 0px;
  display: flex;
}

.ipf_middel .search #query_input{
    width: 100%;
    padding: 5px;
    border-top: 1px solid gray;
}

.ipf_middel .search button{
  width: 30px;
}
</style>
</head>
<body>
    
    
<div class="image_post_form">
  <div class="ipf_top">
    <a  onclick="goback()"><div class="lft">x</div></a>
    <div class="mid"><div>Upload Image</div></div>
    <div class="rft submiting">Post</div>
  </div>
  <div class="ipf_middel">
    <div class="ipf_top">
    <img src="https://img.icons8.com/ios/30/000000/circled-chevron-left.png" id="chide">
    <div class="mid"><div>Send To</div></div>
    <div class="rft submiting">post</div>
  </div>
    <hr/>
    <div class="search">
        <input type="text" name="" id="query_input">
        <button>O</button>
    </div>
    <hr/>
    <div style="display:flex; flex-direction: column; padding: 15px 20px;">
<!--  form -->
    <form action="{{action('PostController@new_image_post')}}" method="POST" enctype="multipart/form-data" id="image_form">
        {{ csrf_field() }}  
        <input type="file" name="image" id="upload_trigger_btn" accept="image/*" onchange="loadFile(event)">
        <input type="hidden" name="caption" id="caption">
        @foreach ($community as $communities)
        <div class="flyr-upload-community-list">
            <div class="flyr-upload-community-list-item">
                <label class="flyermob-checkbox-container" for="{{ $communities->id }}">
                    <input type="checkbox" class="checkbox" name="community[]" id="{{ $communities->id }}" value="{{ $communities->id }}">
                    <span class="flyermob-checkbox-checkmark"></span>
                    <div class="flyr-upload-community-image">
                        <img src="https://dummyimage.com/600x400/000/fff">
                    </div>
                    <div class="flyr-upload-community-name">
                        <p>{{ $communities->cname }}</p>
                    </div>
                </label>
            </div>
        </div>
        @endforeach
    </form>
<!--  end form -->
    </div>
  </div>
  <div class="ipf_bottom">
    <img id="output" style="margin: 0 auto">
    <div style="padding: 5px 30px;"><hr></div>
    <div contenteditable="true" id="editor" style="display: inline-block;" data-text="Enter something here"></div>
    <div class="upload_image_input">
       <img src="https://img.icons8.com/ios/50/000000/screenshot.png" id="add_files_btn" >
    </div>
    <button id="view">Send To</button>
  </div>

</div>

<script>


function goback(){
  window.history.back();
}
$('.submiting').bind("click", function () {
    $('#caption').val($('#editor').html());
    $('#image_form').submit();
});
$("#add_files_btn").bind("click", function () {
    $("#upload_trigger_btn").trigger("click");
});

$("#view").bind("click", function (e) {
    $(".ipf_middel").css({"display":"block","z-index":"2"});
    e.preventDefault();
});

$("#chide").bind("click", function () {
    $(".ipf_middel").css({"display":"none","z-index":"2"});
});


var loadFile = function(event) {
    var output = document.getElementById('output');
    output.style.height="180px";
    output.src = URL.createObjectURL(event.target.files[0]);
    
  };

$("body").delegate( '.checkbox', 'click', function (){ 
        var obj = $(this).parent().parent();
        if(obj.hasClass('selected')){
            var obj = $(this).parent().parent().removeClass('selected');
        }else{
            var obj = $(this).parent().parent().addClass('selected');
        }
    });

</script>

</body>


</html>