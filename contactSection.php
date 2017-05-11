<?php
?>
<section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>Contact Us</h2>
        <div class="row">
          <div style="overflow:hidden;height:300px;width:100%;"><div id="gmap_canvas" style="height:300px;width:100%;"></div>
            <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
          </div>
          <script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(18.601264, 73.794859),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(18.601264, 73.794859)});infowindow = new google.maps.InfoWindow({content:"<b>EDGE Spot Interiors</b><br/>Office No-13, Shyama Kunjir Prestige, Opp. Vijay Sales, Pimple Saudagar, 411027<br/> Pune" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCPkSD3tel22R0hsXKZYd31vpRtI3txxQ&callback=init_map" async="" defer="defer" type="text/javascript"></script>
        </div>
      </div>
      <div class="row">
          
        <div class="col-lg-4 wow fadeInLeft">	
		 <div class="contact_info">
                            <div class="detail">
                                <h4>EDGE Spot Interiors</h4>
                                <p>Office No-13, Shyama Kunjir Prestige,<br /> Opp. Vijay Sales, Pimple Saudagar,<br /> Pune (411027)</p>
                            </div>
                            <div class="detail">
                                <h4>Call us</h4>
                                <p>+91 8545090909,<br /> +91 7709509541,<br /> +91 9552710909</p>
                            </div>
                            <div class="detail">
                                <h4>Email us</h4>
                                <p>edgespotinteriors@gmail.com</p>
                            </div> 
                        </div>
       		  
			  
          
          <ul class="social_links">
            <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
            <li class="facebook animated bounceIn wow delay-03s"><a href="https://www.facebook.com/EDGESPOTDESIGNS/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
            <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li> 
          </ul>
        </div>
        <div class="col-lg-8 wow fadeInLeft delay-06s">
          <div class="form">
            <input class="input-text" id="yname" type="text" name="" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" required="required" />
            <input class="input-text" id="yemail" type="text" name="" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" required="required" />
            <textarea class="input-text text-area" id="message" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" required="required">Your Message *</textarea>
            <input class="input-btn" id="sendMail" type="submit" value="send message" />
          </div>
        </div>
      </div>
    </section>
<? ?>