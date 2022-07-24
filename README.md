# 作業メモ

## Laravel install
composer create-project laravel/laravel task_test --prefer-dist "9.*"

## 所有者:グループの変更
chown -R myusername:mygroupname task_test

## 権限変更
chmod -R 777 storage

## migrate command
php artisan migrate

## 参考資料
https://readouble.com/laravel/9.x/ja/releases.html