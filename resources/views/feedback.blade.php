
@extends('layout')

@section('content')


<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="entity_wrapper">
    <div class="entity_title">
        <h1><a href="#">Интернет-приемная</a></h1>
    </div>
    <!-- entity_title -->


    <!-- entity_social -->

    <div class="entity_thumb">
        <img class="img-responsive" src="assets/images/priemnaya.jpg" alt="feature-top">
    </div>
    <!-- entity_thumb -->



    <div class="entity_content">
    <p>
	Уважаемые посетители!
</p>
<p>
	Чтобы получить оперативный и квалифицированный ответ на Ваш вопрос,
	обязательно заполните все поля формы. Лаконично и грамотно сформулируйте
	текст Вашего обращения.
</p>
<p>
	В случае если Ваш вопрос относится к компетенции нашего учреждения, то Ваше обращение будет рассмотрено в течение
	15 дней с момента его регистрации.
</p>
<p>
	Если Вы хотите отправить свое мнение по поводу работы нашего сайта, то
	специально для этого мы разработали более свободную форму обращений - <a href="#" onclick="showFeedbackPanel(); return false;">обратная связь</a>.
	Чтобы воспользоваться ею, нажмите на кнопку <a href="#" onclick="showFeedbackPanel(); return false;">отправить сообщение</a>.
	После отправки сообщение попадает в отдел информатизации,
	где в кратчайщие сроки рассматривается сотрудниками отдела.
</p>
        <p>
	<strong>
		Прежде чем отправить обращение через Интернет-приемную, рекомендуем Вам
		просмотреть раздел <a href="/blog/vopros-otvet/">Часто задаваемые вопросы</a>. Возможно,
		Вы сразу найдете информацию на интересующую Вас тему.
	</strong>
</p>

<div class="feedback-law">
	ВНИМАНИЕ! В случае, если в письменном обращении не указаны фамилия гражданина,
	направившего обращение, и почтовый адрес, по которому должен быть направлен ответ,
	ответ на обращение не дается.
	(<a title="Федеральный закон РФ от 2 мая 2006г. № 59-ФЗ 'О порядке рассмотрения
	обращений граждан Российской Федерации'" href="{{route('feedback.fzakon')}}">Федеральный закон РФ от 2 мая 2006г. № 59-ФЗ "О порядке рассмотрения обращений граждан Российской Федерации"</a>)
</div>
<form id="feedback_static_form" class="field" style="width: 525px">

	<p>Поля, отмеченные <span class="red">*</span> - обязательны для заполнения.</p>

	<table class="fiedls" style="width:520px;"><tbody>
		<tr>
			<td><label>Фамилия</label> <label class="red">*</label></td>
			<td><input type="text" id="txt-feedback-fam" style="width: 300px" /></td>
		</tr>
		<tr>
			<td><label>Имя</label> <label class="red">*</label></td>
			<td><input type="text" id="txt-feedback-im" style="width: 300px" /></td>
		</tr>
		<tr>
			<td><label>Отчество</label> <label class="red">*</label></td>
			<td><input type="text" id="txt-feedback-otch" style="width: 300px" /></td>
		</tr>
		<tr>
			<td><label>Почтовый адрес</label> <label class="red">*</label></td>
			<td><input type="text" id="txt-feedback-adress" style="width: 300px" /></td>
		</tr>
		<tr>
			<td><label>Место работы или учебы&nbsp;</label></td>
			<td><input type="text" id="txt-feedback-work" style="width: 300px" /></td>
		</tr>
		<tr>
			<td><label>Контактный телефон</label></td>
			<td><input type="text" id="txt-feedback-phone" style="width: 300px" /></td>
		</tr>
		<tr>
			<td><label>Электронная почта</label></td>
			<td><input type="text" id="txt-feedback-email" value="" style="width: 300px" /></td>
		</tr>
	</tbody></table>

	<label>Ваш вопрос</label> <label class="red">*</label><br />
	<textarea id="txt-feedback-msg" style="width: 500px; height: 200px"></textarea>

	<p>
		<label for="txt-feedback-chemail">
			Я хочу получить ответ по электронной почте <input id="txt-feedback-chemail" type="checkbox" checked="checked" />
		</label>
		<br />
		<label for="txt-feedback-chpub">
			Я не против, чтобы мой вопрос был опубликован <input id="txt-feedback-chpub" checked="checked" type="checkbox" />
		</label>
	</p>

	<div class="buttons center send-button">
		<input class="btn-send" onclick="feedBackSendMessage(); return false;" type="button" value="Отправить" class="btn" />
	</div>
</form>
    </div>
    <!-- entity_content -->


</div>
<!--Right Section-->

</div>
<!-- row -->

</div>
<!-- container -->

</section>
<!-- Entity Section Wrapper -->
@endsection
