<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Portfolio</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; background: #f6f7f1; color: #172c29; font-family: 'Segoe UI', sans-serif; line-height: 1.6; }
        a { color: inherit; }
        .container { width: min(1080px, 90%); margin: auto; }
        header, footer { border-bottom: 1px solid #dce4dd; }
        nav { display: flex; justify-content: space-between; align-items: center; gap: 24px; padding: 24px 0; }
        .brand { font-weight: 800; text-decoration: none; font-size: 22px; }
        .links { display: flex; gap: 24px; }
        .links a { text-decoration: none; }
        .links a[aria-current="page"] { color: #24644f; font-weight: 700; }
        main { min-height: 75vh; padding: 64px 0; }
        .eyebrow { color: #24644f; text-transform: uppercase; letter-spacing: 3px; font-size: 12px; font-weight: 700; }
        h1 { font-size: clamp(40px, 7vw, 76px); line-height: 1.1; letter-spacing: -2px; margin: 18px 0; }
        h2 { font-size: 25px; }
        p { color: #61716c; }
        .intro { max-width: 640px; font-size: 18px; }
        .button { display: inline-block; padding: 13px 23px; background: #24644f; color: white; text-decoration: none; border-radius: 8px; margin-top: 20px; font-weight: 600; }
        .section { margin-top: 64px; padding-top: 28px; border-top: 1px solid #dce4dd; }
        .skills { display: flex; flex-wrap: wrap; gap: 10px; padding: 0; list-style: none; }
        .skills li { padding: 9px 18px; border: 1px solid #dce4dd; background: white; border-radius: 30px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 290px), 1fr)); gap: 24px; margin-top: 36px; }
        .card { padding: 28px; background: white; border: 1px solid #dce4dd; border-radius: 16px; overflow-wrap: anywhere; }
        .number { color: #61716c; font-size: 13px; }
        .badge { display: inline-block; font-size: 12px; padding: 5px 11px; border-radius: 20px; background: #edf0ed; }
        .completed { background: #e0f2e6; color: #24644f; }
        .progress { background: #fff0cf; color: #785708; }
        .empty { grid-column: 1 / -1; padding: 40px; text-align: center; border: 1px dashed #dce4dd; border-radius: 16px; }
        footer { border-top: 1px solid #dce4dd; padding: 24px 0; color: #61716c; font-size: 13px; }
        a:focus-visible { outline: 3px solid #c79435; outline-offset: 5px; }
        @media (max-width: 600px) { main { padding: 40px 0; } }
    </style>
</head>
<body>
    <header>
        <nav class="container" aria-label="Main navigation">
            <a class="brand" href="{{ route('home') }}">Portfolio.</a>
            <div class="links">
                <a href="{{ route('home') }}" @if(request()->routeIs('home')) aria-current="page" @endif>Home</a>
                <a href="{{ route('projects') }}" @if(request()->routeIs('projects')) aria-current="page" @endif>Projects</a>
            </div>
        </nav>
    </header>
    <main class="container">@yield('content')</main>
    <footer><div class="container">&copy; {{ date('Y') }} Portfolio. All rights reserved.</div></footer>
</body>
</html>
