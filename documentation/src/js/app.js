// Run highlight JS
hljs.highlightAll();

// Sticky Sidebar
function stickySidebar() {
  const sidebar = document.querySelector("#sidebar");
  const theGrid = document.querySelector("#basic");
  const footer = document.querySelector("#footer");
  let distanceToTop = theGrid.getBoundingClientRect().top;
  let distanceFooter = theGrid.getBoundingClientRect();
  let footerHeight;
  if (distanceToTop <= 20) {
    sidebar.classList.add("sticky");
  }
  window.addEventListener("scroll", function (ev) {
    distanceToTop = theGrid.getBoundingClientRect().top;
    distanceFooter = footer.getBoundingClientRect();
    // checking sidebar distance from top
    if (distanceToTop <= 20) {
      sidebar.classList.add("sticky");
    } else {
      sidebar.classList.remove("sticky");
    }
    // checking for partial footer visibility
    if (distanceFooter.top < window.innerHeight && distanceFooter.bottom >= 0) {
      footerHeight = window.innerHeight - distanceFooter.top;
      sidebar.style.bottom = footerHeight + "px";
    } else {
      sidebar.style.bottom = "0px";
    }
  });
}
stickySidebar();

// Highlight Sidebar
const sections = document.querySelectorAll(".docs-section");
window.addEventListener("scroll", navHighlighter);
function navHighlighter() {
  let scrollY = window.pageYOffset;
  sections.forEach((current) => {
    const sectionHeight = current.offsetHeight;
    const sectionTop =
      current.getBoundingClientRect().top + window.pageYOffset - 50;
    const sectionId = current.getAttribute("id");
    const sideBarElement = document.querySelector("." + sectionId + "");
    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      sideBarElement.classList.add("active");
    } else {
      sideBarElement.classList.remove("active");
    }
  });
}
