
@extends('layout')

@section('content')


<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-1"></div>

<div class="col-md-10">
<div class="entity_wrapper">
    <div class="entity_title">
        <h1><a href="#">Интернет-приемная</a></h1>
    </div>
    <!-- entity_title -->


    <!-- entity_social -->

    <div class="entity_thumb">
        <img class="img-responsive" src="/assets/images/priemnaya.jpg" alt="feature-top">
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
	специально для этого мы разработали более свободную форму обращений - <a href="#" class="popup_link">обратная связь</a>.
	Чтобы воспользоваться ею, нажмите на кнопку <a href="#" class="popup_link">отправить сообщение</a>.
	После отправки сообщение попадает в отдел информатизации,
	где в кратчайщие сроки рассматривается сотрудниками отдела.
</p>
        <p>
	<strong>
		Прежде чем отправить обращение через Интернет-приемную, рекомендуем Вам
		просмотреть раздел <a href="{{route('faq')}}">Часто задаваемые вопросы</a>. Возможно,
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

<div>
<div style="padding:10pt 0;">Поля отмеченные * обязательны для заполнения</div>
@include('forms.feedbackForm')
</div>


    </div>
    <!-- entity_content -->


</div>
<!--Right Section-->

<div class="col-md-1"></div>
</div>
<!-- row -->

</div>
<!-- container -->

</section>
<!-- Entity Section Wrapper -->
<script src="/assets/js/faajax.js"></script>

<script>

    grecaptcha.ready(function(){

    grecaptcha.execute('6LedE94ZAAAAAOf6iuTtMNxzWxMKX18zub2NWPUg', {action:'/submit'}).then(function(token){



        });

        });
        </script>
@endsection
