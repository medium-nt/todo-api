<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Установка

Для установки необходимо:
1. Склонировать репозиторий
2. Установить зависимости
3. Первоначальная настройка
4. Настроить базу данных
5. Запустить сервер
6. Открыть в браузере http://localhost:8000

## 1. Клонирование репозитория

```bash
    git clone https://github.com/oleg-kulikov/laravel.git
    cd laravel
```

## 2. Установка зависимостей

```bash
  composer install
```

## 3. Первоначальная настройка

Создайте файл окружения и сгенерируйте ключ приложения:

```bash
    cp .env.example .env
    php artisan key:generate
```

## 4. Настройка базы данных

Укажите параметры подключения в файле .env, затем выполните миграции и заполнение базы тестовыми данными:

```bash
    php artisan migrate --seed
```

## 5. Запуск локального сервера

```bash
    php artisan serve
```

## Открытие в браузере

Перейдите в браузере по адресу:

http://localhost:8000

---

## API

Все эндпоинты доступны по префиксу:

```
/api/tasks
```

## Получить список задач
> **GET** `/api/tasks`

Пример ответа:
```json
[
    {
        "id": 1,
        "title": "Пример задачи",
        "description": "Описание задачи",
        "status": "new",
        "created_at": "2024-01-01T12:00:00.000000Z",
        "updated_at": "2024-01-01T12:00:00.000000Z"
    }
]
```

## Получить одну задачу
> **GET** `/api/tasks/{id}`

Пример ответа при успехе:

```json
{
    "id": 1,
    "title": "Пример задачи",
    "description": "Описание задачи",
    "status": "new"
}
```

Пример ответа при ошибке:
```json
{
    "success": false,
    "error": {
        "code": "TASK_NOT_FOUND",
        "message": "Ресурс не найден",
        "details": null
    }
}
```

## Создать задачу
> **POST** `/api/tasks`
> 
Тело запроса:
```json
{
    "title": "Новая задача",
    "description": "Описание задачи",
    "status": "new"
}
```

Пример ответа:
```json
{
    "id": 10,
    "title": "Новая задача",
    "description": "Описание задачи",
    "status": "new"
}
```

## Обновить задачу
> **PUT** `/api/tasks/{id}`

Тело запроса:
```json
{
    "title": "Обновлённая задача",
    "description": "Новое описание",
    "status": "completed"
}
```

Пример ответа:
```json
{
    "id": 10,
    "title": "Обновлённая задача",
    "description": "Новое описание",
    "status": "completed"
}
```

## Удалить задачу
> **DELETE** `/api/tasks/{id}`

Пример ответа:
```json
{
  "success": true
}
```
