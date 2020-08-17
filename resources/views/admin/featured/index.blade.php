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
                                Название продукта
                            </th>
                        </tr>
                        @foreach($f_products as $product)
                            <tr>
                                <td>{{ $product->id}}</td>
                                <td>{{ $product->product->name }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-success" type="button" href="{{ route('featured.create') }}">Добавить товар</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
