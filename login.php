<?php

if (!isset($_POST['student_id'])) {
    die("No ID submitted!");
}

$id = trim($_POST['student_id']);
$filePath = __DIR__ . "/database.csv";

if (!file_exists($filePath)) {
    die("Database file not found!");
}

$file = fopen($filePath, "r");

$found = false;

while (($data = fgetcsv($file)) !== FALSE) {
    if (isset($data[0]) && trim($data[0]) == $id) {
        $found = true;
        break;
    }
}

fclose($file);

if ($found) {
    header("Location: portal.html");
    exit();
} else {
    echo "
    <html>
    <head>
        <title>IC-iT Portal | Access Denied</title>
        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;

                /* BACKGROUND IMAGE */
                background: url('crt.jpg') no-repeat center center fixed;
                background-size: cover;
            }

            /* DARK OVERLAY FOR READABILITY */
            body::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.6);
                z-index: 0;
            }

            .card {
                position: relative;
                z-index: 1;
                background: rgba(0,0,0,0.5);
                padding: 40px;
                border-radius: 15px;
                text-align: center;
                width: 300px;
                backdrop-filter: blur(10px);
                box-shadow: 0 0 20px rgba(0,0,0,0.5);
            }

            h2 {
                color: #ff4d4d;
                margin-bottom: 10px;
            }

            p {
                margin-bottom: 20px;
            }

            a {
                display: block;
                padding: 12px;
                background: #3b82f6;
                color: white;
                text-decoration: none;
                border-radius: 8px;
                transition: 0.3s;
            }

            a:hover {
                background: #2563eb;
            }
        </style>
    </head>
    <body>
        <div class='card'>
            <h2>Access Denied</h2>
            <p>Student ID not found</p>
            <a href='index.php'>Try Again</a>
        </div>
    </body>
    </html>
    ";
}
?>