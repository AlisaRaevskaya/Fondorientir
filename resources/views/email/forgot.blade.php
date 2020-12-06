{{-- @component('mail::message')

# Уважаемый {{$user->name}}!
Перейти на главную страницу!
@component('mail::button', ['url' => 'http://fondorientir.ru'])
Button Text
@endcomponent

С уважением,<br>
{{ config('app.name') }}
@endcomponent --}}
<h1> Уважаемый {{$user->name}}!</h1>
<p>Для восстановления пароля пройдите по <a href="{{route('reset.password', $user->email)}}">ссылке</a></p>

