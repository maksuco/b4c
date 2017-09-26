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

  {!! \B4C::formtext($name,$label,$value,$attributes) !!}
  //formtext('video','Video',$property->video,['placeholder' => 'Video code'])

```


Render Textarea inputs:

```php

  {!! \B4C::formtextarea($name,$label,$value,$attributes) !!}
  //formtextarea('video','Video',$property->video,['css' => 'color-primary'])

```


Render file inputs:

```php

  {!! \B4C::formfile($name,$label,$attributes) !!}
  //formfile('floorplan',__('Floor Plan'),['class' => 'mt-5','accept' => '.jpg,.jpeg,.png,.pdf'])

```


Render select inputs:

```php

  {!! \B4C::formselect($name,$label,$value,$options,$first,$attributes) !!}
  //formselect('zone',__('zone'),$property->zone,['N','E','W','S','NE','NW','SE','SW'],'Choose one',['class' => 'h-20'])

```


Render checkbox inputs:

```php

  {!! \B4C::formcheck($name,$label,$value) !!}
  //formswitch('show',__('Show'),1)

```


Render switch inputs:

```php

  {!! \B4C::formswitch($name,$label,$value) !!}
  //formswitch('show',__('Show'),$item->show)

```


Render Radio inputs:

```php

  {!! \B4C::formradio($name,$label,$value) !!}

```


Render text/switch inputs:

```php

  {!! \B4C::formtextswitch($name,$label,$value,$attributes,$switch_name,$switch_value) !!}
  //formtext('video','Video',$property->video,['placeholder' => 'Video code'],'video_on',$property->video_on)

```

## Security

If you discover any security related issues, please report it.

## Credits
- [Maksuco.com](http://maksuco.com)
- [ReBilling.co](https://rebilling.co)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
