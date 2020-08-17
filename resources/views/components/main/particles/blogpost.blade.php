<div class="col-sm-6 col-lg-4">
    <div class="single-blogg-item mb-30">
        <div class="blogg-thumb">
            <a href="{{ route('blog-post', $post->code) }}">
                <img src="assets/img/blog/blog1.jpg" alt="">
            </a>
        </div>
        <div class="blogg-content">
            <span class="post-date">20 oct 2019</span>
            <h5><a href="{{ route('blog-post', $post->code) }}">{{ $post->title }}</a></h5>
            <p>{{ $post->small_description }}</p>
        </div>
    </div>
</div>