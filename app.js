/*const mainHeader = document.getElementById('mainHeader');

let isScrolling;

document.addEventListener('scroll', function() {
  clearTimeout(isScrolling);

  // Hace que el header sea visible durante el desplazamiento
  mainHeader.style.top = '0';

  // Configura un temporizador para que el header desaparezca después de un breve período sin desplazamiento
  isScrolling = setTimeout(function() {
    mainHeader.style.top = '-100px'; // Ajusta el valor según sea necesario
  }, 150); // Ajusta el tiempo según sea necesario
});*/

var typed = new Typed(".text", {
  strings: ["FrondEnd Developer", "Blockchain Developer", "Web Developer"],
  typeSpeed: 100,
  backSpeed: 100,
  backDelay: 1000,
  loop: true
});
