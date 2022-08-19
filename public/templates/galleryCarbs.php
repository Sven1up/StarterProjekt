<?php

$carbs = [

    'carbs-1' => [
        'href' => 'Bilder/haferflocken.jpg',
        'image' => 'Bilder/haferflocken.jpg',
    ],

];



?>

<?php foreach ($carbs as $carb): ?>
    <a class="galleryCarbs" target="_blank" href="<?= $carb['href'] ?>" style="background-image: url(<?= $carb['image'] ?>)"></a>
<?php endforeach; ?>

