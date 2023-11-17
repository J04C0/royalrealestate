var slideIndex = 0;
showSlides();

//class to the navbar on scroll
window.onscroll = function() {
    var navbar = document.querySelector(".w3-top");
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        navbar.classList.add("opaque-navbar");
    } else {
        navbar.classList.remove("opaque-navbar");
    }
};

// Smooth scrolling to the contact section
document.querySelector('a[href="#contact"]').addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector('#contact').scrollIntoView({ behavior: 'smooth' });
});


function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 120000); // Change slide every 2 seconds (adjust as needed)
}