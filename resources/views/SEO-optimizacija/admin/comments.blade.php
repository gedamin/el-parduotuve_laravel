@extends('layouts.admin.seo-post')
@section('content')
    <div class="panel-body">
        <div class="well">
            <div class="row">
                <div class="col-sm-12">
                    <div class="pull-left">
                        <h3><i class="fa fa-list"></i> Komentarų sąrašas</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <td style="width: 1px;" class="text-center">ID</td>
                    <td class="text-center">Autorius</td>
                    <td class="text-center">El. paštas</td>
                    <td class="text-center">Blog įrašo pavadinimas</td>
                    <td class="text-center">Komentaras</td>
                    <td class="text-center">Data</td>
                    <td class="text-center">Aktyvuoti</td>
                    <td class="text-right">Veiksmai</td>
                </tr>
                </thead>
                @if (Auth::check() && Auth::user()->isAdmin() )
                    <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td class="text-center">{{$comment->id}}</td>
                            <td class="text-center">{{$comment->comment_author}}</td>
                            <td class="text-center">{{$comment->email}}</td>
                            <td class="text-center">{{$comment->seopost->title}}</td>
                            <td class="text-center">{{$comment->seo_post_comment}}</td>
                            <td class="text-center">{{$comment->comment_created}}</td>
                            <td class="text-center">{{$comment->is_active_comment}}</td>
                            <td class="text-right">
                                <p><a href="{{ route('SEO-optimizacija.comment.edit', $comment->id) }}"
                                      class="label label-warning">Redaguoti</a></p>
                                <p><a href="{{ route('SEO-optimizacija.comment.delete', $comment->id) }}"
                                      class="label label-danger" onclick="return confirm('Ar tikrai norite ištrinti?')">Ištrinti</a>
                                </p>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                @endif
            </table>
        </div>
    </div>
@endsection