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
                        <button type="submit" form="form-category" data-toggle="tooltip" title="Išsaugoti" class="btn btn-success"><i class="fa fa-save"></i></button>
                        <a href="{{ route('logotipu-kurimas.admin.disainer.view') }}" data-toggle="tooltip"
                           class="btn btn-primary" data-original-title="Atgal į sąrašą"><i class="fa fa-minus"></i> Atgal</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-general" data-toggle="tab">Profilis</a></li>
        </ul>
        <div class="tab-content">
            <div class="" id="tab-general">
                <form action="{{ route('logotipu-dizaineriai.admin.update', $disainer->id) }}" method="POST"
                      enctype="multipart/form-data" id="form-category" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">Vardas</label>
                        <div class="col-sm-10">
                            <input type="text" name="disainer_name" id="disainer_name" class="form-control" value="{{ $disainer->disainer_name }}">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">Tipas</label>
                        <div class="col-sm-10">
                            <input type="text" name="disainer_title" id="disainer_title" class="form-control" value="{{ $disainer->disainer_title }}">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">Trumpas aprašymas</label>
                        <div class="col-sm-10">
                            <input type="text" name="disainerShort_description" id="disainerShort_description" class="form-control" value="{{ $disainer->disainerShort_description }}">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">Dizainerio aprašymas</label>
                        <div class="col-sm-10">
                            <textarea rows="8"  type="text" name="disainer_description" id="disainer_description" class="form-control">{{ $disainerPorfolio->disainer_description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">Avataras</label>
                        <div class="col-sm-10">
                            <input type="file" name="disainer_avatar" id="disainer_avatar" class="form-control" value="{{ $disainer->disainer_avatar }}">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">Tel. Nr.</label>
                        <div class="col-sm-10">
                            <input type="text" name="disainer_phone" id="disainer_phone" class="form-control" value="{{ $disainer->disainer_phone }}">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">El. Paštas</label>
                        <div class="col-sm-10">
                            <input type="text" name="disainer_email" id="disainer_email" class="form-control" value="{{ $disainer->disainer_email }}">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">Aktyvuoti</label>
                        <div class="col-sm-10">
                            <select name="is_active_disainer">
                                <option value="0">Aktyvuota</option>
                                <option value="1">Deaktyvuota</option>
                            </select>
                        </div>
                    </div>
                    @if (Auth::check() && Auth::user()->isAdmin() )
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">Rūšiavimas</label>
                        <div class="col-sm-10">
                            <input type="text" name="disainer_sort" id="disainer_sort" class="form-control" value="{{ $disainer->disainer_sort }}">
                        </div>
                    </div>
                        @else
                    @endif
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