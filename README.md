# Scaffy Core

**Scaffy Core** is the framework-agnostic core of the Scaffy code generation system. It handles the business logic for generating model scaffolding based on your database schema, following a clean Hexagonal Architecture design.

---


## ✨ Features

- 🔌 Completely decoupled from any PHP framework (Laravel, Symfony, etc.)
- 💡 Provides clean ports for database and framework adapters
- 🧱 Reusable across Laravel, CLI tools, or other integrations
- 🧮 Generates model definitions from your actual database metadata

---

## 📦 Requirements

- PHP 8.1+
- Composer

---

## 🧰 Installation


```bash
composer require gnu/scaffy-core
```

You can now import and use `Gnu\Scaffy\Core` components in your project.

---

## 🧠 Hexagonal Architecture

Scaffy Core sits at the center of a hexagonal architecture:


```
+-------------------------+
|    Framework Adapters   |  ← e.g. Laravel, CLI, Symfony, CodeIgniter...
+-------------------------+
           ↑
           |
           ↓
+-------------------------+
|       Scaffy Core       |
|  - Business logic       |
|  - FrameworkPort        |
+-------------------------+
           ↑
           |
           ↓
+-------------------------+
|     Database Adapters   |  ← e.g. PostgreSQL, SQL Server, MySql...
+-------------------------+
```


---

## 🔧 Usage


Scaffy Core defines the core contracts and logic. To use it:

1. Create an adapter implementing `FrameworkPort`
2. Create DB-specific implementations of `DatabasePort`
3. Inject and use them however you want (Laravel, CLI, custom)

Example usage in a Laravel adapter:


```php
$scaffy = new ScaffyService($databasePort);
$scaffy->generate($schema);
```

---

## 🧱 Components

- `Helpers` — Utility functions for file and string handling
- `Ports\FrameworkPort` — Interface for framework-side adapters


---

## 🧪 Example

```php

use Gnu\Scaffy\Core\Helpers\IOHelper;

$path = IOHelper::findRootDirectory('/app/Models');
```

---

## ✅ Goals


- Maintain strict separation between business logic and frameworks
- Promote testability and flexibility across environments
- Encourage modular adapter/plugin design
- Development of Laravel APIs over exising databases.


---

## 📄 License

MIT © [gnujesus](https://github.com/gnujesus)
