<section class="comics_container">
    <div class="container_70">
        @foreach ($comics as $comic)
            <div class="comic">
                <img src="{{$comic["thumb"]}}" alt="">
                <h3>{{$comic["series"]}}</h3>
            </div>
        @endforeach

        <button>load more</button>
    </div>

</section>