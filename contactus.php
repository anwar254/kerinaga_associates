<?php
include_once 'header.php';
?>
<article class="message is-success">
  <div class="message-header">
    <p>Success</p>
    <button class="delete" aria-label="delete"></button>
  </div>
</article>
<section class="hero about-hero" id="about-hero">
  <div class="overlay"></div>
  <div class="heading hero-text-container">
    <h1 class="title k-text-center k-text-title">contacts</h1>
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
          <h1 class="title">contact us</h1>
          <div class="k-title-line"></div>
          <p>
            Drop us a line
          </p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="columns">
      <div class="column">
        <form class="k-form" action="inc/contactus.inc.php" method="POST">
          <div class="field">
            <label class="label k-capitalized">full name</label>
            <input type="text"  title="enter your full name here" class="input k-inputs" name="k-name" placeholder="eg: John Doe">
          </div>
          <div class="field">
            <label class="label k-capitalized">email</label>
            <input type="email"  title="enter your email here" class="input k-inputs" name="k-email" placeholder="test@test.com">
          </div>
          <div class="field">
            <label class="label k-capitalized">Phone No.</label>
            <input type="text" title="enter your phone number here" class="input k-inputs" name="k-phone" placeholder="eg: 0712345678">
          </div>
          <div class="field">
            <label class="label k-capitalized">Subject</label>
            <input type="text" title="enter your Subject" class="input k-inputs" name="k-subject" placeholder="eg: this is a simple subject">
          </div>
          <div class="field">
            <label class="label k-capitalized">Message</label>
            <textarea name="k-message" title="enter yout message here" class="textarea k-inputs" rows="8" cols="80" placeholder="eg: this is my example message"></textarea>
          </div>
          <div class="field">
            <div class="more-link">
              <button type="submit" name="k-button" class="k-btn">submit</button>
            </div>
          </div>
        </form>
      </div>
      <div class="column">

      </div>
    </div>
  </div>
</section>
<?php
include_once 'footer.php';
?>
