@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Бренды</div>

                <div class="card-body">
                    <h1>Бренд {{ $brand->name }}</h1>
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
                            <td>{{ $brand->id }}</td>
                        </tr>
                        <tr>
                            <td>Код</td>
                            <td>{{ $brand->code }}</td>
                        </tr>
                        <tr>
                            <td>Название</td>
                            <td>{{ $brand->name }}</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td>{{ $brand->description }}</td>
                        </tr>
                        <tr>
                            <td>Кол-во товаров</td>
                            <td>{{ $brand->products->count() }}</td>
                        </tr>
                        <tr>
                            <td>Картинка</td>
                            <td><img class="category-img" src="{{ Storage::url($brand->logotype) }}" alt=""></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection