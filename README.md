# Generate slugs for routes and files in Laravel

This package helps you render bootstrap 4 components inside blade.


## Installation

You can install the package via composer:
``` bash
$ composer require maksuco/b4c
OR
$ composer require maksuco/b4c:dev-master
```
This Package works with autodiscovery in Laravel +5.5, but is compatible with older versions

## Usage


Render text inputs:

```php

  {!! \B4C::text($name,$label,$value,$attributes,$extra) !!}
  //formtext('video','Video',$property->video,['placeholder' => 'Video code'],'required')

```


Render Textarea inputs:

```php

  {!! \B4C::textarea($name,$label,$value,$attributes) !!}
  //formtextarea('video','Video',$property->video,['css' => 'color-primary'])

```


Render file inputs:

```php

  {!! \B4C::file($name,$label,$attributes,$extra) !!}
  //formfile('floorplan',__('Floor Plan'),['class' => 'mt-5','accept' => '.jpg,.jpeg,.png,.pdf'],'required')

```


Render select inputs:

```php

  {!! \B4C::select($name,$label,$value,$options,$first,$attributes,$extra) !!}
  //formselect('zone',__('zone'),$property->zone,['N','E','W','S','NE','NW','SE','SW'],'Choose one',['class' => 'h-20'],'')

```


Render checkbox inputs:

```php

  {!! \B4C::check($name,$label,$value,$extra,'disabled') !!}
  //formswitch('show',__('Show'),1)

```


Render switch inputs:

```php

  {!! \B4C::switch($name,$label,$value,$extra,'') !!}
  //formswitch('show',__('Show'),$item->show)

```


Render Radio inputs:

```php

  {!! \B4C::radio($name,$label,$value,$extra,'') !!}

```


Render text/switch inputs:

```php

  {!! \B4C::textswitch($name,$label,$value,$attributes,$switch_name,$switch_value) !!}
  //formtext('video','Video',$property->video,['placeholder' => 'Video code'],'video_on',$property->video_on)

```

## Security

If you discover any security related issues, please report it.

## Credits
- [Maksuco.com](http://maksuco.com)
- [ReBilling.co](https://rebilling.co)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
