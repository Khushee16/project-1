

<div class="footer_otr mt-5">
    <div class="wrapper">
        <div class="footer_inr pt-5">
            <div class="newsletter d-flex row bg-light">
                <div class="col-6">
                    <h5>Sign Up</h5>
                    <h4>For Our Newsletter</h4>
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div class="newsletter_button input-group">
                        <input type="text" class="form-control" placeholder="Email Address" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn text-light " type="button" id="button-addon2">SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="footer_lower pt-5 pb-3 row">
                <div class="col-3">
                    <img src="images/footer_logo.png" alt="footer_logo" class="logos">
                    <div class="row">
                        <div class="col logo_box ">
                            <a href=""><img src="images/facebook_logo.png" alt=""></a>
                        </div>
                        <div class="col logo_box ">
                            <a href=""><img src="images/linkdlin_logo.png" alt=""></a>
                        </div>
                        <div class="col logo_box ">
                            <a href=""><img src="images/twitter_logo.png" alt=""></a>
                        </div>
                        <div class="col logo_box ">
                            <a href=""><img src="images/instgram_logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-2 text-light quicklinks">
                    <h6 class="pb-5">Quicklinks</h6>
                    <ul class="list-unstyled ">
                        <li class="pb-2"><a href="#." class="text-decoration-none text-light"><p>What We Do</p></a></li>
                        <li class="pb-2"><a href="#." class="text-decoration-none text-light"><p>Who We Are</p></a></li>
                        <li class="pb-2"><a href="#." class="text-decoration-none text-light"><p>Resource Center</p></a></li>
                        <li class="pb-2"><a href="#." class="text-decoration-none text-light"><p>News</p></a></li>
                        <li class="pb-2"><a href="#." class="text-decoration-none text-light"><p>Join Our Team</p></a></li>
                    </ul>
                </div>
                <div class="col-4 text-light recent_post">
                    <h6 class="pb-5">RECENT POSTS</h6>
                    <ul class="list-unstyled ">
                        <li class="pb-2"><a href="#." class="text-decoration-none text-light"><p>Updates in Response to COVID-19</p></a></li>
                        <li class="pb-2"><a href="#." class="text-decoration-none text-light"><p>New Promotions at MARTIN HOOD</p></a></li>
                        <li class="pb-2"><a href="#." class="text-decoration-none text-light"><p>MARTIN HOOD Announces a new partner</p></a></li>
                        <li class="pb-2"><a href="#." class="text-decoration-none text-light"><p>2021 Child TAX Credit Advance</p></a></li>
                    </ul>
                </div>
                <div class="col-3 text-light">
                    <h6 class="pb-5">Contact us</h6>
                    <ul class="list-unstyled ">
                        <li class="pb-2"><a href="#." class="text-decoration-none text-light"><p>
                            <i class="fa-solid fa-phone pe-3"></i>217-351-2000</p></a></li>
                        <li class="pb-2"><a href="#." class="text-decoration-none text-light"><p>
                            <i class="fa-solid fa-phone pe-3"></i>217-351-7726</p></a></li>
                        <li class="pb-2"><a href="#." class="text-decoration-none text-light"><p>
                            <i class="fa-solid fa-envelope pe-3"></i>info@martinhood.com</p></a></li>
                        <li class="pb-2"><a href="#." class="text-decoration-none text-light "><p>
                            <i class="fa-solid fa-location-dot pe-3 "></i>2507 S. Neil St. Champaign IL 61820.</p></a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="text-center text-light pb-4">© 2021 Martin Hood. All Rights Reserved.</p>
        </div>
    </div>
</div>


<!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
<!-- <script type="text/javascript" src="slick/slick.min.js"></script> -->


<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->

<!-- Magnific Popup core JS file -->
<!-- <script src="magnific-popup/jquery.magnific-popup.js"></script> -->

<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>


<script>
$(document).ready(function(){
    $('.autoplay').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2000,
});
});


$(document).ready(function(){
    $('.team_slider').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4
})
});


// $(function () {
// 	$('.popup-modal').magnificPopup({
// 		type: 'inline',
// 		preloader: false,
// 		focus: '#username',
// 		modal: true
// 	});
// 	$(document).on('click', '.popup-modal-dismiss', function (e) {
// 		e.preventDefault();
// 		$.magnificPopup.close();
// 	});
// })


// $(function () {
// 	$('.popup-modal').magnificPopup({
// 		type: 'inline',
// 		preloader: false,
// 		focus: '#username',
// 		modal: true
// 	});
// 	$(document).on('click', '.popup-modal-dismiss', function (e) {
// 		e.preventDefault();
// 		$.magnificPopup.close();
// 	});
// });




</script>
<script>
    $(function () {
	$('.popup-modal').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#username',
		modal: true
	});
	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
});

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></>


</body>
</html>