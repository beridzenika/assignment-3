<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/CSS/news.css">
</head>
<body>
    
<?php

    $data = [
        [
            "img" => "https://images.pexels.com/photos/674010/pexels-photo-674010.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
            "header" => "Lorem, ipsum dolor sit amet",
            "paragraph"  => "consectetur adipisicing elit. Est, qui ipsam exercitationem in beatae illum deserunt eaque.",
            "active" => "6 min",
            "comments" => 3,
        ],
        [
            "img" => "https://images.pexels.com/photos/674010/pexels-photo-674010.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
            "header" => "Lorem, ipsum dolor sit amet",
            "paragraph"  => "consectetur adipisicing elit. Est, qui ipsam exercitationem in beatae illum deserunt eaque.",
            "active" => "6 min",
            "comments" => 3,
        ],
        [
            "img" => "https://images.pexels.com/photos/674010/pexels-photo-674010.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
            "header" => "Lorem, ipsum dolor sit amet",
            "paragraph"  => "consectetur adipisicing elit. Est, qui ipsam exercitationem in beatae illum deserunt eaque.",
            "active" => "6 min",
            "comments" => 3,
        ],
    ];

    ?>

    <?php include('components/header.php') ?>

    <?php foreach ($data as $key => $value) { ?>
    
        <div class="news-box">
            <div class="img-holder">
                <img src="<?= $value['img']?>" >
            </div>
            <div class="text-holder">
                <h3><?= $value['header']?></h3>
                <p><?= $value['paragraph']?></p>
                <div class="active-holder">
                    <img src="assets/imgs/clock-circular-outline.png">
                    <span><?= $value['active']?> ago</span>
                </div>
                <div class="comments-holder">
                    <img src="assets/imgs/chat-comment-oval-speech-bubble-with-text-lines.png">
                    <span><?= $value['comments']?> comments</span>
                </div>
            </div>
        </div>

    <?php } ?>
    
</body>
</html>