<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Application</title>
    <!-- You can include your CSS stylesheets and other meta tags here -->
</head>
<body>
    <header>
        <h1>Welcome to Your Application</h1>
        <p>This is the landing page of your application.</p>
    </header>

    <main>
        <p>Feel free to explore and navigate through the site.</p>
        <p>If you're new here, you might want to <a href="{{ route('register') }}">register</a> an account.</p>
        <p>If you already have an account, you can <a href="{{ route('login') }}">log in</a>.</p>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Your Application. All rights reserved.</p>
    </footer>

    <!-- You can include your JavaScript files and other scripts here -->
</body>
</html>