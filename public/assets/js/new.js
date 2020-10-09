

/* Функция отображает модальное окно автоматически после загрузки страницы через одну секунду */
$( document ).ready(function() {
	setTimeout(function() {
        /* Подключение vk виджета с группой*/
        VK.Widgets.Group("vk_groups_popup", {mode: 0, width: "220", height: "400"}, 144839492);

        /* Вызываем модальное окно */
        $('#popup_vk').bPopup();
	}, 1000);
});

function bclose() {
	$("#popup_vk").bPopup().close();
	return false;
}

/* Функция показывает модальное окно по нажатию на кнопку */
function bopen() {
	$('#popup_vk').bPopup();
	return false;
}
