@extends('layouts.app')

@push('styles')
    <style>
        .hero {
            display: grid;
            grid-template-columns: minmax(280px, 1fr) minmax(260px, 360px);
            align-items: center;
            gap: 48px;
            max-width: 980px;
            margin: 0 auto;
            transform: scale(1.15);
            transform-origin: center;
        }

        .hero__title {
            font-family: "Poppins", "Trebuchet MS", sans-serif;
            font-size: clamp(2.6rem, 5vw, 4rem);
            margin: 0 0 12px;
            color: var(--accent);
            text-align: left;
        }

        .hero__subtitle {
            margin: 0 0 26px;
            font-size: 1.05rem;
            color: var(--muted);
            text-align: left;
        }

        .typing {
            padding-right: 0;
        }

        .hero__social {
            display: flex;
            gap: 12px;
            justify-content: flex-start;
        }

        .hero__social a {
            width: 44px;
            height: 44px;
            border-radius: 14px;
            border: 1px solid var(--social-border);
            background: var(--social-bg);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: var(--accent);
            box-shadow: var(--social-shadow);
            transition: transform 0.2s ease;
        }

        .hero__social a:hover {
            transform: translateY(-2px);
        }

        .hero__card {
            background: var(--panel);
            border-radius: 22px;
            padding: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: var(--shadow);
            min-height: 320px;
            position: relative;
            overflow: hidden;
            transition: transform 0.35s ease, box-shadow 0.35s ease;
        }

        .hero__image {
            max-width: 320px;
            width: 100%;
            position: relative;
            z-index: 1;
        }

        .hero__card:hover {
            transform: rotate(3deg) translateY(-8px);
            box-shadow: 0 28px 55px rgba(29, 31, 70, 0.18);
        }

        @media (max-width: 900px) {
            .hero {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero__title,
            .hero__subtitle {
                text-align: center;
            }

            .hero__social {
                justify-content: center;
            }
        }
    </style>
@endpush

@section('content')
    <section class="hero">
        <div>
            <h1 class="hero__title typing" id="hero-title">Bem vindo!</h1>
            <p class="hero__subtitle typing" id="hero-subtitle">Fico feliz de ver voce aqui!</p>
            <div class="hero__social">
                <a href="#" aria-label="LinkedIn">
                    <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
                        <path fill="currentColor" d="M4.98 3.5A2.5 2.5 0 1 0 5 8.5a2.5 2.5 0 0 0-.02-5zM3.5 9h3v11h-3zm6 0h2.86v1.5h.04c.4-.76 1.38-1.56 2.84-1.56 3.04 0 3.6 2 3.6 4.6V20h-3v-5c0-1.2-.02-2.74-1.67-2.74-1.67 0-1.92 1.3-1.92 2.64V20h-3z"/>
                    </svg>
                </a>
                <a href="#" aria-label="GitHub">
                    <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
                        <path fill="currentColor" d="M12 2a10 10 0 0 0-3.16 19.48c.5.1.68-.22.68-.48v-1.7c-2.78.6-3.36-1.18-3.36-1.18-.45-1.15-1.1-1.46-1.1-1.46-.9-.62.07-.61.07-.61 1 .07 1.53 1.02 1.53 1.02.9 1.52 2.36 1.08 2.94.82.1-.65.35-1.08.64-1.33-2.22-.25-4.56-1.1-4.56-4.9 0-1.08.38-1.96 1.02-2.65-.1-.26-.45-1.3.1-2.7 0 0 .84-.27 2.75 1.01a9.5 9.5 0 0 1 5 0c1.9-1.28 2.74-1.01 2.74-1.01.56 1.4.21 2.44.11 2.7.64.69 1.02 1.57 1.02 2.65 0 3.8-2.34 4.65-4.58 4.9.36.31.69.92.69 1.86v2.76c0 .27.18.6.69.48A10 10 0 0 0 12 2z"/>
                    </svg>
                </a>
                <a href="#" aria-label="Instagram">
                    <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
                        <path fill="currentColor" d="M7 3h10a4 4 0 0 1 4 4v10a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V7a4 4 0 0 1 4-4zm10 2H7a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2zm-5 2.5A4.5 4.5 0 1 1 7.5 12 4.5 4.5 0 0 1 12 7.5zm0 2A2.5 2.5 0 1 0 14.5 12 2.5 2.5 0 0 0 12 9.5zm4.75-3a.75.75 0 1 1-.75.75.75.75 0 0 1 .75-.75z"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="hero__card">
            <img class="hero__image" src="{{ asset('images/img5.png') }}" alt="Cachorro ilustrado do Iago">
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        const heroTitle = document.getElementById('hero-title');
        const heroSubtitle = document.getElementById('hero-subtitle');
        const subtitleMessages = [
            'Fico feliz de ver você aqui!',
            '<Desenvolvedor Full-Stack />'
        ];

        const typingSpeed = 70;
        const pauseAfterType = 1200;
        const subtitleDelay = 400;
        let subtitleIndex = 0;

        const typeText = (element, text, onComplete) => {
            element.textContent = '';
            let i = 0;
            const timer = setInterval(() => {
                element.textContent += text.charAt(i);
                i += 1;
                if (i >= text.length) {
                    clearInterval(timer);
                    if (onComplete) {
                        setTimeout(onComplete, pauseAfterType);
                    }
                }
            }, typingSpeed);
        };

        const rotateSubtitle = () => {
            const message = subtitleMessages[subtitleIndex];
            typeText(heroSubtitle, message, () => {
                subtitleIndex = (subtitleIndex + 1) % subtitleMessages.length;
                setTimeout(rotateSubtitle, subtitleDelay);
            });
        };

        typeText(heroTitle, 'Bem vindo!', () => {
            setTimeout(() => {
                typeText(heroTitle, 'Iago Vargas,');
            }, 5000);
        });

        rotateSubtitle();
    </script>
@endpush
