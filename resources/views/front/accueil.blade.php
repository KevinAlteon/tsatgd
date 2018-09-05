@extends("template")
@section ('content')
<div class="box text-center">
  <div id="gtco-portfolio" class="gtco-section text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box container gtco-container">
          <h2 class="text-center newsTitre">Nos derniers articles</h2>
          <div class="news  gtco-container text-center">
          @php($i=0)
          @foreach($tab_news as $laNews)
            @if($i<4)
              @if($i == 1 || $i == 2)
                @php($esp = "col-md-offset-1")
              @else
                @php($esp = "")
              @endif
              <a id="{{ $laNews->id }}" class="color-1"  data-toggle="modal" data-target="#modalNews{{$laNews->id}}">
                <div class="text-center mybox col-md-3 {{$esp}} animate-box">
                  <h2 style="font-size: 17px;">{{ $laNews->titre }}</h2> <br />
                  <span>{!! str_limit($laNews->contenu , 25 , '... Voir plus.') !!}</span> <br /><br />
                  @if($laNews->url != "")
                    <img src="{{$laNews->url}}" height="150" width="125"> 
                  @else
                    <br />
                  @endif
                  <br />
                  @if(auth::check())
                      @if($laNews->commentaires->count()==0)
                        <span>0 <b class="ti-comment"></b></span>
                      @elseif ($laNews->commentaires->count()==1)
                        <span>1 <b class="ti-comment"></b></span>
                      @else
                        <span>{!! $laNews->commentaires->count() !!} <b class="ti-comments"></b></span>
                      @endif
                  @endif
                </div>
              </a>
            @endif
          @php($i++)
          @endforeach 
          </div>
        </div>
      </div>
  </div>
</div>



      <!-- Modal de  news -->
      @php($i=0)
      @foreach($tab_news as $laNews)
        @if($i <4)
        <div class="modal fade bd-example-modal-lg" id="modalNews{{$laNews->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document" style="width:75%;">
            <div class="modal-content">
              <div id="gtco-portfolio" class="gtco-section">
                <div class="gtco-container">

                  <button type="button" class="btn btn-danger btn-circle" data-dismiss="modal" aria-label="Close" style="position:absolute; right:0px; top:0px">
                    <span aria-hidden="true">&times;</span>
                  </button>

                  <div class="row">

                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                      <h2>{{ $laNews->titre }}</h2>
                      <span>{!! $laNews->contenu !!}</span>
                      @if(auth::check())
                        <button type="submit" class="btn btn-success btn-block" data-toggle="modal" data-target="#modalCommentaire{{$laNews->id}}">Commenter</button>
                      @endif

                    </div>
                  </div>
                  @if(auth::check())
                    <div class="box-body">

                      <div class="row row-pb-md">
                        <div class="col-md-12">
                          <ul id="gtco-portfolio-list">

                            @forelse($laNews->commentaires as $unCommentaire)
                              <li id="row{{$unCommentaire->id}}" class="animate-box" data-animate-effect="fadeIn" style="background-color:rgb(210, 0, 123); width:100%; ">
                                <a class="color-1">
                                  <div class="case-studies-summary">

                                    <h2>{{$unCommentaire->titre}} <span> {!! $unCommentaire->pseudo !!} </span></h2>

                                    <span>{!! $unCommentaire->contenu !!}</span>



                                  </div>
                                </a>
                              </li>


                            @empty
                              <span>Il n'y a pas de commentaire pour cette news</span>
                            @endforelse
                          </ul>
                        </div>
                      </div>
                    </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
    @php($i++)
    @endforeach
    <!-- FIN Modal de news -->

        <!-- Modal de commentaire -->
        @if(auth::check())
      @foreach($tab_news as $laNews)
      <div class="modal fade bd-example-modal-lg" id="modalCommentaire{{$laNews->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" style="width:75%;">
          <div class="modal-content">

            <!-- Main content -->
            <div class="row">
              <div class="col-md-12">
                <div class="box box-info">
                  {!! Form::open(['route' => "commentaire.store", 'method' => 'post', 'files' => true]) !!}
                  <div class="box-header">
                    <h3 class="box-title">  </h3>

                    <div class="form-group">
                      <label>Titre du commentaire :  </label>
                      <input class="form-control" placeholder="Un titre" name="titre">
                    </div>

                  </div>
                  <!-- /.box-header -->
                  <div class="box-body pad">

                    <div class="form-group">
                      {{ Form::textarea('editor', '',['id'=>'editor','class'=>'form-control','placeholder'=>'Votre commentaire']) }}
                    </div>

                  </div>

                  <button type="submit" class="btn btn-success btn-lg btn-block">Créer</button>
                  <input class="form-control" name="id_news" value="{{$laNews->id}}" style="visibility:hidden">
                  @if(Auth::check())
                    @php ($pseudo = Auth::user()->nom ." ". Auth::user()->prenom)
                    <input class="form-control" name="pseudo" value="{{$pseudo}}" style="visibility:hidden">
                  @else
                    @php ($pseudo = "ANONYME")
                    <input class="form-control" name="pseudo" value="{{$pseudo}}" style="visibility:hidden">
                  @endif
                  {!! Form::close() !!}
                </div>
                <!-- /.box -->
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    @endif
    <!-- FIN Modal de commentaire -->
  @stop