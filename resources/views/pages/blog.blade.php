@extends('system.master')

@section('content')

<div class="breadcrumb-area mb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    {{ Breadcrumbs::render('blog') }}
                </div>
            </div>
        </div>
    </div>
</div>
   <!-- blog wrapper start -->
   <div class="blog-area-wrapper pt-30 pb-65">
       <div class="container-fluid">
           <div class="row">
               <div class="col-lg-12">
                   <div class="blog-wrapper-inner">
                       <div class="row">
                           @foreach ($posts as $post)
                            @include('components.main.particles.blogpost')        
                           @endforeach                    
                       </div>
                   </div>
                   {{-- <div class="paginatoin-area text-center pt-40">
                        <div class="row">
                            <div class="col-12">
                                <ul class="pagination-box">
                                    <li><a class="Previous" href="#">Previous</a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>
                                      <a class="Next" href="#"> Next </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>  --}}
               </div>
           </div>
       </div>
   </div>
   <!-- blog wrapper end -->

    @endsection