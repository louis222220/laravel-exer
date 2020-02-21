
# 以 Laravel 實作 留言板


## 測試步驟

假設已安裝 Composer、Valet

```
git clone git@github.com:louis222220/laravel-exer.git
cd laravel-exer
composer install
cp .env.example .env
php artisan key:generate
valet link
```

編輯 .env 資料庫的部分，並建立對應之資料庫、使用者、密碼

```
php artisan migrate
valet open
```

## DB Schema

### users

- `id`: unsignedBigInteger
- `name` : string
- `email` : string, unique
- `email_verified_at`
- `created_at`, `updated_at` (timestamps)
- `password` : string
- `rememberToken`: string

(以上皆為 Laravel 預設)

### posts

- `id`: unsignedBigInteger
- `created_at`, `updated_at` (timestamps)
- `text`: longText
- `user_id`: unsignedBigInteger


## 截圖


- 留言板首頁
  - 右上角連結 (其他頁皆相同)：
    1. 留言板首頁
    2. 新增留言
    3. 登入
    4. 註冊
![Imgur](https://imgur.com/PHyqMBi.jpg)

- 註冊頁面
![Imgur](https://imgur.com/ROvAfHw.jpg)

- 登入頁面
![Imgur](https://imgur.com/j5ejgZs.jpg)

- 留言頁面，點擊送出時進行驗證
    1. 登入
        若未登入，跳轉至登入頁面
    2. 字數至少 20 字元
        不符則跳轉回留言頁面，並保留原本的文字於空格內
![Imgur](https://imgur.com/H7zCb6U.jpg)

- 留言板首頁，顯示留言內容
![Imgur](https://imgur.com/g7UGiQ0.jpg)
