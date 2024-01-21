<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- reset.css destyle -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" />

    <!-- vite仕様 -->
    @vite(['resources/css/pro001/app.css', 'resources/js/pro001/app.js'])
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="antialiased">
    <header>
        <h1>サンプルページ</h1>
        <nav>
            <ul>
                <li>ホーム</li>
                <li>PAGE01</li>
                <li>PAGE02</li>
                <li>PAGE03</li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="section01">
            <h2>セクション01の見出し</h2>
            <p>ここにセクションのコンテンツが表示されます。</p>
        </section>
    </main>

    <footer id="footer">
        <p>&copy; 2023 サンプルページ</p>
    </footer>

</body>

</html>
