<nav class="navbar navbar-expand navbar-light bg-light shadow" >

<button id="sidebarToggler" type="button" class="btn btn-outline-dark mr-3 d-md-none">
  <i class="fas fa-bars"></i>
</button>

<a class="navbar-brand" href="#">

  <span style="font-weight: bold;">MS - MONFU 2022</span>
</a>
<!---
<ul class="navbar-nav ml-auto">    
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
    <span>user1</span>
    <span class="fa-stack">
      <i class="fas fa-circle fa-stack-2x"></i>
      <i class="fas fa-user fa-stack-1x fa-inverse"></i>
    </span>
  </a>
  <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="#">Logout</a>
  </div>
</li>
</ul>--->
<ul class="navbar-nav ml-auto">
  <li class="nav-item ">
    <a href="#" id="webshareapi" class="btn btn-primary nav-link" style="color: #fff !important;"><i class="fa-solid fa-share"></i> Compartir</a>
  </li>
</ul>
</nav>

<script>
  var btn = document.getElementById("webshareapi");

btn.addEventListener("click", function () {
  navigator.share({
    url: document.URL,
    title: document.title,
    text: "lorem ipsum..."
  });
});

// for SVG icons
feather.replace();




</script>