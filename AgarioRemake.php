<?php ?>

<!--  sdfsdfsdfsdf sdf sdf sdf sd f-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Agario Game</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: powderblue;
        }

        canvas {
            display: block;
            margin: auto;
            border: 1px solid white;
            height: 80vh;
            width: 100vw;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body class="bg-dark">
    <div class=container>
        <div class=row>
            <canvas id="canvas"></canvas>
        </div>
    </div>

    <script>
        var canvas = document.getElementById("canvas");
        var ctx = canvas.getContext("2d");


        // player object
        var player = {
            x: 0,
            y: 0,
            radius: 10,
            color: "#FF0000"
        };

        var food = {
            x: 100,
            y: 100,
            radius: 5,
            color: "#00FF00"
        };

        
        var food2 = {
            x: 100,
            y: 100,
            radius: 5,
            color: "#00FF00"
        };
        // update function
        function update() {
            // move player
            if (keys["ArrowUp"]) player.y -= 1;
            if (keys["ArrowDown"]) player.y += 1;
            if (keys["ArrowLeft"]) player.x -= 1;
            if (keys["ArrowRight"]) player.x += 1;

            // check for collision between player and food
            if (distance(player.x, player.y, food.x, food.y) < player.radius + food.radius) {
               
                for(let i = 0; i < 10; i++){
                    food.x = Math.random() * canvas.width / 4;
                    food.y = Math.random() * canvas.height / 4;
                }
                
                //check food2
               

                player.radius += 2;

                if (player.radius > 10) {
                    for (var a = 0; player.radius >= a; a++) {

                        player.radius--;
                        ctx.fillStyle = player.color;
                    }
                    player.radius = Math.random() * 100;
                    player.color = getRandomColor();
                   food.color=getRandomColor();
                //ctx.arc(food.x, food.y, food.radius, 0, Math.PI * 2);
                //ctx.fill();

                }
                function getRandomColor() { 
                    var letters = '0123456789ABCDEF';
                    var color = '#';
                    for (var i = 0; i < 6; i++) {
                        color += letters[Math.floor(Math.random() * 16)];
                    }
                    return color;
                }
            }


            //IFY 2


            if (distance(player.x, player.y, food2.x, food2.y) < player.radius + food2.radius) {
               
               for(let i = 0; i < 10; i++){
                food2.x = Math.random() * canvas.width / 4;
                food2.y = Math.random() * canvas.height / 4;
               }

               player.radius += 2;

                if (player.radius > 10) {
                    for (var a = 0; player.radius >= a; a++) {

                        player.radius--;
                       // ctx.fillStyle = player.color;
                    }
                    player.radius = Math.random() * 100;
                    player.color = getRandomColor2();
                    food.color = getRandomColor2();
                //ctx.arc(food.x, food.y, food.radius, 0, Math.PI * 2);
                //ctx.fill();

                }
                function getRandomColor2() { 
                    var letters = '0123456789ABCDEF';
                    var color = '#';
                    for (var i = 0; i < 6; i++) {
                        color += letters[Math.floor(Math.random() * 16)];
                    }
                    return color;
                }
            }
        
            
        }


        

        // draw function
        function draw() {
            // clear canvas
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            // draw player
            ctx.fillStyle = player.color;
            ctx.beginPath();
            ctx.arc(player.x, player.y, player.radius, 0, Math.PI * 2);
            ctx.fill();

            // draw food
                ctx.fillStyle = food.color;
                ctx.beginPath();
                ctx.arc(food.x, food.y, food.radius, 0, Math.PI * 2);
                ctx.fill();


                //draw food2
                ctx = canvas.getContext("2d");
                ctx.arc(food2.x, food2.y, food2.radius, 0, Math.PI * 2);
                ctx.fill();
                ctx.fillStyle = food2.color;
                ctx.beginPath();
        }

        // distance function
        function distance(x1, y1, x2, y2) {
            var dx = x2 - x1;
            var dy = y2 - y1;
            return Math.sqrt(dx * dx + dy * dy);
        }

        // key event listeners
        var keys = {};
        document.addEventListener("keydown", function (e) {
            keys[e.key] = true;
        });
        document.addEventListener("keyup", function (e) {
            keys[e.key] = false;
        });

        // game loop
        function loop() {
            update();
            draw();
            requestAnimationFrame(loop);
        }

        // start game loop
        loop();


    </script>
</body>

</html>
<?php ?>