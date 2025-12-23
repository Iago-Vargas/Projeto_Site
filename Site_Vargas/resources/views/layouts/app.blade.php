<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Iago Vargas</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500&family=Poppins:wght@500;700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
        <style>
            :root {
                --bg: #f6f7fb;
                --panel: #ffffff;
                --ink: #2d2e53;
                --muted: #6e6f96;
                --accent: #3b39c6;
                --soft-accent: rgba(59, 57, 198, 0.12);
                --shadow: 0 20px 40px rgba(29, 31, 70, 0.12);
                --social-bg: #f8f9ff;
                --social-border: #e6e7f2;
                --social-shadow: 0 12px 18px rgba(29, 31, 70, 0.08);
                --icon-bg: linear-gradient(145deg, #f1f3ff, #ffffff);
                --icon-border: #e1e5ff;
                --icon-ink: var(--accent);
                --sidebar-shadow: 16px 0 35px rgba(29, 31, 70, 0.08);
                --outline-soft: rgba(59, 57, 198, 0.15);
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

            body.theme-dark {
                --bg: #0e1118;
                --panel: #141826;
                --ink: #e4e7ff;
                --muted: #a6abc8;
                --accent: #7c7bff;
                --soft-accent: rgba(124, 123, 255, 0.2);
                --shadow: 0 24px 50px rgba(4, 6, 20, 0.45);
                --social-bg: #1b2134;
                --social-border: #2b3250;
                --social-shadow: 0 12px 18px rgba(3, 6, 20, 0.45);
                --icon-bg: linear-gradient(145deg, #20263b, #121528);
                --icon-border: #242a44;
                --icon-ink: #c7c9ff;
                --sidebar-shadow: 16px 0 35px rgba(2, 4, 18, 0.6);
                --outline-soft: rgba(124, 123, 255, 0.35);
                background: radial-gradient(circle at top, #1c2235 0%, var(--bg) 60%);
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
                box-shadow: var(--sidebar-shadow);
                transition: width 0.25s ease;
                z-index: 20;
                overflow: hidden;
                display: flex;
                flex-direction: column;
                gap: 16px;
            }

            .sidebar:hover {
                width: 240px;
            }

            .sidebar__brand {
                font-family: "Poppins", "Trebuchet MS", sans-serif;
                font-weight: 700;
                font-size: 1.15rem;
                color: var(--accent);
                margin-bottom: 8px;
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
                gap: 12px;
            }

            .sidebar__link {
                padding: 14px 16px;
                border-radius: 14px;
                color: var(--ink);
                font-size: 0.95rem;
                font-weight: 500;
                display: flex;
                align-items: center;
                gap: 12px;
                transition: background 0.2s ease, color 0.2s ease, transform 0.2s ease;
                border: 1px solid transparent;
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
                transform: translateX(2px);
                border-color: var(--outline-soft);
            }

            .sidebar__icon {
                width: 30px;
                height: 30px;
                border-radius: 12px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                color: var(--icon-ink);
                flex-shrink: 0;
                background: var(--icon-bg);
                border: 1px solid var(--icon-border);
                box-shadow: 0 8px 16px rgba(29, 31, 70, 0.1);
            }

            .sidebar__icon i {
                font-size: 0.95rem;
                line-height: 1;
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

            .sidebar__logo {
                width: 44px;
                height: 44px;
                border-radius: 16px;
                background: var(--icon-bg);
                border: 1px solid var(--icon-border);
                display: inline-flex;
                align-items: center;
                justify-content: center;
                align-self: center;
                box-shadow: 0 10px 20px rgba(29, 31, 70, 0.12);
                overflow: hidden;
            }

            .sidebar__logo img {
                width: 28px;
                height: 28px;
                object-fit: contain;
            }

            .sidebar__footer {
                margin-top: auto;
                display: flex;
                flex-direction: column;
                gap: 8px;
                align-items: stretch;
            }

            .sidebar__toggle {
                padding: 10px 14px;
                border-radius: 14px;
                border: 1px solid var(--icon-border);
                background: var(--panel);
                color: var(--ink);
                display: flex;
                align-items: center;
                gap: 12px;
                width: 100%;
                cursor: pointer;
                transition: background 0.2s ease, color 0.2s ease, transform 0.2s ease, border-color 0.2s ease;
            }

            .sidebar__toggle:hover {
                background: var(--soft-accent);
                color: var(--accent);
                transform: translateX(2px);
            }

            .sidebar__toggle svg {
                width: 18px;
                height: 18px;
            }

            .sidebar__toggle .icon-sun {
                display: none;
            }

            body.theme-dark .sidebar__toggle .icon-sun {
                display: block;
            }

            body.theme-dark .sidebar__toggle .icon-moon {
                display: none;
            }

            .sidebar:not(:hover) .sidebar__toggle {
                justify-content: center;
                padding-inline: 0;
                width: 44px;
            }

            .sidebar:not(:hover) .sidebar__toggle .sidebar__text {
                width: 0;
                overflow: hidden;
            }

            .sidebar:not(:hover) .sidebar__footer {
                align-items: center;
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
        <script>
            const themeToggle = document.getElementById('theme-toggle');
            const setTheme = (isDark) => {
                document.body.classList.toggle('theme-dark', isDark);
                if (themeToggle) {
                    themeToggle.setAttribute('aria-pressed', String(isDark));
                }
                localStorage.setItem('theme-dark', isDark ? '1' : '0');
            };

            const savedTheme = localStorage.getItem('theme-dark');
            if (savedTheme === null) {
                setTheme(window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches);
            } else {
                setTheme(savedTheme === '1');
            }

            if (themeToggle) {
                themeToggle.addEventListener('click', () => {
                    setTheme(!document.body.classList.contains('theme-dark'));
                });
            }
        </script>
        @stack('scripts')
    </body>
</html>
