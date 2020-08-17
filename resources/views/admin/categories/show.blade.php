@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Categories</div>

                <div class="card-body">
                    <h1>Категория {{ $category->name }}</h1>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>
                                Поле
                            </th>
                            <th>
                                Значение
                            </th>
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td>{{ $category->id }}</td>
                        </tr>
                        <tr>
                            <td>Код</td>
                            <td>{{ $category->code }}</td>
                        </tr>
                        <tr>
                            <td>Название</td>
                            <td>{{ $category->name }}</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td>{{ $category->description }}</td>
                        </tr>
                        <tr>
                            <td>Кол-во товаров</td>
                            <td>{{ $category->products->count() }}</td>
                        </tr>
                        <tr>
                            <td>Картинка</td>
                            <td><img class="category-img" src="{{ Storage::url($category->img) }}" alt=""></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection