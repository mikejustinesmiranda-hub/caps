<!DOCTYPE html>
<html>
<head>
    <title>IC-IT Portal</title>

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

        /* DARK OVERLAY */
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

        .box {
            position: relative;
            z-index: 1;
            background: rgba(0,0,0,0.75);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            width: 320px;
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
            backdrop-filter: blur(10px);
        }

        h1 {
            margin-bottom: 5px;
        }

        p {
            margin-bottom: 20px;
            font-size: 13px;
            opacity: 0.8;
        }

        input {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            margin-bottom: 15px;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: #00c6ff;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #0072ff;
        }

        .footer {
            margin-top: 15px;
            font-size: 12px;
            opacity: 0.7;
        }
    </style>
</head>

<body>

<div class="box">
    <h1>IC-IT Portal</h1>
    <p>Enter your Student ID to continue</p>

    <form action="login.php" method="POST">
        <input type="text" name="student_id" placeholder="Student ID" required>
        <button type="submit">Login</button>
    </form>

    <div class="footer">IC-IT Portal System</div>
</div>

</body>
</html>