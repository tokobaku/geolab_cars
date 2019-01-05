<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="fonts.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
      integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,700|Roboto:100,300"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
  </head>
  <body>
    <section class="home">
      <div class="main-pic relative">
        <img src="pics/car-1.png" class="auto-pic" alt="auto picture" />
        <p class="car-date absolute">27.11.</p>
        <p class="car-info absolute">Vintage Auto Exhibiton</p>
        <div class="main-pic-overlay">
          <img
            src="pics/svg/nav-toggler.svg"
            alt="nav-toggler"
            class="nav-toggler"
          />
          <img
            src="pics/svg/nav-toggler-close.svg"
            alt="nav-toggler"
            class="nav-toggler-close"
          />
          <img
            src="pics/svg/auto-name.svg"
            alt="auto-name"
            class="main-pic-name"
          />
          <img src="pics/svg/slider-left.svg" alt="" class="slider-left" />
          <img src="pics/svg/slider-right.svg" alt="" class="slider-right" />
        </div>
        <nav class="nav">
          <div class="nav-list">
            <ul class="nav-ul">
              <li class="home">HOME</li>
              <li class="services">SERVICES</li>
              <li class="contact">CONTACT</li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <section class="corner-garage">
      <h1 class="corner-garage-header">The corner garage for collector cars</h1>
      <div class="row m-0 garage-options-row">
        <div class="garage-modify-div garage-option-divs col-md-4 col-sm-12">
          <img
            src="pics/svg/garage-modify.svg"
            alt="modify"
            class="garage-modify garage-options"
          />
        </div>
        <div class="garage-buy-div garage-option-divs col-md-4 col-sm-12">
          <img
            src="pics/svg/garage-buy.svg"
            alt="buy"
            class="garage-buy garage-options"
          />
        </div>
        <div class="garage-repair-div garage-option-divs col-md-4 col-sm-12">
          <img
            src="pics/svg/garage-repair.svg"
            alt="repair"
            class="garage-repair garage-options"
          />
        </div>
      </div>
      <div class="road relative">
        <img src="pics/svg/road.svg" alt="road" class="road" />
        <img src="pics/svg/bus.svg" alt="bus" class="bus" />
      </div>
    </section>
    <section class="contact-section">
      <div class="map-container relative">
        <iframe
          class="map-iframe"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.133684704483!2d44.78366706416217!3d41.717634037791306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472d4fa5b02d7%3A0xced15c2c7992ceb5!2sGeoLab!5e0!3m2!1sen!2sge!4v1546022772205"
          width="800"
          height="600"
          frameborder="0"
          style="border:0"
          allowfullscreen
          class="map-frame"
        ></iframe>
        <div class="contact-form-wrapper">
          <div class="contact-form-wr mx-auto">
            <div class="contact-information p-0 ">
              <p class="contact-information-header">CONTACT INFORMATION</p>
              <p class="click-to-view">
                click to <br />
                &nbsp view
              </p>
              <div class="social-networks">
                <a href="#" class="google"
                  ><img
                    class="google-img sn-icons"
                    src="pics/svg/google-logo.svg"
                    alt="google+"
                /></a>
                <a href="#" class="fb"
                  ><img
                    class="fb-img sn-icons"
                    src="pics/svg/fb-logo.svg"
                    alt="facebook"
                /></a>
                <a href="#" class="twitter">
                  <img
                    src="pics/svg/twitter-logo.svg"
                    alt="twitter"
                    class="twitter-img sn-icons"
                  />
                </a>
              </div>
            </div>
            <div class="contact-form p-0">
              <form class="form-div">
                <p class="contact-form-header">GET IN TOUCH</p>
                <div class="left-side">
                  <div class="form-group form-group-divs">
                    <input
                      type="name"
                      class="form-control contact-inputs"
                      id="exampleInputName"
                      placeholder="name"
                      required
                    />
                  </div>
                  <div class="form-group form-group-divs">
                    <input
                      type="email"
                      class="form-control contact-inputs"
                      id="exampleInputEmail"
                      placeholder="email"
                      required
                    />
                  </div>
                  <div class="form-group form-group-divs">
                    <input
                      type="subject"
                      class="form-control contact-inputs"
                      id="exampleInputSubject"
                      placeholder="subject"
                      required
                    />
                  </div>
                  <div class="form-group form-group-divs">
                    <textarea
                      type="text"
                      class="form-control contact-inputs"
                      id="exampleInputText"
                      placeholder="text"
                      required
                    ></textarea>
                  </div>
                </div>
                <div class="form-right-side">
                  <div class="form-check gender-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="male"
                      value="option1"
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      male
                    </label>
                  </div>
                  <div class="form-check gender-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="male"
                      value="option1"
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      male
                    </label>
                  </div>
                  <div class="newsletter">
                    <p class="sletter-header">Sign up for newsletter:</p>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="reciveImages"
                      />
                      <label class="form-check-label" for="reciveImages">
                        recive images
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="recivePromotions"
                      />
                      <label class="form-check-label" for="recivePromotions">
                        recive promotions
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="reciveUpdates"
                      />
                      <label class="form-check-label" for="reciveUpdates">
                        recive updates
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="reciveJobOffers"
                      />
                      <label class="form-check-label" for="reciveJobOffers">
                        recive job offers
                      </label>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
  <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"
  ></script>
  <script src="jquery.js"></script>
</html>