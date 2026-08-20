(function () {
  var nav = document.getElementById("site-nav");
  var toggle = document.getElementById("nav-toggle");
  var forms = document.querySelectorAll(".quote-form");

  if (toggle && nav) {
    toggle.addEventListener("click", function () {
      var open = nav.classList.toggle("is-open");
      toggle.setAttribute("aria-expanded", open ? "true" : "false");
      toggle.setAttribute("aria-label", open ? "Close menu" : "Open menu");
    });

    nav.querySelectorAll("a").forEach(function (link) {
      link.addEventListener("click", function () {
        nav.classList.remove("is-open");
        toggle.setAttribute("aria-expanded", "false");
        toggle.setAttribute("aria-label", "Open menu");
      });
    });
  }

  forms.forEach(function (form) {
    var status = form.querySelector(".form-status");
    if (!status) return;
    form.addEventListener("submit", function (event) {
      event.preventDefault();
      status.hidden = false;
      status.classList.add("is-visible");
      status.focus();
    });
  });
})();
