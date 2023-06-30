<nav class="navbar navbar-expand navbar-light bg-light shadow fixed-top">
     <!-- Container wrapper -->
     <div class="container-fluid d-flex justify-content-center">
     <!-- Left links -->
     <ul class="navbar-nav ms-auto mb-lg-1 p-1">
          <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="{{ url('/') }}">
                    <p>Home</p>
               </a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="{{ url('/kelompok') }}">
                    <p>Kelompok</p>
               </a>
          </li>
     </ul>
     <!-- Right links -->
     <ul class="navbar-nav ms-auto mb-lg-1"> <!-- Add the 'ml-auto' class to align items to the right -->
          <li class="nav-item">
               <a class="nav-link">
                    <p id="time">0/00/0000 -- 00:00:00 00</p>
               </a>
          </li>
     </ul>
</div>
     <!-- Container wrapper -->
</nav>
<script>
     var timeDisplay = document.getElementById("time");


     function refreshTime() {
          var dateString = new Date().toLocaleString("en-US", {
               timeZone: "Asia/Jakarta"
          });
          var formattedString = dateString.replace(",", " - ");
          timeDisplay.innerHTML = formattedString;
     }

     setInterval(refreshTime, 1000);
</script>