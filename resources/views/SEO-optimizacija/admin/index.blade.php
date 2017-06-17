@extends('layouts.admin.seo-post')
@section('content')
    <div class="panel-body">
        <div class="well">
            <div class="row">
                <div class="col-sm-12">
                    <div class="pull-left">
                        <h3><i class="fa fa-list"></i> BLOG įrašų sąrašas</h3>
                    </div>
                    <div class="pull-right">
                        <a href="{{ route('SEO-optimizacija.admin.add') }}" data-toggle="tooltip"
                           class="btn btn-primary" data-original-title="Pridėti"><i class="fa fa-plus"></i> Pridėti</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <td style="width: 1px;" class="text-center">ID</td>
                    <td class="text-center">Pavadinimas</td>
                    <td class="text-center">Nuotrauka</td>
                    <td class="text-center">Trumpas aprašymas</td>
                    <td class="text-center">Aprašymas</td>
                    <td class="text-center">Data</td>
                    <td class="text-center">Autorius</td>
                    <td class="text-right">Veiksmai</td>
                </tr>
                </thead>
                @if (Auth::check() && Auth::user()->isAdmin() )
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td class="text-center">{{$post->id}}</td>
                            <td class="text-center">{{$post->title}}</td>
                            <td class="text-center">
                                <div><img src="/images/seo_post_img/{{$post->img}}" width="70" height="auto"></div>
                            </td>
                            <td class="text-center">{{strip_tags(str_limit($post->short_conten, 125))}} [...]</td>
                            <td class="text-center">{{strip_tags(str_limit($post->content, 325))}} [...]</td>
                            <td class="text-center">{{$post->created}}</td>
                            <td class="text-center">{{$post->author}}</td>
                            <td class="text-right">
                                <p><a href="{{ route('SEO-optimizacija.comments.list', $post->id) }}"
                                      class="label label-info">Komentarai ({{count($post->comments)}})</a></p>
                                <p><a href="{{ route('SEO-optimizacija.admin.edit', $post->id) }}"
                                      class="label label-warning">Redaguoti</a></p>
                                <p><a href="{{ url('SEO-optimizacija',$post->slug) }}" class="label label-success"
                                      target="_blank">Peržiūrėti</a></p>
                                <p><a href="{{ route('SEO-optimizacija.admin.delete', $post->id) }}"
                                      class="label label-danger" onclick="return confirm('Are you sure to delete?')">Ištrinti</a>
                                </p>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                @endif
            </table>
            {{ $posts->links() }}
        </div>
    </div>
@endsection
