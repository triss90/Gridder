// Run highlight JS
hljs.highlightAll();

// Sticky Sidebar
function stickySidebar() {
  const sidebar = document.querySelector("#sidebar");
  const theGrid = document.querySelector("#the-grid");
  let distanceToTop = theGrid.getBoundingClientRect().top;
  if (distanceToTop <= 20) {
    sidebar.classList.add("sticky");
  }
  window.addEventListener("scroll", function (ev) {
    distanceToTop = theGrid.getBoundingClientRect().top;
    if (distanceToTop <= 20) {
      sidebar.classList.add("sticky");
    } else {
      sidebar.classList.remove("sticky");
    }
  });
}
stickySidebar();
