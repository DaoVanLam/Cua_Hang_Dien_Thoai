<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Di Động Việt | Hệ thống cửa hàng</title>
	<link rel="icon" href="./img/icon.ico" type="image/x-icon"/

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css"/>
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css"/>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="./js/jquery1.min.js"></script>
		<script type="text/javascript" src="./js/coin-slider.js"></script>
		<link rel="stylesheet" href="./css/coin-slider-styles.css" type="text/css" />

		<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

 		<!-- <script type="text/javascript">
			var gmap = new google.maps.LatLng(10.765974,106.689422);
			var marker;
			function initialize()
			{
				var mapProp = {
					center:new google.maps.LatLng(10.765974,106.689422),
					zoom:16,
					mapTypeId:google.maps.MapTypeId.ROADMAP
				};

				var map=new google.maps.Map(document.getElementById("googleMap")
				                            ,mapProp);

				var styles = [
				{
					featureType: 'road.arterial',
					elementType: 'all',
					stylers: [
					{ hue: '#fff' },
					{ saturation: 100 },
					{ lightness: -48 },
					{ visibility: 'on' }
					]
				},{
					featureType: 'road',
					elementType: 'all',
					stylers: [

					]
				},
				{
					featureType: 'water',
					elementType: 'geometry.fill',
					stylers: [
					{ color: '#adc9b8' }
					]
				},{
					featureType: 'landscape.natural',
					elementType: 'all',
					stylers: [
					{ hue: '#809f80' },
					{ lightness: -35 }
					]
				}
				];

				var styledMapType = new google.maps.StyledMapType(styles);
				map.mapTypes.set('Styled', styledMapType);

				marker = new google.maps.Marker({
					map:map,
					draggable:true,
					animation: google.maps.Animation.DROP,
					position: gmap
				});
				google.maps.event.addListener(marker, 'click', toggleBounce);
			}

			function toggleBounce() {

				if (marker.getAnimation() !== null) {
					marker.setAnimation(null);
				} else {
					marker.setAnimation(google.maps.Animation.BOUNCE);
				}
			}

			google.maps.event.addDomListener(window, 'load', initialize);
		</script> -->


			<!-- <script> 

      function initMap() { 


         
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
            var list_markers = [
                      ["Cửa hàng Di Động Việt Tân Hương, Tân Phú",10.790165, 106.621060],

          
          ];
        var list_markers = [
                      ["Cửa hàng Di Động Việt Âu Cơ, Tân Phú",10.786036, 106.641538],

          
          ];
        var list_markers = [
                      ["Cửa hàng Di Động Việt Quận 10",10.769424, 106.673578],

          
          ];
        var list_markers = [
                      ["Cửa hàng Di Động Việt Quận 1",10.792143, 106.693600],

          
          ];
        var list_markers = [
                      ["Cửa hàng Di Động Việt Gò Vấp",10.835035, 106.663235],

          
          ];
        var list_markers = [
                      ["Cửa hàng Di Động Việt Phú Nhuận",10.799850, 106.669119],

          
          ];
        var list_markers = [
                      ["Cửa hàng Di Động Việt Đà Nẵng",16.060237, 108.213795],

          
          ];
        var list_markers = [
                      ["Trung tâm kinh doanh Online",10.769424, 106.673578],

          
          ];
        var list_markers = [
                      ["Cửa hàng Di Động Việt Thủ Đức",10.8508407,106.759178],

          
          ];
        var myLatLng = {lat: 10.8508407, lng:  106.759178};
         var bounds = new google.maps.LatLngBounds();

          var map = new google.maps.Map(document.getElementById('maps_contacts'), {
          zoom: 8,
          center: myLatLng
        });
         for( i = 0; i < list_markers.length; i++ ) {
          var position = new google.maps.LatLng(list_markers[i][1], list_markers[i][2]);
          bounds.extend(position);
          marker = new google.maps.Marker({
              position: position,
              map: map,
              icon:'https://www.didongviet.vn/pub/media/ddv/ddv-logo.png',
              title: list_markers[i][0]
          });
          
            

            // Automatically center the map fitting all markers on the screen
            map.fitBounds(bounds);
      }


       

        
      }
       function viewMap(obj)
       {
        jQuery(".showroom-items a").removeClass("active");
         jQuery(obj).addClass("active");
         var map_location = jQuery(obj).data("map").split(",");
           var infoWindow = new google.maps.InfoWindow(), marker, i;
          var position = new google.maps.LatLng(map_location[0], map_location[1]);
           var myLatLng = {lat: parseFloat(map_location[0]), lng: parseFloat(map_location[1])};
           var map = new google.maps.Map(document.getElementById('maps_contacts'), {
            zoom: 14,
            center: myLatLng
          });
            marker = new google.maps.Marker({
              position: position,
              map: map,
              icon:'https://www.didongviet.vn/pub/media/ddv/ddv-logo.png',
              title: jQuery(obj).find("h4").html()
          });
            html_map="<h4>"+jQuery(obj).find("h4").html()+"</h4>";
            jQuery(obj).find("p").each(function(){
            	html_map+="<p>"+jQuery(this).html()+"</p>";	
            });
            
             google.maps.event.addListener(marker, 'click', (function(marker) {
                return function() {
                    infoWindow.setContent(html_map);
                    infoWindow.open(map, marker);
                }
            })(marker, i));
          return false;
       }
    </script>
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3k2Lidu6z2GByu5H9oS2T5vUpts0iKxc&v=3.exp&language=en"></script>
 <link  rel="stylesheet" type="text/css"  media="all" href="https://www.didongviet.vn/pub/static/frontend/efw/ddv/vi_VN/Efom_NhanhApi/css/jquery.mCustomScrollbar.min.css" />
<script type="text/javascript">initMap();</script>
<script type="text/javascript">
	require(['jquery','etheme/mcustomscroll'],function($){
	 	
		//nhanhLoadJs();
		jQuery(document).ready(function(){
			jQuery(".showroom-items a").eq(0).trigger('click');
			jQuery(".showroom-items").mCustomScrollbar({setHeight:450,theme:'efwscroll'});
			//jQuery(".opt_attr:eq(0)").trigger('click');
			//initScrollbar();	
		});
		//
	})
</script> -->
</head>
<body>
	<?php
	include("top.php");
	;?>
	<div id="breadcrumb" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb-tree">
						<li><a href="./trang_chu.php">Trang Chủ</a></li>
						<li><a href="./he_thong_cua_hang.php">Hệ thống cửa hàng</a></li>
					</ul>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<div class="container">
		<div class="row">
			<div class="columns">
				<div class="column main">
					<input name="form_key" type="hidden" value="EEPrDvF2fMhfJtd7" /><p>

						<div id="list-showroom">
							<div class="showroom-items" style= "height:500px; width:350px; overflow:auto; float: left;" >
								<h1 style="font-size: 28px; color: #D10024; text-transform: uppercase;">Hệ thống cửa hàng</h1>
								<p class="static">Hiện có 8 cửa hàng Di Động Việt</p>
									<div class="sitem">
										<a class="active" onclick="viewMap();return false;" data-map="10.790165, 106.621060" href="#">
											<h4>Cửa hàng Di Động Việt Tân Hương, Tân Phú</h4>
											<p>232 Tân Hương, P. Tân Quý, Q. Tân Phú, Tp. Hồ Chí Minh</p>			<p>Hotline: 781900.2006(Ext: 232) & DĐ: 01675.686879</p>
										</a>
									</div>
									<div class="sitem">
										<a  onclick="viewMap(this);return false;" data-map="10.786036, 106.641538" href="#">
											<h4>Cửa hàng Di Động Việt Âu Cơ, Tân Phú</h4>
											<p>621 Âu Cơ, Q.Tân Phú, HCM (Ngã 4 Âu Cơ &amp; Thoại Ngọc Hầu)</p>			<p>Hotline: 1900.2006(Ext:621) & DĐ: 0981.930.930</p>
										</a>
									</div>
									<div class="sitem">
										<a  onclick="viewMap(this);return false;" data-map="10.769424, 106.673578" href="#">
											<h4>Cửa hàng Di Động Việt Quận 10</h4>
											<p>607-609 Lê Hồng Phong, P. 10, Quận 10, HCM</p>
											<p>Hotline: 1900.2006(Ext: 609) & DĐ: 0961.820.820</p>
										</a>

									</div>
									<div class="sitem">
										<a  onclick="viewMap(this);return false;" data-map="10.792143, 106.693600" href="#">
											<h4>Cửa hàng Di Động Việt Quận 1</h4>
											<p> 75 Trần Quang Khải, P. Tân Định, Quận 1, HCM</p>			<p>Hotline: 1900.2006(Ext: 075) & DĐ: 0961.831.831</p>
										</a>
									</div>
									<div class="sitem">
										<a  onclick="viewMap(this);return false;" data-map="10.835035, 106.663235" href="#">
											<h4>Cửa hàng Di Động Việt Gò Vấp</h4>
											<p>367 Quang Trung, P. 10, Q. Gò Vấp, Tp HCM</p>	
											<p>Hotline: 1900.2006(Ext: 367) & DĐ: 0961.810.810</p>
										</a>
									</div>
									<div class="sitem">
										<a  onclick="viewMap(this);return false;" data-map="10.799850, 106.669119" href="#">
											<h4>Cửa hàng Di Động Việt Phú Nhuận</h4>
											<p>241 Hoàng Văn Thụ, P. 8, Q. Phú Nhuận, HCM (Đối diện Nhà Thi Đấu Quân khu 7, gần cây Xăng)</p>		
											<p>Hotline: 1900.2006(Ext: 241) & DĐ: 0971.298.298</p>
										</a>
									</div>
									<div class="sitem">
										<a  onclick="viewMap(this);return false;" data-map="16.060237, 108.213795" href="#">
											<h4>Cửa hàng Di Động Việt Đà Nẵng</h4>
											<p>177 Nguyễn Văn Linh, Q. Hải Châu, Đà Nẵng</p>	
											<p>Hotline: 1900.2006(Ext:177) & DĐ: 0981.150.150</p>
										</a>
									</div>
									<div class="sitem">
										<a  onclick="viewMap(this);return false;" data-map="10.8508407,106.759178" href="#">
											<h4>Cửa hàng Di Động Việt Thủ Đức</h4>
											<p>Võ Văn Ngân, Thủ Đức (Tháng 7 Khai trương)</p>	
											<p>Hotline: 1900.2006</p>
										</a>
									</div>
									
								</div>
							</div>




								<style type="text/css">
								#list-showroom .showroom-items p.static {
									font-size: 13px;
									color: #888;
									border-bottom: 1px dotted #888;
									padding-bottom: 9px;
									margin-bottom: 15px;
								}
								#list-showroom .showroom-items .sitem a {
									display: block;
									padding-bottom: 10px;
									border-bottom: 1px dotted #888;
									margin-bottom: 15px;
									transiton: .3s all;
									-webkit-transition: .3s all;
									font-size: 13px;
								}
							</style>



							<div id="googleMap" style="width: 780px; height: 500px;float: right;">

								<div class="showroom-items" style= "width: 800px; height: 500px; overflow:auto; float: left;" >
									<h1 style=" font-size: 14px; color: #D10024; text-transform: uppercase;">Cửa hàng Di Động Việt Tân Hương, Tân Phú</h1>

									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.278612302578!2d106.61716501431712!3d10.789960161895383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752c065b31fca3%3A0x7511007aa26de12c!2zMjMyIFTDom4gSMawxqFuZywgVMOibiBRdcO9LCBUw6JuIFBow7osIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1530351850813" width="780" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

									<h1 style=" font-size: 14px; color: #D10024; text-transform: uppercase;">Cửa hàng Di Động Việt Âu Cơ, Tân Phú</h1>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.330030302449!2d106.63924921431712!3d10.78601526196717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752eb1e44bdd0d%3A0x302609d9b298048f!2zNjIxIMOCdSBDxqEsIFBow7ogVHJ1bmcsIFTDom4gUGjDuiwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1530697608136" width="780" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

									<h1 style=" font-size: 14px; color: #D10024; text-transform: uppercase;">Cửa hàng Di Động Việt Quận 10</h1>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5535108302342!2d106.67163111431711!3d10.768852762279327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752edfcd93ef1f%3A0x1f926b194da1f34b!2zRGkgxJDhu5luZyBWaeG7h3Q6IDYwOSBMw6ogSOG7k25nIFBob25nLCBRdeG6rW4gMTA!5e0!3m2!1svi!2s!4v1530697647109" width="780" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

									<h1 style=" font-size: 14px; color: #D10024; text-transform: uppercase;">Cửa hàng Di Động Việt Quận 1</h1>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2500845003456!2d106.69141431431719!3d10.792148261855527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528cc7f3e1091%3A0xa732f4f2d64e5189!2zRGkgxJDhu5luZyBWaeG7h3Q6IDc1IFRy4bqnbiBRdWFuZyBLaOG6o2ksIFF14bqtbiAx!5e0!3m2!1svi!2s!4v1530698588124" width="780" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

									<h1 style=" font-size: 14px; color: #D10024; text-transform: uppercase;">Cửa hàng Di Động Việt Gò Vấp</h1>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62707.98307481735!2d106.65858327668408!3d10.792235869700056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752906c7403a6d%3A0xc4680ca334547af1!2zRGkgxJDhu5luZyBWaeG7h3Q6IDM2NyBRdWFuZyBUcnVuZywgR8OyIFbhuqVw!5e0!3m2!1svi!2s!4v1530698663686" width="780" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>


									<h1 style=" font-size: 14px; color: #D10024; text-transform: uppercase;">Cửa hàng Di Động Việt Phú Nhuận</h1>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62707.948715598555!2d106.65858322898865!3d10.792400561461832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175292f3cfcf1bd%3A0x4b8eb4d4048eaef5!2zRGkgxJDhu5luZyBWaeG7h3QgLSAyNDEgSG_DoG5nIFbEg24gVGjhu6UsIFBow7ogTmh14bqtbg!5e0!3m2!1svi!2s!4v1530698717612" width="780" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>


									<h1 style=" font-size: 14px; color: #D10024; text-transform: uppercase;">Cửa hàng Di Động Việt Đà Nẵng</h1>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.117753593028!2d108.20693931436602!3d16.05937814396875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142184b24b78351%3A0x63817bf96c007c66!2zRGkgxJDhu5luZyBWaeG7h3Q6IDE3NyBOZ3V54buFbiBWxINuIExpbmgsIMSQw6AgTuG6tW5n!5e0!3m2!1svi!2s!4v1530698761523" width="780" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>


									<h1 style=" font-size: 14px; color: #D10024; text-transform: uppercase;">Cửa hàng Di Động Việt Thủ Đức</h1>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.484091615606!2d106.7624049143176!3d10.850737360785907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527bd7417401d%3A0xe87fb2433d012c99!2zVsO1IFbEg24gTmfDom4sIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1530698826099" width="780" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>


								</div>
							</div>
						</div>		
					</div>
				</div>
			</div>

			<?php
			include("footer.php");
			;?>
		</body>
		</html>