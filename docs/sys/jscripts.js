
function w3IncludeHTML() {  /* taken from w3data.js ver 1.1 by W3Schools.com */
  var z, i, elmnt, file, xhttp;
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) { elmnt.innerHTML = this.responseText; }
          elmnt.removeAttribute("w3-include-html");
          w3IncludeHTML();
        }
      };
      xhttp.open("GET", file, true);
      xhttp.send();
      return;
    }
  }
}

function set_server(){
  var host = window.location.hostname;
  var n_host = host.length; host = host[n_host-1];
  switch (host) {
    case "r": var server = "IUEM"; break;
    default: var server = "VU"; break;
  }
  document.cookie = "server=" + server;
}

function get_cookie(nm) {
  let name = nm + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  };
  return "";
}

function include_toolbar(tb) {
  var nm, n_nm, server, file, xhttp;
  nm = window.location.href.split("/");
  n_nm = nm.length; nm = nm[n_nm - 1]; nm = nm.split("."); nm = nm[0];
  server = get_cookie('server'); if (server == ""){server = "VU"};  
  file = "sys/toolbar_" + tb + "_" + server + ".html";
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tb").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", file, true);
  xhttp.send();
  document.cookie = "toolbar=" + tb;
}

function changeServer(server) {
  document.cookie = "server=" + server;
  include_toolbar(get_cookie('toolbar'));
}

function showDropdown(Dropdown) {
    document.getElementById(Dropdown).classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  } else if (!event.target.matches('.author_dropbtn')) {
    var dropdowns = document.getElementsByClassName("author_dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function modal() {
  var modal = document.getElementById("myModal");
  var i;

  var img = document.getElementsByClassName("myImg");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");

  for(i=0;i< img.length;i++) {
    img[i].onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }
  }

  // When the user clicks on modelImg, close the modal
  modalImg.onclick = function() {
    modal.style.display = "none";
  }
}

function OpenTreeAtTaxon(taxon) {
  var newURL = "../../species_tree_Animalia.html"  + '?pic="' + taxon + '.jpg"';
  newwin = window.open(newURL);
  SetCookie("clickedFolder", taxon);
  newwin.document.taxonSearch = taxon;
}    


function OpenListAtTaxon(taxon) {
  newwin = window.open("../../species_list.html");      
  let stateCheck = setInterval(() => {
    if (newwin.document.readyState == 'complete') {
      clearInterval(stateCheck);
      var elmnt = newwin.document.getElementById(taxon);
      var height = elmnt.offsetTop;
      newwin.window.scrollTo(0, height + 250);
    }
  }, 100);
}

function OpenPageAtId(id) {
  window.open("","_parent");
  window.scrollTo(0,0);
  var elmnt = document.getElementById(id);
  var height = elmnt.offsetTop;
  window.scrollTo(0, height + 100); /* add 100 for toolbar */
}

/*----------------------------------------------------------------------------*/
/* Normalise in-page anchor (#fragment) scrolling across browsers.            */
/*                                                                            */
/* The content column (#main) is position:absolute and the toolbar/wallpaper/ */
/* footer are injected asynchronously by w3IncludeHTML(). After a #fragment    */
/* navigation Chromium/Edge reacts to that late layout shift by re-running its */
/* native fragment scroll, which ignores the fixed top bar(s) and drops the    */
/* target underneath them; Firefox does not, so the two browsers disagree.     */
/*                                                                            */
/* We position the target ourselves, offset by the measured height of the      */
/* fixed top bar(s) (so one-bar and two-bar pages both work), and keep         */
/* re-asserting it briefly so our position wins over that late native          */
/* re-scroll -- stopping the moment the user scrolls deliberately.             */
/*----------------------------------------------------------------------------*/
function anchorHeaderOffset() {
  /* bottom edge of the lowest fixed bar pinned at the top of the viewport */
  var bottom = 0, ids = ['top', 'top2'], i, el, cs;
  for (i = 0; i < ids.length; i++) {
    el = document.getElementById(ids[i]);
    if (!el) continue;
    cs = window.getComputedStyle(el);
    if (cs.position === 'fixed' && cs.display !== 'none' && cs.visibility !== 'hidden') {
      bottom = Math.max(bottom, el.getBoundingClientRect().bottom);
    }
  }
  return bottom + 5; /* small gap below the header */
}

function scrollToHashAnchor() {
  if (!location.hash) return;
  var id, el;
  try { id = decodeURIComponent(location.hash.slice(1)); } catch (e) { id = location.hash.slice(1); }
  el = document.getElementById(id);
  if (!el) return;
  window.scrollTo(0, el.getBoundingClientRect().top + window.pageYOffset - anchorHeaderOffset());
}

function keepHashAnchorAligned() {
  if (!location.hash) return;
  var cancelled = false, start = Date.now(),
      events = ['wheel', 'touchstart', 'keydown', 'mousedown'], i;
  function cancel() { cancelled = true; }
  for (i = 0; i < events.length; i++) {
    window.addEventListener(events[i], cancel, { passive: true, once: true });
  }
  (function tick() {
    if (cancelled) return;
    scrollToHashAnchor();
    if (Date.now() - start < 1500) requestAnimationFrame(tick); /* out-last the async includes */
  })();
}

window.addEventListener('load', keepHashAnchorAligned);
window.addEventListener('hashchange', function () { scrollToHashAnchor(); keepHashAnchorAligned(); });
