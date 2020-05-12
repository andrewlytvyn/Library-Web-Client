<div>

    @foreach($topiclist as $topic)
        {{ $topic->name }}- {{ $topic->card_id }}<br/>
    @endforeach
    <INPUT name='theme_context' size=30 maxlength=100 placeholder="Пошук теми">
        <input type='submit' value='Шукати'  onClick="form_main.method ='post';form_main.action='/topic-list';form_main.mode.value='SearchThemeForm';">
            <table border=0 >
            <tr><td colspan='2'><b>Класифікатори</b></td></tr>

            <tr><td width=15>&nbsp;</td><td><a href='/search' onClick="form_main.method ='post';form_main.action='/search';form_main.theme_path.value='0,1';form_main.mode.value='SearchDocForm';form_main.submit();return false">УДК</a></td></tr></table>
            <INPUT type='hidden' name='theme_cond' value='all_theme'>
                <INPUT type='hidden' name='theme_id' value='0'>

    </div>

