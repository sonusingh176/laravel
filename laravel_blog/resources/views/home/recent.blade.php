<div class="col-12 pt-3 pb-4 g-0 border-bottom-black">
    <p class="text-muted fs-5">Recently Written</p>
    @foreach ($recents as $recent)
    <span onclick="redirectTo('{{$recent['url']}}')">  
        <div class="card p-0 mt-4" style="min-height: 140px">
            <img src="{{$recent['image_url_landscape']}}" alt="" style="opacity: 0.5 min-height: 140px">
            <div class="card-img-overlay">
                <h5 class="card-title">{{$recent['title']}}</h5>
                <p class="card-text">{{$recent['date']}}</p>
            </div>
        </div>
    </span>
    @endforeach
</div>