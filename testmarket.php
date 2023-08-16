<!DOCTYPE html>
<html>
<head>
    <title>Tech Market News</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        .article {
            margin-bottom: 20px;
        }
        .article h2 {
            color: #666;
            margin-bottom: 5px;
        }
        .article p {
            color: #888;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h1>Tech Market News</h1>

    <?php
    // Fetching the latest news from an external source
    $news_url = 'https://www.cnbc.com'; // Replace with the actual API endpoint or news source

    // Make a request to the API
    $response = file_get_contents($news_url);
    $news = json_decode($response, true);

    // Displaying the news articles
    if ($news && isset($news['articles'])) {
        foreach ($news['articles'] as $article) {
            $title = $article['title'];
            $description = $article['description'];
            $url = $article['url'];

            echo '<div class="article">';
            echo '<h2><a href="' . $url . '">' . $title . '</a></h2>';
            echo '<p>' . $description . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>Failed to fetch news. Please try again later.</p>';
    }
    ?>

</body>
</html>
