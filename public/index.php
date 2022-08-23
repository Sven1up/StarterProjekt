<?php include('templates/header.php'); ?>

<?php include('templates/nav.php'); ?>

<div class="veggiesimg">
    <img class="dia" src="Bilder/Veggies.jpg" alt="Veggies" >
    <img class="dia" src="Bilder/haferflocken.jpg" alt="Carbs">
    <img class="dia" src="Bilder/milchprodukt.jpg" alt="Protein">

    <div class="bottommiddle" style="width:100%">
        <div class="button-left" onclick="plusDivs(-1)">&#10094;</div>
        <div class="dot-nav">
            <div class="dot" onclick="currentDiv(1)"></div>
            <div class="dot" onclick="currentDiv(2)"></div>
            <div class="dot" onclick="currentDiv(3)"></div>
        </div>
        <div class="button-right" onclick="plusDivs(+1)">&#10095;</div>
    </div>
</div>

<div class="flex-container">
    <a class="gallery" target="_blank" href="Bilder/brokkoli.jpg" style="background-image: url('Bilder/brokkoli.jpg')"></a>
    <a class="gallery" target="_blank" href="Bilder/karotten.jpg" style="background-image: url('Bilder/karotten.jpg')"></a>
    <a class="gallery" target="_blank" href="Bilder/apfel.jpg" style="background-image: url('Bilder/apfel.jpg')"></a>
    <a class="gallery" target="_blank" href="Bilder/orange.jpg" style="background-image: url('Bilder/orange.jpg')"></a>

    <a class="gallery" target="_blank" href="Bilder/haferflocken.jpg" style="background-image: url('Bilder/haferflocken.jpg')"></a>
    <a class="gallery" target="_blank" href="Bilder/weisserreis.jpg" style="background-image: url('Bilder/weisserreis.jpg')"></a>
    <a class="gallery" target="_blank" href="Bilder/kartoffeln.jpg" style="background-image: url('Bilder/kartoffeln.jpg')"></a>
    <a class="gallery" target="_blank" href="Bilder/teigwaren.jpeg" style="background-image: url('Bilder/teigwaren.jpeg')"></a>

    <a class="gallery" target="_blank" href="Bilder/milchprodukt.jpg" style="background-image: url('Bilder/milchprodukt.jpg')"></a>
    <a class="gallery" target="_blank" href="Bilder/poulet.jpg" style="background-image: url('Bilder/poulet.jpg')"></a>
    <a class="gallery" target="_blank" href="Bilder/rind.jpg" style="background-image: url('Bilder/rind.jpg')"></a>
    <a class="gallery" target="_blank" href="Bilder/fish.jpg" style="background-image: url('Bilder/fish.jpg')"></a>

</div>

<?php include('templates/footer.php'); ?>

