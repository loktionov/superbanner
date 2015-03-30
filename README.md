# superbanner
Генерация кода рекламных баннеров

# Config
```php
'components' => [
'superbanner' => [
            'class'=>'loktionov\superbanner\Superbanner',
            'bannercount' => 100,
        ]
]
```

# Controller
```php
$sb = Yii::$app->superbanner;

$s1 = $sb->GetBanners(12);
$s2 = $sb->GetBanners(24);
$s3 = $sb->GetBanners('100%', 'superbanner2');
$s4 = $sb->GetBanners('56');

return $this->render('index', ['banners'=>$s3]);
```
        
# View
```php
foreach($banners as $b) {
    echo $b;
}
$this->registerJs(
    '$("document").ready(function(){
     var hsh = window.location.hash.substring(1);
     if(hsh != "")
      $("#" + hsh).css("border", "1px solid red");
    });'
); 
```
