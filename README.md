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
//или так, если не объявлять как компонент в конфиге
$sb = new Superbanner();

$s1 = $sb->GetBanners(12);
$s2 = $sb->GetBanners(24);
$s3 = $sb->GetBanners('18%', 'superbanner2');
$s4 = $sb->GetBanners('56');

$s5 = Yii::$app->superbanner->GetBanners(12);

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
