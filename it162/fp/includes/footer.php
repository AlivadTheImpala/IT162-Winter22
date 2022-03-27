<footer>
    <p>
        <small>&copy; 2022-<?= date("Y") ?>
            by Brandon Davila, All Rights Reserved ~
            <a id="html-checker" href="#">Check HTML</a> ~
            <a id="css-checker" href="#">Check CSS</a>
        </small>
    </p>
</footer>

<script>
    //https://tinyurl.com/dynamic-html-checker
    document
        .getElementById("html-checker")
        .setAttribute(
            "href",
            "https://validator.w3.org/nu/?doc=" + location.href
        );
    document
        .getElementById("css-checker")
        .setAttribute(
            "href",
            "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href
        );
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-menu");

    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
    });

    document.querySelectorAll("nav-link").forEach((n) =>
        n.addEventListener("click", () => {
            hamburger.classList.remove("active");
            navMenu.classList.remove("active");
        })
    );
</script>
</body>

</html>