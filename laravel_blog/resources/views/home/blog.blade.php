<div class="col-lg-7 col-12">
    @foreach ($blogs as $blog) 
        <span onclick="redirectTo('{{$blog['url']}}')">                  
            <div class="row mt-4 mb-4 border rounded blog-card">
                <div class="col-lg-4 col-12">
                    <img src='{{ $blog['image_url_portait'] }}' alt="" class="rounded w-100 h-100">
                </div>

                <div class="col-lg-8 col-12">
                    <div class="row h-100 pt-4 align-item-center">
                        <div class="col-12 mx-auto">
                            <small class="text-muted fs-8">{{$blog['date']}}</small>
                            <br>
                            @foreach ($blog['tags'] as $tag)
                            <span class="text-primary fw-bold gs-6 pe-1">{{$tag['tag']}}</span>

                            @if($loop->iteration < count($blog['tags']))
                            <span class="text-primary fw-bold gs-6 pe-1">&#8226;</span>                        
                            @endif                                     
                            @endforeach

                            <h2 class="fw-lighter fs-2">{{$blog['title']}}</h2>
                            <p class="text-muted">{{$blog['description']}}</p>
                            <p>
                                <img src="{{$blog['author_image_url']}}" alt="" class="rounded-circle" height="35" width="35">
                                <span class="ps-1">{{$blog['author']}}</span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>  
        </span>     
    @endforeach

</div>