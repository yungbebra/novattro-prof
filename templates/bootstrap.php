<?php
declare(strict_types=1);

const PRODUCT_SOURCE = 'https://safplast.ru/products/zamkovye-paneli-novattro/';
const PROJECT_SOURCE = 'https://novattro-prof.ru/#objects';
const CONTACT_EMAIL = 'info@safplast.ru';
const CONTACT_PHONE = '+78432330533';

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function url(string $path = ''): string
{
    $base = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/.');
    return $base . '/' . ltrim($path, '/');
}

function icon(string $name): string
{
    $paths = [
        'arrow' => '<path d="M4 12h15M13 5l7 7-7 7"/>',
        'up-right' => '<path d="M5 19 19 5M5 5h14v14"/>',
        'chevron' => '<path d="m9 5 7 7-7 7"/>',
        'download' => '<path d="M12 3v12m-5-5 5 5 5-5M4 16v5h16v-5"/>',
        'close' => '<path d="m6 6 12 12M6 18 18 6"/>',
        'plus' => '<path d="M12 4v16M4 12h16"/>',
        'menu' => '<path d="M3 7h18M3 17h18"/>',
    ];
    return '<svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">' . ($paths[$name] ?? $paths['arrow']) . '</svg>';
}

function project_image(string $name, int $width = 800): string
{
    return url('src/images/projects/' . $name . '-' . $width . '.webp');
}

function pdf_size(string $file): string
{
    $size = filesize(__DIR__ . '/../src/pdf/' . $file);
    return number_format($size / 1048576, 1, ',', '') . ' МБ';
}

$navigation = [
    'catalog' => ['Панели', 'catalog.php'],
    'projects' => ['Объекты', 'projects.php'],
    'blog' => ['Проектирование', 'blog.php'],
    'documents' => ['Документы', 'documents.php'],
    'contacts' => ['Контакты', 'contacts.php'],
];

$products = [
    [
        'id' => '500-40-7s',
        'name' => '500 40-7 S',
        'type' => 'facade',
        'label' => 'Фасадная панель',
        'image' => '40-7s',
        'thickness' => '40',
        'width' => '500',
        'layers' => '7',
        'u' => '1,1',
        'lock' => 'Боковой замок',
        'description' => 'Семислойная панель для светопрозрачных фасадов и перегородок.',
        'page' => 32
    ],
    [
        'id' => '330-16-5s',
        'name' => '330 16-5 S',
        'type' => 'facade',
        'label' => 'Фасадная панель',
        'image' => '16-5s',
        'thickness' => '16',
        'width' => '330',
        'layers' => '5',
        'u' => '2,1',
        'lock' => 'Боковой замок',
        'description' => 'Пятислойная панель с соединением «шип-паз» по боковым граням.',
        'page' => 24
    ],
    [
        'id' => '600-40-7u',
        'name' => '600 40-7 U',
        'type' => 'roof',
        'label' => 'Кровельная панель',
        'image' => '40-7u',
        'thickness' => '40',
        'width' => '600',
        'layers' => '7',
        'u' => '1,1',
        'lock' => 'Замок с U-коннектором',
        'description' => 'Семислойная панель для светопрозрачных кровельных конструкций.',
        'page' => 37
    ],
    [
        'id' => '600-25-5c',
        'name' => '600 25-5 C',
        'type' => 'roof',
        'label' => 'Кровельная панель',
        'image' => '25-5c',
        'thickness' => '25',
        'width' => '600',
        'layers' => '5',
        'u' => '1,55',
        'lock' => 'Верхний замок',
        'description' => 'Пятислойная панель с замком, встроенным в верхнюю часть сечения.',
        'page' => 28
    ],
    [
        'id' => '330-10-4c',
        'name' => '330 10-4 C',
        'type' => 'roof',
        'label' => 'Кровельная панель',
        'image' => '10-4c',
        'thickness' => '10',
        'width' => '330',
        'layers' => '4',
        'u' => '2,5',
        'lock' => 'Верхний замок',
        'description' => 'Четырёхслойная панель для скатных и арочных кровель и навесов.',
        'page' => 21
    ],
];

$projects = [
    'sokolniki' => [
        'name' => 'Теннисный корт',
        'location' => 'Спортивная архитектура',
        'type' => 'sport',
        'label' => 'Спортивный объект',
        'image' => 'sokolniki',
        'width' => 1600,
        'height' => 1110,
        'alt' => 'Теннисный корт с волнообразной кровлей и светопрозрачными панелями',
        'description' => 'Волнообразный силуэт здания и светопрозрачная оболочка объединяют спортивную функцию и выразительную архитектуру.',
        'material' => 'Novattro PROF 600-40-7U FR White/BG HB Decor',
        'solution' => 'Замковые панели в оболочке спортивного здания. Модель и исполнение указаны в портфолио производителя.'
    ],
    'sibur' => [
        'name' => 'Экопавильон «СИБУР»',
        'location' => 'Казань, бульвар Серова',
        'type' => 'public',
        'label' => 'Общественное пространство',
        'image' => 'sibur',
        'width' => 1600,
        'height' => 900,
        'alt' => 'Светопрозрачный экопавильон СИБУР в зелёном городском пространстве Казани',
        'description' => 'Светлая оболочка павильона вписывается в городское пространство и сохраняет связь интерьера с окружающей средой.',
        'material' => 'Замковые панели Novattro PROF',
        'solution' => 'Тёплое остекление многофункционального экопавильона.'
    ],
    'safplast' => [
        'name' => 'Завод «СафПласт»',
        'location' => 'Республика Татарстан',
        'type' => 'industrial',
        'label' => 'Промышленный объект',
        'image' => 'safplast',
        'width' => 1600,
        'height' => 898,
        'alt' => 'Ленточное остекление фасада производственного здания СафПласт',
        'description' => 'Протяжённое остекление делает естественный свет частью производственной архитектуры.',
        'material' => 'Замковые панели Novattro PROF',
        'solution' => 'Светопрозрачное заполнение фасада на производственной площадке изготовителя панелей.'
    ],
    'church' => [
        'name' => 'Светопрозрачная церковь',
        'location' => 'Якутия',
        'type' => 'public',
        'label' => 'Общественный объект',
        'image' => 'church',
        'width' => 1600,
        'height' => 900,
        'alt' => 'Церковь со светопрозрачной оболочкой из панелей Novattro PROF в зимней Якутии',
        'description' => 'Пример применения светопрозрачных панелей в архитектуре северного региона.',
        'material' => 'Замковые панели Novattro PROF',
        'solution' => 'Светопрозрачная оболочка здания. Применимость панели в другом проекте определяется расчётом конструкции и климатическими условиями.'
    ],
    'kuyuki' => [
        'name' => 'Свет в вечернем фасаде',
        'location' => 'Казанский городской округ',
        'type' => 'public',
        'label' => 'Фасадное остекление',
        'image' => 'kuyuki',
        'width' => 1381,
        'height' => 776,
        'alt' => 'Подсвеченный изнутри фасад здания с опаловыми панелями в вечернее время',
        'description' => 'Днём панель работает со светом снаружи. Вечером внутреннее освещение проявляет геометрию фасада.',
        'material' => 'Фасадная панель Novattro PROF, 16 мм, опал',
        'solution' => 'Светопрозрачное фасадное заполнение в опаловом исполнении.'
    ],
];

$documents = [
    [
        'id' => 'catalog',
        'title' => 'Знакомство с Novattro PROF',
        'description' => 'Устройство панелей, типы замков и возможности применения.',
        'file' => 'novattro-prof-catalog.pdf',
        'type' => 'product',
        'label' => 'Обзор продукта',
        'pages' => '5 страниц'
    ],
    [
        'id' => 'album',
        'title' => 'Альбом технических решений',
        'description' => 'Узлы, сечения, примыкания и спецификация элементов системы.',
        'file' => 'novattro-prof-technical-solutions.pdf',
        'type' => 'design',
        'label' => 'Проектирование',
        'pages' => '43 страницы'
    ],
    [
        'id' => 'installation',
        'title' => 'Проектирование и монтаж',
        'description' => 'Выбор панели, варианты комплектации и работа с соединениями.',
        'file' => 'novattro-prof-installation.pdf',
        'type' => 'design',
        'label' => 'Монтаж',
        'pages' => '47 страниц'
    ],
    [
        'id' => 'quality',
        'title' => 'Декларация гарантии качества',
        'description' => 'Условия ответственности производителя и порядок обращения.',
        'file' => 'quality-declaration.pdf',
        'type' => 'quality',
        'label' => 'Качество',
        'pages' => '14 страниц'
    ],
];
