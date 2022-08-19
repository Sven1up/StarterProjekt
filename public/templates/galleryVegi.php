<?php
    $vegis = [
        'vegi-1' => [
            'href' => 'Bilder/brokkoli.jpg',
            'image' => 'Bilder/brokkoli.jpg',
            ],
        'vegi-2' => [
            'href' => 'Bilder/karotten.jpg',
            'image' => 'Bilder/karotten.jpg',
        ],
        'vegi-3' => [
            'href' => 'Bilder/apfel.jpg',
            'image' => 'Bilder/apfel.jpg',
        ],

    ];

?>

<?php foreach ($vegis as $vegi): ?>
    <a class="galleryVegi" target="_blank" href="<?= $vegi['href'] ?>" style="background-image: url(<?= $vegi['image'] ?>)"></a>
<?php endforeach; ?>

