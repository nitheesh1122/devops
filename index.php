<?php
$name = "Mithun";
$role = "Software Developer / AI Enthusiast";
$education = "B.Tech (Computer Science)";
$skills = "React, Flask, MongoDB, Machine Learning";
$project = "ISL Real-Time Translator";

$message = "";
if(isset($_POST['submit'])) {
    $message = "Jenkins Deployment Successful!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $name; ?> - Demo Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            margin: 0;
            padding: 0;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            width: 400px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }

        h1 {
            margin-bottom: 10px;
            font-size: 32px;
        }

        p {
            margin: 6px 0;
            font-size: 18px;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            opacity: 0.8;
        }

        button {
            margin-top: 15px;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #ffcc00;
            color: black;
            font-weight: bold;
        }

        button:hover {
            background-color: #ffaa00;
        }

        .message {
            margin-top: 15px;
            font-weight: bold;
            color: #00ffcc;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1><?php echo $name; ?></h1>
        <p><strong>Role:</strong> <?php echo $role; ?></p>
        <p><strong>Education:</strong> <?php echo $education; ?></p>
        <p><strong>Skills:</strong> <?php echo $skills; ?></p>
        <p><strong>Project:</strong> <?php echo $project; ?></p>

        <form method="post">
            <button type="submit" name="submit">Click Me</button>
        </form>

        <?php if($message != ""): ?>
            <div class="message">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <div class="footer">
            <p>Demo Page for Jenkins CI/CD Pipeline</p>
        </div>
    </div>

</body>
</html>
