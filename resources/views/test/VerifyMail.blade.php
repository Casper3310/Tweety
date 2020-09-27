@component('mail::message')
# 功能介紹
- 認證碼隨機0~9999:{{$token}}
- 會員登入
- 會員身分認證
- 留言板
- 留言時會發送訊息給LINE
- 資料表主鍵外鍵關聯

@component('mail::button', ['url' => 'http://34.80.168.145/'])
作品網站
@endcomponent

@endcomponent
