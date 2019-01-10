
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#ff9800">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<style>


*{
  color: gray;
}
.cfc_head{
  display: flex;
  justify-content: space-between;
}

.cfc_head > * {
  padding:15px 10px 15px 10px;
  color: gray;
}

*:focus {
    outline: none;
}
select{
  border: none;
  width: 100%;
  font-size: 17px;
background: white;
  color: gray;
  padding: 10px 10px 10px 0px;
}
option{
  border:none;
}
#des{
  color: gray;
  font-size: 12px;
}

.p{
  margin-top: 12px;
  color: gray;
}
/*  */

.t_menu_nightmode{
    font-size: 18px;
    display: flex;
    padding: 10px 0px;
    align-items: center;
    justify-content: space-between;
margin: 6px 0px;
}

.t_menu_nightmode-title{
  font-size:16px;
}

.t_menu_nightmode-toggle{
  display: flex;
  align-items: center;
}

.switch {
    display: inline-block;
    height: 20px;
    position: relative;
    width: 40px;
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
  height: 14px;
  left: 3px;
  position: absolute;
  transition: .4s;
  width: 14px;
}

input:checked + .slider {
  background-color: #0e87ff;
}

input:checked + .slider:before {
  transform: translateX(20px);
}

.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

#private_inputs{
 margin-top: 30px;
}
</style>
<body>

<div class="community_form_create">
  <div class="cfc_head">
    <a href="/"><div class="bfc_back_btn">X</div></a>
    <div class="cfc_img_name">Create Community</div>
    <div class="cfc_done">Done</div>
    </div>
  <div class="input_cfc" style="margin-top: 10px; padding: 10px;">
    <input type="text" name="" id="" style="width: 100%; border:none; border-bottom: 1px solid; text-align: center; font-size: 18px;" placeholder="community name">
  </div>
  </div>
<hr>
<!--    -->
  <div class="cfc_body">
    <select class="type">
       <option value="private">Private</option>
       <option value="public">Public</option>      
    </select>
    <div id="des">This group can only be see</div>
    <div id="private_inputs" style=" box-sizing: border-box;">
<!--        -->
      <div class="t_menu_nightmode">
      <div class="t_menu_nightmode-title">
        make post visisble to every one
      </div>
      <div class="t_menu_nightmode-toggle">
        <label class="switch" for="checkbox">
          <input type="checkbox" id="checkbox"/>
          <div class="slider round"></div>
        </label>
      </div>
    </div>
      <div class="t_menu_nightmode">
      <div class="t_menu_nightmode-title">
        every one can upload
      </div>
      <div class="t_menu_nightmode-toggle">
        <label class="switch" for="checkbox2">
          <input type="checkbox" id="checkbox2"/>
          <div class="slider round"></div>
        </label>
      </div>
    </div>
      <div class="t_menu_nightmode">
      <div class="t_menu_nightmode-title">
        check before posting
      </div>
      <div class="t_menu_nightmode-toggle">
        <label class="switch" for="checkbox3">
          <input type="checkbox" id="checkbox3"/>
          <div class="slider round"></div>
        </label>
      </div>
    </div>
<!--        -->
    </div>
  </div>
  
</div>


<!--  -->



</body>
<script>


$('.type').on('change', function() {
  if( this.value == 'private'){
    $('#des').text('Should be member of group to see the Content');
     $('#private_inputs .p').remove();
    
   var p = '<div class="t_menu_nightmode">';
     p += '<div class="t_menu_nightmode-title">';
     p += 'make post visisble to every one';
     p += ' </div>';
     p += ' <div class="t_menu_nightmode-toggle">';
     p += '   <label class="switch" for="checkbox">';
     p += '     <input type="checkbox" id="checkbox"/>';
     p += '     <div class="slider round"></div>';
     p += '   </label>';
     p += ' </div>';
     p += '</div>';
    
     p += '<div class="t_menu_nightmode">';
     p += '<div class="t_menu_nightmode-title">';
     p += 'every one can upload';
     p += ' </div>';
     p += ' <div class="t_menu_nightmode-toggle">';
     p += '   <label class="switch" for="checkbox">';
     p += '     <input type="checkbox" id="checkbox"/>';
     p += '     <div class="slider round"></div>';
     p += '   </label>';
     p += ' </div>';
     p += '</div>';
    
     p += '<div class="t_menu_nightmode">';
     p += '<div class="t_menu_nightmode-title">';
     p += 'check before posting';
     p += ' </div>';
     p += ' <div class="t_menu_nightmode-toggle">';
     p += '   <label class="switch" for="checkbox">';
     p += '     <input type="checkbox" id="checkbox"/>';
     p += '     <div class="slider round"></div>';
     p += '   </label>';
     p += ' </div>';
     p += '</div>';
    
     $('#private_inputs').append(p);
     
  }else{
    $('#des').text('Anyone can see the group name, member list, posts etc');
    $('#private_inputs >').remove();
var p =  '<div class=p>';
p += '<input type="" style="padding: 10px; width: 100%; box-sizing: border-box; border-top: 1px solid gray;"';
p += 'placeholder="type of community"></div>';
     $('#private_inputs').append(p);
var p =  '<div class=p>';
p += '<input type="" style="padding: 10px; width: 100%; box-sizing: border-box; border-top: 1px solid gray;"';
p += 'placeholder="specify more"></div>';
     $('#private_inputs').append(p);
     
  }
});


</script>
</html>