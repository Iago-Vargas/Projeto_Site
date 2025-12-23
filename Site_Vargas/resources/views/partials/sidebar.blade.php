<aside class="sidebar" aria-label="Menu principal">
    <div class="sidebar__logo" aria-hidden="true">
        <img src="{{ asset('images/icon.png') }}" alt="">
    </div>
    <nav class="sidebar__nav">
        <a class="sidebar__link is-active" href="#" title="Home">
            <span class="sidebar__icon">
                <i class="fa-solid fa-house" aria-hidden="true"></i>
            </span>
            <span class="sidebar__text">Home</span>
        </a>
        <a class="sidebar__link" href="#" title="Projetos">
            <span class="sidebar__icon">
                <i class="fa-solid fa-briefcase" aria-hidden="true"></i>
            </span>
            <span class="sidebar__text">Projetos</span>
        </a>
        <a class="sidebar__link" href="#" title="Sobre mim">
            <span class="sidebar__icon">
                <i class="fa-solid fa-user" aria-hidden="true"></i>
            </span>
            <span class="sidebar__text">Sobre mim</span>
        </a>
        <a class="sidebar__link" href="#" title="Jogos">
            <span class="sidebar__icon">
                <i class="fa-solid fa-gamepad" aria-hidden="true"></i>
            </span>
            <span class="sidebar__text">Jogos</span>
        </a>
        <a class="sidebar__link" href="#" title="Feedbacks">
            <span class="sidebar__icon">
                <i class="fa-solid fa-comment-dots" aria-hidden="true"></i>
            </span>
            <span class="sidebar__text">Feedbacks</span>
        </a>
    </nav>
    <div class="sidebar__footer">
        <button class="sidebar__toggle" id="theme-toggle" type="button" aria-pressed="false">
            <span class="sidebar__icon">
                <svg class="icon-moon" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill="currentColor" d="M21 14.5A8.5 8.5 0 1 1 9.5 3a7 7 0 0 0 11.5 11.5z"/>
                </svg>
                <svg class="icon-sun" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill="currentColor" d="M12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0-5h1.8l.7 3.1-1.4.5L12 2zM4.6 4.6l1.3-1.3 2.3 2.3-1.3 1.3-2.3-2.3zm14.5-1.3 1.3 1.3-2.3 2.3-1.3-1.3 2.3-2.3zM2 12l3.1-.7.5 1.4L2 14v-2zm20 0v2l-3.1-.7-.5-1.4L22 12zm-2.6 7.4-2.3-2.3 1.3-1.3 2.3 2.3-1.3 1.3zM4.6 19.4l2.3-2.3 1.3 1.3-2.3 2.3-1.3-1.3zM12 19.9l1.1.2-.7 3h-1l-.7-3 1.3-.2z"/>
                </svg>
            </span>
            <span class="sidebar__text">Modo escuro</span>
        </button>
    </div>
</aside>
