@extends("template")
@section("tittle")
  Galerie d'images
@stop
@section ('content')
<!-- QUAND ON A CLIQUE SUR UNE MINIATURE -->
@if (isset($images))
<div class="container">
  <div class="row">
    <div class="text-center col-md-12">
      <h2>Album : <b>{{$titreAlbum}}</b></h2><br />
    </div>
    @php($x = 0)
    @foreach ($images as $uneImage)
    <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-3 pointer">
      <div class="overlay-image">
        <img src="{{url('files/')."/".$uneImage}}" class="img-responsive" style="height: 265px; width:265px;">
        <div class="hover" id="image{{$x}}" data-toggle="modal" data-target="#imagemodal{{$x}}">
        <div class="text">
          Agrandir
        </div>  
      </div>
  </div>
</div>
@php($x++)
@endforeach
<!-- FIN ON A CLIQUE SUR UNE MINIATURE -->
<!-- DEBUT MODALE AGRANDIR IMAGE -->
@php($x = 0)
@foreach($images as $uneImage)
  <div class="modal" tabindex="-1" role="dialog" id="imagemodal{{$x}}">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <img src="{{url('files/')."/".$uneImage}}" class="img-responsive">
        </div>
      </div>
    </div>
  </div>
  @php($x++)
@endforeach
<!-- FIN MODALE AGRANDIR IMAGE -->
@endif
@if (isset($lesAlbums))
<!-- DEBUT  MINIATURE -->
<div class="container">
  <div class="row">
    <div class="text-center col-md-12">
      <h2>Albums</h2><br />
    </div>
    @foreach ($lesAlbums as $unAlbum)
    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 pointer">
      <div class="overlay-image">
        <img src="{{url('files/miniature.PNG')}}" class="img-responsive" style="height: 365px; width:365px;">
      <div class="hover">
      <div class="text">
        <a class="unlink" href="{{ route('galerie.album',['album' => $unAlbum["slug"], 'titreAlbum' => $unAlbum["titre"]]) }}">{{$unAlbum["titre"]}}</a>
      </div>  
    </div>
  </div>
</div>
<!-- FIN  MINIATURE -->
    @endforeach
  </div>
</div>
@endif
@stop