@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">slider</div>

                <div class="card-body">
                    <h1>Категория {{ $slider->name }}</h1>
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
                            <td>{{ $slider->id }}</td>
                        </tr>
                        <tr>
                            <td>Title</td>
                            <td>{{ $slider->title }}</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td>{{ $slider->description }}</td>
                        </tr>
                        <tr>
                            <td>Картинка</td>
                            <td><img class="category-img" src="{{ Storage::url($slider->photo) }}" alt=""></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection