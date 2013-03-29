<?
  // Remember to copy files from the SDK's src/ directory to a
  // directory in your application on the server, such as php-sdk/
  require_once('src/facebook.php');

  $config = array(
    'appId' => '569950283019196',
    'secret' => '6e2b9ff74b5cd00acf83ba04d85e68aa',
  );

  $facebook = new Facebook($config);
  $user_id = $facebook->getUser();

    if($user_id) {

      // We have a user ID, so probably a logged in user.
      // If not, we'll get an exception, which we handle below.
      try {

        $user_profile = $facebook->api('/me','GET');
      } catch(FacebookApiException $e) {
        // If the user is logged out, you can have a 
        // user ID even though the access token is invalid.
        // In this case, we'll get an exception, so we'll
        // just ask the user to login again here.
        $login_url = $facebook->getLoginUrl(); 
        echo 'Please <a href="' . $login_url . '">login.</a>';
        error_log($e->getType());
        error_log($e->getMessage());
      }   
    } else {

      // No user, print a link for the user to login
      $login_url = $facebook->getLoginUrl();
      echo 'Please <a href="' . $login_url . '">login.</a>';

    }

  ?>
  
  
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">	
    <!-- 
    Smart developers always View Source. 
    
    This application was built using Adobe Flex, an open source framework
    for building rich Internet applications that get delivered via the
    Flash Player or to desktops via Adobe AIR. 
    
    Learn more about Flex at http://flex.org 
    // -->
    <head>
        <title></title>         
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!-- Include CSS to eliminate any default margins/padding and set the height of the html element and 
		     the body element to 100%, because Firefox, or any Gecko based browser, interprets percentage as 
			 the percentage of the height of its parent container, which has to be set explicitly.  Initially, 
			 don't display flashContent div so it won't show if JavaScript disabled.
		-->
        <style type="text/css" media="screen"> 
			html, body	{ height:100%; }
			body { margin:0; padding:0; overflow:auto; text-align:center; 
			       background-color: #ffffff; }   
			#flashContent { display:none; }
        </style>
		
		<!-- Enable Browser History by replacing useBrowserHistory tokens with two hyphens -->
        <!-- BEGIN Browser History required section -->
        <link rel="stylesheet" type="text/css" href="history/history.css" />
        <script type="text/javascript" src="history/history.js"></script>
        <!-- END Browser History required section -->  
		    
        <script type="text/javascript" src="swfobject.js"></script>
        <script type="text/javascript">
            <!-- For version detection, set to min. required Flash Player version, or 0 (or 0.0.0), for no version detection. --> 
            var swfVersionStr = "11.1.0";
            <!-- To use express install, set to playerProductInstall.swf, otherwise the empty string. -->
            var xiSwfUrlStr = "playerProductInstall.swf";
            var flashvars = {};
            var params = {};
            params.quality = "high";
            params.bgcolor = "#ffffff";
            params.allowscriptaccess = "sameDomain";
            params.allowfullscreen = "z";
            var attributes = {};
            attributes.id = "DudeSportsGame";
            attributes.name = "DudeSportsGame";
            attributes.align = "middle";
            swfobject.embedSWF(
                "DudeSportsGame.swf", "flashContent", 
                "700", "650", 
                swfVersionStr, xiSwfUrlStr, 
                flashvars, params, attributes);
			<!-- JavaScript enabled so display the flashContent div in case it is not replaced with a swf object. -->
			swfobject.createCSS("#flashContent", "display:block;text-align:left;");
        </script>
    </head>
    <body>
    
    
    
    
    
    <div id="fb-root"></div>
    <script src="http://connect.facebook.net/en_US/all.js"></script>
		<script>

              window.fbAsyncInit = function() {
                // init the FB JS SDK
                    FB.init({
                      appId      : '569950283019196', // App ID from the App Dashboard
                      status     : true, // check the login status upon init?
                      cookie     : true, // set sessions cookies to allow your server to access the session?
                      xfbml      : true  // parse XFBML tags on this page?
                    });
					
					

				
                // Additional initialization code such as adding Event Listeners goes here
            	
              };
			  
            

            </script>
    
      <!-- AS3 shit! duda!	-->

        <!-- SWFObject's dynamic embed method replaces this alternative HTML content with Flash content when enough 
			 JavaScript and Flash plug-in support is available. The div is initially hidden so that it doesn't show
			 when JavaScript is disabled.
		-->
        <div id="flashContent" style="z-index:-1">
        	
	   	
        <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
          codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
          WIDTH="150" HEIGHT="75" id="DudeSportsGame" ALIGN="" >
          <PARAM NAME=movie VALUE="DudeSportsGame.swf"> 
          <PARAM NAME=quality VALUE=medium> 
          <PARAM NAME=bgcolor VALUE=#FFFFFF> 
          <EMBED src="DudeSportsGame.swf" 
            quality=medium 
            swliveconnect="true" 
            bgcolor=#FFFFFF WIDTH="400" HEIGHT="400" 
            name="DudeSportsGame" 
            ALIGN=""
            TYPE="application/x-shockwave-flash" 
            PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
          </EMBED>
        </OBJECT>
		</div>	
        
          <script type="text/javascript">
			
			function getFlashMovieObject(movieName)
			{
			  if (window.document[movieName]) 
			  {
				  return window.document[movieName];
			  }
			  if (navigator.appName.indexOf("Microsoft Internet")==-1)
			  {
				if (document.embeds && document.embeds[movieName])
				  return document.embeds[movieName]; 
			  }
			  else // if (navigator.appName.indexOf("Microsoft Internet")!=-1)
			  {
				return document.getElementById(movieName);
			  } 	
			}
			
			var loopName=setInterval(justAskName,30);
			
			function justAskName(){
				
				FB.api('/me', function(response) {
				  name=response.name;
				  //alert(response.id);
				});
				
				//alert(name);
				if(name!="undefined"){
					clearInterval(loopName);
					//alert("Interval clear");
				}
			}
			
				window.onload=function(){
					FB.api('/me', function(response) {
				  	//alert(response.id);
				});
				}
			
			
			var name="undefined";
			function askName(){		
				FB.api('/me', function(response) {
				  name=response.name;
				  //alert(response.id);
				});
				var flash=document.getElementsByName("DudeSportsGame")[0];
				flash.sendNameFromJS(name);
				}
			
			var userTabChange=true;
			window.onblur= function(){
				if(userTabChange==true){
				var flash2=document.getElementsByName("DudeSportsGame")[0];
				flash2.looseChangeTab();}
			}
			
			function sendData(i){
				var textFeed="hey";
				var pictureadres='http://gabriel.conmovedor.cl/dudesports/face1.jpg';
				userTabChange=false;
				i=parseInt(i);
				if(i<=100){
					textFeed=""+name+" just lift "+i+" POUNDS in DUDE SPORTS, it's lots of weight... For a litle girl!!. JOIN DUDE SPORTS";
					pictureadres='http://gabriel.conmovedor.cl/dudesports/face1.jpg';
				}
				
				if(i>100 && i<=200){
					textFeed=""+name+" just lift "+i+" POUNDS in DUDE SPORTS, GU GU DA DA, it's babe language for !!JOIN DUDE SPORTS!!";
					pictureadres='http://gabriel.conmovedor.cl/dudesports/face2.jpg';
				}
				
				if(i>200 && i<=300){
					textFeed=""+name+" just lift "+i+" POUNDS in DUDE SPORTS, There is no shame in that!, dont worry !!JOIN DUDE SPORTS!!";
					pictureadres='http://gabriel.conmovedor.cl/dudesports/face3.jpg';
				}
				
				if(i>300 && i<=400){
					textFeed=""+name+" just lift "+i+" POUNDS in DUDE SPORTS, a litle suet is always good !!JOIN DUDE SPORTS!!";
					pictureadres='http://gabriel.conmovedor.cl/dudesports/face4.jpg';
				}
				
				if(i>400 && i<=500){
					textFeed=""+name+" just lift "+i+" POUNDS in DUDE SPORTS, practice Make the master !!JOIN DUDE SPORTS!!";
					pictureadres='http://gabriel.conmovedor.cl/dudesports/face5.jpg';
				}
				
				if(i>600 && i<=700){
					textFeed=""+name+" just lift "+i+" POUNDS in DUDE SPORTS, just geting better and better !!JOIN DUDE SPORTS!!";
					pictureadres='http://gabriel.conmovedor.cl/dudesports/face6.jpg';
				}
				
				if(i>700 && i<=800){
					textFeed=""+name+" just lift "+i+" POUNDS in DUDE SPORTS, Reach the nirvana and connect whit...!!JOIN DUDE SPORTS!!";
					pictureadres='http://gabriel.conmovedor.cl/dudesports/face7.jpg';
				}
				
				if(i>800 && i<=900){
					textFeed=""+name+" just lift "+i+" POUNDS in DUDE SPORTS, DUDE SMASHHHHHH!!JOIN DUDE SPORTS!!";
					pictureadres='http://gabriel.conmovedor.cl/dudesports/face8.jpg';
				}
				
				if(i>900 && i<=1000){
					textFeed=""+name+" just lift "+i+" POUNDS in DUDE SPORTS, looks like SUPER strength!!JOIN DUDE SPORTS!!";
					pictureadres='http://gabriel.conmovedor.cl/dudesports/face9.jpg';
				}
				
				if(i>1000){
					textFeed=""+name+" just lift "+i+" POUNDS in DUDE SPORTS, CHUCK NORRIS LEVEL..enougth said..!!JOIN DUDE SPORTS!!";
					pictureadres='http://gabriel.conmovedor.cl/dudesports/face10.jpg';
				}
				
				sendFeed(textFeed,pictureadres);
				
			}
			
			function sendFeed(text,pa){
					FB.ui(
				  {
					method: 'feed',
					name: 'DUDE SPORTS',
					link: 'http://apps.facebook.com/dudesports/',
					picture: pa,
					caption: 'DUDE SPORTS BY CROOKED/UNIVERSE',
					description: text
				  },
				  function(response) {
					  userTabChange=true;
					/*if (response && response.post_id) {
					  alert('Post was published.');
					} else {
					  alert('Post was not published.');
					}*/
				  }
				);
			}
			

		</script>
        
        
        		<script type="text/javascript"><!--
    google_ad_client = "ca-pub-1607931085018565";
    /* DUDE SPORTS */
    google_ad_slot = "1250200336";
    google_ad_width = 728;
    google_ad_height = 90;
    //-->
    </script>
    <script type="text/javascript"
    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script>

        
        
   </body>
</html>


