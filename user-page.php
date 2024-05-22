<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        h2 {
            color: #555;
            margin-bottom: 10px;
        }
        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <?php 
    session_start();

    if (isset($_SESSION['user_id']) && isset($_SESSION['email'])) {
    ?>
        <h2>Welcome user!</h2>
        <h1>Hello, <?php echo $_SESSION['email']; ?></h1>
        <h1>First Name: <?php echo $_SESSION['first_name'];?></h1>
        <h1>Last Name: <?php echo $_SESSION['last_name'];?></h1>
        <a href="logout.php">Logout</a>
    <?php 
    } else {
        header("Location: index.php");
        exit();
    }
    ?>
</div>

</body>
</html>
