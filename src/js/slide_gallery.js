let slideIndex = 1;
showSlides(slideIndex);


function plusSlides(n) {
  showSlides(slideIndex += n);
}


function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  slides[slideIndex-1].style.display = "block";
}

// let els_imageBlock = document.querySelectorAll(".mySlides");
//     for (let el_imageBlock of els_imageBlock) {
//         el_imageBlock.addEventListener('mouseenter', ()=>{
//             let els_appearingBlock = document.querySelectorAll(".appear");
//             for (let el_appearingBlock of els_appearingBlock) {
//                    el_appearingBlock.style.display = "block"; 
//         }
//         el_imageBlock.addEventListener('mouseleave', ()=>{
//             for (let el_appearingBlock of els_appearingBlock) {
//                 el_appearingBlock.style.display = "none";

//             }
            
            
//         });
       
//         });
//       }


