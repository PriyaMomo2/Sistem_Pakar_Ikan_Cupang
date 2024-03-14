<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h2 class="footer-heading">Ikan Cupang</h2>
        <p>
          Ikan cupang, juga dikenal sebagai Betta fish, adalah ikan hias air
          tawar yang berasal dari Asia Tenggara. Mereka dikenal karena warna
          yang indah, sirip yang panjang, dan perilaku agresif antar-jantan.
          Ikan cupang populer di dunia akuarium karena perawatannya yang
          relatif mudah dan kemampuan untuk hidup dalam akuarium kecil. Ikan
          cupang juga dapat memijah, dan banyak variasi warna dan bentuk
          yang telah dikembangkan oleh para penangkar.
        </p>
        <ul class="ftco-footer-social p-0">
          <li class="ftco-animate">
            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a>
          </li>
          <li class="ftco-animate">
            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a>
          </li>
          <li class="ftco-animate">
            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <h2 class="footer-heading">Quick Links</h2>
        <ul class="list-unstyled">
          <li><a href="index.php" class="py-2 d-block">Home</a></li>
          <li><a href="about.php" class="py-2 d-block">Tentang</a></li>
          <li><a href="help.php" class="py-2 d-block">Penggunaan</a></li>
          <li><a href="develop.php" class="py-2 d-block">Pengembang</a></li>
          <li><a href="admin/login.php" class="py-2 d-block">Login</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h2 class="footer-heading">Have a Questions?</h2>
        <div class="block-23 mb-3">
          <ul>
            <li>
              <span class="icon fa fa-map"></span>
              <span class="text">Jl. Tentara Rakyat Mataram, Bumijo, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta</span>
            </li>
            <li>
              <a href="#">
                <span class="icon fa fa-phone"></span>
                <span class="text">+62 888 2664 033</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="icon fa fa-paper-plane"></span>
                <span class="text">info@BettaFish.com</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-12 text-center">
        <p class="copyright">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());
          </script>
          All rights reserved
          <i class="fa fa-heart" aria-hidden="true"></i> by
          <a href="#" target="_blank">Cupang.com</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>
  </div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
  <svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
  </svg>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/jquery.animateNumber.min.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>
<script src="assets/js/jquery.timepicker.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="assets/js/google-map.js"></script>
<script src="assets/js/main.js"></script>
<script>
  function toggleText() {
    var textElement = document.getElementById("penyakitCupangText");
    var toggleIcon = document.getElementById("toggleIcon");

    if (textElement.style.maxHeight) {
      textElement.style.maxHeight = null;
      toggleIcon.classList.remove("fa-chevron-down");
      toggleIcon.classList.add("fa-chevron-right");
    } else {
      textElement.style.maxHeight = textElement.scrollHeight + "px";
      toggleIcon.classList.remove("fa-chevron-right");
      toggleIcon.classList.add("fa-chevron-down");
    }
  }
</script>
</body>

</html>