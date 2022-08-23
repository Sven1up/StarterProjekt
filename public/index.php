<?php include('templates/header.php'); ?>

<?php include('templates/nav.php'); ?>

<div class="veggiesimg">
    <div class="dia" style="background-image: url('Bilder/Veggies.jpg')"></div>
    <div class="dia" style="background-image: url('Bilder/carbes.jpg')"></div>
    <div class="dia" style="background-image: url('Bilder/rind.jpg')"></div>

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

<h3 class="h3-title">Chinesischer Ipsum Text</h3>
<hr>
<div class="impsum">
    <p> 鑑於對人類家庭所有成員的固有尊嚴及其平等的和不移的權利的承認，乃是世界自由、正義與和平的基礎，
        鑑於對人權的無視和侮蔑已發展為野蠻暴行，這些暴行沾污了人類的良心，而一個人人享有言論和信仰自由並免予恐懼和匱乏的世界的來臨，已被宣布為普通人民的最高願望，
        鑑於為使人類不致迫不得已鋌而走險對暴政和壓迫進行反叛，有必要使人權受法治的保護，
        鑑於有必要促進各國間友好關係的發展，
        鑑於各聯合國國家的人民已在聯合國憲章中重申他們對基本人權、人格尊嚴和價值以及男女平等權利的信念，並痩心促成較大自由中的社會進步和生活水平的改善，
        鑑於各會員國並已誓願同聯合國合作以促進對人權和基本自由的普遍尊重和遵行，
        鑑於對這些權利和自由的普遍了解對於這個誓願的充分實現具有很大的重要性， </p>
</div>

<hr>

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

