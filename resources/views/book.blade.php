@extends('layouts.app')

@section('content')
    <div class="container">


                <div class="card">
                    <div class="card-header">{{$document->name}}</div>

                    <div class="card-body">
                        <b>Вид документа:</b>&nbsp;{{$document->doc_type}}<br>

                        <b>Обсяг:</b>&nbsp;С.4-7.<br>


                        PrintField( Translate("PublYear"), $PublYear, $FieldLine );<br>
                        PrintField( Translate("PublPlace"), $PublPlace, $FieldLine );<br>
                        <hr>
                        PrintField( Translate("Publisher"), $Publisher, $FieldLine );<br>
                        <hr>

                        <b>Автор:</b>&nbsp;{{$document->author}}&nbsp;<br>
                        PrintField( Translate("AuthorsMark"), $AuthorMark, $FieldLine );<br>
                        <b>Вид автора:</b>&nbsp;{{$document->author_type}}<br><br>

                        <b>Мова:</b>&nbsp;{{$document->lang_kod}}&nbsp;{{$document->lang}}&nbsp;<br>
                        PrintField( SelectWord($Language, "Обсяг", "Объём", "Volume"), $Size, $FieldLine );<br>


                        PrintField( SelectWord($Language, "Шифр", "Шифр", "Cipher"), $Cipher, $FieldLine );<br>
                        PrintLine($FieldLine);<br>
                        PrintField( SelectWord($Language, "УДК", "УДК", "UDC"), $UDC, $FieldLine );<br>
                        PrintLine($FieldLine);<br>
                        PrintField( SelectWord($Language, "ББК", "ББК", "BBC"), $BBC, $FieldLine );<br>
                        PrintLine($FieldLine);<br>
                        PrintField( "ISBN", $ISBN, $FieldLine );<br>
                        PrintLine($FieldLine);<br>
                        PrintField( "ISSN", $ISSN, $FieldLine );<br>
                        PrintLine($FieldLine);<br>

                    </div>
                </div>


    </div>
@endsection
