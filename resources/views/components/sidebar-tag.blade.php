<div class="sidebar-box ftco-animate">
                  <h3 class="sidebar-heading">Tags</h3>
                  <ul class="tagcloud">
                  	@foreach ($tags as $tag)
                  		@if ($tag->posts()->count()>=1)
                  			<a href="/tag/{{$tag->name}}" class="tag-cloud-link">{{$tag->name}}</a>
                  		@endif
                  		
                  	@endforeach
                    
                    
                  </ul>
                </div>