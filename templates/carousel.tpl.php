   <!-- Custom CSS -->
    <style>
        /*!
 * Start Bootstrap - Full Slider HTML Template (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */
        
    </style>
    <!-- Full Page Image Background Carousel Header -->
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://nerdist.com/wp-content/uploads/2015/06/Wizarding-World-of-Harry-Potter.jpg');"></div>
                <div class="carousel-caption">
                    ODENSE BIBLIOTEKERNE PRÆSENTERE
                    <h2>HARRY POTTER FESTIVAL<br/>ODENSE<br/>21.22.10 2016</h2>
                </div>
                
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </div>
    <!-- /.container -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.16/jquery.touchSwipe.min.js" type="text/javascript"></script>
    <script>
    jQuery('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    jQuery(".carousel").swipe( {
        //Single swipe handler for left swipes
        swipeRight:function() {  
           jQuery(this).carousel('prev');  
	    		},
        swipeLeft: function(){jQuery(this).carousel('next');},
        //Default is 75px, set to 0 for demo so any distance triggers swipe
        threshold:0
      });  
    </script>

