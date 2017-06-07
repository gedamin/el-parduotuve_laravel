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
                    <a href="{{ route('logotipu-kurimas.admin.disainer.view') }}" data-toggle="tooltip" class="btn btn-primary" data-original-title="Atgal į sąrašą"><i class="fa fa-minus"></i> Atgal</a>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ url ('/admin/logotipu-dizaineriai/logotipai', $disainer->id) }}" class="form-image-upload"
          method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Pastaba!</strong> Nepavyko įkelti.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="row">
            <div class="col-md-3">
                <strong>Antraštė:</strong>
                <input type="text" name="title" class="form-control" placeholder="Antraštė">
            </div>
            <div class="col-md-3">
                <strong>Tipas:</strong>
                <input type="text" name="type" class="form-control" placeholder="Tipas">
            </div>
            <div class="col-md-3">
                <strong>Logotipas:</strong>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col-md-3">
                <br/>
                <button type="submit" class="btn btn-success">Įkelti</button>
            </div>
        </div>
    </form>
    <div class="row">
        <div class='list-group gallery'>
            @if($images->count())
                @foreach($images as $image)
                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                        <a class="thumbnail fancybox" rel="ligthbox" href="/storage/images/{{ $image->image }}">
                            <img class="img-responsive" alt="" src="/storage/images/{{ $image->image }}"/>
                            <div class='text-center'>
                                <small class='text-muted'>{{ $image->title }}</small>
                                <small class='text-muted'>{{ $image->type }}</small>
                            </div> <!-- text-center / end -->
                        </a>
                        <form action="{{ url('image-gallery',$image->id) }}" method="POST">
                            <input type="hidden" name="_method" value="delete">
                            {!! csrf_field() !!}
                            <button type="submit" class="close-icon btn btn-danger"><i class="fa fa-times"></i></button>
                        </form>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
<script type="text/javascript">
    $(document).ready(function () {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>