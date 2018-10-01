      <footer id="footer">
        <div class="container">
          <div class="columns">
            <div class="column">
              <div class="section-title full-width">
                  <div class="heading">
                      <h1 class="title">kering</h1>
                      <div class="k-title-line"></div>
                  </div>
                </div>
                <p>Kering associate engineers ltd is a fast growing civil and structural engineering firm based in Nairobi and offers a variety of consultancy Services.

                Our engineers are registered members of the Engineers Registeration Board of Kenya (ERB), the Institution of Engineers of Kenya (IEK) and the Architectural Association of Kenya-engineer's chapter { AAK (E) }.

                We deal in structures of all types and sizes as well as related civil works (roads and storm water drainage as well as foul water drainage). </p>
            </div>

            <div class="column">
              <div class="section-title full-width">
                  <div class="heading">
                      <h1 class="title k-headeing-font-size-small">navigation</h1>
                      <div class="k-title-line"></div>
                  </div>
                </div>
                <div class="links">
                  <ul>
                      <li class="nav-link"><a href="#">Home</a></li>
                      <li class="nav-link"><a href="#">About Us</a></li>
                      <li class="nav-link"><a href="#">Our Services</a></li>
                      <li class="nav-link"><a href="#">Project Portfolio</a></li>
                      <li class="nav-link"><a href="#">Downloads</a></li>
                      <li class="nav-link"><a href="#">fAQs</a></li>
                      <li class="nav-link"><a href="#">contact Us</a></li>
                  </ul>
                </div>
            </div>

            <div class="column">
              <div class="section-title full-width">
                  <div class="heading">
                      <h1 class="title k-headeing-font-size-small">contact us</h1>
                      <div class="k-title-line"></div>
                  </div>
                  <h1 class="k-headeing-font-size-small">Physical Location</h1>
                  <p>3rd floor, Block B-13,</p>
                  <p>Jameson Court,</p>
                  <p>Ngong road,</p>
                  <p>Nairobi.</p>

                  <h1 class="k-headeing-font-size-small">Postal Address</h1>
                  <p>P.O Box 4559-00506</p>
                  <p>Nairobi, Kenya</p>

                  <h1 class="k-headeing-font-size-small">Telephone & Fax</h1>
                  <p>Telephone:</p>
                  <p>Wireless: - 020 523 3473,</p>
                  <p>Mobile:   0774 134115, 0737 289006</p>
                  <p>Email:</p>
                  <span>engineer@keringassociates.co.ke</span>
                  <span>kering@keringassociates.co.ke</span>
                </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script>
      // Get the element with id="defaultOpen" and click on it

      try{
        document.getElementById("defaultOpen").click();
      }
      catch(ReferenceError){
        document.getElementById("defaultOpen");
      }
    </script>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("myBtn").style.display = "block";
          } else {
              document.getElementById("myBtn").style.display = "none";
          }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0 + "px"; // For Safari
        document.documentElement.scrollTop = 0 + "px"; // For Chrome, Firefox, IE and Opera
      }
    </script>
  </body>
</html>
