<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Game</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }
        #player {
            position: absolute;
            width: 50px;
            height: 50px;
            background-color: blue;
        }
        #target {
            position: absolute;
            width: 50px;
            height: 50px;
            background-color: red;
        }
        #score {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 24px;
            color: black;
        }
    </style>
</head>
<body>
    <div id="player">
        <p> {{ Auth::user()->name }}</p>
        <div></div>
    </div>
    <div id="target"></div>
    <div id="score">Score: 0</div>

    <script>
        const player = document.getElementById('player');
        const target = document.getElementById('target');
        const scoreDisplay = document.getElementById('score');
        let score = 0;
        let targetDirection = 1; // 1 means right, -1 means left
        const targetSpeed = 2;

        function getRandomPositionY() {
            const y = Math.floor(Math.random() * (window.innerHeight - 50));
            return y;
        }

        function moveTarget() {
            const y = getRandomPositionY();
            target.style.left = `1px`; // Reset position to the left side
            target.style.top = `${y}px`;
        }

        function updateTargetPosition() {
            const targetRect = target.getBoundingClientRect();
            if (targetRect.left <= 0 || targetRect.right >= window.innerWidth) {
                targetDirection *= -1;
            }
            target.style.left = `${targetRect.left + targetDirection * targetSpeed}px`;
        }

        moveTarget();

        document.addEventListener('mousemove', (e) => {
            player.style.left = `${e.clientX - 25}px`;
            player.style.top = `${e.clientY - 25}px`;
            
            const playerRect = player.getBoundingClientRect();
            const targetRect = target.getBoundingClientRect();

            if (
                playerRect.left < targetRect.right &&
                playerRect.right > targetRect.left &&
                playerRect.top < targetRect.bottom &&
                playerRect.bottom > targetRect.top
            ) {
                score++;
                scoreDisplay.textContent = `Score: ${score}`;
                moveTarget();
                saveScore(score);
            }
        });

        setInterval(updateTargetPosition, 10);

        function saveScore(score) {
            fetch('/save-score', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ score: score })
            });
        }
    </script>
</body>
</html>
