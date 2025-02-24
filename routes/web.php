<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


$data = [
    'Programming' => [
        'PHP' => [],
        'PostgreSQL' => [],
        'Laravel' => [],
        'Questions' => [
            'Что такое промежуточная таблица (pivot table)' => [
                'Tip' => 'Независимые таблицы',
                'Answer' => 'Это таблица которая создается для установления связи Many-to-Many',
                'Trouble' => 'Один клиент может работать со многими консультантами. Один консультант может работать со многими клиентами.
                При организации связей Many-to-Many мы легко можем определить с какими клиентами работает консультант, и сколько консультантов работают с клиентом'
            ],
            'Метод ->constrained' => [
                'Tip' => '',
                'Answer' => '',
                'Trouble' => '',
            ],
            'Класс Http::' => [
                'Tip' => '',
                'Answer' => '',
                'Trouble' => '',
            ],
            'Метод ->name' => [
                'Tip' => '',
                'Answer' => '',
                'Trouble' => '',
            ],
            'Метод ->increment' => [
                'Tip' => '',
                'Answer' => '',
                'Trouble' => '',
            ],
            'Что такое полиморф в Laravel' => [
                'Tip' => '',
                'Answer' => '',
                'Trouble' => '',
            ],
            'Кастомные команды artisan' => [
                'Tip' => '',
                'Answer' => 'artisan make: command | Определяем команду в методе handle()| Console > Command',
                'Trouble' => '',
            ],
            'Правила наименования полей в миграциях Laravel| _is, _at ?' => [
                'Tip' => '',
                'Answer' => '',
                'Trouble' => '',
            ],
            'Сигнатура это' => [
                'Tip' => 'Метод, наследование, интерфейс',
                'Answer' => 'Сигнатура определяет какие параметры можно передавать в функцию и какой тип данных эта функция возвращает',
                'Trouble' => '',
            ],
            'http_build_query()' => [
                'Tip' => 'Параметры http запросов',
                'Answer' => 'Генерирует URL-кодированную строку запроса',
                'Trouble' => 'Функция принимает массив параметров запроса в виде ключ => значение и возвращает валидный query запрос',
            ],
            'abs(); -abs()' => [
                'Tip' => '+-число',
                'Answer' => 'Возвращает модуль числа, т.е неотрицательное (abs) или отрицательное (-abs) число',
                'Trouble' => 'Полезно, когда нужно отбросить или добавить знак (+-)',
            ],

        ],
    ],
];
