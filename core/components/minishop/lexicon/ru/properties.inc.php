<?php

$_lang['ms.action'] = 'Действие сниппета miniShop. Это режим работы основного сниппета магазина.';
$_lang['ms.tplCartOuter'] = 'Чанк таблицы корзины';
$_lang['ms.tplCartRow'] = 'Чанк одного ряда таблицы заказа';
$_lang['ms.tplDeliveryRow'] = 'Чанк одного варианта доставки';
$_lang['ms.tplPaymentRow'] = 'Чанк одного способа оплаты';
$_lang['ms.tplAddrForm'] = 'Чанк формы заказа';
$_lang['ms.tplOrderEmailUser'] = 'Чанк почтового уведомления покупателю';
$_lang['ms.tplOrderEmailManager'] = 'Чанк почтового уведомления менеджеру';
$_lang['ms.tplOrderEmailRow'] = 'Чанк одного заказанного товара';
$_lang['ms.tplSubmitOrderSuccess'] = 'Чанк сообщения об успешном заказе';
$_lang['ms.tplMyOrdersList'] = 'Чанк вывода заказов в личном кабинете';
$_lang['ms.tplPaymentForm'] = 'Чанк формы оплаты заказа';
$_lang['ms.tplMiniCart'] = 'Чанк оформления миникорзины';
$_lang['ms.debug'] = 'Включить отображение ошибок?';
$_lang['ms.userGroups'] = 'Группы для регистрации новых покупателей, через запятую';

$_lang['ms.id'] = 'Идентификатор товара для выборки';
$_lang['ms.tpl'] = 'Чанк оформления результата';
$_lang['ms.limit'] = 'Ограничение выборки';
$_lang['ms.offset'] = 'Пропуск результатов от начала';
$_lang['ms.outputSeparator'] = 'Разделитель результатов';
$_lang['ms.totalVar'] = 'Имя плейсхолдера для количества результатов';
$_lang['ms.sortby'] = 'Порядок сортировки';
$_lang['ms.sortdir'] = 'Направление сортировки';
$_lang['ms.onlyImg'] = 'Выводить только изображения';


$_lang['gr.tpl'] = 'Чанк для оформления русурсов. Если не указан - свойства ресурса будут распечатаны на экране';
$_lang['gr.tplOdd'] = 'Чанк для оформления русурса под номером idx. См. параметр idx';
$_lang['gr.tplFirst'] = 'Чанк для оформления первого ресурса.';
$_lang['gr.tplLast'] = 'Чанк оформления последнего ресурса.';
$_lang['gr.sortby'] = 'Сортировка по полю таблицы, и массиву полей (в формате JSON), например {"publishedon":"ASC","createdon":"DESC"}. По умолчанию - publishedon.';
$_lang['gr.sortbyTVType'] = 'Необязательное указание типа сортировки по ТВ';
$_lang['gr.sortbyAlias'] = 'Псевдоним запроса для сортировки поля. По умолчанию - нет.';
$_lang['gr.sortbyEscaped'] = 'Указывает, нужно ли экранировать поля запроса в БД. По умолчанию - нет.';
$_lang['gr.sortdir'] = 'Направление сортировки, по умолчанию - DESC.';
$_lang['gr.sortdirTV'] = 'Направление сортировки по ТВ, по умолчанию - DESC.';
$_lang['gr.limit'] = 'Ограничение на количество результатов, по умолчанию - 5.';
$_lang['gr.offset'] = 'Пропуск результатов для вывода.';
$_lang['gr.tvFilters'] = 'Список разделенных ТВ параметров и критериев фильрации. Поддерживаются два типа разделителей. Первый разделитель || является логическим OR и основным механизмом групировки. В каждой группе фильтра вы можете указать через запятую список значений. Эти значения могут быть привязаны к конкретному ТВ по имени, например myTV==value, или быть просто указывать, что вы ищите это значение в любом ТВ ресурса. Еще пример: &tvFilters=`filter2==one,filter1==bar%||filter1==foo`. <br />Примечание: фильтрация по ТВ использует оператор LIKE и маску %. <br />И еще примечание: Сниппет ищет точные значения в ТВ параметрах и не обрабатывает их при поиске.';
$_lang['gr.depth'] = 'Глубина поиска от родителей. По умолчанию - 10.';
$_lang['gr.parents'] = 'Не обязательно. Список родителей ресурсов для вывода, через запятую.';
$_lang['gr.includeContent'] = 'Указывает, нужно ли извлекать контент ресурсов. По умолчани - нет.';
$_lang['gr.includeTVs'] = 'Указывает, нужно ли доставать ТВ ресурса. По умолчанию - нет.';
$_lang['gr.includeTVList'] = 'Список для ограничения доставаемых ТВ, через запятую.';
$_lang['gr.showHidden'] = 'Показывать ли ресурсы, скрытые в меню? По умолчанию - нет.';
$_lang['gr.showUnpublished'] = 'Показывать ли неопубликованные ресурсы? По умолчанию - нет.';
$_lang['gr.showDeleted'] = 'Показывать ли удаленные ресурсы? По умолчанию - нет.';
$_lang['gr.resources'] = 'Список ресурсов для включение в результаты, или исключение. ID с начальным минусом исключаются, например: 123,-456 значит обязательно включить в результаты ресурс 123, и не показывать 456.';
$_lang['gr.processTVs'] = 'Указывает, нужно ли проводить рендер ТВ параметров, согласно их типам и настройкам. По умолчанию - нет.';
$_lang['gr.processTVList'] = 'Ограничивает список ТВ для рендера. Обратите внимание, что здесь нельзя указавать ТВ не входящие в includeTVList.';
$_lang['gr.tvPrefix'] = 'Префикс для ТВ параметров в чанке. По умолчанию - tv.';
$_lang['gr.idx'] = 'Начальный порядковый номер обрабатываемого ресурса. Номер каждого следующего ресурса будет увеливаться на 1.';
$_lang['gr.first'] = 'Указывает, ресурс с каким порядковым номером считается первым (см. tplFirst). По умолчанию - 1.';
$_lang['gr.last'] = 'Указывает, ресурс с каким порядковым номером считается последним (см. tplLast). По умолчанию: общее количество ресурсов + first - 1';
$_lang['gr.toPlaceholder'] = 'Если указано, результаты будут выставлены этим плейсхолдером, вместо вывода на экран.';
$_lang['gr.toSeparatePlaceholders'] = 'Если указано, КАЖДЫЙ ресурс будет выставлен как плейсхолдер на странице, с суффиксом в виде его порядкового номера (начиная с 0).';
$_lang['gr.debug'] = 'Если указано, SQL запрос будет записан в системный журнал MODx.';
$_lang['gr.where'] = 'JSON выражение для построения дополнительного параметра WHERE SQL запроса, например: &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`';
$_lang['gr.dbCacheFlag'] = 'Определяет поведение кэширования результатов, если системный параметр MODx cache_db включен. 0|false = не кэшировать; 1 = кэшировать результаты в соответствии с настройкой, любое другое целое число = количество секунд жизни кэша';
$_lang['gr.context'] = 'Список контекстов через запятую, для ограничения вывода ресурсов. По умолчанию - нет, то есть ресурсы выводятся из всех контекстов.';

$_lang['ms.sortbyMS'] = 'Сортировка по полю таблицы MsGood, и массиву полей (в формате JSON), например {"price:>":500,"remains:<":15}';
