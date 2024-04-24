

// scripts.js

// smooth scrolling to anchor links

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});




<script>
function reloadVideo(videoId) {
  var video = document.getElementById(videoId);
  video.load();
}
</script>