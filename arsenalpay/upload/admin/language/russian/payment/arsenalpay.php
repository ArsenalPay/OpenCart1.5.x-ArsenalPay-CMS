<?php
// Heading
$_['heading_title']      = 'Arsenal Pay';

// Text 
$_['text_payment']       = 'Оплата';
$_['text_success']       = 'Настройки Arsenal Pay успешно обновлены!';
$_['text_mk']            = 'mk';
$_['text_card']          = 'card';

// Entry
$_['entry_ap_token'] = 'Уникальный токен';
//$_['entry_other_code'] = 'Другой код';
$_['entry_key'] = 'Ключ';
$_['entry_ip'] = 'Разрешенный IP-адрес';
$_['entry_callback_url'] = 'URL для обратного запроса';
$_['entry_check_url'] = 'URL для обратного запроса';
$_['entry_frame_url'] = 'Адрес фрейма';
$_['entry_frame_mode'] = 'Режим отображения платежной страницы';
$_['entry_src'] = 'Тип оплаты';
$_['entry_css'] = 'Параметр css';
$_['entry_frame_params'] = 'Параметры отображения iFrame';
$_['entry_debug'] = 'Логирование';
$_['entry_geo_zone'] = 'Географическая зона';
$_['entry_status'] = 'Статус';
$_['entry_sort_order'] = 'Порядок сортировки';

$_['entry_completed_status'] = 'Статус заказа после подтверждения платежа';
$_['entry_canceled_status'] = 'Статус заказа после отказа от платежа';
$_['entry_failed_status'] = 'Статус заказа после неудавшегося платежа';
$_['entry_waiting_status']='Статус заказа на время ожидания оплаты';

// Help
$_['help_ap_token'] = 'Присваивается предприятию для доступа к платежному фрейму.';
//$_['help_other_code'] = 'Дополнительный номер или код, необходимый для оплаты. Недоступен для редактирования абоненту и не отображается в случае, если задан.';
$_['help_key'] = 'Для проверки подписи обратных запросов.';
$_['help_ip'] = 'Только с которого будут разрешены обратные запросы о подтверждении платежей от ArsenalPay.';
$_['help_callback_url'] = 'На подтверждение платежа.';
$_['help_check_url'] = 'На проверку номера заказа.';
$_['help_frame_url'] = 'URL-адрес фрейма';
$_['help_src'] = '<b>mk</b> - оплата с мобильного телефона (мобильная коммерция),</br><b>card</b> - оплата с пластиковой карты (интернет эквайринг)';
$_['help_frame_mode'] = '<b>1</b> - отображать внутри iFrame,</br><b>0</b> - на всю страницу.';
$_['help_css'] = 'Адрес (URL) CSS файла.';
$_['help_frame_params'] = '';
$_['help_debug'] = '';

// Error
$_['error_permission'] = 'Ошибка! У вас нет прав редактировать эти настройки.';
$_['error_ap_token'] = 'Поле <b>Уникальный токен</b> обязательно для заполнения.';
$_['error_key'] = 'Поле <b>Ключ</b> обязательно для заполнения.';
$_['error_frame_url'] = 'Поле <b>Адрес фрейма</b> не может быть пусто.';
