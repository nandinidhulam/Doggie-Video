<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <video autoplay muted loop id="myVideo">
                    <source src="src\Doggie.mp4" type="video/mp4">
                    Your browser does not support HTML video.
                </video>
                <div class="content">
                    <h1>WELCOME</h1>
                    <p>This Is Puppies.</p>
                    <button id="myBtn" onclick="myFunction()">Pause</button>
                </div>
            </div>
        </div>
    </div>        
</section>
                
<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>
</body>
</html>