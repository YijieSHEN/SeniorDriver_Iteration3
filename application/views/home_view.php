
<script>

        function initMap() {
            var input = document.getElementById('postcode');
             var options = {
                componentRestrictions: { country: 'au' }
            };

            var autocomplete = new google.maps.places.Autocomplete(input,options);
            google.maps.event.addListener(autocomplete, 'place_changed', function() {
            var place = autocomplete.getPlace();
            for (var i = 0; i < place.address_components.length; i++) {
              for (var j = 0; j < place.address_components[i].types.length; j++) {
                if (place.address_components[i].types[j] == 'postal_code') {
                  document.getElementById('postcode').value = place.address_components[i].short_name;
                }
              }
            }
          })
        }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvAWJN67IRpqj4l4d0o6O6xcD1D7gUnek&libraries=places&callback=initMap" async defer></script>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item">
          <img src="<?php echo asset_url(); ?>img/homePage/Older_family.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Are you worried about older drivers on the road?</h1>
              <p class="lead">Download our mobile app and start tracking</p>
              <a class="btn btn-large btn-primary" href="<?php echo base_url() . 'index.php/Tracking/intro';?>">More Info</a>
            </div>
          </div>
        </div>
        <div class="item active">
          <img src="<?php echo asset_url(); ?>img/homePage/Car_safety.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>How safe is your car?</h1>
              <p class="lead">Enter the car info and check safety rating .</p>
              <a class="btn btn-large btn-primary" href="<?php echo base_url() . 'index.php/Safety/index';?>">Check Now</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo asset_url(); ?>img/homePage/Journey_Plan.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Do you want to know the black spots for elderly drivers in your suburb?</h1>
              <p class="lead">Enter your suburb and get going</p>
              <a class="btn btn-large btn-primary" href="<?php echo base_url() . 'index.php/map/input';?>">Let's start</a>
            </div>
          </div>
        </div>   
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
      <div class="well-searchbox">
      
      <form name="postcodeForm" action="data_submitted" onsubmit="return postcode_validate()" method="post" class="form-horizontal" role="form">
          <div class="form-group">
              <label class="centerText">Please enter Victoria postcode or suburb to check crash statistics</label>
              </br>
              </br>
              <div class="col-md-8">
              <input id="postcode" type="text" class="form-control" name="postcode" onkeyup="keyupFunction()" placeholder="3000" autofocus>
              </div>
              </br>
              </br>
              <select name="period">
                  <option value="2017">2017</option>
                  <option value="2016">2016</option>
                  <option value="2015">2015</option>
                  <option value="all" selected="selected">All(From 2006)</option>
              </select>
              </br>
              </br>
              </br>
              <div class="text-center"><button class="btn btn-success" type="submit" value="Submit">Search</button><br></div>
          <span id="errorField"> </span><br>
          </br>
            
          </div>
      </form>

</div>
    </div>


<!-- START THE FEATURETTES -->
<div class="text-center" style="padding-left:10%;padding-right:10%;">
      <div class="featurette">
        <img class="featurette-image pull-right" src="<?php echo asset_url(); ?>img/homePage/feature1.png" style="padding-top:7%;width:20%;height:20%;">
        <h2 class="featurette-heading">Crash Statistics</h2> 
        <p class="lead">
		    The site provides six types of crash statistics based on the selection of suburb and year.<br/><a href="<?php echo base_url() . 'index.php/pages/home';?>">Click Here</a></p>  
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-left" src="<?php echo asset_url(); ?>img/homePage/feature2.png" style="padding-top:5%;width:20%;height:20%;">
        <h2 class="featurette-heading">A useful overview of accident spots</h2>
        <p class="lead">The most accident-prone areas are highlighted using a heat map.&nbsp;&nbsp;<br/><a href="<?php echo base_url() . 'index.php/pages/home';?>">Click Here</a></p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="<?php echo asset_url(); ?>img/homePage/feature3.png" style="padding-top:5%;width:20%;height:20%;">
        <h2 class="featurette-heading">Quick look at your car safety rating<span class="muted"></span></h2>
        <p class="lead">Enter your car Make, Model and Year for a quick look at the safety rating including relationship between the Make and total accidents. &nbsp;&nbsp;<br/><a href="<?php echo base_url() . 'index.php/safety/index';?>">Click Here</a></p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-left" src="<?php echo asset_url(); ?>img/homePage/feature4.png" style="padding-top:5%;width:20%;height:20%;">
        <h2 class="featurette-heading">Journey on the road.<span class="muted"></span></h2>
        <p class="lead">Our simple Mobile Application in conjunction with the website provides real time tracking for the concerned elderly driver.&nbsp;&nbsp;<br/><a href="<?php echo base_url() . 'index.php/Tracking/index';?>">Click Here</a></p>
      </div>

      <hr class="featurette-divider">

    </div>
      <!-- /END THE FEATURETTES -->



    <!-- /.carousel -->
<!--
<div class="container marketing">
    <div class="row">
      <div class="span4">
      </div>
      <<div class="col-md-2 col-md-offset-5">->
      <div class="span4">
      <form name="postcodeForm" action="data_submitted" onsubmit="return postcode_validate()" method="post" class="centerText">
          <div class="form-group">
          <span id="status">Please enter Victoria Postcode and Year:</span><br/><br/>
          <input id="postcode" type="text" class="form-control" name="postcode" onkeyup="keyupFunction()" placeholder="3000"/>
          <select name="period">
              <option value="2017">2017</option>
              <option value="2016" selected="selected">2016</option>
              <option value="2015">2015</option>
              <option value="all">All(From 2006)</option>
          </select><br/>
          <button class="btn btn-secondary" type="submit" value="Submit">Search</button><br>
          <span id="errorField"> </span><br>
          </br>       
          </div>
      </form>
      </div>
      <div class="span4">
      </div>
    </div>
    </div>-->

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

  <!--<div class="container marketing">
      <div class="row">
        <div class="span4">
          <div class="numberCircle">15</div>
          <h2>Crashes number</h2>
          <p>There are 15 accidents happened in this area during last month concerned with people over 65.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <div class="numberCircle">5</div>
          <h2>People injured</h2>
          <p>There are 5 people injured in these accidents.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <div class="numberCircle">+</div>
          <h2>Main Cause</h2>
          <p>The main cause is missing the sign of intersections.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>
   </div>-->

<!--testing-->

   
   <!--<div class="container">
      <div class="row">
          <div class="col-xs-12">
            <div id="itemCarousel" class="carousel slide" data-interval="2000" 
                 data-ride="carousel" data-pause="hover" data-wrap="true">
            <ol class="carousel-indicators">
                <li data-target="#itemCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#itemCarousel" data-slide-to="1" ></li>
            </ol>

            <div class="carousel-inner">
                <div class="item">
                    <div class="row">
                          <div class="col-xs-4">
                            <div class="span4">
                              <div class="numberCircle">15</div>
                              <h2>Crashes number</h2>
                              <p>There are 15 accidents happened in this area during last month concerned with people over 65.</p>
                              <p><a class="btn" href="#">View details &raquo;</a></p>
                            </div>
                          </div>
                          <div class="col-xs-4">
                            <div class="span4">
                              <div class="numberCircle">5</div>
                              <h2>People injured</h2>
                              <p>There are 5 people injured in these accidents.</p>
                              <p><a class="btn" href="#">View details &raquo;</a></p>
                            </div>
                          </div>
                          <div class="col-xs-4">
                            <div class="span4">
                              <div class="numberCircle">+</div>
                              <h2>Main Cause</h2>
                              <p>The main cause is missing the sign of intersections.</p>
                              <p><a class="btn" href="#">View details &raquo;</a></p>
                            </div>
                          </div>
                    </div>
                </div>

                <div class="item">
                    <div class="row">
                          <div class="col-xs-4">
                            <div class="span4">
                              <div class="numberCircle">+</div>
                              <h2>Main Cause</h2>
                              <p>The main cause is missing the sign of intersections.</p>
                              <p><a class="btn" href="#">View details &raquo;</a></p>
                            </div>
                          </div>
                          <div class="col-xs-4">
                            <div class="span4">
                              <div class="numberCircle">+</div>
                              <h2>Main Cause</h2>
                              <p>The main cause is missing the sign of intersections.</p>
                              <p><a class="btn" href="#">View details &raquo;</a></p>
                            </div>
                          </div>
                          <div class="col-xs-4">
                            <div class="span4">
                              <div class="numberCircle">+</div>
                              <h2>Main Cause</h2>
                              <p>The main cause is missing the sign of intersections.</p>
                              <p><a class="btn" href="#">View details &raquo;</a></p>
                            </div>                                                                                                                                                                                                                                                                                                                                                                    
                          </div>
                    </div>
                </div>
            </div>

                  <a class="left carousel-control" href="#itemCarousel" data-slide="prev">&lsaquo;</a>
                  <a class="right carousel-control" href="#itemCarousel" data-slide="next">&rsaquo;</a>

            </div>
          </div>
      </div>
   </div> 


    <!-- START THE FEATURETTES -->
<!--  
      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="../../assets/img/examples/browser-icon-chrome.png">
        <h2 class="featurette-heading">First featurette headling. <span class="muted">It'll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-left" src="../../assets/img/examples/browser-icon-firefox.png">
        <h2 class="featurette-heading">Oh yeah, it's that good. <span class="muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="../../assets/img/examples/browser-icon-safari.png">
        <h2 class="featurette-heading">And lastly, this one. <span class="muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">
-->
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      