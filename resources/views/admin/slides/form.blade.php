@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@isset($slider)
                    Редактировать slider {{ $slider->name }}
                    @else
                    Создать slider
                @endisset
                    
            </div>

                <div class="card-body">
                    <form  method="POST" enctype="multipart/form-data"
                    @isset($slider)
                        action="{{ route('slider.update', $slider) }}"
                        @else
                        action="{{ route('slider.store') }}"
                    @endisset
                    >                   
                        @csrf
                        @isset($slider)
                            @method("PUT")
                        @endisset
                       
                        <div>
                            <label>
                                <input type="text" value="{{ $slider->title ?? '' }}" class="form-control" name="title" placeholder="Название slider">
                            <label>
                        </div>
                        <div>
                            <label>
                                <input type="text" class="form-control" value="{{ $slider->link ?? '' }}" name="link" placeholder="link">
                            <label>
                        </div>
                        <div>
                            <label>
                                <input type="text" class="form-control" value="{{ $slider->description ?? '' }}" name="description" placeholder="description">
                            <label>
                        </div>
                        <div>
                            <label>
                                <input type="file" name="photo" >
                            <label>
                        </div>
                        <input type="submit"  
                        @isset($slider)
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
