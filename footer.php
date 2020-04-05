<?php require "connection.php"; ?>
<section class="w3l-footer-22-main">
    <!-- footer-22 -->
    <div class="footer-hny py-5">
        <div class="container py-lg-12"> 
                    <div class="sub-columns row">
                       
                        <div class="sub-two-right col-lg-12 col-md-12 my-md-0 my-5">
                            <h6>Quick links</h6>
                            <div class="footer-hny-ul">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                            <ul>
                                <li><a href="registration.php">Donor Registration</a></li>
                                <li><a href="request.php">Send Request</a></li>
                                <li><a href="viewrequest.php">View Request</a></li>
                            </ul>
                           </div>
                        </div>

                        
                    </div>
                </div>
         </div>  
        <div class="below-section">
            <div class="container">
                <div class="copyright-footer row">
                <div class="columns col-lg-6">
                    <ul class="social footer">
                        <li><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
                        <li><a href="#"><span class="fa fa-google" aria-hidden="true"></span></a></li>
                        <li><a href="#"><span class="fa fa-github" aria-hidden="true"></span></a></li>
                    </ul>
                </div>
                <div class="columns copy-right col-lg-6">
                    <p>© 2020 Handler. All rights reserved. Design by <a href="#" target="_blank">Aaditya</a>
                </p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- //titels-5 -->
     <!-- move top -->
     <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-long-arrow-up"></span>
    </button>
    <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };
    
            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }
    
            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->
   
</section>
</div>
</body>
</html>


<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->
<!-- jQuery-Photo-filter-lightbox-portfolio-plugin -->
<script src="assets/js/jquery-1.7.2.js"></script>
<script src="assets/js/jquery.quicksand.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->
<script src="assets/js/bootstrap.min.js"></script>
