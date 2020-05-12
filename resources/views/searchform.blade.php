@extends('layouts.app')

@section('content')
<div class='container main'>

    <FORM id='SearchForm' action='/search' class='form-horizontal' role='form' method='post' name='form_main' autocomplete='off'>
        @csrf
        <input name='mode'       type='text' value='' hidden>
        <input name='ext'        type='text' value='no' hidden>
        <input name='lang'       type='text' value='ua' hidden>
        <input name='theme_path' type='text' value='0' hidden>




        <!-- ****************** 	Query fields	******************* -->


        <div class='row' style='padding-top: 20px;'>
            <div class='col-md-6 col-lg-6'>
                <div class='form-group row'>
                    <div class='col-12 col-lg-8'>
                        <input type='search' name='docname_fld' class='form-control form-control-sm' placeholder='Назва документа' value=''>
                    </div>
                    <div class='col-12 col-lg-4'>
                        <SELECT class='form-control form-control-sm' name='docname_cond' >
                            <OPTION value='containtext'>Містить текст</OPTION>
                            <OPTION value='containword' selected>Містить слова</OPTION>
                            <OPTION value='start'>Починається з</OPTION>
                        </SELECT>
                    </div>
                </div>


                <div class='form-group row'>
                    <div class='col-12 col-lg-8'>
                        <INPUT id='search-box' type='search' name='author_fld' class='form-control form-control-sm' placeholder='Автор' value='' autocomplete='off' maxlength=250>
                    </div>
                    <div class='col-12 col-lg-4'>
                        <SELECT class='form-control form-control-sm' name='autorname_cond' >
                            <OPTION value='containtext'>Містить текст</OPTION>
                            <OPTION value='containword' >Містить слова</OPTION>
                            <OPTION value='start'>Починається з</OPTION>
                        </SELECT></div>

                </div>
                <div class='form-group row'>
                    <label  class='col-sm-4 col-md-6 col-form-label col-form-label-sm'>Рік видання</label>                <div class='col-sm-2 col-md-3'>
                        <INPUT name='year_fld1' type='text' class="form-control form-control-sm" placeholder='1356' size='4'>

                    </div>
                    <div class='col-sm-2 col-md-3 '>
                        <INPUT name='year_fld2' type='text' class="form-control form-control-sm" placeholder="2020" size="4">
                    </div>
                </div>


                <div class='form-group row'>
                    <label  class='col-sm-3 col-md-4 col-form-label col-form-label-sm'>
                        Мова</label><div class='col-sm-3 col-md-8'>
                        <SELECT name='lang_list[]' class='form-control form-control-sm' multiple>
                            <OPTION value='100'>Англійська</OPTION>
                            <OPTION value='330'>Іспанська</OPTION>
                            <OPTION value='128'>Німецька</OPTION>
                            <OPTION value='300'>Російська</OPTION>
                            <OPTION value='375'>Українська</OPTION>
                            <OPTION value='115'>Французька</OPTION>
                        </SELECT>
                    </div>

                </div>

                <div class='form-group row'>
                    <label  class='col-sm-3 col-md-4 col-form-label col-form-label-sm'>Вид документа</label>
                    <div class='col-sm-3 col-md-8'>
                        <SELECT name='doctype_list' class='form-control form-control-sm' >
                            <OPTION value='0' selected>Без обмежень</OPTION>
                            <OPTION value='1'>Книга</OPTION>
                            <OPTION value='24'>Методичні рекомендації</OPTION>
                            <OPTION value='21'>Відеокасета</OPTION>
                            <OPTION value='19'>Дисертація</OPTION>
                            <OPTION value='22'>Брошура</OPTION>
                            <OPTION value='18'>Автореферат</OPTION>
                            <OPTION value='17'>Журнал</OPTION>
                            <OPTION value='14'>Номер журналу</OPTION>
                            <OPTION value='13'>Газета</OPTION>
                            <OPTION value='20'>Електронний ресурс</OPTION>
                            <OPTION value='16'>Стаття періодики</OPTION>
                            <OPTION value='15'>Номер газети</OPTION>
                            <OPTION value='8'>Складова частина документа</OPTION>
                            <OPTION value='7'>Tехнічний документ</OPTION>
                            <OPTION value='6'>Серіальні видання</OPTION>
                        </SELECT>
                    </div>
                </div>
                <div class='form-group row'>

                    <div class='col-3 offset-sm-4'>
                        <label class='btn btn-secondary btn-sm'>
                            <input name='el_copy' type='checkbox' autocomplete='off'> Електронна копія
                        </label>
                    </div>
                </div>



                <div class='form-group row'>
                    <div class='offset-sm-4 col-sm-9'>
                        <button type='submit' class='btn btn-xs btn-primary' onClick='form_main.mode.value="booklist";'>Вибрати</button>
                        <input	type='reset'  class='btn btn-xs btn-secondary' value='Очистити' role='button'>
                    </div>

                </div>


            </div>
            <!-- <x-topic-list class="col-md-5 col-lg-6"/>-->

        </div>
        <a href='/search' role='button' class='btn btn-sm btn-secondary' id='setExt'>Розширений перелік полів</a>

        <INPUT type="hidden" name="page" value="1">

    </FORM>
</div>



<!-- Modal -->
<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Повідомити про помилку</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <textarea id="text" class="form-control" aria-label="With textarea"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
                <button type="button" id="report" class="btn btn-primary">Повідомити</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
@endsection

