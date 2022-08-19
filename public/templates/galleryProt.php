<?php

$proti = [

    'proti-1' => [
        'href' => 'Bilder/haferflocken.jpg',
        'image' => 'Bilder/haferflocken.jpg',
    ],


];

?>

<?php foreach ($proti as $prot): ?>
    <a class="galleryProt" target="_blank" href="<?= $prot['href'] ?>" style="background-image: url(<?= $prot['image'] ?>)"></a>
<?php endforeach; ?>

