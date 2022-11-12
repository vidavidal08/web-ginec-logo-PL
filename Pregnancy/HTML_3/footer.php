        <footer class="footer bg-black pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 xs-pt-30">
                        <h4 class="text-white mb-30 mt-10 text-uppercase">CONTÁCTENOS</h4>
                        <ul class="address">
                            <li><i class="fa fa-map-marker"></i>
                                <p>Ubicación: Corporativo San Gabriel, Alacio Pérez 928, Ignacio Zaragoza, 91910 Veracruz, Ver.</p>
                            </li>
                            <li><i class="fa fa-phone"></i>
                                <a href="tel:7806249821">Citas: <span>229 15 53 551 </span> </a>
                            </li>
                            <li><i class="fa fa-envelope-o"></i>Correo: enriquepluna57@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6 sm-mt-30">
                        <div class="footer-link footer-link-hedding">
                            <h4 class="txt-white mb-30 mt-10 text-uppercase">Enlace rápido</h4>
                            <ul>
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Servicios</a></li>
                                <li><a href="#">Sobre nosotros</a></li>
                                <li><a href="#">Equipo</a></li>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright mt-20">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <p class="mt-15"> Dr. Enrique pérez Luna <span id="copyright">2022</span> <a href="#"> Ginecología </a> </p>
                        </div>
                        <div class="col-lg-6 col-md-6 text-left text-md-right">
                            <div class="social-icons color-hover mt-10">
                                <ul> 
                                    <li class="social-facebook"><a href="https://www.facebook.com/dr.perezlunagineco/"  target="_blank"><i class="fa fa-facebook"></i></a></li>
                                 	<li><a href="https://instagram.com/dr.perezlunagineco?utm_medium=copy_link" target="_blank"><span class="ti-instagram"></span></a></li>
						
						<li><a href="#"><span class="ti-linkedin"></span></a></li>
						<li><a href="#"><span class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

		
    </body>
    
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Popper -->
    <script src="vendor/js/popper.min.js"></script>

    <!-- bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Corenav Master JavaScript -->
    <script src="vendor/corenav-master/coreNavigation-1.1.3.js"></script>
    <script src="js/nav.js"></script>

    <!--carousel script -->
    <script src="vendor/owlcarousel/js/owl.carousel.min.js"></script>
    <script src="vendor/owlcarousel/js/jquery.mousewheel.min.js"></script>

    <!-- nice-select -->
    <script src="vendor/jquery-nice-select/jquery-nice-select.js"></script>

    <!-- custom JavaScript -->
    <script src="js/custom.js"></script>

    <!-- prettyPhoto -->
    <script src="vendor/prettyPhoto/js/jquery.prettyPhoto.js"></script>

    <!-- custom JavaScript -->
    <script src="js/customizer.js"></script>
	
	<!-- template JavaScript -->
    <script src="js/template.js"></script>
    
    <!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
	<script type="text/javascript" src="vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="js/revolution-slider.js" type="text/javascript"></script>
    	<script type="text/javascript">

$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});

    </script>
    <!--jarallax javascript -->
    <script src="js/jarallax.js"></script>
    
	
</html>