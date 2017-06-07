@extends('layouts.admin.seo-post')
@section('content')
    <div class="panel-body" xmlns:v-on="http://www.w3.org/1999/xhtml">
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
                        <h3><i class="fa fa-pencil"></i> Redaguoti</h3>
                    </div>
                    <div class="pull-right">
                        <button type="submit" form="form-category" data-toggle="tooltip" title="Išsaugoti"
                                class="btn btn-success"><i class="fa fa-save"></i></button>
                        <a href="{{ route('SEO-optimizacija.comments.list.all') }}" data-toggle="tooltip"
                           class="btn btn-primary" data-original-title="Atgal į sąrašą"><i class="fa fa-minus"></i>
                            Atgal</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-general" data-toggle="tab">Komentaras</a></li>
        </ul>
        <div class="tab-content">
            <div class="" id="tab-general">
                <form action="{{ route('SEO-optimizacija.comment.update', $comments->id) }}" method="POST"
                      enctype="multipart/form-data" id="form-category" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">Autorius</label>
                        <div class="col-sm-10">
                            <input type="text" name="comment_author" id="comment_author" class="form-control"
                                   value="{{ $comments->comment_author }}">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">El.paštas</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" id="email" class="form-control"
                                   value="{{ $comments->email }}">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">Komentaras</label>
                        <div class="col-sm-10">
                            <input type="text" name="seo_post_comment" id="seo_post_comment"
                                   class="form-control" value="{{ $comments->seo_post_comment }}">
                        </div>
                    </div>

                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">Aktyvuoti</label>
                        <div class="col-sm-10">
                            <select name="is_active_comment">
                                <option value="0">Aktyvuota</option>
                                <option value="1">Deaktyvuota</option>
                            </select>
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
@endsection