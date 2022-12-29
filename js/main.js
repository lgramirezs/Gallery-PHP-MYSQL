// variables
const boxGallery = document.querySelector(".box-gallery");
const buttonClose = document.querySelector("#close");

// addEventListener
document.addEventListener("DOMContentLoaded", executeGalery);

buttonClose.addEventListener("click", closeImg);

// Funciones

function executeGalery() {
  let images = document.querySelectorAll(".galery-img");
  images.forEach((img) => {
    img.addEventListener("click", openImg);
  });
}

function openImg(e) {
  boxGallery.style.display = "flex";

  const div = document.createElement('div');
  div.setAttribute("id", "box-img-details");
  div.innerHTML = `
      <img src="${e.target.src}" alt="">
      <a class="btn" href="info.image.php?id=${e.target.id}">View information</a>
  `
  boxGallery.appendChild(div);
}

function closeImg() {
  boxGallery.style.display = "none";
  boxGallery.removeChild(boxGallery.lastChild);
}
