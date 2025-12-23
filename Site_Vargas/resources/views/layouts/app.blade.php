<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Iago Vargas</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500&family=Poppins:wght@500;700&display=swap" rel="stylesheet">
        <style>
            :root {
                --bg: #f6f7fb;
                --panel: #ffffff;
                --ink: #2d2e53;
                --muted: #6e6f96;
                --accent: #3b39c6;
                --soft-accent: rgba(59, 57, 198, 0.12);
                --shadow: 0 20px 40px rgba(29, 31, 70, 0.12);
            }

            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: "JetBrains Mono", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                background: radial-gradient(circle at top, #ffffff 0%, var(--bg) 60%);
                color: var(--ink);
            }

            a {
                color: inherit;
                text-decoration: none;
            }

            .layout {
                min-height: 100vh;
                display: grid;
                grid-template-columns: auto 1fr;
            }

            .sidebar {
                position: sticky;
                top: 0;
                height: 100vh;
                width: 64px;
                background: var(--panel);
                padding: 18px 8px;
                box-shadow: 16px 0 35px rgba(29, 31, 70, 0.08);
                transition: width 0.25s ease;
                z-index: 20;
                overflow: hidden;
            }

            .sidebar:hover {
                width: 240px;
            }

            .sidebar__brand {
                font-family: "Poppins", "Trebuchet MS", sans-serif;
                font-weight: 700;
                font-size: 1.15rem;
                color: var(--accent);
                margin-bottom: 20px;
                white-space: nowrap;
                opacity: 0;
                transform: translateX(-4px);
                transition: opacity 0.2s ease, transform 0.2s ease;
            }

            .sidebar:hover .sidebar__brand {
                opacity: 1;
                transform: translateX(0);
            }

            .sidebar__nav {
                display: flex;
                flex-direction: column;
                gap: 8px;
            }

            .sidebar__link {
                padding: 12px 14px;
                border-radius: 14px;
                color: var(--ink);
                font-size: 0.95rem;
                font-weight: 500;
                display: flex;
                align-items: center;
                gap: 12px;
                transition: background 0.2s ease, color 0.2s ease;
            }

            .sidebar:not(:hover) .sidebar__link {
                justify-content: center;
                padding-inline: 0;
                gap: 0;
            }

            .sidebar__link.is-active,
            .sidebar__link:hover {
                background: var(--soft-accent);
                color: var(--accent);
            }

            .sidebar__icon {
                width: 24px;
                height: 24px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                color: var(--accent);
                flex-shrink: 0;
            }

            .sidebar__text {
                opacity: 0;
                transform: translateX(-4px);
                transition: opacity 0.2s ease, transform 0.2s ease;
                white-space: nowrap;
                flex: 0 0 auto;
            }

            .sidebar:hover .sidebar__text {
                opacity: 1;
                transform: translateX(0);
            }

            .sidebar:not(:hover) .sidebar__text {
                width: 0;
                overflow: hidden;
            }

            .page {
                margin-left: 0;
                padding: 0 48px;
                max-width: 1200px;
                width: 100%;
                margin-inline: auto;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .page__content {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                padding-block: 40px;
            }
        </style>
        @stack('styles')
    </head>
    <body>
        <div class="layout">
            @include('partials.sidebar')
            <main class="page">
                <div class="page__content">
                    @yield('content')
                </div>
            </main>
        </div>
        @stack('scripts')
    </body>
</html>
