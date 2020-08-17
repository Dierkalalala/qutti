@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">slides</div>

                <div class="card-body">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Заголовок
                            </th>
                            <th>
                                Описание
                            </th>
                            <th>
                                Ссылка
                            </th>
                            <th>
                                Фото
                            </th>
                            <th>
                                Действия
                            </th>
                        </tr>
                        @foreach($slides as $slide)
                            <tr>
                                <td>{{ $slide->id}}</td>
                                <td>{{ $slide->title }}</td>
                                <td>{{ $slide->description }}</td>
                                <td>{{ $slide->link }}</td>
                                <td>{{ $slide->photo }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <form action="{{ route('slider.destroy', $slide) }}" method="POST">
                                            <a class="btn btn-success" type="button"
                                               href="{{ route('slider.show', $slide) }}">Открыть</a>
                                            <a class="btn btn-warning" type="button"
                                               href="{{ route('slider.edit', $slide) }}">Редактировать</a>
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger" type="submit" value="Удалить"></form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-success" type="button" href="{{ route('slider.create') }}">Добавить слайд</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
