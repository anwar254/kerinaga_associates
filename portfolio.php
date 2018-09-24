<?php
include_once 'header.php';
?>
<section class="hero about-hero" id="about-hero">
  <div class="overlay"></div>
  <div class="heading hero-text-container">
    <h1 class="title k-text-center k-text-title">projects</h1>
  </div>
</section>
<div class="conatiner">
  <div class="top">
    <button onclick="topFunction()" class="k-to-top" id="myBtn">top</button>
  </div>
</div>
<section class="section">
  <div class="container">
    <div class="section-title full-width">
      <div class="heading">
          <h1 class="title">portfolio</h1>
          <div class="k-title-line"></div>
          <!-- <p>
            what we can do for you
          </p> -->
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="k-tab">
      <button class="k-tablinks k-capitalized" onclick="openCity(event, 'residential')"  id="defaultOpen">residential</button>
      <button class="k-tablinks k-capitalized" onclick="openCity(event, 'industrial')">industrial commercial</button>
      <button class="k-tablinks k-capitalized" onclick="openCity(event, 'institutional')">institutional</button>
      <button class="k-tablinks k-capitalized" onclick="openCity(event, 'structural')">structural integrity</button>
    </div>

    <!-- the residental  -->
    <div id="residential" class="k-tabcontent">
      <div class="columns">
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="images\Construction-site.gif" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>Kencom Sacco Homes</h3>
                <p>
                  This is a 1.75 billion estate comprising 113 no. 4 bedroom houses, Nursery school, and a commercial centre. It is located near paradise lost off Kiambu road .
                </p>
                <div class="k-more">
                  <p class="k-capitalized"><b>client: </b> N/A</p>
                  <p class="k-capitalized"><b>Architects: </b>N/A</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="images\construction.jpg" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>Butterfly Valley apartments</h3>
                <p>
                  Serviced flats and club house  with 4 no. villas on the the topmost floor on a steep site with poor soil conditions, along Limuru road, Nairobi.In addition to the villas, the top floor also has lap and reflective pools.
                </p>
                <div class="k-more">
                  <p class="k-capitalized"><b>client: </b> N/A</p>
                  <p class="k-capitalized"><b>Architects: </b><a href="https://www.spacematrix.com/" target="_blank">Spacematrix of singapore</a> and Sycum solutions of Nairobi</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="images\20120905_053.jpg" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>Parklands  flats</h3>
                <p>
                  20 no. executive flats  In a  ten  storey framed structure  with basement and ground floor parking as well as roof top swimming pool.
                </p>
                <div class="k-more">
                  <p class="k-capitalized"><b>client: </b> N/A</p>
                  <p class="k-capitalized"><b>Architects: </b>N/A</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="columns">
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="images\Construction-site.gif" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>Apple cross Town houses</h3>
                <p>
                  5 No. villas on a steep site along Mbabane road, Lavington, nairobi.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="images\construction.jpg" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>Proposed Residential development on Chalbi drive Lavington.</h3>
                <p>
                  These are 6 no. Townhouses on Chalbi drive Lavington for Kibuwa enterprise Limited.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="images\20120905_053.jpg" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>Proposed Mansion at Karen, Nairobi</h3>
                <p>
                  It is a double storey modern mansion 1500M2 at Karen, Nairobi.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="columns">
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="images\Construction-site.gif" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>Karen Splendor homes</h3>
                <p>
                  Ten units of double storey mansions each with a floor area of 1000 square metres along Ushirika road, Karen, Nairobi.The complex includes a club house with a swimming pool as well as underground and highrise water storage tanks.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="images\construction.jpg" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>Southgate estate </h3>
                <p>
                  Southgate estate comprises of 510 three bed roomed units of flats in fifty one blocks with internal roads,foul water drainage and storm water drainage along Mombasa road, Mavoko Municipality.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="images\20120905_053.jpg" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>Maringo eco-homes </h3>
                <p>
                  These are six number town houses along Amboseli road, Lavington, Nairobi.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="columns">
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="images\Construction-site.gif" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>Mountain View estate</h3>
                <p>
                  An estate of 120 no. houses with 9 types of villas on a steep site off Waiyaki way, Nairobi.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="images\construction.jpg" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>Ndemi lane apartments </h3>
                <p>
                  Three blocks of eight apartments each. To increase the number of parking spaces, the ground floor was “lifted” by a storey height to allow parking under the building. It also had communal swimming pool and changing rooms and is situated along Ndemi lane off Ngong road, Nairobi.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="images\20120905_053.jpg" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>South B housing estate </h3>
                <p>
                  50 no. Town houses with 3 type designs located in south 'B' Nairobi.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="columns">
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="images\Construction-site.gif" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>Kapsoya,housing estate</h3>
                <p>
                  130 no. bungalows with internal roads,storm water drainage,foul water drainage as well as water reticulation located along Kapsoya road, Eldoret.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="images\construction.jpg" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>Residential house: Thome avenue, Nairobi </h3>
                <p>
                  N/A
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="images\20120905_053.jpg" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>Four Residential houses : Ushirika road, Karen. </h3>
                <p>
                  N/A
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="columns">
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="images\Construction-site.gif" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>Residential house </h3>
                <p>
                  A large double storey villa off Bogani road,Karen, Nairobi
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="images\construction.jpg" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>Mansion, Runda, Nairobi </h3>
                <p>
                  N/A
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- the industrial -->
    <div id="industrial" class="k-tabcontent">
      <div class="columns">
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="#" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3 class="k-capitalize">kencom sacco homes</h3>
                <p>
                  We offer innovative and economical design services, maintaining the latest state of the art design technology .We meet client’s needs on projects of all sizes, and smaller, special design projects
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="#" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3 class="k-capitalize">butterfly valley apartments</h3>
                <p>
                  We offer innovative and economical design services, maintaining the latest state of the art design technology .We meet client’s needs on projects of all sizes, and smaller, special design projects
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="#" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>residengtial</h3>
                <p>
                  We offer innovative and economical design services, maintaining the latest state of the art design technology .We meet client’s needs on projects of all sizes, and smaller, special design projects
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- the institutional -->
    <div id="institutional" class="k-tabcontent">
      <div class="columns">
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="#" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>residengtial</h3>
                <p>
                  We offer innovative and economical design services, maintaining the latest state of the art design technology .We meet client’s needs on projects of all sizes, and smaller, special design projects
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="#" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>residengtial</h3>
                <p>
                  We offer innovative and economical design services, maintaining the latest state of the art design technology .We meet client’s needs on projects of all sizes, and smaller, special design projects
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="#" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>residengtial</h3>
                <p>
                  We offer innovative and economical design services, maintaining the latest state of the art design technology .We meet client’s needs on projects of all sizes, and smaller, special design projects
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- the structural -->
    <div id="structural" class="k-tabcontent">
      <div class="columns">
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="#" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>residengtial</h3>
                <p>
                  We offer innovative and economical design services, maintaining the latest state of the art design technology .We meet client’s needs on projects of all sizes, and smaller, special design projects
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="#" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>residengtial</h3>
                <p>
                  We offer innovative and economical design services, maintaining the latest state of the art design technology .We meet client’s needs on projects of all sizes, and smaller, special design projects
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="k-tile">
            <div class="k-top">
              <div class="k-images">
                <img src="#" alt="portfolio">
              </div>
            </div>
            <div class="k-bottom">
              <div class="k-title">
                <h3>residengtial</h3>
                <p>
                  We offer innovative and economical design services, maintaining the latest state of the art design technology .We meet client’s needs on projects of all sizes, and smaller, special design projects
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include_once 'footer.php';
?>
