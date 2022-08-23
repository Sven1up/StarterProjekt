

<footer>
    <div class="about">
        <h6>About</h6>
        <a class="footerhyp" href="sweidenmann@gmail.com">E-Mail</a>
        <a class="footerhyp" href="sven">Author</a>
        <a class="footerhyp" href="+41 079 192 20 65">Phone</a>
        <a class="footerhyp" href="https://1up.io/">Firma</a>

        <hr>

        <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by
            <a class="footerhyp" href="https://1up.io/">1Up GmbH</a>.
    </div>
</footer>

</body>


<script>
    const burger = document.querySelector('.burger');
    const navBurger = document.querySelector('.link1-menu');

    burger.addEventListener('click', () => {
        burger.classList.toggle('opened');
        navBurger.classList.toggle('opened');
    })




    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("dia");
        var dots = document.getElementsByClassName("border");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" border", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " border";
    }

</script>


</html>


