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
        <h2>Album : {{$titreAlbum}}</h2><br />
      </div>
      @foreach($images as $uneImage)
      <div class="gallery_product col-md-6">
        <img src="{{url('files/')."/".$uneImage}}" style="width: 100%;">
      </div>
      @endforeach
  </div>
  <a href="{{route('galerie')}}">Retour</a>
    </div>
  </div>
<!-- FIN ON A CLIQUE SUR UNE MINIATURE -->
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
