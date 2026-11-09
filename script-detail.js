  const mainPhoto = document.getElementById("mainPhoto");
const thumbs = document.querySelectorAll(".thumb");

thumbs.forEach((thumb) => {
  thumb.addEventListener("click", () => {
    mainPhoto.src = thumb.dataset.image;
    thumbs.forEach((item) => item.classList.remove("active"));
    thumb.classList.add("active");
  });
});
