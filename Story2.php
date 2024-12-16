<?php
// Define the storyline content in a variable
$storyline = "In a mystical jungle, a lost traveler stumbles upon a shape-shifting tiger who guides him through hidden paths. Together, they discover a glowing waterfall that holds the secrets of an ancient civilization, forever changing their destinies.";

// Output the HTML structure through PHP
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Storyline</title>";
echo "<style>";
echo "body, html {";
echo "    margin: 0;";
echo "    padding: 0;";
echo "    height: 100vh;";
echo "    background: url('waterfall-in-a-tropical-jungle-generative-ai-free-photo.jpg') no-repeat center center/cover;";
echo "    font-family: 'Poppins', Arial, sans-serif;";
echo "    color: #fff;";
echo "    display: flex;";
echo "    justify-content: center;";
echo "    align-items: center;";
echo "}";
echo ".content {";
echo "    background: linear-gradient(145deg, #232526, #32612d);;";
echo "    padding: 20px;";
echo "    border-radius: 15px;";
echo "    text-align: center;";
echo "    max-width: 500px;";
echo "}";
echo ".storyline-container {";
echo "    margin-top: 20px;";
echo "    font-size: 18px;";
echo "    line-height: 1.5;";
echo "}";
echo "</style>";
echo "</head>";
echo "<body>";
echo "<div class='content'>";
echo "<h1>Secrets Of the Glowing Waterfall</h1>";
echo "<div class='storyline-container'>";
echo "<p>" . $storyline . "</p>";
echo "</div>";
echo "</div>";
echo "</body>";
echo "</html>";
?>
