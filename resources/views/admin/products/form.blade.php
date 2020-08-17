@extends('layouts.app')

@section('content')
<script src="https://cdn.tiny.cloud/1/rj2jucgcpwr6pk3qhgl7f10o3pixxkh7ly392y2322qr1n15/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    // tinymce.init({selector:'.status-control'});
tinymce.init({
  selector: '.status-control',
  plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
  imagetools_cors_hosts: ['picsum.photos'],
  menubar: 'file edit view insert format tools table help',
  toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
  toolbar_sticky: true,
  autosave_ask_before_unload: true,
  autosave_interval: "30s",
  autosave_prefix: "{path}{query}-{id}-",
  autosave_restore_when_empty: false,
  autosave_retention: "2m",
  image_advtab: true,
  content_css: '//www.tiny.cloud/css/codepen.min.css',
  importcss_append: true,
  file_picker_callback: function (callback, value, meta) {
    /* Provide file and text for the link dialog */
    if (meta.filetype === 'file') {
      callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
    }

    /* Provide image and alt text for the image dialog */
    if (meta.filetype === 'image') {
      callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
    }

    /* Provide alternative source and posted for the media dialog */
    if (meta.filetype === 'media') {
      callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
    }
  },
  templates: [
        { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
    { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
    { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
  ],
  template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
  template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
  height: 600,
  image_caption: true,
  quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
  noneditable_noneditable_class: "mceNonEditable",
  toolbar_mode: 'sliding',
  contextmenu: "link image imagetools table",
 });

</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@isset($product)
                    Редактировать product {{ $product->name }}
                    @else
                    Создать product
                @endisset
                    
            </div>

                <div class="card-body">
                    <form  method="POST" enctype="multipart/form-data"
                    @isset($product)
                        action="{{ route('product.update', $product) }}"
                        @else
                        action="{{ route('product.store') }}"
                    @endisset
                    >                   
                        @csrf
                        @isset($product)
                            @method("PUT")
                        @endisset
                       
                        <div>
                            <label>
                                <input type="text" value="{{ $product->name ?? '' }}" class="form-control" name="name" placeholder="Название product">
                            <label>
                        </div>
                        <div>
                            <label>
                                <input type="text" class="form-control" value="{{ $product->price ?? '' }}" name="price" placeholder="price">
                            <label>
                        </div>
                        <div>
                            <label>
                                <input type="text" class="form-control" value="{{ $product->product_code ?? '' }}" name="product_code" placeholder="product_code">
                            <label>
                        </div>
                        <div>
                            <label>
                                <input type="text" class="form-control" value="{{ $product->quantity ?? '' }}" name="quantity" placeholder="quantity">
                            <label>
                        </div>
                        <div>
                            <label style="width: 100%;">
                                <input type="text" class="status-control form-control" value="{{ $product->status ?? '' }}" name="status" placeholder="status">
                            <label>
                        </div>
                        <div>
                            <label>
                                <input type="text" class="form-control" value="{{ $product->code ?? '' }}" name="code" placeholder="Код product">
                            <label>
                        </div>
                        <div>
                            <label style="width: 100%;">
                                <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Описание категории">{{ $product->description ?? '' }}</textarea>
                            <label>
                        </div>
                        <label class="d-block">
                            <p>Категория</p>
                            <select class="form-control form-select mb-3" name="category_id" id="category_id">
                                @foreach ($categories as $category)
                                    <option 
                                    @isset($product)
                                        
                                    @if ($category->id == $product->category_id)
                                        selected
                                    @endif 
                                    
                                    @endisset
                                    value="{{ $category->id }}"> {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </label>
                            <label class="d-block">
                                <p>Бренд</p>
                            <select class="form-control form-select mb-3" name="brand_id" id="brand_id">
                                @foreach ($brands as $brand)
                                    <option 
                                    @isset($product)
                                        
                                    @if ($brand->id == $product->brand_id)
                                        selected
                                    @endif 
                                    
                                    @endisset
                                    value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </label>
                        <div>
                            <label>
                                <input type="file"  name="img" >
                            <label>
                        </div>

                        <div>
                            <label>
                                <span>Картинки для слайдера</span>
                                <input type="file" multiple name="images[]">
                            </label>
                        </div>
                        
                        <input type="submit"  
                        @isset($product)
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
