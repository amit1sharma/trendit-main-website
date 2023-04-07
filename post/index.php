<!doctype html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content="Trendit App - Connects people in Style">
<meta property="og:image" content="https://trenditapp.com/assets/images/logo.png">
    
    <link rel="shortcut icon" href="images\favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/main.css">

    <title>Trendit App</title>
  </head>
  <body>
    <style>
        /* 21. Preloader CSS Starts*/
.style_block .post h3{
    white-space: break-spaces;
}         
.content_section {
    padding-bottom: 0;
}
#btry-loader {
    background: #fff;
    top: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    left: 0;
    position: fixed;
    z-index: 9999;
}
#btry-loader .btry {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 20px;
    height: 40px;
    margin: -10px 0 0 -20px;
    border: 1px solid #ed1c24;
    border-radius: 3px;
}
#btry-loader .btry:after {
    display: block;
    content: "";
    position: absolute;
    top: -3px;
    height: 2px;
    width: 8px;
    background: #ed1c24;
    border-radius: 0 2px 20px 0;
    left: 5px;
}
#btry-loader .btry .btry-charge {
    position: absolute;
    z-index: 100;
    height: 16px;
    width: 16px;
    bottom: 1px;
    left: 1px;
    background: #ed1c24;
    border-radius: 1px;
    -webkit-animation: red-btry 2s linear 0s infinite;
    -moz-animation: red-btry 2s linear 0s infinite;
    animation: red-btry 2s linear 0s infinite;
}
@-webkit-keyframes red-btry {
    0% {
        height: 20px;
    }
    100% {
        height: 36px;
    }
}
@keyframes red-btry {
    0% {
        height: 0px;
    }
    100% {
        height: 36px;
    }
}
#btry-loader .radius {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 40px;
    height: 40px;
    margin: -20px 0 0 -20px;
    border: 1px solid #ddd;
    border-radius: 50%;
}
#btry-loader .radius .btry-charge {
    position: absolute;
    z-index: 100;
    height: 20px;
    width: 4px;
    top: 50%;
    left: 50%;
    margin: -20px 0 0 -2px;
    border-top: 4px solid #ed1c24;
    -webkit-animation: rotation 1s linear 0s infinite;
    -moz-animation: rotation 1s linear 0s infinite;
    animation: rotation 1s linear 0s infinite;
    -webkit-transform-origin: center bottom;
    -moz-transform-origin: center bottom;
    transform-origin: center bottom;
}
@-webkit-keyframes rotation {
    0% {
        -webkit-transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(60deg);
    }
}
@keyframes rotation {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(60deg);
    }
}
.my_loader{
    max-width: 100px;
    margin: 0 auto;
}
.my_loader img{
    max-width: 100px;
    
}
.btn-book {
    background: #000;
    border: #fff solid 2px;
    font-family: 'sf_pro_textbold';
    color: #fff;
    font-size: 14px;
    text-transform: uppercase;
}
.prof_id{
     text-transform: uppercase;
}
.prof_info a {
    color: #212529;
}

.provider a {
    color: #fff;
}

.customer a {
    color: #fff;
}
.style_info .name{
    background: #EFEFEF;
    color:#000;
}
.custom_phone{
    margin-top: 18px;
    margin-right: 13px;
}
@media (max-width: 390px){
.style_info .name, .style_info .provider, .style_info .customer, .style_info .text-blue, .style_info .text-red, .style_info .text-gray {
    max-width:120px
}
    
}
      
    </style>  
    <div id="btry-loader">
        <div class="btry inner">
            <div class="btry-charge"></div>
        </div>
    </div>
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="https://trenditapp.com/"><img src="images/logo.png"></a>
            <ul class="list-unstyled m-0">
                <li><p class="m-0">Get the App!</p></li>
                <li>
                    <a href="https://apps.apple.com/us/app/trendit-app/id1468840934?ls=1"><img src="images/icon_apple.png"></a>
                </li>
                <li>
                    <a href="https://play.google.com/store/apps/details?id=com.trenditapp.trendit"><img src="images/icon_android.png"></a>
                </li>
            </ul>
        </nav>
    </header>
    
    <input class="page" id="pagination" value="1" type="hidden" />
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="js/jquery-3.4.1.slim.min.js" ></script>-->
    <script src="js/jquery.2.2.3.min.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      var userid = "<?= $_REQUEST['TID']; ?>";
      var app_link = 'https://trendit.app.link'
      //alert(userid);
      $(document).ready(function(){
        var videos = document.querySelectorAll('video');
        for(var i=0; i<videos.length; i++)
           videos[i].addEventListener('play', function(){pauseAll(this)}, true);
        
        
        function pauseAll(elem){
        	for(var i=0; i<videos.length; i++){
        		//Is this the one we want to play?
        		if(videos[i] == elem) continue;
        		//Have we already played it && is it already paused?
        		if(videos[i].played.length > 0 && !videos[i].paused){
        		// Then pause it now
        		  videos[i].pause();
        		}
        	}
          }
  
      });    
      var url = 'https://secureapp.trenditapp.com/trendit/trendit-api/p/A0013-8';
      var url = 'https://secureapp.trenditapp.com/trendit/trendit-api/p/A0013-24';
      //var url = 'https://secureapp.trenditapp.com/trendit/trendit-api/p/A0013-6';
      var url = 'https://secureapp.trenditapp.com/trendit/trendit-api/p/'+userid;
     // var url = 'https://secureapp.trenditapp.com/trendit/trendit-api/u/A0007';
        jQuery.ajax({
            type: 'POST',
            url: url,
            dataType: "json",
            contentType: 'application/json; charset=utf-8',
            async:false,
            data: {
                /*Country: "Japan"*/
            },
            success: function(data) {
                var my_html ='';
                if(data.status == 'success'){
                 var profile_image = data.user_image;   
                 var user_type = data.user_type;
            	var tid = user_type+"-"+data.TID;
            	var user_name = data.user_name;
            	var style_type = data.styleType;
            	var st_type_array = [];
            	var style_info = [];
            	var bookinghtml='';
            	var st_type_name ='';
            	if(user_type == 'p'){
            		bookinghtml = '<button class="btn btn-book"><img src="images/cal_icon.png"> Book Appointment</button>';
            		style_type.forEach(function(entry) {                   
                     st_type_array.push(entry.name);
                    });
                    st_type_name = st_type_array.join(' + ');
            	}
            	var myHtml ='';
            /*	myHtml+='<section class="profile_section"><div class="container"><div class="profile_header"><div class="prof-image"><img src="'+profile_image+'"></div></div><div class="prof_info text-center"><h2>'+user_name+'</h2><div class="prof_id">TID: '+tid+'</div><div class="profile">'+st_type_name+'</div>'+bookinghtml+'</div></div></section>'; */   
                 myHtml+= ajAxhtml(data);
            	
            	
            	
                 $('body').append(myHtml);
                     
                 $("#btry-loader").hide();   
                  console.log('working');
                }
                
            }
    
        });
        
        /*$(window).scroll(function() {
            if($(window).scrollTop() + $(window).height() >= $(document).height()) {
                var last_id = $("#pagination").val();
                loadMoreData(last_id);
            }
        });*/
        
       /* $(document.body).on('touchmove', onScroll); // for mobile
        $(window).on('scroll', onScroll); */
        
        // callback
        function onScroll(){ 
            
            if( $(window).scrollTop() + window.innerHeight >= document.body.scrollHeight ) { 
                var last_id = $("#pagination").val();
               // loadMoreData(last_id); 
            }
        } 
        
        function loadMoreData(last_id){
            var url = 'https://secureapp.trenditapp.com/trendit/trendit-api/u/'+userid;
            $(".my_loader").remove(); 
          $.ajax(
                {
                    type: 'POST',
                    url: url,
                    dataType: "json",
                    contentType: 'application/json; charset=utf-8',
                    async:false,
                    data: JSON.stringify({pageOffSet : last_id}),
                    beforeSend: function()
                    {
                        var loader_html='';
                        loader_html+='<div class="my_loader"><img src="images/scroll_loading.gif" /></div>';
                        $('body').append(loader_html);
                        
                    }
                })
                .done(function(data)
                {
                    var my_html ='';
                    if(data.status == 'success'){
                     myHtml = ajAxhtml(data);
                	
                	
                	
                     $('body').append(myHtml);
                      $(".my_loader").remove();   
                     //$("#btry-loader").hide(); 
                     var last_id = $("#pagination").val();
                     var pageination = parseInt(parseFloat(last_id)) + 1; 
                     $("#pagination").val(pageination);
                     
                      console.log('working');
                    }
                })
                .fail(function(jqXHR, ajaxOptions, thrownError)
                {
                      alert('server not responding...');
                });
        }
        
        function ajAxhtml(data){
            var profile_image = data.user_image;
            	var user_type = data.user_type;
            	var tid = user_type+"-"+data.TID;
            	var user_name = data.user_name;
            	var style_type = data.styleType;
            	var st_type_array = [];
            	var style_info = [];
            	var bookinghtml='';
            	var st_type_name ='';
            	if(user_type == 'p'){
            		bookinghtml = '<button class="btn btn-book"><img src="images/cal_icon.png"> Book Appointment</button>';
            		style_type.forEach(function(entry) {                   
                     st_type_array.push(entry.name);
                    });
                    st_type_name = st_type_array.join(' + ');
            	}
            	var myHtml ='';
            	/*myHtml+='<section class="profile_section"><div class="container"><div class="profile_header"><div class="prof-image"><img src="'+profile_image+'"></div></div><div class="prof_info text-center"><h2>'+user_name+'</h2><div class="prof_id">TID: '+tid+'</div><div class="profile">'+st_type_name+'</div>'+bookinghtml+'</div></div></section>';*/
            	
            	var posts = data.post;
            	myHtml+='<section class="content_section"><div class="container">';
				var post = posts;
					 var post_user_name = post.user_name;
					 var post_user_image = post.user_image;	
					 var post_country = post.country;
					 var post_state = post.State;
					 var post_city = post.city;
					 var post_address = post_city;
					 var style_name ='';var price=''; var creator='';
					 var updated_time = time_format(post.updated_at);
					 var Tid = post.TID;
					 var Postid = post.id;
					 var app_link = 'https://trendit.app.link/post/'+Postid;
					 if(post.updated_at){
					     
					     

                        $.ajax({
                            type: "GET",
                            url: 'date.php',
                            data: {  date: post.updated_at },
                            success: function(data){
                                updated_time = data;
                                $(".my_"+Tid).text(updated_time);
                            }
                        });
					     
					     
					 }
					 
					 var trendit_count = post.trendit_count;
					 var post_type = post.type;
					 var post_desc = post.description;
					 var colorCode = post.colorCode;
					 var bgImage = post.image;
					 var trendit_status = post.trendit_status;
					 var trend_class ='';
					 if(trendit_status){
					     trend_class= "trendit_swipe_"+trendit_status;
					 }
					 if(bgImage){
					     bgstyle='background-image:url('+bgImage+')';
					 }else{
					     bgstyle='background:'+colorCode;
					 }
					 if("style_info" in post){
					     style_info = post.style_info;
					 //console.log(style_info.length);
					   
					     style_info.forEach(function(style) {
    						style_name = style.name;
    						price = style.price;
					    });
                     
					 }
					 
					 
					 var creator = post.creator;
					 var post_address="";
					 if((post_country) && (post_state)){
						//post_address = post_country+", "+post_state+" ";
						post_address = post_state+" ";
					 }else if(post_country){
					     post_address = post_country+" ";
					 }else if(post_state){
					     post_address = post_state+" ";
					 }	
                     myHtml+='<div class="style_block">';
                     if(!post_user_image){ post_user_image = 'https://trenditapp.com/assets/images/logo.png'; }
					 myHtml+='<div class="d-flex prof-top"><div class="prof-thumb"><img src="'+post_user_image+'"></div><div class="mr-auto align-self-center"><h3>'+post_user_name+'</h3><div class="time">';
					 if(post_address){
					    myHtml+='<img src="images/marker_icon.png" class="mr-2"><span>'+post_address+'</span>'; 
					 }
					 
					 var service_type = post.serviceType;
					 if(service_type == 1){
					     myHtml+='<span class="">Shop Service</span>';
					 }else if(service_type == 2){
					     myHtml+='<span class="">Mobile Service</span>';
					 }else{
					 
					 myHtml+='<img src="images/clock_icon.png" class="mr-2"><span class="my_'+Tid+'">'+updated_time+'</span>';
					 }
					 if(post.phoneNumber){
					     var postPhne = '<a class="custom_phone" href="tel:'+post.phoneNumber+'"><img src="https://trenditapp.com/profile/images/call.jpg"></a>';
					 }else{
					    var postPhne=''; 
					 }
					myHtml+='</div></div>'+postPhne+'<a href="'+app_link+'" class="align-self-center"><img src="images/more_icon.png" class="more-img"></a></div>'; 
				    if(post_type =='style'){	 
    					 myHtml+='<div class="style_info d-flex mb-2">';
    					 if(style_name){
    						 myHtml+='<div class="text-center mr-3"><div class="name">'+style_name+'</div><div class="text-blue">Style Name</div></div>';
    					 }
    					 
    					myHtml+='<div class="text-center mr-auto">';
    					 if(post.user_type_creator == 'p'){
    					     if(creator){
    						 myHtml+='<div class="provider">'+creator+'</div><div class="text-red">Provider</div>';
    					     }
    					 }else{
    					     if(creator){
    						 myHtml+='<div class="customer">'+creator+'</div><div class="text-gray">Client</div>';
    					     }
    					 }
    					 myHtml+='</div>';
    					 if(price){
    					  myHtml+='<div class="price">$'+price+'</div>';
    					 }
    					  myHtml+='</div>';
				    }
					
					if(post_type =='style'){ 
					 if(post.video){
						 if(post.images != null && post.images.length > 0){
							 post_images = post.images;
							 
							 myHtml+='<div class="row no-gutters mb-4"><div class="col-9 pr-3"><div class="large-img-bx"><div class="large-img position-relative"><video width="100%"  controls><source src="'+post.video+'" type=video/mp4></video><div class="count"><img src="images/trend_icon.png"><span class="float-right">'+trendit_count+'</span></div></div><a href="'+app_link+'" class="swipe '+trend_class+'">Swipe to Trend <img src="images/arrow_icon.png"></a> </div></div>';
							 
							 myHtml+='<div class="col-3">';
							 post_images.forEach(function(post_image) {
								 myHtml+=' <div class="small-img mb-4"><img src="'+post_image+'" class="img-fluid"></div>';
							 }); 
							myHtml+='</div></div>';
                
						 }else{
							 
							 myHtml+='<div class="row mb-4"><div class="col-sm-12"><div class="large-img-bx"><div class="large-img position-relative"><video width="100%"  controls><source src="'+post.video+'" type=video/mp4></video><div class="count"><img src="images/trend_icon.png"><span class="float-right">'+trendit_count+'</span></div></div><a href="'+app_link+'" class="swipe '+trend_class+'">Swipe to Trend <img src="images/arrow_icon.png"></a> </div></div></div>';
							 
						 }
						 
					 }else if(post.images){
						 if(post.images != null && post.images.length > 1){
							 post_images = post.images;
							 
							 myHtml+='<div class="row no-gutters mb-4"><div class="col-9 pr-3"><div class="large-img-bx"><div class="large-img position-relative"><img src="'+post.images[0]+'" class="img-fluid" ><div class="count"><img src="images/trend_icon.png"><span class="float-right">'+trendit_count+'</span></div></div><a href="'+app_link+'" class="swipe '+trend_class+'">Swipe to Trend <img src="images/arrow_icon.png"></a> </div></div>';
							 
							 myHtml+='<div class="col-3">';
							 var j= 0;
							 post_images.forEach(function(post_image) {
								 if(j != 0){
								 myHtml+=' <div class="small-img mb-4"><img src="'+post_image+'" class="img-fluid"></div>';
								 }
								 j++
							 });	 
							 myHtml+='</div></div>';
							 
						 }else{
							 
							 myHtml+='<div class="row mb-4"><div class="col-sm-12"><div class="large-img-bx"><div class="large-img position-relative"><img src="'+post.images[0]+'" class="img-fluid" ><div class="count"><img src="images/trend_icon.png"><span class="float-right">'+trendit_count+'</span></div></div><a href="'+app_link+'" class="swipe '+trend_class+'">Swipe to Trend <img src="images/arrow_icon.png"></a> </div></div></div>';
							 
						 }
						 
					 }
					}else{
					    myHtml+='<div class="post d-flex justify-content-center mb-4" style="'+bgstyle+'"><h3 class="align-self-center">'+post_desc+'</h3></div>';
					}
					
					
					if(post_type =='style'){
					     myHtml+='<div class="row mb-3"><div class="col-sm-5 col-6"><a href="'+app_link+'" class="btn btn-block btn-white"><img src="images/favorite_icon.png"> Favorite</a></div><div class="col-sm-7 col-6"><a href="'+app_link+'" class="btn btn-block btn-gray">Book Now</a></div></div>';
					    if(post_desc){ 
					        myHtml+='<h4 class="mb-3">'+post_desc+'</h4>';
					    }
					    myHtml+='<div class="d-flex"><div class="w-100"><div class="comment_bx"><input type="text" class="form-control" placeholder="Type Comments"><a href="'+app_link+'" class="smiley"><img src="images/happy_smiley.png"></a></div></div><div class="flex-shrink-1 align-self-center"><a href="'+app_link+'" class="send"><img src="images/send_icon.png"></a></div></div>';
					}else{
					    
					    myHtml+='<div class="row mb-3"><div class="col-sm-12"><a href="'+app_link+'" class="btn btn-block btn-white"><img src="images/favorite_icon.png"> Like</a></div></div><div class="d-flex"><div class="w-100"><div class="comment_bx"><input type="text" class="form-control" placeholder="Type Comments"><a href="'+app_link+'" class="smiley"><img src="images/happy_smiley.png"></a></div></div><div class="flex-shrink-1 align-self-center"><a href="'+app_link+'" class="send"><img src="images/send_icon.png"></a></div></div>';
					}
					    
				
					
					 
					 
					 
					 myHtml+='</div>';
                
            	myHtml+='</div></section>';
            	return myHtml;
        }
        
        function time_format(myDate){
            var myDate = myDate;
			var strMnth    = myDate.substring(4,7);
			var strDay    = myDate.substring(8,10);
			var strYear    = myDate.substring(22,26);
			var timeString = myDate.substring(11,18);
			var H = +timeString.substr(0, 2);
			var h = (H % 12) || 12;
			var ampm = H < 12 ? " AM" : " PM";
			timeString = h + timeString.substr(2, 3) + ampm;
			var time_format;
			if((strMnth) && (strDay) && (strYear) && (timeString)){
				time_format = strMnth+" "+strDay+", "+strYear+" "+timeString;
			}
			return time_format;
        }
            
        
        
    </script>
    
  </body>
</html>