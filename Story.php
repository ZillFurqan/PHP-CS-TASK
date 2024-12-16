<?php
// Define the storyline content in a variable
$storyline = "Deep in a magical jungle, a brave explorer discovers glowing plants that whisper secrets. Following the clues, he finds a hidden temple, where an ancient tree grants him a powerful, life-changing wish of courage.";

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
echo "    background: url('thumb-1920-808572.jpg') no-repeat center center/cover;";
echo "    font-family: 'Poppins', Arial, sans-serif;";
echo "    color: #fff;";
echo "    display: flex;";
echo "    justify-content: center;";
echo "    align-items: center;";
echo "}";
echo ".content {";
echo "    background:linear-gradient(145deg, #232526, #32612d);;";
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
echo "<h1>The Wish Of Enchanted Tree</h1>";
echo "<div class='storyline-container'>";
echo "<p>" . $storyline . "</p>";
echo "</div>";
echo "</div>";
echo "</body>";
echo "</html>";
?>
