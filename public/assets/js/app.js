const nav = document.querySelector(".navbar");
const determiner = document.querySelector(".determiner");
const NavTop = determiner.offsetTop;

function root() {
  var scripts = document.getElementsByTagName("script"),
    script = scripts[scripts.length - 1],
    path = script.getAttribute("src").split("/"),
    pathname = location.pathname.split("/"),
    notSame = false,
    same = 0;

  for (var i in path) {
    if (!notSame) {
      if (path[i] == pathname[i]) {
        same++;
      } else {
        notSame = true;
      }
    }
  }

  return location.origin + pathname.slice(0, same).join("/");
}

function fixnavbar() {
  if (window.scrollY >= NavTop) {
    nav.classList.add("position-fixed");
    nav.classList.add("nav-bg-white");
    nav.classList.add("shadow");
  } else {
    nav.classList.remove("position-fixed");
    nav.classList.remove("nav-bg-white");
    nav.classList.remove("shadow");
  }
}
window.addEventListener("scroll", fixnavbar);

$(".registerUser").on("submit", function (event) {
  event.preventDefault();
  var formData = new FormData(this);
  $.ajax({
    type: "POST",
    url: root() + "/register/create",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      alert(data);
    },
    error: function (xhr, desc, err) {
      console.log(xhr);
    },
  });
});

function searchClient(clientKey) {
  var clientKey = clientKey.value;
  if (clientKey.length > 0) {
    $.ajax({
      type: "POST",
      url: root() + "/request/read",
      data: { clientKey: clientKey },
      success: function (data) {
        $(".clientData").html(data);
      },
      error: function (xhr, desc, err) {
        console.log(xhr);
      },
    });
  } else {
    $(".clientData").html("");
  }
}

function updateStatus(status) {
  var status = status.value;
  var client_key = $("#clientKey").val();
  $.ajax({
    type: "POST",
    url: root() + "/request/update",
    data: { client_key: client_key, status: status },
    success: function (data) {
      alert(data);
      if (data.includes("successfully")) {
        location.reload();
      }
    },
    error: function (xhr, desc, err) {
      console.log(xhr);
    },
  });
}