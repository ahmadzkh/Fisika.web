<nav class="navbar navbar-expand navbar-light bg-light shadow fixed-top">
     <!-- Container wrapper -->
     <div class="container-fluid justify-content-center">
          <!-- Left links -->
          <ul class="navbar-nav mb-lg-1">
               <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href="{{ url('/kelompok') }}">Kelompok</a>
               </li>
               <li class="nav-item">
                    <a class="nav-link">
                         <p id="time"></p>
                    </a>
               </li>
          </ul>
          <!-- Left links -->
     </div>
     <!-- Container wrapper -->
</nav>
<script>
     var timeDisplay = document.getElementById("time");


     function refreshTime() {
          var dateString = new Date().toLocaleString("en-US", {
               timeZone: "America/Sao_Paulo"
          });
          var formattedString = dateString.replace(", ", " - ");
          timeDisplay.innerHTML = formattedString;
     }

     setInterval(refreshTime, 1000);
</script>
