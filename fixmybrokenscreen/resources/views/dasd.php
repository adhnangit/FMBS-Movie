<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Movies</title>
<style>
a{
  text-decoration: none;
}
.text-info {
    color: #31708f;
}
.physicianList ul{margin: 0; padding: 0; list-style: none;}
.physicianList ul li{display: inline-block; width: 240px; float: left; margin-right: 15px; margin-bottom: 15px;}
.physicianBox{
	border: 1px solid #ddd;
	color: #333;
	margin-bottom: 20px;
	position: relative;
	padding-bottom: 20px;
	background-color: #f5f5f5;
	
}
.physicianBox .physicianPic {
	padding: 15px 0;
	background-color: #fff;
  text-align: center;
}
.physicianBox .physicianPic img{
	border: 6px solid #f8f8f8;
	-webkit-border-radius: 0%;
    border-radius: 0%;
    transition: all 0.3s ease 0s;
    margin: 0 auto;
    height: 200px;
    width: 200px;
}
.physicianInfo{
	padding: 10px;
	text-align: center;
	border-top: 1px solid #eee;
}
.physicianInfo h6{font-size: 16px; margin:0;}
.physicianBox strong{color: #444;}
.physicianBox p{font-size: 13px; margin: 0; line-height: 22px;}
.physicianBio{position:absolute; right: 0; bottom: 3px;}
.physicianModal{text-align: center;}
.physicianModal .physicianPic img {
    border: 6px solid #f8f8f8;
	-webkit-border-radius: 50%;
    border-radius: 50%;
    transition: all 0.3s ease 0s;
    margin: 0 auto;
    height: 180px;
    width: 180px;
}
.physicianModal .info p, .physicianModal .info .text-info{margin: 0;}
.showBioBtn{background-color: #337ab7; padding: 5px 10px; color: #fff; font-size: 12px;}

/*Pagination CSS*/
#page_navigation {
  clear:both;
  margin: 20px 0;
}
#page_navigation a{
	padding:3px 6px;
	border:1px solid #2e6da4;
	margin:2px;
	color:black;
	text-decoration:none
}
.active_page{
	background:#337ab7;
	color:white !important;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
   
  <h2>Our Team</h2>
<div class="physicianList">
<input type='hidden' id='current_page' />
<input type='hidden' id='show_per_page' />
  <ul id="pagingBox">

@foreach($movies_data as $data)
<li>
      <div class="physicianBox">
					<div class="physicianPic">
						<img src="https://image.ibb.co/gE7cc5/user_4.jpg" alt="user_4" border="0">
					</div>
					
					<div class="physicianInfo">
						<div class="info">
							<h6><strong>{{$data['title']}}</strong></h6>
							<p class="text-info">{{date('Y', strtotime($data['release_date']))}}</p>
						</div>

					</div>
				
			
			</div>
    </li>
@endforeach

    <li>
      <div class="physicianBox">
					<div class="physicianPic">
						<img src="https://image.ibb.co/gE7cc5/user_4.jpg" alt="user_4" border="0">
					</div>
					
					<div class="physicianInfo">
						<div class="info">
							<h6><strong>Emily</strong></h6>
							<p class="text-info">Web Designer</p>
							<p>+880-168-240</p>
							<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="89ece4e0e5f0c9eee4e8e0e5a7eae6e4">[email&#160;protected]</a></p>
						</div>

					</div>
				
				<div class="physicianBio">
					<a class="showBioBtn" href="javascript:void(0)">Show BIO</a>
				</div>
			</div>
    </li>
    
    <li>
      <div class="physicianBox">
					<div class="physicianPic">
						<img src="https://image.ibb.co/czhXAQ/user_1.jpg" alt="user_1" border="0">
					</div>
					
					<div class="physicianInfo">
						<div class="info">
							<h6><strong>Abram</strong></h6>
							<p class="text-info">Frontend Developer</p>
							<p>+880-168-240</p>
							<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="98f9faeaf9f5d8fff5f9f1f4b6fbf7f5">[email&#160;protected]</a></p>
						</div>

					</div>
				
				<div class="physicianBio">
					<a class="showBioBtn" href="javascript:void(0)">Show BIO</a>
				</div>
			</div>
    </li>
	<li>
      <div class="physicianBox">
					<div class="physicianPic">
						<img src="https://image.ibb.co/gE7cc5/user_4.jpg" alt="user_4" border="0">
					</div>
					
					<div class="physicianInfo">
						<div class="info">
							<h6><strong>Emily 2</strong></h6>
							<p class="text-info">Web Designer</p>
							<p>+880-168-240</p>
							<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="13767e7a7f6a53747e727a7f3d707c7e">[email&#160;protected]</a></p>
						</div>

					</div>
				
				<div class="physicianBio">
					<a class="showBioBtn" href="javascript:void(0)">Show BIO</a>
				</div>
			</div>
    </li>
    
    <li>
      <div class="physicianBox">
					<div class="physicianPic">
						<img src="https://image.ibb.co/czhXAQ/user_1.jpg" alt="user_1" border="0">
					</div>
					
					<div class="physicianInfo">
						<div class="info">
							<h6><strong>Abram 2</strong></h6>
							<p class="text-info">Frontend Developer</p>
							<p>+880-168-240</p>
							<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2e4f4c5c4f436e49434f4742004d4143">[email&#160;protected]</a></p>
						</div>

					</div>
				
				<div class="physicianBio">
					<a class="showBioBtn" href="javascript:void(0)">Show BIO</a>
				</div>
			</div>
    </li>
	<li>
      <div class="physicianBox">
					<div class="physicianPic">
						<img src="https://image.ibb.co/hnYLh5/team_member01.jpg" alt="team_member01" border="0">
					</div>
					
					<div class="physicianInfo">
						<div class="info">
							<h6><strong>Emily 3</strong></h6>
							<p class="text-info">Web Designer</p>
							<p>+880-168-240</p>
							<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="98fdf5f1f4e1d8fff5f9f1f4b6fbf7f5">[email&#160;protected]</a></p>
						</div>

					</div>
				
				<div class="physicianBio">
					<a class="showBioBtn" href="javascript:void(0)">Show BIO</a>
				</div>
			</div>
    </li>
    
    <li>
      <div class="physicianBox">
					<div class="physicianPic">
						<img src="https://image.ibb.co/czhXAQ/user_1.jpg" alt="user_1" border="0">
					</div>
					
					<div class="physicianInfo">
						<div class="info">
							<h6><strong>Abram 3</strong></h6>
							<p class="text-info">Frontend Developer</p>
							<p>+880-168-240</p>
							<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a9c8cbdbc8c4e9cec4c8c0c587cac6c4">[email&#160;protected]</a></p>
						</div>

					</div>
				
				<div class="physicianBio">
					<a class="showBioBtn" href="javascript:void(0)">Show BIO</a>
				</div>
			</div>
    </li>
	<li>
      <div class="physicianBox">
					<div class="physicianPic">
						<img src="https://image.ibb.co/gE7cc5/user_4.jpg" alt="user_4" border="0">
					</div>
					
					<div class="physicianInfo">
						<div class="info">
							<h6><strong>Emily 4</strong></h6>
							<p class="text-info">Web Designer</p>
							<p>+880-168-240</p>
							<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a7c2cacecbdee7c0cac6cecb89c4c8ca">[email&#160;protected]</a></p>
						</div>

					</div>
				
				<div class="physicianBio">
					<a class="showBioBtn" href="javascript:void(0)">Show BIO</a>
				</div>
			</div>
    </li>
    
    <li>
      <div class="physicianBox">
					<div class="physicianPic">
						<img src="https://preview.ibb.co/c90NvQ/team_corporate_3.jpg" alt="team_corporate_3" border="0">
					</div>
					
					<div class="physicianInfo">
						<div class="info">
							<h6><strong>Abram 4</strong></h6>
							<p class="text-info">Frontend Developer</p>
							<p>+880-168-240</p>
							<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d6b7b4a4b7bb96b1bbb7bfbaf8b5b9bb">[email&#160;protected]</a></p>
						</div>

					</div>
				
				<div class="physicianBio">
					<a class="showBioBtn" href="javascript:void(0)">Show BIO</a>
				</div>
			</div>
    </li>
	<li>
      <div class="physicianBox">
					<div class="physicianPic">
						<img src="https://preview.ibb.co/gnbvFQ/team_corporate_4.jpg" alt="team_corporate_4" border="0">
					</div>
					
					<div class="physicianInfo">
						<div class="info">
							<h6><strong>Emily 5</strong></h6>
							<p class="text-info">Web Designer</p>
							<p>+880-168-240</p>
							<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5d38303431241d3a303c3431733e3230">[email&#160;protected]</a></p>
						</div>

					</div>
				
				<div class="physicianBio">
					<a class="showBioBtn" href="javascript:void(0)">Show BIO</a>
				</div>
			</div>
    </li>
    
    <li>
      <div class="physicianBox">
					<div class="physicianPic">
						<img src="https://image.ibb.co/czhXAQ/user_1.jpg" alt="user_1" border="0">
					</div>
					
					<div class="physicianInfo">
						<div class="info">
							<h6><strong>Abram 5</strong></h6>
							<p class="text-info">Frontend Developer</p>
							<p>+880-168-240</p>
							<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8decefffece0cdeae0ece4e1a3eee2e0">[email&#160;protected]</a></p>
						</div>

					</div>
				
				<div class="physicianBio">
					<a class="showBioBtn" href="javascript:void(0)">Show BIO</a>
				</div>
			</div>
    </li>
	<li>
      <div class="physicianBox">
					<div class="physicianPic">
						<img src="https://image.ibb.co/gE7cc5/user_4.jpg" alt="user_4" border="0">
					</div>
					
					<div class="physicianInfo">
						<div class="info">
							<h6><strong>Emily 6</strong></h6>
							<p class="text-info">Web Designer</p>
							<p>+880-168-240</p>
							<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c8ada5a1a4b188afa5a9a1a4e6aba7a5">[email&#160;protected]</a></p>
						</div>

					</div>
				
				<div class="physicianBio">
					<a class="showBioBtn" href="javascript:void(0)">Show BIO</a>
				</div>
			</div>
    </li>
    
    <li>
      <div class="physicianBox">
					<div class="physicianPic">
						<img src="https://image.ibb.co/czhXAQ/user_1.jpg" alt="user_1" border="0">
					</div>
					
					<div class="physicianInfo">
						<div class="info">
							<h6><strong>Abram 6</strong></h6>
							<p class="text-info">Frontend Developer</p>
							<p>+880-168-240</p>
							<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="01606373606c41666c60686d2f626e6c">[email&#160;protected]</a></p>
						</div>

					</div>
				
				<div class="physicianBio">
					<a class="showBioBtn" href="javascript:void(0)">Show BIO</a>
				</div>
			</div>
    </li>
	
	
  </ul>
</div>

<div id='page_navigation'></div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

  <script src='https://code.jquery.com/jquery-1.12.4.min.js'></script>
      <script id="rendered-js" >
jQuery(document).ready(function () {

  //Pagination JS
  //how much items per page to show
  var show_per_page = 4;
  //getting the amount of elements inside pagingBox div
  var number_of_items = $('#pagingBox').children().size();
  //calculate the number of pages we are going to have
  var number_of_pages = Math.ceil(number_of_items / show_per_page);

  //set the value of our hidden input fields
  $('#current_page').val(0);
  $('#show_per_page').val(show_per_page);

  //now when we got all we need for the navigation let's make it '

  /* 
  what are we going to have in the navigation?
  	- link to previous page
  	- links to specific pages
  	- link to next page
  */
  var navigation_html = '';
  var current_link = 0;
  while (number_of_pages > current_link) {if (window.CP.shouldStopExecution(0)) break;
    navigation_html += '<a class="page_link pull-right" href="javascript:go_to_page(' + current_link + ')" longdesc="' + current_link + '">' + (current_link + 1) + '</a>';
    current_link++;
  }window.CP.exitedLoop(0);
  navigation_html += '';

  $('#page_navigation').html(navigation_html);

  //add active_page class to the first page link
  $('#page_navigation .page_link:first').addClass('active_page');

  //hide all the elements inside pagingBox div
  $('#pagingBox').children().css('display', 'none');

  //and show the first n (show_per_page) elements
  $('#pagingBox').children().slice(0, show_per_page).css('display', 'block');

});



//Pagination JS

function previous() {

  new_page = parseInt($('#current_page').val()) - 1;
  //if there is an item before the current active link run the function
  if ($('.active_page').prev('.page_link').length == true) {
    go_to_page(new_page);
  }

}

function next() {
  new_page = parseInt($('#current_page').val()) + 1;
  //if there is an item after the current active link run the function
  if ($('.active_page').next('.page_link').length == true) {
    go_to_page(new_page);
  }

}
function go_to_page(page_num) {
  //get the number of items shown per page
  var show_per_page = parseInt($('#show_per_page').val());

  //get the element number where to start the slice from
  start_from = page_num * show_per_page;

  //get the element number where to end the slice
  end_on = start_from + show_per_page;

  //hide all children elements of pagingBox div, get specific items and show them
  $('#pagingBox').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');

  /*get the page link that has longdesc attribute of the current page and add active_page class to it
  and remove that class from previously active page link*/
  $('.page_link[longdesc=' + page_num + ']').addClass('active_page').siblings('.active_page').removeClass('active_page');

  //update the current page input field
  $('#current_page').val(page_num);
}
//# sourceURL=pen.js
    </script>

  

</body>

</html>


