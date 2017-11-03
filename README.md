#  Document

# Base SetUp　

## 各モジュールのインストール
```
$ composer install
```

# Migration

## マイグレーションの作成
```
$ php artisan make:migration create_courses_table
```

## マイグレーションの実行
```
$ php artisan migrate
```

## マイグレーションの再実行
```
$ php artisan migrate:refresh
```

## キャッシュクリア
```
$ php artisan cache:clear
```

# Fixture

## テストデータクラスの作成
```
$ php artisan make:seeder UsersTableSeeder
```

## テストデータの流し込み
```
$ php artisan db:seed
```

# Other

## Entityクラスの新規作成
```
$ php artisan make:model Host
```

## IDE Helper Modelの実行方法
```
$ php artisan ide-helper:models
```

## IDE Helperヘルパーファイル作成の実行方法
```
$ php artisan ide-helper:generate
```

## サービスプロバイダーを作成
```
$ php artisan make:provider ImageServiceProvider
```

## routing の確認
```
$ php artisan route:list
```
