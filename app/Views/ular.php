<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snake Game by Ishamashi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="public/dist/aos.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
</head>

<body>

    <canvas id="gc" width="600" height="630"></canvas>
    <script>
        window.onload = function() {
            canv = document.getElementById("gc");
            ctx = canv.getContext("2d");
            document.addEventListener("keydown", keyPush);
            setInterval(game, 1000 / 13);
        }
        px = py = 10;
        gs = tc = 24;
        ay = ax = 15;
        xv = yv = 0;
        trail = [];
        tail = 5;

        function game() {
            px += xv;
            py += yv;
            if (px < 0) {
                px = tc - 1;
            }
            if (px > tc - 1) {
                px = 0;
            }
            if (py < 0) {
                py = tc - 1;
            }
            if (py > tc - 1) {
                py = 0;
            }
            ctx.fillStyle = "black";
            ctx.fillRect(0, 0, canv.width, canv.height);

            ctx.fillStyle = "lime";
            for (var i = 0; i < trail.length; i++) {
                ctx.fillRect(trail[i].x * gs, trail[i].y * gs, gs - 2, gs - 2);
                if (trail[i].x == px && trail[i].y == py) {
                    tail = 5;
                }
            }
            trail.push({
                x: px,
                y: py
            });
            while (trail.length > tail) {
                trail.shift();
            }

            if (ax == px && ay == py) {
                tail++;
                ax = Math.floor(Math.random() * tc);
                ay = Math.floor(Math.random() * tc);
            }

            ctx.fillStyle = "red";
            ctx.fillRect(ax * gs, ay * gs, gs - 2, gs - 2);
        }

        function keyPush(evt) {
            switch (evt.keyCode) {
                case 37:
                    xv = -1;
                    yv = 0;
                    break;
                case 38:
                    xv = 0;
                    yv = -1;
                    break;
                case 39:
                    xv = 1;
                    yv = 0;
                    break;
                case 40:
                    xv = 0;
                    yv = 1;
                    break;
            }
        }
    </script>
    <?= $this->endSection(); ?>
    <script src="public/script.js"></script>
    <script src="public/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>