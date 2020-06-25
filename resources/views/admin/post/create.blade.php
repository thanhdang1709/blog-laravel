@extends('admin.layouts.app1')
@section('before-styles')
<!-- Plugins css-->
<link href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
<!-- third party css -->
<link href="{{asset('assets\libs\datatables\dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets\libs\switchery\switchery.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/libs/jquery-toast/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
<!-- third party css end -->
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <form method="POST" action="{{route('admin.post.create')}}">
                {{ csrf_field() }}
                <div class="row mt-1">
                    <div class="form-group mb-3 col-md-5">
                        <label for="title">TITLE</label>
                        <input type="text" id="title" name="title" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group mb-3 col-md-3">
                        <label for="title">CATEGORY</label>
                        <select class="form-control" name="category">
                            <option value="0">Select Option</option>
                            @foreach ($categories as $category)
                               <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            
                        </select>
                    </div>
                    <div class="form-group mb-3 col-md-2">
                        <label for="title">STATUS</label>
                        <select class="form-control" name="status">
                            <option value="0">Select Status</option>
                            <option value="publish">Publish</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                    <div class="form-group mb-3 col-md-2">
                        <label for="title">COMMENT</label>
                        <select class="form-control" name="comments">
                            <option value="">Select COMMENT</option>
                            <option value="0">Active</option>
                            <option value="1">Deactive</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-1">
                     <label for="title">SUMMARY</label>
                    <textarea name="summary" class="form-control short-summary"></textarea>
                </div>
                <div class="row mt-1">
                     <label for="title">CONTENT</label>
                    <textarea name="content" class="form-control short-content"></textarea>
                </div>
                <div class="row mt-1">
                     <label for="tags">TAGS</label>
                        <input type="text" id="tags" name="tags" class="form-control" placeholder="TAGS">
                </div>
                <div class="row mt-1">
                     <h2 class="mt-4">Avatar</h2>
                        <div class="input-group">
                          <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                              <i class="fa fa-picture-o"></i> Choose
                            </a>
                          </span>
                          <input id="thumbnail" class="form-control" type="text" name="thumbnail">
                        </div>
                        <img class="img-review" style="display: none;padding-top: 1rem" src=""></img>
                </div>

                <div class="row mt-1">
                        <input type="submit" id="submit" name="submit" class="btn btn-success form-control" value="SUBMIT">
                </div>
            </form>
        </div>
    </div>
</div>

<style type="text/css">
    .table{
        margin-bottom: 0rem;
    }
    .table td, .table th {
        padding: .15rem;
    }
    .fixed-table-container thead th .th-inner {
        padding: .15rem;
    }   
</style>
@endsection

@section('after-scripts')
        <!-- third party js -->
        <script src="{{asset('assets\libs\bootstrap-table/bootstrap-table.min.js')}}"></script>
        <script src="{{asset('assets\libs\switchery\switchery.min.js')}}"></script>
        <script src="{{asset('assets/libs/jquery-toast/jquery.toast.min.js')}}"></script>
        <!-- third party js ends -->
        <!-- Datatables init -->
        <script src="{{asset('assets\libs\sweetalert2\sweetalert2.min.js')}}"></script>
        <script type="text/javascript">
        </script>
        <!-- CKEditor init -->
          <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
          <script>
           var route_prefix = "/filemanager";
          </script>
          <script>
            var editor_config = {
                path_absolute : "/",
                selector: "textarea.short-content",
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table contextmenu directionality",
                    "emoticons template paste textcolor colorpicker textpattern fullpage"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | forecolor backcolor",
                relative_urls: false,
                fullpage_default_font_size: "14px",
                file_browser_callback : function(field_name, url, type, win) {
                    var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                    var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                    var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                    if (type == 'image') {
                        cmsURL = cmsURL + "&type=Images";
                    } else {
                        cmsURL = cmsURL + "&type=Files";
                    }

                    tinyMCE.activeEditor.windowManager.open({
                        file : cmsURL,
                        title : 'Filemanager',
                        width : x * 0.8,
                        height : y * 0.8,
                        resizable : "yes",
                        close_previous : "no"
                    });
                }
            };
            tinymce.init(editor_config);
            </script>
        <script type="text/javascript">
        $(window).on("load", function () {
            $('[data-toggle="table"]').show();
            $('.fixed-table-loading').css('display','none');
        }),
        (window.icons = { refresh: "mdi mdi-refresh", toggle: "fa-refresh", toggleOn: "fa-toggle-on", toggleOff: "fa-toggle-on", columns: "fas fa-th-list", paginationSwitchDown: "glyphicon-collapse-down icon-chevron-down" });

        </script>
        <script>
                (function( $ ){

              $.fn.filemanager = function(type, options) {
                type = type || 'file';

                this.on('click', function(e) {
                  var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
                  var target_input = $('#' + $(this).data('input'));
                  var target_preview = $('#' + $(this).data('preview'));
                  window.open(route_prefix + '?type=' + type, 'FileManager', 'width=900,height=600');
                  window.SetUrl = function (items) {
                    var file_path = items.map(function (item) {
                      return item.url;
                    }).join(',');

                    // set the value of the desired input to image url
                    target_input.val('').val(file_path).trigger('change');

                    // clear previous preview
                    target_preview.html('');
                    
                    // set or change the preview image src
                    items.forEach(function (item) {
                      //target_preview.append(
                        $('.img-review').css('display','block').css('height', '7rem').attr('src', item.thumb_url)
                     // );
                    });

                    // trigger change event
                    target_preview.trigger('change');
                  };
                  return false;
                });
              }

            })(jQuery);

              </script>
              <script>
                $('#lfm').filemanager('image', {prefix: route_prefix});
                // $('#lfm').filemanager('file', {prefix: route_prefix});
              </script>
@endsection