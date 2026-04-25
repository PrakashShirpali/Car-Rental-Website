

document.addEventListener("DOMContentLoaded", function () {
  const navLogo = document.querySelector(".nav-logo");
  const scrollToTopBtn = document.querySelector(".scroll-to-top-btn");
  const navLogoOriginalOffset = navLogo.offsetTop;

  window.addEventListener("scroll", function () {
    const scrollPosition = window.scrollY;

    if (scrollPosition >= navLogoOriginalOffset) {
      navLogo.classList.add("fixed");
      scrollToTopBtn.classList.add("show");
    } else {
      navLogo.classList.remove("fixed");
      scrollToTopBtn.classList.remove("show");
    }
  });

  scrollToTopBtn.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});
