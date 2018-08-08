<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="stylesheet.css" />
        <title>prototype 1</title>
    </head>
    <body>
      <script type="text/javascript">
          //variables for items
          var gold = 0;
          var pickaxeUp = 0;
          var PickaxeEfficiency = 1;
          var worker = 0;
          var manager = 0;
          var vehicleOperator = 0;
          var speed = 4;

          // calculationg the amount of gold
          function goldClick(value) {
              gold++;
              gold += value;
          };

          // buy Pickaxe
          function buypickaxeUp(value) {
              var pickaxeUpCost = Math.floor(10 * Math.pow(1.1,pickaxeUp));
              document.getElementById('pickaxeUps').innerHTML = "Amount: " + pickaxeUp * PickaxeEfficiency;
              if (gold >= pickaxeUpCost) {
                  pickaxeUp += 1;
                  gold -= pickaxeUpCost;
                  document.getElementById('pickaxeUps').innerHTML = "Amount: " + pickaxeUp * PickaxeEfficiency;
                  //document.getElementById('gold').innerHTML = gold;
              };
              var nextCost = Math.floor(10 * Math.pow(1.1,pickaxeUp));
              document.getElementById('pickaxeUpCost').innerHTML = nextCost;
          };

          // buy pickaxe eficentcy works 10% better
          function buyPickaxeEfficiency() {
              var PickaxeEfficiencyCost = Math.floor(1000 * Math.pow(1,PickaxeEfficiency));
              document.getElementById('PickaxeEfficiencies').innerHTML = "Amount: " + PickaxeEfficiency;
              if (gold >= PickaxeEfficiencyCost) {
                  PickaxeEfficiency += 1;
                  gold -= PickaxeEfficiencyCost;
                  document.getElementById('PickaxeEfficiencies').innerHTML = "Amount: " + PickaxeEfficiency;
              };
              var nextCost = Math.floor(1000 * Math.pow(1,PickaxeEfficiency));
              document.getElementById('PickaxeEfficiencyCost').innerHTML = nextCost;
          };

          // Buy workers

          function buyworker() {
              var workerCost = Math.floor(100 * Math.pow(1.15,worker));
              document.getElementById('workers').innerHTML = "Amount: " + worker;
              if (gold >= workerCost) {
                  worker += 1;
                  gold -= workerCost;
                  document.getElementById('workers').innerHTML = "Amount: " + worker;
              };
              var nextCost = Math.floor(100 * Math.pow(1.15,worker));
              document.getElementById('workerCost').innerHTML = nextCost;
          };
          
          // manager

          function buymanager() {
              var managerCost = Math.floor(1000 * Math.pow(1.2,manager));
              document.getElementById('managers').innerHTML = "Amount: " + manager;
              if (gold >= managerCost) {
                  manager += 1;
                  gold -= managerCost;
                  document.getElementById('managers').innerHTML = "Amount: " + manager;
              };
              var nextCost = Math.floor(1000 * Math.pow(1.2,manager));
              document.getElementById('managerCost').innerHTML = nextCost;
          };

          // vehicle Operator

          function buyvehicleOperator() {
              var vehicleOperatorCost = Math.floor(10000 * Math.pow(1.25,vehicleOperator));
              document.getElementById('vehicleOperators').innerHTML = "Amount: " + vehicleOperator;
              if (gold >= vehicleOperatorCost) {
                  vehicleOperator += 1;
                  gold -= vehicleOperatorCost;
                  document.getElementById('vehicleOperators').innerHTML = "Amount: " + vehicleOperator;
              };
              var nextCost = Math.floor(10000 * Math.pow(1.25,vehicleOperator));
              document.getElementById('vehicleOperatorCost').innerHTML = nextCost;
          };


          // Timer

          function timer(){

              // Worker
              gold += worker*1 /60.0;

              // manager
              gold += manager * 10/60.0;

              // vehicleOperator
              gold += vehicleOperator * 100/60.0;

              // Update gold
              document.getElementById('gold').innerHTML = Math.floor(gold);
          }
          // Run timer at 60fps
          setInterval(timer,1000/60.0);
        </script>


        <!-- hiding the upgrades ] -->
        <!-- <script>
          function hideWorker() {
              var hideW = document.getElementById("hiderW");
              if (hideW.style.display === "none") {
                hideW.style.display = "hideW";
            } else {
              hideW.style.display = "none";
            }
          }
        </script> -->

        <!-- Gold and Click me Button -->
        <div>
          <div style="position: absolute; top: 200px; right: 400px;">
            <button id="gold2" onClick="goldClick(pickaxeUp)" style="position: static" align="center">
              <img src="#">
              <p align="center" style="line-height:-200em">Click Me!</p>
            </button>
          </div>
          <div style="position: absolute; top: 25px; right: 400px; ">
            <p>gold:
            <span id="gold" style="right:20px">0</span></p>    
          </div>    
        </div>

        <!-- purches items -->
        <section>
          <!-- Buy Pickaxe -->
          <div style="position: absolute; left: 50px; right: 75px; top: 50px;">
          <button id="pickaxeUp" onClick="buypickaxeUp()" style="position: static" align="center">
            <img src="#"/>
          </button>
            <div style="position: absolute; left: 20px; padding-top: 10px;">
             <span id="pickaxeUps">Amount: 0</span>
              <p>Cost: <span id="pickaxeUpCost">10</span></p>
            </div>
          </div>

            <br>
            <br>
            <br>
            <br>
            <br>

          <!-- Buy Worker -->
          <div style="position: absolute; left: 50px; right: 75px; top: 150px;">
            <button id="worker" onClick="buyworker()" style="position: static" align="center">
              <img src="#">
            </button>
            <div style="position: absolute; left: 20px;">
              <span id="workers">Amount: 0</span>
              <p>Cost: <span id="workerCost">50</span>  (+ 1 per second)</p>
            </div>
          </div>

            <br>
            <br>
            <br>
            <br>
            <br>

          <!-- Buy Manager -->
          <div style="position: absolute; left: 50px; right: 75px; top: 250px;">
            <button id="manager" onClick="buymanager()" style="position: static" align="center">
            <img src="#">
            </button>
            <div style="position: absolute; left: 20px;">
              <span id="managers">Amount: 0</span>
              <p>Cost: <span id="managerCost">1000 </span> (+ 10 per second)</p>
            </div>
          </div>

          <!-- vehicle Operator -->
          <div style="position: absolute; left: 50px; right: 75px; top: 350px;">
            <button id="vehicleOperator" onClick="buyvehicleOperator()" style="position: static" align="center">
            <img src="#">
            </button>
            <div style="position: absolute; left: 20px;">
              <span id="vehicleOperators">Amount: 0</span>
              <p>Cost: <span id="vehicleOperatorCost">10000 </span> (+ 100 per second)</p>
            </div>
          </div>
        </section>



        <!-- purches upgrades -->
        <section>
          <!-- pickaxe works 10% better -->
          <div>
            <button id="PickaxeEfficiency" onClick="buyPickaxeEfficiency()" style="position: absolute; left: 500px; top: 50px;">
            <img src="#">
            </button>
            <div style="position: absolute; left: 500px; top: 75px;">
              <span id="PickaxeEfficiencies">Amount: 0</span>
              <p>Cost: <span id="PickaxeEfficiencyCost">100 </span> (Get more Pickaxesper per purchases)</p>
            </div>
          </div>
        </section>

        <!-- canvase sprite -->
        <canvas id="coinAnimation" style="border:1px solid #000000; position: absolute; right: 25; top: 25"></canvas>
        <script type="text/javascript">

          (function() {
            var lastTime = 0;
            var vendors = ['ms', 'moz', 'webkit', 'o'];
            for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
              window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
              window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] 
                || window[vendors[x]+'CancelRequestAnimationFrame'];
              }
           
            if (!window.requestAnimationFrame)
              window.requestAnimationFrame = function(callback, element) {
                var currTime = new Date().getTime();
                var timeToCall = Math.max(0, 16 - (currTime - lastTime));
                var id = window.setTimeout(function() { callback(currTime + timeToCall); }, 
                    timeToCall);
                  lastTime = currTime + timeToCall;
                  return id;
              };
           
            if (!window.cancelAnimationFrame)
              window.cancelAnimationFrame = function(id) {
                clearTimeout(id);
              };
          }());

          (function () {
            var coin,
              coinImage,
              canvas;         

            function gameLoop () {
              window.requestAnimationFrame(gameLoop)
              coin.update();
              coin.render();
            }
            
            function sprite (options) {
              var that = {},
                frameIndex = 0,
                tickCount = 0,
                ticksPerFrame = options.ticksPerFrame || 0,
                numberOfFrames = options.numberOfFrames || 1;
              
              that.context = options.context;
              that.width = options.width;
              that.height = options.height;
              that.image = options.image;
              
              that.update = function () {

                tickCount += 1;

                if (tickCount > ticksPerFrame) {

                  tickCount = 0;
                    // If the current frame index is in range
                    if (frameIndex < numberOfFrames - 1) {  
                    // Go to the next frame
                      frameIndex += 1;
                    } else {
                      frameIndex = 0;
                    }
                }
              };
              
              that.render = function () {
              
                // Clear the canvas
                that.context.clearRect(0, 0, that.width, that.height);
                
                // Draw the animation
                that.context.drawImage(
                  that.image,
                  frameIndex * that.width / numberOfFrames,
                  0,
                  that.width / numberOfFrames,
                  that.height,
                  0,
                  0,
                  that.width / numberOfFrames,
                  that.height);
              };
              
              return that;
            }
            
            // Get canvas
            canvas = document.getElementById("coinAnimation");
            canvas.width = 100;
            canvas.height = 100;
            
            // Create sprite sheet
            coinImage = new Image();  
            
            // Create sprite
            coin = sprite({
              context: canvas.getContext("2d"),
              width: 1000,
              height: 100,
              image: coinImage,
              numberOfFrames: 10,
              ticksPerFrame: speed
            });
            
            // Load sprite sheet
            coinImage.addEventListener("load", gameLoop);
            coinImage.src = "img/coin.png";

          }());
        </script>
    </body>
</html>