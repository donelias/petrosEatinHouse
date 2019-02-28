<div class="tags-cate">
    <div class="col-lg-8 cat-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h4><span>C</span>ategorias</h4>
        @foreach($categories as $category)
            <div class="col col-lg-2" >
                <a href="{{ route('menu-category', $category->slug) }}" class="btn btn-xs btn-default btn-block" style="font-size: 10px;">{{$category->name}}</a>
                <br>
            </div>
        @endforeach
    </div>
    <div class="clearfix"> </div>
</div>