@extends('layouts.admin.seo-post')
@section('content')
    <div class="panel-body">
        <div class="well">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach()
                </div>
            @endif
            <div class="row">
                <div class="col-sm-12">
                    <div class="pull-left">
                        <h3><i class="fa fa-pencil"></i> Redaguoti BLOG įrašą</h3>
                    </div>
                    <div class="pull-right">
                        <button type="submit" form="form-category" data-toggle="tooltip" title="Išsaugoti"
                                class="btn btn-success"><i class="fa fa-save"></i></button>
                        <a href="{{ route('SEO-optimizacija.admin.index') }}" data-toggle="tooltip"
                           class="btn btn-primary" data-original-title="Atgal į sąrašą"><i class="fa fa-minus"></i>
                            Atgal</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-general" data-toggle="tab">Bendra informacija</a></li>
        </ul>
        <div class="tab-content">
            <div class="" id="tab-general">
                <form action="{{ route('SEO-optimizacija.admin.update', $post->id) }}" method="POST"
                      enctype="multipart/form-data" id="form-category" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">Pavadinimas</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">Paveiksliukas (kategorijose ir posto viršuje)</label>
                        <div class="col-sm-10">
                            <input type="file" name="img" id="img" class="form-control">
                        </div>

                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <div class="col-sm-6">
                            <img src="/images/seo_post_img/{{$post->img}}" width="250" height="auto">
                            </div>
                            <div class="col-sm-6">
                            <p>INFORMACIJA:</p>
                            <p>Pakeitus paveiksliuką senasis išsitrina, o naujas įsirašo. Paveiksliuko pavadinimas laiko kodas.</p>
                            <p>Jeigu yra paveiksliukas tuomet paliekamas esamas ir neperrašomas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">Trumpas aprašymas (sąraše):</label>
                        <div class="col-sm-10">
                            <textarea name="short_conten" id="content-edit-short"
                                      class="form-control">{{ $post->short_conten }}</textarea>
                            <script>
                                CKEDITOR.replace( 'content-edit-short');
                            </script>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">Turinys:</label>
                        <div class="col-sm-10">
                            <textarea name="content" id="content-edit" class="form-control">{{ htmlspecialchars($post->content) }}</textarea>

                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">Autorius:</label>
                        <div class="col-sm-10">
                            <input type="text" name="author" id="author" class="form-control"
                                   value="{{ $post->author }}">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">URL:</label>
                        <div class="col-sm-10">
                            <input type="text" name="slug" id="slug" class="form-control" value="{{ $post->slug }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-name">Meta title:</label>
                        <div class="col-sm-10">
                            <input type="text" name="meta_title" id="meta-title" class="form-control"
                                   value="{{ $post->meta_title }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-name">Meta aprašymas:</label>
                        <div class="col-sm-10">
                            <input type="text" name="meta_description" id="meta-description" class="form-control"
                                   value="{{ $post->meta_description }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-name">Twiter creator:</label>
                        <div class="col-sm-10">
                            <input type="text" name="twiter_creator" id="twiter-creator" class="form-control"
                                   value="{{ $post->twiter_creator }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-success" value="Išsaugoti"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-6 col-md-offset-3">--}}
                {{--<div class="input-group">--}}
          {{--<span class="input-group-btn">--}}
            {{--<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">--}}
              {{--<i class="fa fa-picture-o"></i> Choose--}}
            {{--</a>--}}
          {{--</span>--}}
                    {{--<input id="thumbnail" class="form-control" type="text" name="filepath">--}}
                {{--</div>--}}
                {{--<img id="holder" style="margin-top:15px;max-height:100px;">--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script>
        var route_prefix = "{{ url(config('lfm.prefix')) }}";
    </script>

    <!-- CKEditor init -->
    {{--<script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/ckeditor.js"></script>--}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/adapters/jquery.js"></script>

    <script>

        $('textarea[name=content]').ckeditor({
            height: 300,
            filebrowserImageBrowseUrl: route_prefix + '?type=Images',
            filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
            filebrowserBrowseUrl: route_prefix + '?type=Files',
            filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
        });

    </script>



    <script>
        {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
    </script>
    <script>
        $('#lfm').filemanager('image', {prefix: route_prefix});
    </script>

@endsection