@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@isset($category)
                    Редактировать категорию {{ $category->name }}
                    @else
                    Создать категорию
                @endisset
                    
            </div>

                <div class="card-body">
                    <form  method="POST" enctype="multipart/form-data"
                    @isset($category)
                        action="{{ route('category.update', $category) }}"
                        @else
                        action="{{ route('category.store') }}"
                    @endisset
                    >                   
                        @csrf
                        @isset($category)
                            @method("PUT")
                        @endisset
                        <div>
                            <label>
                                <input type="text" value="{{ $category->name ?? '' }}" class="form-control" name="name" placeholder="Название категории">
                            <label>
                        </div>
                        <div>
                            <label>
                                <input type="text" class="form-control" value="{{ $category->code ?? '' }}" name="code" placeholder="Код категории">
                            <label>
                        </div>
                        <div>
                            <label>
                                <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Описание категории">{{ $category->description ?? '' }}</textarea>
                            <label>
                        </div>

                        <div>
                            <label>
                                <input type="checkbox" value="1" name="is_popular">
                                <span>Популярный бренд?</span>
                            </label>
                        </div>

                        <div>
                            <label>
                                <input type="file"  name="img" >
                            <label>
                        </div>
                        
                        <input type="submit"  
                        @isset($category)
                        value="Редактировать"
                        @else
                        value="Создать"
                    @endisset
                     class="btn btn-success">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
