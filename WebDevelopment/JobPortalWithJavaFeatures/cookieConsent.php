<footer>
<div class=’cookie-banner’ style=’
                            display: none;
                            position: absolute;
                            bottom: 0px !important;
’ id="target">
        <p>
            By using our website, you agree to our 
            <a href=’insert-link’>cookie policy</a>
        </p>

        <button class=’close’ onclick="fadeOutEffect()">&times;</button>
</div>

<script>

function fadeOutEffect() {
    var fadeTarget = document.getElementById("target");
    var fadeEffect = setInterval(function () {
        if (!fadeTarget.style.opacity) {
            fadeTarget.style.opacity = 1;
        }
        if (fadeTarget.style.opacity > 0) {
            fadeTarget.style.opacity -= 0.1;
        } else {
            clearInterval(fadeEffect);
        }
    }, 200);
}

</script>
</footer>