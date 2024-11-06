<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APK Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        header {
            background: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.2em;
        }
        button:hover {
            background-color: #218838;
        }
        footer {
            text-align: center;
            margin-top: 30px;
            color: #777;
            font-size: 0.9em;
        }
        .apk-list {
            margin-top: 30px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }
        .apk-item {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #f9f9f9;
        }
        .apk-item h2 {
            margin: 0 0 5px;
            font-size: 1.5em;
        }
        .apk-item a {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: #007bff;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.2em;
        }
        .apk-item a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>APK Store</h1>
    </header>
    <div class="container">
        <form id="uploadForm" action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="apkFile">Select APK File:</label>
                <input type="file" id="apkFile" name="apkFile" accept=".apk" required>
            </div>
            <button type="submit">Upload APK</button>
        </form>
        
        <div class="apk-list">
            <h2>Available APKs:</h2>
            <?php
            $directory = 'uploads/'; // अपलोडेड APKs का फ़ोल्डर
            $files = scandir($directory);
            foreach ($files as $file) {
                if (pathinfo($file, PATHINFO_EXTENSION) == 'apk') {
                    echo "<div class='apk-item'>
                            <h2>" . htmlspecialchars($file) . "</h2>
                            <a href='$directory$file' download>Download Now</a>
                          </div>";
                }
            }
            ?>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 APK Store. All rights reserved.</p>
    </footer>
</body>
</html>