@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Categories</div>

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
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->code }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <form action="{{ route('category.destroy', $category) }}" method="POST">
                                            <a class="btn btn-success" type="button" href="{{ route('category.show', $category) }}">Открыть</a>
                                            <a class="btn btn-warning" type="button" href="{{ route('category.edit', $category) }}">Редактировать</a>
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger" type="submit" value="Удалить">
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-success" type="button"
                       href="{{ route('category.create') }}">Добавить категорию</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
