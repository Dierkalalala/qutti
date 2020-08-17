@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Добавить product
                </div>

                <div class="card-body">
                    <form  method="POST" enctype="multipart/form-data"
                        action="{{ route('featured.store') }}"
                    >                   
                        @csrf                       
                        <select multiple class="form-control form-select mb-3" name="product_id[]" id="product_id">
                            @foreach ($products as $product)
                                <option 
                                @isset($product->featured_product) 
                                    @if ($product->featured_product->product_id == $product->id)
                                        selected
                                    @endif
                                @endisset
                                value="{{ $product->id }}">{{ $product->name }}
                                 </option>
                            @endforeach
                        </select>
                        
                        <input type="submit"  
                        value="Добавить"
                     class="btn btn-success">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
