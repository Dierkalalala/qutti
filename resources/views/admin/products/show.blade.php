@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Categories</div>

                <div class="card-body">
                    <h1>Категория {{ $product->name }}</h1>
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
                            <td>{{ $product->id }}</td>
                        </tr>
                        <tr>
                            <td>Код</td>
                            <td>{{ $product->code }}</td>
                        </tr>
                        <tr>
                            <td>Название</td>
                            <td>{{ $product->name }}</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td>{{ $product->description }}</td>
                        </tr>
                        <tr>
                            <td>Статус</td>
                            <td>{!! $product->status !!}</td>
                        </tr>
                        <tr>
                            <td>Количество</td>
                            <td>{{ $product->quantity }}</td>
                        </tr>
                        <tr>
                            <td>Цена</td>
                            <td>{{ $product->price }}</td>
                        </tr>
                        <tr>
                            <td>Картинка</td>
                            <td><img class="category-img" src="{{ Storage::url($product->img) }}" alt=""></td>
                        </tr>

                        <tr>
                            <td>
                                Картинки со слайдера
                            </td>
                            <td>
                                @foreach ($product->product_images as $img)
                                    <img width="200" height="100" src="{{ Storage::url($img->img) }}" alt="">
                                @endforeach
                                
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection