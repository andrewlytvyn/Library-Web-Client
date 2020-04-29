@extends('layouts.app')

@section('content')
    <div class="container">


                <div class="card">
                    <div class="card-header">{{$document->name}}</div>
                    <div class="card-body">
                        @isset($document->doc_type)<b>Вид документа:</b>&nbsp;{{$document->doc_type}}<br>@endisset
                        @isset($document->publ_year)<b>Рік публікації:</b> {{$document->publ_year}}<br>@endisset
                        @isset($document->publ_place)<b>Місце публікації:</b> {{$document->publ_place}}<br>@endisset
                        @isset($document->publisher)<hr><b>Publisher:</b> {{$document->publisher}}<br><br>@endisset
                        @isset($document->author)<hr><b>Автор:</b>&nbsp;{{$document->author}}&nbsp;<br>@endisset
                        @isset($document->author_mark)<b>Авторський знак:</b>&nbsp;{{$document->author_mark}}&nbsp;<br>@endisset
                        @isset($document->author_type)<b>Вид автора:</b>&nbsp;{{$document->author_type}}<br>@endisset
                        @isset($document->lang_kod)<b>Мова:</b>&nbsp;{{$document->lang_kod}}&nbsp;{{$document->lang}}&nbsp;<br>@endisset
                        @isset($document->sizem)<b>Обсяг:</b>&nbsp;{{$document->sizem}}<br>@endisset
                        @isset($document->cipher)<b>Шифр:</b>&nbsp;{{$document->cipher}}<br>@endisset
                        @isset($document->udk)<hr><b>УДК:</b>&nbsp;{{$document->udk}}<br>@endisset
                        @isset($document->bbk)<hr><b>ББК:</b>&nbsp;{{$document->bbk}}<br>@endisset
                        @isset($document->isbn)<hr><b>ISBN:</b>&nbsp;{{$document->isbn}}<br>@endisset
                        @isset($document->issn)<hr><b>ISSN:</b>&nbsp;{{$document->issn}}<br>@endisset
                        @isset($document->annotation)
                                <hr>
                                <p>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Аннотацiя:
                                    </a>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        {{$document->annotation}}
                                    </div>
                                </div>
                            @endisset
                            @if($document->device_kod == 28670 and trim($document->long_filename) <> "" and !is_null($document->long_filename))
                                <hr><p><a class='btn btn-outline-info btn-sm' href={{$document->long_filename}}>Електронная копія</a></p>
                            @endif
                            @foreach($document->topics as $topic)
                                {{$topic->name}}<br/>
                            @endforeach

                    </div>
                </div>


    </div>
@endsection
