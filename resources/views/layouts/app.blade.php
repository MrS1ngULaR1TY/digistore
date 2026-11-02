<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'DigiStore')</title>
    
    <!-- Шрифты -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- Наш вынесенный CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="app-shell">
        <!-- Шапка (остается на всех страницах) -->
        <header class="site-header">
            <div class="header-main page-width">
                <a href="/products" class="brand" aria-label="DigiStore — головна">
                    <span class="brand-mark"><span>D</span></span>
                    <span>Digi<span>Store</span></span>
                </a>
                <label class="search-box">
                    <svg class="search-icon" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="11" cy="11" r="6.75" stroke="currentColor" stroke-width="1.8" /><path d="m16 16 4 4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" /></svg>
                    <input placeholder="Знайти книги, софт або шаблони..." aria-label="Пошук товарів" />
                    <span class="search-shortcut">⌘ K</span>
                </label>
                <div class="header-actions">
                    <button class="account-button" type="button">
                        <span class="round-icon"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="8" r="3.5" stroke="currentColor" stroke-width="1.8" /><path d="M5 20c.7-4 3-6 7-6s6.3 2 7 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" /></svg></span>
                        <span class="account-copy"><small>Мій акаунт</small><strong>Увійти</strong></span>
                    </button>
                    <button class="cart-button" type="button">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5.5 8.5h13l1 11h-15l1-11Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" /><path d="M9 10V7a3 3 0 0 1 6 0v3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" /></svg>
                        <span class="cart-badge">2</span>
                    </button>
                </div>
            </div>
            <nav class="main-nav">
                <div class="page-width nav-inner">
                    <a class="active" href="/products">Головна</a>
                    <a href="#catalog">Каталог</a>
                    <a href="#sale">Акції <span class="nav-dot"></span></a>
                    <a href="#about">Про нас</a>
                    <a href="#contacts">Контакти</a>
                    <span class="nav-note">Цифрові товари — миттєва доставка</span>
                </div>
            </nav>
        </header>

        <!-- Сюда будет вставляться контент из других страниц -->
        <main>
            @yield('content')
        </main>

        <!-- Подвал (остается на всех страницах) -->
        <footer>
            <div class="page-width footer-inner">
                <div>
                    <a href="/products" class="brand brand-light"><span class="brand-mark"><span>D</span></span><span>Digi<span>Store</span></span></a>
                    <p>Цифрові інструменти для великих ідей.</p>
                </div>
                <div class="footer-links"><a href="mailto:hello@digistore.ua">hello@digistore.ua</a><a href="#">Instagram</a><a href="#">Telegram</a></div>
                <span>© 2026 DigiStore. Всі права захищено.</span>
            </div>
        </footer>
    </div>
</body>
</html>