@foreach ($Posts as $Post)
<div class="feed-post">
                <div class="feed-header">
                    <div class="feed-header-avatar">
                        <img src="https://dummyimage.com/550x550/000/fff">
                    </div>
                    <div class="feed-header-username">
                        <p class="feed-header-username--name">{{ $Post->name }}</p>
                        <p class="feed-header-username--commname">{{ $Post->cname }}</p>
                    </div>
                    <div class="feed-header-option">
                        <i class="fas fa-ellipsis-v"></i>
                        <div class="header-option-div">

                        </div>
                        <div class="header-option-arrow">

                        </div>
                    </div>
                </div>
                <div class="feed-body">
                    <img class="card-img-top" src="https://dummyimage.com/600x400/000/fff" alt="Card image cap">
                </div>
                <div class="feed-footer">
                    <div class="feed-likes-view">
                        <span class="feed-likes-views--likes">{{ $Post->likeno }} likes</span>    
                        <span class="feed-likes-views--comments">{{ $Post->cono }} comments</span>   
                    </div>
                    <div class="feed-caption-section">
                        <p class="feed-caption-section--text">
                        {{ $Post->cap }}  
                        </p>
                    </div>
                    <div class="feed-likes-section">
                        <div @if ($Post->likedby) 
                                class="feed-like liked feed_icon" data-like='yes'
                            @else 
                                class="feed-like feed_icon" data-like='no'  
                            @endif 
                            data-icon-type="like" data-txt='{{ $Post->id }}'>
                            Like
                        </div>
                        <div class="feed-like feed_icon" id="myBtn" data-icon-type="comment" data-txt='{{ $Post->id }}'>
                            Comment
                        </div>
                        <div class="feed-like feed_icon" data-icon-type="share" data-txt='{{ $Post->id }}'>
                            Share
                        </div>
                    </div>
                </div>
            </div>
@endforeach