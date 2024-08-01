
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Trailer</title>
    <link rel="stylesheet" href="./../css/trailer4.css">
</head>
<body>
    <div class="movie-slider">
        <h2>Related Movie</h2>
        <div class="slider">
            <div class="slide">
                <img src="movie1.jpg" alt="Movie 1">
                <h3>Clue of the Invisible Hand</h3>
                <p>Romance, English, 2019</p>
                <p>2 Hr 3 Min</p>
                <button onclick="playTrailer('https://youtu.be/BEwqWttDDwA?si=IsY1SaTn1BtN4wy0')">Play Trailer</button>
            </div>
            <div class="slide">
                <img src="movie2.jpg" alt="Movie 2">
                <h3>A Millipede Dreams of Mas Four Realms</h3>
                <p>Romance, English, 2019</p>
                <p>2 Hr 3 Min</p>
                <button onclick="playTrailer('https://youtu.be/BEwqWttDDwA?si=IsY1SaTn1BtN4wy0')">Play Trailer</button>
            </div>
            <!-- Add more slides as needed -->
        </div>
        <button class="view-all">View All</button>
    </div>
    <div id="trailer-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeTrailer()">&times;</span>
            <video id="trailer-video" controls>
                <source src="" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <script function playTrailer(videoSrc) {
    var modal = document.getElementById("trailer-modal");
    var video = document.getElementById("trailer-video");
    video.src = videoSrc;
    modal.style.display = "flex";
    video.play();
}

function closeTrailer() {
    var modal = document.getElementById("trailer-modal");
    var video = document.getElementById("trailer-video");
    video.pause();
    modal.style.display = "none";
}></script>
</body>
</html>