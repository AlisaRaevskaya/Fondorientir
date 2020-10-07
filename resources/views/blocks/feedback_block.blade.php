<!--[*]
[*]-->
<div class="box" id="feedback-columnblock">
	<h3>Обратная связь</h3>
	<p>Ваше мнение имеет значение!</p>
	<p><a href="#" onclick="showFeedbackPanel(); return false;">Отправьте нам</a>
	свое мнение по поводу работы нашего сайта и мы обязательно его рассмотрим.
	</p>
	<p class="feedback-col-button">
		<a href="#" onclick="showFeedbackPanel(); return false;">Отправить сообщение</a>
	</p>
</div>
<!--
<script language='JavaScript' type='text/javascript' charset='utf-8'>
	function showFeedbackPanel(){
		Brick.ff('sys', 'wait', function(){
			var Dom = YAHOO.util.Dom;
			var lw = new Brick.widget.LayWait('feedback-columnblock');
			Brick.ff('feedback', 'form', function(){
				lw.hide();
				Brick.mod.feedback.API.showNewMessagePanel();
			});
		});
		return false;
	};
</script> -->
