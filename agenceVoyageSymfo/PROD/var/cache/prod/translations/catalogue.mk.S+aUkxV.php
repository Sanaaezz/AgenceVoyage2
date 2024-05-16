<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('mk', array (
  'validators' => 
  array (
    'This value should be false.' => 'Оваа вредност треба да биде лажна.',
    'This value should be true.' => 'Оваа вредност треба да биде вистинита.',
    'This value should be of type {{ type }}.' => 'Оваа вредност треба да биде од типот {{ type }}.',
    'This value should be blank.' => 'Оваа вредност треба да биде празна.',
    'The value you selected is not a valid choice.' => 'Вредноста што ја одбравте не е валиден избор.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Мора да одберете најмалку {{ limit }} избор.|Мора да одберете најмалку {{ limit }} изброи.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Може да одберете најмногу {{ limit }} избор.|Мора да одберете најмногу {{ limit }} избори.',
    'One or more of the given values is invalid.' => 'Една или повеќе од дадените вредности не се валидни.',
    'This field was not expected.' => 'Ова поле не беше очекувано.',
    'This field is missing.' => 'Ова поле недостига.',
    'This value is not a valid date.' => 'Оваа вредност не е валиден датум.',
    'This value is not a valid datetime.' => 'Оваа вредност не е валиден датум и време.',
    'This value is not a valid email address.' => 'Оваа вредност не е валидна адреса за е-пошта.',
    'The file could not be found.' => 'Датотеката не е најдена.',
    'The file is not readable.' => 'Датотеката не може да биде прочитана.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Датотеката е премногу голема ({{ size }} {{ suffix }}). Максималната дозволена големина е {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Миме типот на датотеката не е валиден ({{ type }}). Дозволените миме типови се {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Оваа вредност треба да биде {{ limit }} или помалку.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Оваа вредност е предолга. Треба да содржи {{ limit }} карактер или помалку.|Оваа вредност е предолга. Треба да содржи {{ limit }} карактери или помалку.',
    'This value should be {{ limit }} or more.' => 'Оваа вредност треба да е {{ limit }} или повеќе.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Оваа вредност е прекратка. Треба да содржи {{ limit }} карактер или повеќе.|Оваа вредност е прекратка. Треба да содржи {{ limit }} карактери или повеќе.',
    'This value should not be blank.' => 'Ова поле не може да биде празно.',
    'This value should not be null.' => 'Оваа вредност не може да биде ништо (null).',
    'This value should be null.' => 'Оваа вредност треба да е ништо (null).',
    'This value is not valid.' => 'Оваа вредност не е валидна.',
    'This value is not a valid time.' => 'Оваа вредност не е валидно време.',
    'This value is not a valid URL.' => 'Оваа вредност не е валиден URL.',
    'The two values should be equal.' => 'Двете вредности треба да се еднакви.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Датотеката е премногу голема. Максималната дозволена големина е {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Датотеката е премногу голема.',
    'The file could not be uploaded.' => 'Датотеката не може да биде подигната.',
    'This value should be a valid number.' => 'Оваа вредност треба да е валиден број.',
    'This file is not a valid image.' => 'Оваа датотека не е валидна слика.',
    'This is not a valid IP address.' => 'Оваа вредност не е валидна IP адреса.',
    'This value is not a valid language.' => 'Оваа вредност не е валиден јазик.',
    'This value is not a valid locale.' => 'Оваа вредност не е валидна локализација.',
    'This value is not a valid country.' => 'Оваа вредност не е валидна земја.',
    'This value is already used.' => 'Оваа вредност веќе се користи.',
    'The size of the image could not be detected.' => 'Големината на сликата не може да се детектира.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Ширината на сликата е преголема ({{ width }}px). Максималната дозволена ширина е {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Ширината на сликата е премала ({{ width }}px). Минималната дозволена ширина е {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Висината на сликата е преголема ({{ height }}px). Максималната дозволена висина е {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Висината на сликата е премала ({{ height }}px). Минималната дозволена висина е {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Оваа вредност треба да биде сегашната лозинка на корисникот.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Оваа вредност треба да има точно {{ limit }} карактер.|Оваа вредност треба да има точно {{ limit }} карактери.',
    'The file was only partially uploaded.' => 'Датотеката е само делумно подигната.',
    'No file was uploaded.' => 'Датотеката не е подигната.',
    'No temporary folder was configured in php.ini.' => 'Не е конфигурирана привремена папка во php.ini, или конфигурираната папка не постои.',
    'Cannot write temporary file to disk.' => 'Не може да се напише привремена датотека на дискот.',
    'A PHP extension caused the upload to fail.' => 'PHP екстензијата предизвика подигнувањето да биде неуспешно.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Оваа колекција треба да содржи {{ limit }} елемент или повеќе.|Оваа колекција треба да содржи {{ limit }} елементи или повеќе.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Оваа колекција треба да содржи {{ limit }} елемент или помалку.|Оваа колекција треба да содржи {{ limit }} елементи или помалку.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Оваа колекција треба да содржи точно {{ limit }} елемент.|Оваа колекција треба да содржи точно {{ limit }} елементи.',
    'Invalid card number.' => 'Бројот на картичката не е валиден.',
    'Unsupported card type or invalid card number.' => 'Неподдржан тип на картичка или бројот на картичката не е валиден.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Оваа вредност не е валиден Меѓународен Банкарски Сметка Број (IBAN).',
    'This value is not a valid ISBN-10.' => 'Оваа вредност не е валиден ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Оваа вредност не е валиден ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Оваа вредност не е ниту валиден ISBN-10 ниту валиден ISBN-13.',
    'This value is not a valid ISSN.' => 'Оваа вредност не е валиден ISSN.',
    'This value is not a valid currency.' => 'Оваа вредност не е валидна валута.',
    'This value should be equal to {{ compared_value }}.' => 'Оваа вредност треба да биде еднаква на {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Оваа вредност треба да е поголема од {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Оваа вредност треба да е поголема или еднаква на {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Оваа вредност треба да е идентична на {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Оваа вредност треба да е помала од {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Оваа вредност треба да е помала или еднаква на {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Оваа вредност треба да не биде еднаква на {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Оваа вредност треба да не биде идентична со {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Соодносот на сликата е преголем ({{ ratio }}).Максималниот дозволен сооднос е {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Соодносот на сликата е премал ({{ ratio }}). Минималниот дозволен сооднос е {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Сликата е квадратна ({{ width }}x{{ height }}px). Квадратни слики не се дозволени.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Сликата е ориентирана кон пејзаж ({{ width }}x{{ height }}px). Сликите ориентирани кон пејзаж не се дозволени.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Сликата е ориентирана кон портрет ({{ width }}x{{ height }}px). Сликите ориентирани кон портрет не се дозволени.',
    'An empty file is not allowed.' => 'Празна датотека не е дозволена.',
    'The host could not be resolved.' => 'Хостот е недостапен.',
    'This value does not match the expected {{ charset }} charset.' => 'Оваа вредност не се совпаѓа со очекуваниот {{ charset }} сет на карактери (charset).',
    'This is not a valid Business Identifier Code (BIC).' => 'Оваа вредност не е валиден Бизнис Идентификациски Код (BIC).',
    'Error' => 'Грешка',
    'This is not a valid UUID.' => 'Оваа вредност не е валиден UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Оваа вредност треба да биде повеќекратна од {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Овој бизнис идентификациски код (BIC) не е поврзан со IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Оваа вредност треба да биде валиден JSON.',
    'This collection should contain only unique elements.' => 'Оваа колекција треба да содржи само уникатни елементи.',
    'This value should be positive.' => 'Оваа вредност треба да биде позитивна.',
    'This value should be either positive or zero.' => 'Оваа вредност треба да биде или позитивна или нула.',
    'This value should be negative.' => 'Оваа вредност треба да биде негативна.',
    'This value should be either negative or zero.' => 'Оваа вредност треба да биде или негативна или нула.',
    'This value is not a valid timezone.' => 'Оваа вредност не е валидна временска зона.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Оваа лозинка е компромитирана и не смее да биде користена. Ве молиме употребете друга лозинка.',
    'This value should be between {{ min }} and {{ max }}.' => 'Оваа вредност треба да е помеѓу {{ min }} и {{ max }}.',
    'This value is not a valid hostname.' => 'Оваа вредност не е валидно име за мрежниот сметач (hostname).',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Бројот на елементи во оваа колекција треба да биде повеќекратен од {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Оваа вредност треба да задоволува најмалку едно од следните ограничувања:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Секој елемент од оваа колекција треба да задоволува сопствен сет на ограничувања.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Оваа вредност не е важечки меѓународен идентификациски број за хартии од вредност (ISIN).',
    'This value should be a valid expression.' => 'Оваа вредност треба да биде валиден израз.',
    'This value is not a valid CSS color.' => 'Оваа вредност не е валидна CSS боја.',
    'This value is not a valid CIDR notation.' => 'Оваа вредност не е валидна CIDR ознака.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Вредноста на мрежната маска (netmask) треба да биде помеѓу {{ min }} и {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'Името на датотеката е предолго. Треба да има {{ filename_max_length }} карактер има помалку.|Името на датотеката е предолго. Треба да има {{ filename_max_length }} карактери или помалку.',
    'The password strength is too low. Please use a stronger password.' => 'Оваа лозинка е премногу едноставна. Ве молиме користете посилна лозинка.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'Оваа вредност содржи карактери кои не се дозволени од тековното ниво на ограничување.',
    'Using invisible characters is not allowed.' => 'Користењето на невидливи знаци не е дозволено.',
    'Mixing numbers from different scripts is not allowed.' => 'Не е дозволено мешање на броеви од различни скрипти.',
    'Using hidden overlay characters is not allowed.' => 'Не е дозволено користење на скриени знаци за преклопување.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'Зголемувања на датотеката е неважечка ({{ extension }}). Дозволени зголемувања се ({{ extensions }}).',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'Откриеното кодирање на знаци е неважечко ({{ detected }}). Дозволените шифрирања се {{ encodings }}.',
    'This value is not a valid MAC address.' => 'Оваа вредност не е валидна MAC адреса.',
    'This URL is missing a top-level domain.' => 'На овој URL недостасува домен од највисоко ниво.',
    'This form should not contain extra fields.' => 'Оваа форма не треба да содржи дополнителни полиња.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Датотеката што се обидовте да ја подигнете е преголема. Ве молиме обидете се со помала датотека.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Вашиот CSRF токен е невалиден. Ве молиме испратете ја формата одново.',
    'This value is not a valid HTML5 color.' => 'Оваа вредност не е валидна HTML5 боја.',
    'Please enter a valid birthdate.' => 'Ве молиме внесете валидна дата на раѓање.',
    'The selected choice is invalid.' => 'Избраната опција е невалидна.',
    'The collection is invalid.' => 'Колекцијата е невалидна.',
    'Please select a valid color.' => 'Ве молиме одберете валидна боја.',
    'Please select a valid country.' => 'Ве молиме одберете валидна земја.',
    'Please select a valid currency.' => 'Ве молиме одберете валидна валута.',
    'Please choose a valid date interval.' => 'Ве молиме одберете валиден интервал помеѓу два датума.',
    'Please enter a valid date and time.' => 'Ве молиме внесете валиден датум и време.',
    'Please enter a valid date.' => 'Ве молиме внесете валиден датум.',
    'Please select a valid file.' => 'Ве молиме одберете валидна датотека.',
    'The hidden field is invalid.' => 'Скриеното поле е невалидно.',
    'Please enter an integer.' => 'Ве молиме внесете цел број.',
    'Please select a valid language.' => 'Ве молиме одберете валиден јазик.',
    'Please select a valid locale.' => 'Ве молиме одберете валидна локализација.',
    'Please enter a valid money amount.' => 'Ве молиме внесете валидна сума на пари.',
    'Please enter a number.' => 'Ве молиме внесете број.',
    'The password is invalid.' => 'Лозинката е погрешна.',
    'Please enter a percentage value.' => 'Ве молиме внесете процентуална вредност.',
    'The values do not match.' => 'Вредностите не се совпаѓаат.',
    'Please enter a valid time.' => 'Ве молиме внесете валидно време.',
    'Please select a valid timezone.' => 'Ве молиме одберете валидна временска зона.',
    'Please enter a valid URL.' => 'Ве молиме внесете валиден униформен локатор на ресурси (URL).',
    'Please enter a valid search term.' => 'Ве молиме внесете валиден термин за пребарување.',
    'Please provide a valid phone number.' => 'Ве молиме внесете валиден телефонски број.',
    'The checkbox has an invalid value.' => 'Полето за штиклирање има неважечка вредност.',
    'Please enter a valid email address.' => 'Ве молиме внесете валидна адреса за е-пошта.',
    'Please select a valid option.' => 'Ве молиме одберете валидна опција.',
    'Please select a valid range.' => 'Ве молиме одберете важечки опсег.',
    'Please enter a valid week.' => 'Ве молиме внесете валидна недела.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Настана грешка во автентикацијата.',
    'Authentication credentials could not be found.' => 'Акредитивите за автентикација не се пронајдени.',
    'Authentication request could not be processed due to a system problem.' => 'Барањето за автентикација не можеше да биде процесуирано заради системски проблем.',
    'Invalid credentials.' => 'Невалидни акредитиви.',
    'Cookie has already been used by someone else.' => 'Колачето е веќе користено од некој друг.',
    'Not privileged to request the resource.' => 'Немате привилегии за да го побарате ресурсот.',
    'Invalid CSRF token.' => 'Невалиден CSRF токен.',
    'No authentication provider found to support the authentication token.' => 'Не е пронајден провајдер за автентикација кој го поддржува токенот за автентикација.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сесијата е недостапна, или е истечена, или колачињата не се овозможени.',
    'No token could be found.' => 'Токенот не е најден.',
    'Username could not be found.' => 'Корисничкото име не е најдено.',
    'Account has expired.' => 'Корисничката сметка е истечена.',
    'Credentials have expired.' => 'Акредитивите се истечени.',
    'Account is disabled.' => 'Корисничката сметка е деактивирана.',
    'Account is locked.' => 'Корисничката сметка е заклучена.',
    'Too many failed login attempts, please try again later.' => 'Премногу неуспешни обиди за најавување, ве молиме обидете се повторно подоцна.',
    'Invalid or expired login link.' => 'Неважечка или истечена врска за најавување.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Премногу неуспешни обиди за најавување, обидете се повторно за %minutes% минута.',
  ),
  'VerifyEmailBundle' => 
  array (
    '%count% year|%count% years' => '%count% година|%count% години',
    '%count% month|%count% months' => '%count% месец|%count% месеци',
    '%count% day|%count% days' => '%count% ден|%count% денови',
    '%count% hour|%count% hours' => '%count% час|%count% часови',
    '%count% minute|%count% minutes' => '%count% минута|%count% минути',
    'The link to verify your email has expired. Please request a new link.' => 'Врската за верификација на вашата е-пошта е истечена. Ве молиме побарајте нова врска.',
    'The link to verify your email is invalid. Please request a new link.' => 'Врската за верификација на вашата е-пошта е невалидна. Ве молиме побарајте нова врска.',
    'The link to verify your email appears to be for a different account or email. Please request a new link.' => 'Врската за верификација изгледа дека е за друга корисничка сметка или за друга е-пошта. Ве молиме побарајте нова врска.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This value is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This value is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This value is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This value is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This value is not a valid CSS color.' => 'This value is not a valid CSS color.',
    'This value is not a valid CIDR notation.' => 'This value is not a valid CIDR notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'The value of the netmask should be between {{ min }} and {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.',
    'The password strength is too low. Please use a stronger password.' => 'The password strength is too low. Please use a stronger password.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'This value contains characters that are not allowed by the current restriction-level.',
    'Using invisible characters is not allowed.' => 'Using invisible characters is not allowed.',
    'Mixing numbers from different scripts is not allowed.' => 'Mixing numbers from different scripts is not allowed.',
    'Using hidden overlay characters is not allowed.' => 'Using hidden overlay characters is not allowed.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.',
    'This value is not a valid MAC address.' => 'This value is not a valid MAC address.',
    'This URL is missing a top-level domain.' => 'This URL is missing a top-level domain.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
  ),
  'VerifyEmailBundle' => 
  array (
    '%count% year|%count% years' => '%count% year|%count% years',
    '%count% month|%count% months' => '%count% month|%count% months',
    '%count% day|%count% days' => '%count% day|%count% days',
    '%count% hour|%count% hours' => '%count% hour|%count% hours',
    '%count% minute|%count% minutes' => '%count% minute|%count% minutes',
    'The link to verify your email has expired. Please request a new link.' => 'The link to verify your email has expired. Please request a new link.',
    'The link to verify your email is invalid. Please request a new link.' => 'The link to verify your email is invalid. Please request a new link.',
    'The link to verify your email appears to be for a different account or email. Please request a new link.' => 'The link to verify your email appears to be for a different account or email. Please request a new link.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
