@include('frontend.include.header')

<div class="banner">
    <div class="col-md-12">
        <div class="sub-page-heading">
            <div class="container">
                <h2>{{ $videos[0]->video_title}}</h2>
            </div>
        </div>

    </div>
</div>

<section class="video spacing">
    <div class="container">
        <div class="row">
          @foreach($videos as $video)
          
            <div class="col-lg-4">
                <div class="video-border">
                    <video controls>
                        <source src="#">
                    </video>
                </div>
                <div class="play-video">
                    <a data-fancybox="gallery" href="{{ $video->video_link }}">
                        <img src="{{ asset('storage/media/'.$video->video_icon) }}" class="img-fluid" alt="play"></a>
                </div>
            </div>
            @endforeach
          </div>
    </div>
</section>
<!-- footer -->

@include('frontend.include.footer')
