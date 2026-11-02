@extends('layouts.app')

@section('title', 'Каталог товарів - DigiStore')

@section('content')
    <!-- Баннер -->
    <section class="hero page-width">
        <div class="hero-copy">
            <span class="eyebrow">Тільки цього тижня</span>
            <h1>Знижки на цифрові<br />товари до <em>50%</em></h1>
            <p>Книги, програми та дизайн-шаблони для вашого розвитку.</p>
            <a class="hero-cta" href="#catalog">Переглянути пропозиції <svg viewBox="0 0 20 20" fill="none"><path d="M4 10h11M11 6l4 4-4 4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" /></svg></a>
        </div>
        <div class="hero-tag">
            <strong>-50%</strong>
            <span>на бестселери</span>
        </div>
    </section>

    <!-- Каталог -->
    <section class="catalog page-width" id="catalog">
        <aside class="filters">
            <div class="filter-heading">
                <h2>Фільтри</h2>
                <button type="button">Очистити</button>
            </div>
            <fieldset>
                <legend>Категорії</legend>
                <div class="category-list">
                    <label class="selected"><input type="radio" name="category" checked><span>Усі товари</span><small>24</small></label>
                    <label><input type="radio" name="category"><span>Книги</span><small>8</small></label>
                    <label><input type="radio" name="category"><span>Софт</span><small>6</small></label>
                    <label><input type="radio" name="category"><span>Шаблони</span><small>10</small></label>
                </div>
            </fieldset>
            <fieldset>
                <legend>Ціна</legend>
                <div class="price-range"><span>₴ 0</span><span>₴ 1000</span></div>
                <input class="range" type="range" min="300" max="1000" step="50" value="1000">
            </fieldset>
        </aside>

        <div class="products-area">
            <div class="catalog-heading">
                <div>
                    <span class="section-kicker">Обране для вас</span>
                    <h2>Популярні товари</h2>
                </div>
                <label class="sort">
                    <span>Сортувати:</span>
                    <select>
                        <option>За популярністю</option>
                        <option>Спочатку дешевші</option>
                        <option>Спочатку дорожчі</option>
                    </select>
                </label>
            </div>

            <div class="product-grid">
                @foreach($products as $product)
                    @php
                        $arts = ['book', 'software', 'template'];
                        $artClass = $arts[$loop->index % 3];
                    @endphp
                    
                    <article class="product-card">
                        <div class="product-art {{ $artClass }}">
                            <span class="discount">-30%</span>
                            
                            @if($artClass == 'book')
                                <div class="book-cover"><b>DESIGN</b><strong>UI/UX</strong><span>practical guide</span></div>
                            @elseif($artClass == 'software')
                                <div class="software-logo"><span>F</span><i></i></div>
                            @else
                                <div class="slides"><i></i><i></i><i></i><b>NOVA</b></div>
                            @endif
                        </div>
                        <div class="product-info">
                            <span class="product-type">{{ $product->description ?? 'Цифровий товар' }}</span>
                            <h3>{{ $product->title }}</h3>
                            <div class="rating">
                                <svg viewBox="0 0 20 20" fill="currentColor"><path d="m10 1.8 2.45 4.96 5.48.8-3.97 3.86.94 5.46L10 14.3l-4.9 2.58.94-5.46-3.97-3.86 5.48-.8L10 1.8Z" /></svg>
                                <strong>4.8</strong><span>(86)</span>
                            </div>
                            <div class="product-bottom">
                                <div class="price">
                                    <strong>{{ number_format($product->price, 0) }} ₴</strong>
                                    <del>{{ number_format($product->price * 1.3, 0) }} ₴</del>
                                </div>
                                <button type="button">
                                    <svg viewBox="0 0 24 24" fill="none"><path d="M5.5 8.5h13l1 11h-15l1-11Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" /><path d="M9 10V7a3 3 0 0 1 6 0v3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" /></svg>
                                    <span>Додати</span>
                                </button>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection