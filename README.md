# ArsenalPay: приём платежей

## Version 1.0.1

Тестировалось на версиях OpenCart 1.5.x

## Описание
 - ArsenalPay – удобный и надежный платежный сервис для бизнеса любого размера. Подходит для юрлиц, ИП и самозанятых, зарегистрированных в России.
 - Самые низкие тарифы.
 - Не нужно покупать или арендовать онлайн кассу, мы создали [готовое решение](https://arsenalpay.ru/cashbox.html) для отправки фискальных чеков.
 - Платежный виджет настраивается под цвета вашего сайта
 - Деньги перечисляются на ваш расчетный счет ежедневно за минусом комиссии. Без каких-либо лимитов, минимальных сумм или звёздочек в договоре
 
![картинка](https://arsenalpay.ru/images/1-ArsenalPay-priem-platezhej-na-sajte-besplatnaya-onlajn-kassa.png "Прием платежей на сайте")

## Тарифы
2,6% за успешный платеж. Снижаем комиссию при обороте свыше 1 млн. Подключение и интеграция бесплатно.

Используя ArsenalPay, Вы сможете принимать онлайн платежи при помощи:
 - банковских карт Visa, MasterCard, Maestro и Мир, выпущенных в любом банке мира
 - баланса мобильного телефона операторов МТС, Мегафон, Билайн и Теле2
 - различных электронных кошельков

Платежные инструменты ArsenalPay прошли самую высокую международную сертификацию – в соответствии со максимальным стандартом безопасности данных индустрии платёжных карт PCI DSS.

## Личный кабинет
Один из основных инструментов контроля приема платежей в интернет: статистика и история платежей, фильтрация и удобный поиск, настройки, частичные и полные возвраты, подтверждение двухэтапных (зарезервированных) платежей, выставление счетов, экспорт реестров и многое другое.
![картинка](https://arsenalpay.ru/images/3-ArsenalPay-fiskalnye-cheki-v-lichnom-kabinete.png "Удобный личный кабинет")

Чтобы вам было удобнее, мы в личный кабинет добавили онлайн чеки по каждой транзакции, будь то успешный платеж или отмена покупки. Теперь при оплате фискальный чек отправляется на email вашего клиента, а информация о платеже поступает в налоговую. Все чеки сохраняются в вашем личном кабинете, вы всегда сможете найти, посмотреть или распечатать любой чек.

Теперь вам не только не нужно покупать или арендовать свою онлайн кассу, но и можно пользоваться только одним личным кабинетом для контроля за платежами и онлайн чеками.
![картинка](https://arsenalpay.ru/images/4-ArsenalPay-fiskalnye-cheki-v-vashem-mobilnom.png "Все чеки у вас в мобильном")

## Быстрый старт
Тем кто не хочет заниматься настройкой сайта и хочет максимально оперативно включить прием платежей, мы предоставляем сервис Быстрый старт.

Вы получаете полностью готовое решение для приема платежей, не нужно тратить время на интеграцию и подготовку сайта в соответствие с требованиями международных платежных систем. Полученную личную ссылку размещаете на любой странице вашего сайта и начинаете прием платежей в течение 3 дней.

Нужен только ИНН вашей компании. Онлайн касса бесплатно. Покупать или арендовать кассу не нужно.
![картинка](https://arsenalpay.ru/images/5-ArsenalPay-bystryj-start-platezhej-na-sajte-onlajn-kassa-besplatno.png "Быстрый старт")

## Основные этапы подключения
1. Установите приложение в ваш интернет магазин.
2. [Зарегистрируйтесь](https://arsenalpay.ru/dashboard/register?step=1) у нас в сервисе
3. Вам будет предоставлен личный кабинет, где сразу же получите все необходимые параметры для настройки приложения
4. Сообщите нам URL для callback-уведомлений из настроек вашего приложения, чтобы после успешного платежа в вашем магазине обновлялся статус заказа.
5. Подписываем договор и приступаем к работе.

![картинка](https://arsenalpay.ru/images/6-ArsenalPay-vidzhet-oplaty-v-firmennyx-cvetax-vashego-sajta.png "Виджет оплаты в ваших фирменных цветах")

Подробную инструкцию по установке, настройке и использованию модуля вы можете [скачать тут](https://arsenalpay.ru/instructions/OpenCart_%D0%A1%D0%9C%D0%A1_instruction.pdf).

## УСТАНОВКА
1. Скопируйте файлы из папки **upload** в корень Вашего сайта, сохраняя структуру вложенности папок;
2. Зайдите в администрирование OpenCart и пройдите к **Дополнения > Оплата**;
3. Найдите **Arsenal Pay** в списке методов оплат;
4. Нажмите на **Установить** и затем **Изменить**, чтобы провести настройки платежного модуля.

## НАСТРОЙКА
 - Заполните поля **Уникальный токен** и **Ключ**, присвоенными Вам токеном и ключом для подписи.
 - Вы можете задать IP-адрес, только с которого будут разрешены обратные запросы о совершаемых платежах, в поле **Разрешенный IP-адрес**.
 - Ваш интернет-магазин будет получать уведомления о совершенных платежах. На адрес, указанный в поле **URL для обратного запроса** на подтверждение платежа, от ArsenalPay будет поступать запрос с результатом платежа для фиксирования статусов заказа в системе предприятия. Обратный запрос настроен на адрес: `http(s)://адресВашегоСайта/index.php?route=payment/arsenalpay/ap_callback`
 - При необходимости добавления дополнительного шага с проверкой номера заказа перед проведением платежа, Вы должны заполнить поле **URL для обратного запроса** на проверку номера заказа, на который от ArsenalPay будет поступать запрос на проверку. По умолчанию значение совпадает с **Callback URL**.
 - Проверьте: **Адрес фрейма** должен быть установлен как `https://arsenalpay.ru/payframe/pay.php`
 - Установите **Тип оплаты** как `card` для активации платежей с пластиковых карт или  как `mk` — платежей с аккаунтов мобильных телефонов.
 - Вы можете устанавливать **Режим отображения фрейма**. Значение `1` соответствует отображению фрейма внутри Вашего сайта, иначе пользователь будет перенаправляться напрямую на адрес платежного фрейма.
 - **Параметры отображения iFrame**. Вы можете подгонять ширину, высоту, границу и прокрутку платежного фрейма, задавая соответствующие значения параметров iframe в формате `width='100%' height'500' frameborder='0' scrolling='no'`. За более подробной информацией о параметрах iframe обращайтесь к стандарту html.
 - Вы можете задать **Параметр css** для применения к отображению платежного фрейма, указав url css-файла.
 - Установите статусы заказов после подтверждения платежа, отказа от платежа, неудавшегося платежа и на время ожидания оплаты.
 - Вы можете включать/выключать **Логирование**.
 - Включите модуль, установив **Статус** на **Включено**.
 - Вы можете задать географическую зону, где будет доступен метод оплаты ArsenalPay.
 - Задайте **Порядок сортировки**: укажите порядковый номер ArsenalPay в списке включенных методов оплаты.
 - Закончив, сохраните настройки нажатием на **Сохранить**.

## УДАЛЕНИЕ
1. Зайдите в администрирование OpenCart и пройдите к **Доплнения > Оплата**;
2. Найдите **ArsenalPay** в списке методов оплаты;
2. Нажмите на **Удалить**.

## ИСПОЛЬЗОВАНИЕ
После успешной установки и настройки модуля на сайте появится возможность выбора платежной системы ArsenalPay.
Для оплаты заказа с помощью платежной системы ArsenalPay нужно:

1. Выбрать из каталога товар, который нужно купить.
2. Перейти на страницу оформления заказа (покупки).
3. В разделе "Платежные системы" выбрать платежную систему ArsenalPay.
4. Перейти на страницу подтверждения введенных данных и ввода источника списания средств (мобильный номер, пластиковая карта и т.д.).
5. После ввода данных об источнике платежа, в зависимости от его типа, либо придет СМС о подтверждении платежа, либо покупатель будет перенаправлен на страницу с результатом платежа.


Всегда с радостью ждем ваших писем с предложениями. 

pay@arsenalpay.ru  

[arsenalpay.ru](https://arsenalpay.ru)
