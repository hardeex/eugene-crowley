<link rel="stylesheet" href="css/styles.css">
 <!-- Enhanced Gallery Section -->
<div class="container">
    <h1 class="my-4">Gallery</h1>
    <div class="row">
        <?php
        $images = [
            ["path" => "images/gallery/Arc de Triomphe Paris-paris-on-my-mind.jpg", "title" => "Arc de Triomphe, Paris"],
            ["path" => "images/gallery/Black Pharoahs  Amsterdam-paris-on-my-min.jpg", "title" => "Black Pharaohs, Amsterdam"],
            ["path" => "images/gallery/Buckingham Palace London-paris-on-my-mind.jpg", "title" => "Buckingham Palace, London"],
            ["path" => "images/gallery/Central City Buenos Aires -paris-on-my-mind.jpg", "title" => "Central City, Buenos Aires"],
            ["path" => "images/gallery/Central City Buenos Aires-paris-on-my-mind.jpg", "title" => "Central City, Buenos Aires"],
            ["path" => "images/gallery/Downtown- St. Joseph-paris-on-my-mind.jpg", "title" => "Downtown, St. Joseph"],
            ["path" => "images/gallery/Elizabeth Tower London-paris-on-my-mind.jpg", "title" => "Elizabeth Tower, London"],
            ["path" => "images/gallery/Masonic Temple-paris-on-my-mind.jpg", "title" => "Top Photo-Masonic Temple Bottom-Central West End"],
            ["path" => "images/gallery/Palermo Bueno-paris-on-mind.jpg", "title" => "Palermo Bueno"],
            ["path" => "images/gallery/Pao de Acucar -paris-on-mind.jpg", "title" => "Pao de Acucar (Sugar Loaf) Rio de Janeiro"],
            ["path" => "images/gallery/paris-on-mind-research-process.jpg", "title" => "Stonehenge -Salisbury Plain in Wiltshire, England"],
            ["path" => "images/gallery/Skyline of St. Louis-paris-on-my-mind.jpg", "title" => "Skyline of St. Louis"],
            ["path" => "images/gallery/status-during-paris-on-my-mind-reserach.jpg", "title" => "The elegant Vaneau Metro Entrance"],
        ];

        foreach ($images as $image) {
            echo '<div class="col-md-4 col-sm-6 mb-4">';
            echo '<a href="' . $image['path'] . '" data-fancybox="gallery" data-caption="' . $image['title'] . '">';
            echo '<img src="' . $image['path'] . '" alt="' . $image['title'] . '" class="img-fluid rounded">';
            echo '</a>';
            echo '<p class="text-center mt-2">' . $image['title'] . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</div>
