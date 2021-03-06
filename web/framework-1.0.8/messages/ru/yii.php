<?php
/**
 * Message translations.
 *
 * This file is automatically generated by 'yiic message' command.
 * It contains the localizable messages extracted from source code.
 * You may modify this file by translating the extracted messages.
 *
 * Each array element represents the translation (value) of a message (key).
 * If the value is empty, the message is considered as not translated.
 * Messages that no longer need translation will have their translations
 * enclosed between a pair of '@@' marks.
 *
 * NOTE, this file must be saved in UTF-8 encoding.
 *
 * @version $Id: $
 */
return array (
  '&lt; Previous' => '&lt; Предыдущая',
  '&lt;&lt; First' => '&lt;&lt; Первая',
  'Go to page: ' => 'Перейти к странице: ',
  'Last &gt;&gt;' => 'Последняя &gt;&gt;',
  'Next &gt;' => 'Следующая &gt;',
  'The asset "{asset}" to be published does not exist.' => 'Необходимый для отображения asset "{asset}" не существует.',
  'The module path "{path}" is not a valid directory.' => 'Путь модуля "{path}" не является правильной директорией.',
  'Unable to count records with composite primary keys. Please explicitly specify the SELECT option in the query criteria.' => 'Невозможно посчитать записи с составными основными ключами. Явно укажите опции для SELECT в критерии запроса.',
  'Unable to resolve the request "{route}".' => 'Невозможно обработать запрос "{route}".',
  '{class} does not have a method named "{name}".' => '{class} не содержит метода "{name}".',
  '{class} does not have attribute "{attribute}".' => '{class} не содержит атрибута "{attribute}".',
  '{class} does not have relation "{name}".' => '{class} не содержит отношения "{name}".',
  '{class} does not support fetching all table names.' => '{class} не поддерживает выборку имён всех таблиц.',
  '"{path}" is not a valid directory.' => '"{path}" не является правильной директорией.',
  'Active Record requires a "db" CDbConnection application component.' => 'ActiveRecord требует компонент приложения "db" CDbConnection.',
  'Active record "{class}" has an invalid configuration for relation "{relation}". It must specify the relation type, the related active record class and the foreign key.' => 'Отношение "{relation}" класса Active record "{class}" сконфигурировано не верно. Вы дожны указать тип отношения, связанный отношением класс active record и внешний ключ.',
  'Active record "{class}" is trying to select an invalid column "{column}". Note, the column must exist in the table or be an expression with alias.' => 'ActiveRecord "{class}" пытается выбрать недопустимый столбец "{column}". Примечание: столбец должен существовать в таблице или являться выражением с алиасом.',
  'Alias "{alias}" is invalid. Make sure it points to an existing directory or file.' => 'Неправильный алиас "{alias}". Убедитесь, что он указывает на существующую директорию или файл.',
  'Application base path "{path}" is not a valid directory.' => '',
  'Application runtime path "{path}" is not valid. Please make sure it is a directory writable by the Web server process.' => '',
  'Authorization item "{item}" has already been assigned to user "{user}".' => '',
  'CApcCache requires PHP apc extension to be loaded.' => 'CApcCache требует загруженного расширения PHP APC.',
  'CAssetManager.basePath "{path}" is invalid. Please make sure the directory exists and is writable by the Web server process.' => 'CAssetManager.basePath "{path}" не верен. Убедитесь, что директория существует и доступна для записи пользователю, под которым запущен веб-сервер.',
  'CCacheHttpSession.cacheID is invalid. Please make sure "{id}" refers to a valid cache application component.' => '',
  'CCaptchaValidator.action "{id}" is invalid. Unable to find such an action in the current controller.' => '',
  'CDbAuthManager.connectionID "{id}" is invalid. Please make sure it refers to the ID of a CDbConnection application component.' => '',
  'CDbCache.connectionID "{id}" is invalid. Please make sure it refers to the ID of a CDbConnection application component.' => '',
  'CDbCacheDependency.sql cannot be empty.' => '',
  'CDbCommand failed to execute the SQL statement: {error}' => '',
  'CDbCommand failed to prepare the SQL statement: {error}' => '',
  'CDbConnection does not support reading schema for {driver} database.' => '',
  'CDbConnection failed to open the DB connection: {error}' => '',
  'CDbConnection is inactive and cannot perform any DB operations.' => '',
  'CDbConnection.connectionString cannot be empty.' => '',
  'CDbDataReader cannot rewind. It is a forward-only reader.' => '',
  'CDbHttpSession.connectionID "{id}" is invalid. Please make sure it refers to the ID of a CDbConnection application component.' => '',
  'CDbLogRoute requires database table "{table}" to store log messages.' => '',
  'CDbLogRoute.connectionID "{id}" does not point to a valid CDbConnection application component.' => '',
  'CDbMessageSource.connectionID is invalid. Please make sure "{id}" refers to a valid database application component.' => '',
  'CDbTransaction is inactive and cannot perform commit or roll back operations.' => '',
  'CDirectoryCacheDependency.directory cannot be empty.' => '',
  'CFileCacheDependency.fileName cannot be empty.' => '',
  'CFileLogRoute.logPath "{path}" does not point to a valid directory. Make sure the directory exists and is writable by the Web server process.' => '',
  'CFilterChain can only take objects implementing the IFilter interface.' => '',
  'CFlexWidget.baseUrl cannot be empty.' => 'CFlexWidget.baseUrl не должно быть пустым.',
  'CFlexWidget.name cannot be empty.' => 'CFlexWidget.name не должно быть пустым.',
  'CGlobalStateCacheDependency.stateName cannot be empty.' => 'CGlobalStateCacheDependency.stateName не должно быть пустым.',
  'CHttpCookieCollection can only hold CHttpCookie objects.' => 'CHttpCookieCollection должно содержать только объекты типа CHttpCookie.',
  'CHttpRequest is unable to determine the entry script URL.' => '',
  'CHttpRequest is unable to determine the path info of the request.' => '',
  'CHttpRequest is unable to determine the request URI.' => '',
  'CHttpSession.cookieMode can only be "none", "allow" or "only".' => 'CHttpSession.cookieMode должно иметь значения "none", "allow" или "only".',
  'CHttpSession.gcProbability "{value}" is invalid. It must be an integer between 0 and 100.' => '',
  'CHttpSession.savePath "{path}" is not a valid directory.' => '',
  'CMemCache requires PHP memcache extension to be loaded.' => 'CMemCache требует расширения PHP memcache.',
  'CMemCache server configuration must be an array.' => 'Конфигурация сервера CMemCache должна быть массивом.',
  'CMemCache server configuration must have "host" value.' => 'Конфигурация сервера CMemCache должна содержать значение "host".',
  'CMultiFileUpload.name is required.' => 'CMultiFileUpload.name должно быть заполнено.',
  'CProfileLogRoute found a mismatching code block "{token}". Make sure the calls to Yii::beginProfile() and Yii::endProfile() be properly nested.' => '',
  'CProfileLogRoute.report "{report}" is invalid. Valid values include "summary" and "callstack".' => '',
  'CSecurityManager requires PHP mcrypt extension to be loaded in order to use data encryption feature.' => '',
  'CSecurityManager.encryptionKey cannot be empty.' => 'CSecurityManager.encryptionKey не должно быть пустым.',
  'CSecurityManager.validation must be either "MD5" or "SHA1".' => 'CSecurityManager.validation должно иметь значения "MD5" или "SHA1".',
  'CSecurityManager.validationKey cannot be empty.' => 'CSecurityManager.validationKey не должно быть пустым.',
  'CTypedList<{type}> can only hold objects of {type} class.' => '',
  'CUrlManager.UrlFormat must be either "path" or "get".' => '',
  'CXCache requires PHP XCache extension to be loaded.' => '',
  'Cache table "{tableName}" does not exist.' => '',
  'Cannot add "{child}" as a child of "{name}". A loop has been detected.' => '',
  'Cannot add "{child}" as a child of "{parent}". A loop has been detected.' => '',
  'Cannot add "{name}" as a child of itself.' => '',
  'Cannot add an item of type "{child}" to an item of type "{parent}".' => '',
  'Either "{parent}" or "{child}" does not exist.' => '',
  'Error: Table "{table}" does not have a primary key.' => '',
  'Error: Table "{table}" has a composite primary key which is not supported by crud command.' => '',
  'Event "{class}.{event}" is attached with an invalid handler "{handler}".' => '',
  'Event "{class}.{event}" is not defined.' => '',
  'Failed to write the uploaded file "{file}" to disk.' => 'Не удалось записать загруженный файл "{file}" на диск.',
  'File upload was stopped by extension.' => '',
  'Filter "{filter}" is invalid. Controller "{class}" does have the filter method "filter{filter}".' => '',
  'Get a new code' => 'Получить новый код',
  'Invalid MO file revision: {revision}.' => '',
  'Invalid MO file: {file} (magic: {magic}).' => '',
  'Invalid enumerable value "{value}". Please make sure it is among ({enum}).' => '',
  'List data must be an array or an object implementing Traversable.' => '',
  'List index "{index}" is out of bound.' => '',
  'Login Required' => 'Необходима авторизация',
  'Map data must be an array or an object implementing Traversable.' => '',
  'Missing the temporary folder to store the uploaded file "{file}".' => '',
  'No columns are being updated for table "{table}".' => '',
  'No counter columns are being updated for table "{table}".' => '',
  'Object configuration must be an array containing a "class" element.' => '',
  'Please fix the following input errors:' => '',
  'Property "{class}.{property}" is not defined.' => '',
  'Property "{class}.{property}" is read only.' => '',
  'Queue data must be an array or an object implementing Traversable.' => '',
  'Relation "{name}" is not defined in active record class "{class}".' => '',
  'Stack data must be an array or an object implementing Traversable.' => '',
  'Table "{table}" does not have a column named "{column}".' => '',
  'Table "{table}" does not have a primary key defined.' => '',
  'The "filter" property must be specified with a valid callback.' => '',
  'The "pattern" property must be specified with a valid regular expression.' => '',
  'The CSRF token could not be verified.' => '',
  'The URL pattern "{pattern}" for route "{route}" is not a valid regular expression.' => '',
  'The active record cannot be deleted because it is new.' => '',
  'The active record cannot be inserted to database because it is not new.' => '',
  'The active record cannot be updated because it is new.' => '',
  'The column "{column}" is not a foreign key in table "{table}".' => '',
  'The command path "{path}" is not a valid directory.' => '',
  'The controller path "{path}" is not a valid directory.' => '',
  'The file "{file}" cannot be uploaded. Only files with these extensions are allowed: {extensions}.' => '',
  'The file "{file}" is too large. Its size cannot exceed {limit} bytes.' => '',
  'The file "{file}" is too small. Its size cannot be smaller than {limit} bytes.' => '',
  'The file "{file}" was only partially uploaded.' => '',
  'The first element in a filter configuration must be the filter class.' => '',
  'The item "{name}" does not exist.' => '',
  'The item "{parent}" already has a child "{child}".' => '',
  'The layout path "{path}" is not a valid directory.' => '',
  'The list is read only.' => '',
  'The map is read only.' => '',
  'The pattern for 12 hour format must be "h" or "hh".' => '',
  'The pattern for 24 hour format must be "H" or "HH".' => '',
  'The pattern for AM/PM marker must be "a".' => '',
  'The pattern for day in month must be "F".' => '',
  'The pattern for day in year must be "D", "DD" or "DDD".' => '',
  'The pattern for day of the month must be "d" or "dd".' => '',
  'The pattern for day of the week must be "E", "EE", "EEE", "EEEE" or "EEEEE".' => '',
  'The pattern for era must be "G", "GG", "GGG", "GGGG" or "GGGGG".' => '',
  'The pattern for hour in AM/PM must be "K" or "KK".' => '',
  'The pattern for hour in day must be "k" or "kk".' => '',
  'The pattern for minutes must be "m" or "mm".' => '',
  'The pattern for month must be "M", "MM", "MMM", or "MMMM".' => '',
  'The pattern for seconds must be "s" or "ss".' => '',
  'The pattern for time zone must be "z" or "v".' => '',
  'The pattern for week in month must be "W".' => '',
  'The pattern for week in year must be "w".' => '',
  'The queue is empty.' => 'Очередь пуста.',
  'The relation "{relation}" in active record class "{class}" is not specified correctly: the join table "{joinTable}" given in the foreign key cannot be found in the database.' => '',
  'The relation "{relation}" in active record class "{class}" is specified with an incomplete foreign key. The foreign key must consist of columns referencing both joining tables.' => '',
  'The relation "{relation}" in active record class "{class}" is specified with an invalid foreign key "{key}". The foreign key does not point to either joining table.' => '',
  'The relation "{relation}" in active record class "{class}" is specified with an invalid foreign key. The format of the foreign key must be "joinTable(fk1,fk2,...)".' => '',
  'The requested view "{name}" is not found.' => 'Запрошенное представление "{view}" не найдено.',
  'The stack is empty.' => 'Стэк пуст.',
  'The system is unable to find the requested action "{action}".' => '',
  'The system view path "{path}" is not a valid directory.' => '',
  'The table "{table}" for active record class "{class}" cannot be found in the database.' => '',
  'The value for the primary key "{key}" is not supplied when querying the table "{table}".' => '',
  'The verification code is incorrect.' => 'Неправильный код проверки.',
  'The view path "{path}" is not a valid directory.' => 'Неправильный путь представления "{path}".',
  'Theme directory "{directory}" does not exist.' => 'Директория темы "{directory}" не существует.',
  'This content requires the <a href="http://www.adobe.com/go/getflash/">Adobe Flash Player</a>.' => '',
  'Unable to add an item whose name is the same as an existing item.' => 'Невозможно добавить элемент с уже существующим именем.',
  'Unable to change the item name. The name "{name}" is already used by another item.' => '',
  'Unable to create application state file "{file}". Make sure the directory containing the file exists and is writable by the Web server process.' => '',
  'Unable to lock file "{file}" for reading.' => 'Невозможно заблокировать файл "{file}" для чтения.',
  'Unable to lock file "{file}" for writing.' => 'Невозможно заблокировать файл "{file}" для записи.',
  'Unable to read file "{file}".' => 'Невозможно прочитать файл "{file}".',
  'Unable to replay the action "{object}.{method}". The method does not exist.' => '',
  'Unable to write file "{file}".' => 'Невозможно записать в файл "{file}".',
  'Unknown authorization item "{name}".' => '',
  //TODO: нет ли синонима «локаль»?
  'Unrecognized locale "{locale}".' => 'Неизвестная локаль "{locale}".',
  'View file "{file}" does not exist.' => 'Файл представления "{file}" не существует.',
  'Yii application can only be created once.' => 'Приложение Yii может быть создано только один раз.',
  'You are not authorized to perform this action.' => 'Вам неразрешено выполнять данное действие.',
  'Your request is not valid.' => 'Ваш запрос неправильный.',
  '{attribute} "{value}" has already been taken.' => '{attribute} "{value}" уже занят.',
  '{attribute} cannot be blank.' => '{attribute} не должен быть пустым.',
  '{attribute} is invalid.' => '{attribute} не верен.',
  '{attribute} is not a valid URL.' => '{attribute} не является правильным URL.',
  '{attribute} is not a valid email address.' => '{attribute} не является правильным E-Mail адресом.',
  '{attribute} is not in the list.' => '{attribute} не находится в списке.',
  '{attribute} is of the wrong length (should be {length} characters).' => '{attribut} неверной длинны (Должен быть {length} симв.).',
  '{attribute} is too big (maximum is {max}).' => '{attribute} слишком большой (Максимум: {max}).',
  '{attribute} is too long (maximum is {max} characters).' => '{attribute} слишком длинный (Максимум: {max} симв.).',
  '{attribute} is too short (minimum is {min} characters).' => '{attribute} слишком короткий (Минимум: {min} симв.).',
  '{attribute} is too small (minimum is {min}).' => '{attribute} слишком мал (Минимум: {min}).',
  '{attribute} must be a number.' => '{attribute} должен быть числом.',
  '{attribute} must be an integer.' => '{attribute} должен быть целым числом.',
  '{attribute} must be repeated exactly.' => '',
  '{attribute} must be {type}.' => '{attribute} должен быть {type}.',
  '{className} does not support add() functionality.' => '{className} не поддерживает add() функциональность.',
  '{className} does not support delete() functionality.' => '{className} не поддерживает delete() функциональность.',
  '{className} does not support flush() functionality.' => '{className} не поддерживает flush() функциональность.',
  '{className} does not support get() functionality.' => '{className} не поддерживает get() функциональность.',
  '{className} does not support set() functionality.' => '{className} не поддерживает set() функциональность.',
  '{class} does not have attribute "{name}".' => '{class} не имеет атрибут "{name}".',
  '{class} has an invalid validation rule. The rule must specify attributes to be validated and the validator name.' => '',
  '{class} must specify "model" and "attribute" or "name" property values.' => '',
  '{class}.allowAutoLogin must be set true in order to use cookie-based authentication.' => '',
  '{class}::authenticate() must be implemented.' => 'Определите метод {class}::authenticate().',
  '{controller} cannot find the requested view "{view}".' => '{controller} не может найти представление "{view}".',
  '{controller} contains improperly nested widget tags in its view "{view}". A {widget} widget does not have an endWidget() call.' => '',
  '{controller} has an extra endWidget({id}) call in its view.' => '',
  '{widget} cannot find the view "{view}".' => '{widget} не может найти представление "{view}".',
);
