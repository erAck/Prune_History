<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2012 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['PH_AutoPrune_false'] = 'Запретить (по умолчанию)';
$lang['PH_AutoPrune_true'] = 'Разрешить';
$lang['PH_Dump_NOK'] = 'Резервная копия не создана!';
$lang['PH_Dump_OK'] = 'Резервная копия создана успешно!';
$lang['PH_No_Backup_File'] = 'Нет резервной копии лоя восстановления!';
$lang['PH_Restoration_NOK'] = 'Ошибка восстановления!';
$lang['PH_Restoration_OK'] = 'Восстановление успешно завершено!';
$lang['PH_Restore_File'] = 'Восстановить историю';
$lang['PH_AutoPrune_title'] = 'Автоматическая обрезка';
$lang['PH_AutoPrune_title_d'] = 'Если вы включите автоматическую обрезку, она будет запускаться автоматически при каждом входе пользователя в галерею (в том числе администратора или веб-мастера) и на основе настроек. <br> <br><b style=&quot;color: red;&quot;>Используйте с осторожностью! Очищенные данные не восстанавливаются!</b>';
$lang['PH_AutoRange_title'] = 'хранить историю до:';
$lang['PH_AutoRange_title_d'] = 'Пожалуйста, настройте критерий <b>сохранения</b> истории для автоматической обрезки. Возможно несколько вариантов:<br><br>
- Хранить Х дней <br>
- Хранить Х месяцев <br>
- Хранить Х лет <br> <br>
Например: Если вы хотите сохранить историю до 3 месяцев, вы можете настроить три месяца или 91 день.<br><br>
Примечание: автоматическая обрезка не влияет на общую историческую статистику.';
$lang['PH_Bad_version_backup'] = 'Неправильная версия плагина! Вы пытаетесь восстановить резервную копию, которая устарела или была создана с помощью более старой версии плагина.';
$lang['PH_Dump_Download'] = 'Для скачивания файла резервной копии выберите этот пункт:';
$lang['PH_ManualPrune_title'] = 'Ручная обрезка';
$lang['PH_ManualPrune_title_d'] = 'Эта функция позволяет удалять историю записи, основываясь на диапазоне дат. Выберите Дату начала и Дату конца и запустите.<br><br>
<b style=&quot;color: red;&quot;>Внимание: исторические данные будут безвозвратно удалены!</b> Вы можете создать резевную копию и восстановить таблицы с историей, с помощью функции в правой части <br><br>
Примечание: автоматическая обрезка не влияет на общую историческую статистику.';
$lang['PH_Prune'] = 'Запустить ручную обрезку';
$lang['PH_Prune_Done'] = 'Ручная обрезка выполнена!';
$lang['PH_Prune_Error'] = 'Ощибка Ручная обрезки! Проверьте введенный диапазон дат.';
$lang['PH_Save'] = 'История резервного копирования';
$lang['PH_Save_Title'] = 'Безопасная резерная копия';
$lang['PH_save_config'] = 'Настройки сохранены';
$lang['PH_submit'] = 'Сохранить настройки';
$lang['Start_Date'] = 'Дата начала';
$lang['range']['1'] = 'День(Дней)';
$lang['range']['2'] = 'Месяц(ев)';
$lang['range']['3'] = 'Год(Лет)';
$lang['PH_Restore'] = 'Восстановление резервной копии таблицы с историей. <br> Учитываются только файлы, сохраненные на сервере .';
$lang['PH_Save_Title_d'] = 'Желательно сохранить историю таблицу перед началом обрезки, потому что обрезка является окончательным и необратимым действием. По умолчанию таблица сохраняется в файл на сервере и может быть восстановлена оттуда. <br> <br>
Но это также можно скачать файл резервной копии, чтобы хранить его вне вашей галереи. В этом случае, восстановление должно быть сделано с помощью вашего менеджера баз данных (обычно PhpMyAdmin).';
$lang['PH_Support'] = 'Официальная поддержка этого плагина есть только в этих темах Piwigo форуме: <br>
<a href="http://piwigo.org/forum/viewtopic.php?id=19418" onclick="window.open(this.href);return false;">English forum - http://piwigo.org/forum/viewtopic.php?id=19418</a>';
?>