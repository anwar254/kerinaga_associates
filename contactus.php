<?php
$title = "Contact Us";
session_start();
include_once 'header.php';
?>
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
<?php
  $baseUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if (strpos($baseUrl, "failure")){
    echo '
    <article class="message is-danger">
      <div class="message-header">
        <p>The message was not sent. Please fill again and resend or check your internet connection</p>
      </div>
    </article>
    ';
  }elseif(strpos($baseUrl, "success")){
    echo '
    <article class="message is-success">
      <div class="message-header">
        <p>Message was sent. We will get back to you as soon as possible</p>
      </div>
    </article>
    ';
  }elseif(strpos($baseUrl, "fields_empty")){
    echo '
    <article class="message is-danger">
      <div class="message-header">
        <p>No field should be empty</p>
      </div>
    </article>
    ';
  }else{
    echo '
    <article style = "display: none!important" class="message k-no-display">
      <div class="message-header">
        <p></p>
        <button class="delete" aria-label="delete"></button>
      </div>
    </article>
    ';
  }
?>
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
        <div class="k-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3988.791094861467!2d36.79173691475393!3d-1.3001793990516974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ske!4v1537878909797" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include_once 'footer.php';
?>
