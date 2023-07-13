<style>
     .loader {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          text-align: center;
          z-index: 1020;
     }

     .loader img {
          display: block;
          margin: 0 auto;
     }

     .loader section {
          text-align: center;
     }

     .loading {
          font-size: 5vw;
          font-family: 'Montserrat', sans-serif;
          font-weight: 800;
          text-align: center;
     }

     span {
          display: inline-block;
          margin: 0 -0.2vw;
          position: relative;
          color: rgba(0, 0, 0, .1);
          animation: bounce 0.8s ease infinite;
     }

     span:nth-child(2) {
          animation-delay: 0.1s;
     }

     span:nth-child(3) {
          animation-delay: 0.2s;
     }

     span:nth-child(4) {
          animation-delay: 0.3s;
     }

     span:nth-child(5) {
          animation-delay: 0.4s;
     }

     span:nth-child(6) {
          animation-delay: 0.5s;
     }

     span:nth-child(7) {
          animation-delay: 0.6s;
     }

     span::after {
          position: absolute;
          top: 0;
          left: 0;
          content: attr(data-text);
          color: rgba(0, 0, 0, .2);
          opacity: 0;
          transform: scale(1.5);
          animation: loading07 4s infinite;
     }

     span:nth-child(2)::after {
          animation-delay: 0.1s;
     }

     span:nth-child(3)::after {
          animation-delay: 0.2s;
     }

     span:nth-child(4)::after {
          animation-delay: 0.3s;
     }

     span:nth-child(5)::after {
          animation-delay: 0.4s;
     }

     span:nth-child(6)::after {
          animation-delay: 0.5s;
     }

     span:nth-child(7)::after {
          animation-delay: 0.6s;
     }

     @keyframes bounce {
          100% {
               top: -20px;
               text-shadow: 0 1px #ccc,
                    0 2px #ccc,
                    0 3px #ccc,
                    0 4px #ccc,
                    0 5px #ccc,
                    0 6px #ccc,
                    0 7px #ccc,
                    0 8px #ccc,
                    0 9px #ccc,
                    0 50px 25px rgba(0, 0, 0, 0.2);
          }
     }

     @keyframes loading07 {

          0%,
          75%,
          100% {
               transform: scale(1.5);
               opacity: 0;
          }

          25%,
          50% {
               transform: scale(1);
               opacity: 1;
          }
     }
</style>
<div style="      text-size-adjust: 100%;
          text-align: center;
          background: url(../assets/img/gurabg.webp);
          background-size: cover;
          background-repeat: no-repeat;">
     <div id="loader-container" class="loader">
          <img src="../assets/img/gawr-gura-spin.gif">
          <section>
               <div class="loading loading07">
                    <span data-text="L">L</span>
                    <span data-text="O">O</span>
                    <span data-text="A">A</span>
                    <span data-text="D">D</span>
                    <span data-text="I">I</span>
                    <span data-text="N">N</span>
                    <span data-text="G">G</span>
               </div>
          </section>
          <span style="background: url(../assets/img/gurabg.png);"></span>
     </div>
</div>
