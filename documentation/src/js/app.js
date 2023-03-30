// Run highlight JS
hljs.highlightAll();

// Sticky Sidebar
function stickySidebar() {
  const sidebar = document.querySelector("#sidebar");
  const theGrid = document.querySelector("#the-grid");
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
    }
  });
}
stickySidebar();
