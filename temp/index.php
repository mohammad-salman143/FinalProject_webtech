<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Management System</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', 'Georgia', serif;
            background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(255,255,255,0.4);
            z-index: 0;
        }
        .container {
            position: relative;
            z-index: 1;
            text-align: center;
            background: rgba(255,255,255,0.95);
            border: 1px solid #e3e3e3;
            border-radius: 22px;
            box-shadow: 0 8px 32px rgba(60, 120, 180, 0.13);
            padding: 48px 36px 40px 36px;
            width: 370px;
            animation: fadeInUp 1s cubic-bezier(.23,1.01,.32,1) 0.1s both;
        }
        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(40px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .logo {
            width: 70px;
            height: 70px;
            margin-bottom: 18px;
            border-radius: 50%;
            background: linear-gradient(135deg, #b2fefa 0%, #0ed2f7 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
            color: #fff;
            box-shadow: 0 2px 12px rgba(14,210,247,0.13);
            margin-left: auto;
            margin-right: auto;
        }
        h1 {
            font-size: 30px;
            margin-bottom: 28px;
            color: #2d3a4b;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .button {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            margin: 14px 0;
            padding: 14px 0;
            background: linear-gradient(90deg, #43cea2 0%, #185a9d 100%);
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            font-size: 19px;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(67,206,162,0.08);
            border: none;
            transition: background 0.3s, box-shadow 0.3s, transform 0.2s;
            cursor: pointer;
        }
        .button:hover {
            background: linear-gradient(90deg, #185a9d 0%, #43cea2 100%);
            box-shadow: 0 4px 16px rgba(24,90,157,0.13);
            transform: translateY(-2px) scale(1.03);
        }
        .button .icon {
            font-size: 22px;
            display: inline-block;
        }
    </style>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="overlay"></div>
    <div class="container">
        <div class="logo">
            <i class="fas fa-utensils"></i>
        </div>
        <h1>Restaurant Management System</h1>
        <a href="project/Salman Admin/view/login.php" class="button"><span class="icon"><i class="fas fa-user-shield"></i></span>Admin Login</a>
        <a href="project/Ramim Waiter/view/login.php" class="button"><span class="icon"><i class="fas fa-user-tie"></i></span>Waiter Login</a>
        <a href="project/Hasib customer/view/login.php" class="button"><span class="icon"><i class="fas fa-user"></i></span>Customer Login</a>
    </div>
</body>
</html>