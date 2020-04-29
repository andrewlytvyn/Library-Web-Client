@extends('layouts.app')

@section('content')
    <div class="container">


                <div class="card">
                    <div class="card-header">{{$document->name}}</div>

                    <div class="card-body">

                            @isset($document->doc_type)<b>Вид документа:</b>&nbsp;{{$document->doc_type}}<br>@endisset




                            <b>Рік публікації:</b> {{$document->publ_year}}<br>
                            <b>Місце публікації:</b> {{$document->publ_place}}<br>

                            <hr>
                            @isset($document->publisher)<b>Publisher:</b> {{$document->publisher}}<br><br>@endisset
                            <hr>

                            @isset($document->author)<b>Автор:</b>&nbsp;{{$document->author}}&nbsp;<br>@endisset
                            @isset($document->author_mark)<b>Авторський знак:</b>&nbsp;{{$document->author_mark}}&nbsp;<br>@endisset
                            @isset($document->author_type)<b>Вид автора:</b>&nbsp;{{$document->author_type}}<br>@endisset

                            @isset($document->lang_kod)<b>Мова:</b>&nbsp;{{$document->lang_kod}}&nbsp;{{$document->lang}}&nbsp;<br>@endisset
                            @isset($document->sizem)<b>Обсяг:</b>&nbsp;{{$document->sizem}}<br>@endisset



                            @isset($document->cipher)<b>Шифр:</b>&nbsp;{{$document->cipher}}<br>@endisset
                            <hr>
                            @isset($document->udk)<b>УДК:</b>&nbsp;{{$document->udk}}<br>@endisset
                            <hr>
                            @isset($document->bbk)<b>ББК:</b>&nbsp;{{$document->bbk}}<br>@endisset
                            <hr>
                            @isset($document->isbn)<b>ISBN:</b>&nbsp;{{$document->isbn}}<br>@endisset

                            <hr>
                            @isset($document->issn)<b>ISSN:</b>&nbsp;{{$document->issn}}<br>@endisset
                            <hr>
                    @isset($document->annotation)
                        <p>
                            @php
                            //dd($document->annotation);
                            @endphp
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

                    </div>
                </div>


    </div>
@endsection
