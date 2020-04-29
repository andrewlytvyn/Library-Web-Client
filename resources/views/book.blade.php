@extends('layouts.app')

@section('content')
    <div class="container">


                <div class="card">
                    <div class="card-header">{{$document->name}}</div>

                    <div class="card-body">

                            <b>Вид документа:</b>&nbsp;{{$document->doc_type}}<br>




                            <b>Рік публікації:</b> {{$document->publ_year}}<br>
                            <b>Місце публікації:</b> {{$document->publ_place}}<br>

                            <hr>
                            <b>Publisher:</b> {{$document->publisher}}<br><br>
                            <hr>

                            <b>Автор:</b>&nbsp;{{$document->author}}&nbsp;<br>
                            <b>Авторський знак:</b>&nbsp;{{$document->author_mark}}&nbsp;<br>
                            <b>Вид автора:</b>&nbsp;{{$document->author_type}}<br>

                            <b>Мова:</b>&nbsp;{{$document->lang_kod}}&nbsp;{{$document->lang}}&nbsp;<br>
                            <b>Обсяг:</b>&nbsp;{{$document->sizem}}<br>



                            <b>Шифр:</b>&nbsp;{{$document->cipher}}<br>
                            <hr>
                            <b>УДК:</b>&nbsp;{{$document->udk}}<br>
                            <hr>
                            <b>ББК:</b>&nbsp;{{$document->bbk}}<br>
                            <hr>
                            <b>ISBN:</b>&nbsp;{{$document->isbn}}<br>

                            <hr>
                            <b>ISSN:</b>&nbsp;{{$document->issn}}<br>
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

                    </div>
                </div>


    </div>
@endsection
