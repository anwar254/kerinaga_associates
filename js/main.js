// tabs
function openCity(evt, portfolio_type) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("k-tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("k-tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(portfolio_type).style.display = "block";
    evt.currentTarget.className += " active";
}

// mobile navigation
function myFunction() {
  var x = document.getElementById("menu");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

const humMenu = document.querySelector('#mobile-menu');

humMenu.onclick = function(){
  myFunction();
}

// scroll to top
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
        document.getElementById("myBtn").style.display = "block";
        document.getElementById("myBtn").style.transition = "500ms 1s display ease-in ";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    const setInt = setInterval(()=>{
        if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
            clearInterval(setInt);
        }else{
            let scroll = window.scrollY;
            scroll -= 1;
            document.body.scrollTop = scroll + "px";
            document.documentElement.scrollTop = scroll + "px";
        }
    }, 500);

}