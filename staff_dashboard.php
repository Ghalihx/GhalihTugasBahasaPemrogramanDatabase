<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            height: 100vh;
            background-color: #e0f7fa; 
        }

        .sidebar {
            width: 250px;
            background-color: #00796b;
            color: white;
            padding: 20px;
            box-sizing: border-box;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
            margin: 5px 0;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #004d40;
        }

        .main {
            flex: 1;
            padding: 20px;
            background-color: #ffffff; 
            box-sizing: border-box;
            overflow-y: auto;
        }

        .logout-btn {
            text-align: center;
            margin-top: auto;
        }

        .logout-btn a {
            background-color: #e53935;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .logout-btn a:hover {
            background-color: #b71c1c;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard Karyawan</h2>
        <a href="#">Projek</a>
        <a href="#">Tugas</a>
        <a href="#">Staff Karyawan</a>
        <a href="#">Profil</a>
        <div class="logout-btn">
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="main">
        <h1>Dashboard Karyawan!</h1>
    </div>
</body>
</html>
