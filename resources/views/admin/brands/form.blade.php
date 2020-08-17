@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@isset($brand)
                    Редактировать brand {{ $brand->name }}
                    @else
                    Создать brand
                @endisset
                    
            </div>

                <div class="card-body">
                    <form  method="POST" enctype="multipart/form-data"
                    @isset($brand)
                        action="{{ route('brand.update', $brand) }}"
                        @else
                        action="{{ route('brand.store') }}"
                    @endisset
                    >                   
                        @csrf
                        @isset($brand)
                            @method("PUT")
                        @endisset
                        <div>
                            <label>
                                <input type="text" value="{{ $brand->name ?? '' }}" class="form-control" name="name" placeholder="Название категории">
                            <label>
                        </div>
                        <div>
                            <label>
                                <input type="text" class="form-control" value="{{ $brand->code ?? '' }}" name="code" placeholder="Код категории">
                            <label>
                        </div>
                        <div>
                            <label>
                                <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Описание категории">{{ $brand->description ?? '' }}</textarea>
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
                                <input type="file" name="tab-image">
                                <span>Общая картинка</span>
                            </label>
                        </div>

                        <div>
                            <label>
                                <input type="file"  name="logotype" >
                                <span>Логотип</span>
                            <label>
                        </div>
                        
                        <input type="submit"  
                        @isset($brand)
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
