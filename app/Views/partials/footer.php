    <!-- footer -->
    <div class="container">
        <footer class="footer">
            <p class="mb-0">Copyright <script>
                    document.write(new Date().getFullYear())
                </script> &copy; <a href="https://linktr.ee/tomasbascal" target="_blank">Tomas Bascal</a></p>
            <div class=" text-right m-auto ml-sm-auto"> <!--class = "social-links" -->
                <a class="link" style="color:#695aa6;" href="https://linktr.ee/tomasbascal" target="_blank"><i class="fa fa-chain"></i> <b> Social Links</b></a>
                <?php if (false) { ?>
                    <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                    <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                    <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
                    <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
                    <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                    <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
                <?php } ?>
            </div>
        </footer>
    </div> <!-- end of page footer -->

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- template js -->
    <script src="assets/js/template.js"></script>
    <!-- mobile js -->

    <script>
		//on mobile Tom
		window.addEventListener('load', function() {
			if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {
				//document.getElementsByClassName('sidebarToggleTop').click();
			}
		});
	
    </script>
    </body>

    </html>