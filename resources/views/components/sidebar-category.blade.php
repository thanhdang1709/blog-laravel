<div class="sidebar-box ftco-animate">
    <h3 class="sidebar-heading">Chuyên mục</h3>
  <ul class="categories">
    @foreach ($categories as $category)
        <li><a href="/category/{{$category->slug}}">{{$category->name}} <span>({{$category->posts->count()}})</span></a></li>
    @endforeach
  </ul>
</div>