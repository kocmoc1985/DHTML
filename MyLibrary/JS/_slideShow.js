
// <div id="slideshow">
//   <img src="1.png" alt="image">
//   <img src="2.png" alt="image">
//   <img src="3.png" alt="image">
//   <img src="4.png" alt="image">
// </div>

function slideshow() {
    var activeImage = $("#slideshow img:visible"); // Letar upp den bild som visas just nu
    activeImage.fadeOut(1000); // Tonar ut den aktuella bilden
    if (activeImage.next().length !== 0) {
        activeImage.next().fadeIn(1000); // Om det finns en bild efter, tonas denna in
    }
    else {
        activeImage.parent().children().first("img").fadeIn(1000); // Annars börjar bildspelet om
    }
}

function start() {
    $("#slideshow").children().hide(); // Döljer alla bilder
    $("#slideshow").children().first().show(); // Visar den första bilden
    setInterval(slideshow, 5000); // Byter bild var 5:e sekund
}

// Kör funktionen start när sidan laddas
$(document).ready(start);