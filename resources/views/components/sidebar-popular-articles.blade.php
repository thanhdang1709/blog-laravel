<div class="sidebar-box ftco-animate">
  
  <h3 class="sidebar-heading">Popular Articles</h3>
  @foreach ($popularArticles as $article)
    <div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url({{$article->thumbnail??'/assets/front/images/image_1.jpg'}});"></a>
    <div class="text">
      <h3 class="heading"><a href="/post/{{$article->slug}}">{{ Str::limit($article->title, 50, $end='...') }}</a></h3>
      <div class="meta">
        <div><a href="#"><span class="icon-calendar"></span> {{date('d-m-Y',strtotime($article->created_at))}}</a></div>{{-- 
        <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div> --}}{{-- 
        <div><a href="#"><span class="icon-chat"></span> 19</a></div> --}}
      </div>
    </div>
  </div>
  @endforeach
  

</div>