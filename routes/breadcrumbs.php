<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Главная', route('main'));
});

Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('home');
    $trail->push($category->name, route('categories', $category->code));
});

Breadcrumbs::for('product', function ($trail, $product) {
    $trail->parent('home');
    $trail->push($product->category->name, route('categories', $product->category->code));
    $trail->push($product->name, route('product', [$product->category->code, $product->code ]));
});

Breadcrumbs::for('blog', function ($trail){
    $trail->parent('home');
    $trail->push('Блог', route('blog'));
});

Breadcrumbs::for('contacts', function ($trail){
    $trail->parent('home');
    $trail->push('Контакты', route('contacts'));
});

Breadcrumbs::for('cart', function ($trail){
    $trail->parent('home');
    $trail->push('Корзина', route('cart'));
});

Breadcrumbs::for('cart-checkout', function ($trail){
    $trail->parent('home');
    $trail->push('Корзина', route('cart'));
    $trail->push('Детали заказа', route('cart-checkout'));
});

Breadcrumbs::for('search', function ($trail, $queryName){
    $trail->parent('home');
    $trail->push($queryName);
});

Breadcrumbs::for('wishlist', function ($trail){
    $trail->parent('home');
    $trail->push('Избранное', route('wishlist'));
});