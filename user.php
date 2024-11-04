<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/icons/favicon.ico" sizes="16x16 32x32 48x48 64x64">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/components.css">
    <link rel="stylesheet" href="./css/auth.css">
    <title>Account Summary | Mr. Tone Guitar Shop</title>
</head>
<body class="background">
    <nav class="navigation__bg">
        <div class="navigation container container--xl">
            <!-- logo, account -->
            <div class="navigation__item">
                <div>
                    <a href="./index.html">
                        <img src="./assets/images/logo.png" alt="Mr. Tone Guitar Shop Logo" class="navigation__logo">
                    </a>
                </div>
                <div class="navigation__profile">
                    <a href="./register.html">
                        <div>
                            <img src="./assets/icons/icon_account.svg" alt="Account icon">
                        </div>
                    </a>
                    <p>
                        Welcome,
                        <strong><a href="./profile.html" class="nav-link"><?php echo htmlspecialchars($_POST['first_name'] . ' ' . $_POST['last_name']); ?></a></strong>!
                    </p>
                </div>
            </div>
            <!-- nav items -->
            <div class="navigation__item">
                <ul class="navigation__links">
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="./shop.html">Shop</a></li>
                    <li class="dropdown">
                        <a href="./order.html">Order</a>
                        <div class="dropdown__content">
                            <ul class="navigation__links dropdown__links">
                                <li><a href="./place-order.html">Place Order</a></li>
                                <li><a href="./summary.html">Summary of order</a></li>
                                <li><a href="./order.html">History of orders</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="./about.html">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="main--padding">
        <hr class="divider container--xl">
        <div class="auth container container--xl">
            <div class="account-summary-container">
                <h1>Account Summary</h1>
                <p>Here are the details you provided:</p>
                <ul>
                    <li><strong>First Name:</strong> <?php echo htmlspecialchars($_POST['first_name']); ?></li>
                    <li><strong>Last Name:</strong> <?php echo htmlspecialchars($_POST['last_name']); ?></li>
                    <li><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></li>
                    <li><strong>Date of Birth:</strong> <?php echo htmlspecialchars($_POST['dob']); ?></li>
                </ul>
            </div>
        </div>
    </main> <!-- Closing the main tag -->
</body>
</html>