<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Doors</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inria-serif', Arial, sans-serif;
            height: 100vh;
            overflow: hidden;
        }

        .hero {
            background: url('enchanted_forest_background___free_download_by_jellydreamsworld_dgv57bf-pre.jpg') no-repeat center center/cover;
            height: 100vh;
            position: relative;
            color: #fff;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            animation: fadeIn 2s ease-in-out;
        }

        h1 {
            font-size: 3.5em;
            margin: 0 0 20px;
            color: #3ded97;
            text-shadow: 0 3px 6px rgba(0, 0, 0, 0.6);
        }

        p {
            font-size: 1.3em;
            margin-bottom: 30px;
            color: #eee;
        }

        .doors {
            display: flex;
            justify-content: center;
            gap: 50px;
            flex-wrap: wrap;
        }

        .door {
            display: inline-block;
            width: 200px;
            height: 200px;
            background: linear-gradient(145deg, #232526, #32612d);
            border: 3px solid #3ded97;
            border-radius: 15px;
            color: #3ded97;
            text-decoration: none;
            font-size: 1.5em;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        }

        .door:hover {
            background: #ffffff;
            color: #354a21;
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.7);
        }

        .door span {
            position: relative;
            z-index: 2;
            font-size: 1.2em;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="hero">
        <div class="hero-content">
            <h1>Welcome to the Magical Jungle</h1>
            <p>Choose a door and explore the secret story behind each door</p>
            <div class="doors">
                <!-- Link to Story.php with a query parameter for the door choice -->
                <a href="Story.php?door=1" class="door">
                    <span>Door 1</span>
                </a>
                <a href="Story2.php?door=2" class="door">
                    <span>Door 2</span>
                </a>
                <a href="Story3.php?door=3" class="door">
                    <span>Door 3</span>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
