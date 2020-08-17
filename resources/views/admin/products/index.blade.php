@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">product</div>

                <div class="card-body">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Код
                            </th>
                            <th>
                                Название
                            </th>
                            <th>
                                Категория
                            </th>
                            <th>
                                Бренд
                            </th>
                            <th>
                                Действия
                            </th>
                        </tr>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id}}</td>
                                <td>{{ $product->code }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->brand->name }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <form action="{{ route('product.destroy', $product) }}" method="POST">
                                            <a class="btn btn-success" type="button"
                                               href="{{ route('product.show', $product) }}">Открыть</a>
                                            <a class="btn btn-warning" type="button"
                                               href="{{ route('product.edit', $product) }}">Редактировать</a>
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger" type="submit" value="Удалить"></form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-success" type="button" href="{{ route('product.create') }}">Добавить товар</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
