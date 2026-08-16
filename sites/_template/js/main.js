(function () {
  var nav = document.getElementById("site-nav");
  var toggle = document.getElementById("nav-toggle");
  var form = document.getElementById("quote-form");
  var status = document.getElementById("form-status");

  if (toggle && nav) {
    toggle.addEventListener("click", function () {
      var open = nav.classList.toggle("is-open");
      toggle.setAttribute("aria-expanded", open ? "true" : "false");
    });

    nav.querySelectorAll("a").forEach(function (link) {
      link.addEventListener("click", function () {
        nav.classList.remove("is-open");
        toggle.setAttribute("aria-expanded", "false");
      });
    });
  }

  if (form && status) {
    form.addEventListener("submit", function (event) {
      event.preventDefault();
      status.hidden = false;
      status.classList.add("is-visible");
      status.focus();
    });
  }
})();
