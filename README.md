## 使用说明
```php
  
  $data = [
        'name'=>"hello world"
  ];
  //json字符串输出
  eval(RespToStr::toString([
            ['if','1=1',101,'ok','$data'],
            ['if else','2<1',102,'新手机号与旧手机号一致',''],
            ['else','2<1',102,'新手机号与旧手机号一致',''],
  ]));
```
 