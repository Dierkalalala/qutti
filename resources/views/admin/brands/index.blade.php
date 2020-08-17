@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Brands</div>

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
                                Действия
                            </th>
                        </tr>
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{ $brand->id }}</td>
                                <td>{{ $brand->code }}</td>
                                <td>{{ $brand->name }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <form action="{{ route('brand.destroy', $brand) }}" method="POST">
                                            <a class="btn btn-success" type="button" href="{{ route('brand.show', $brand) }}">Открыть</a>
                                            <a class="btn btn-warning" type="button" href="{{ route('brand.edit', $brand) }}">Редактировать</a>
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger" type="submit" value="Удалить"></form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-success" type="button"
                       href="{{ route('brand.create') }}">Добавить бренд</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
