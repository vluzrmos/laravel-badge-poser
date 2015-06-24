# Laravel and Lumen Badge Poser 

[![Latest Stable Version](https://poser.pugx.org/vluzrmos/badge-poser/v/stable)](https://packagist.org/packages/vluzrmos/badge-poser) [![Total Downloads](https://poser.pugx.org/vluzrmos/badge-poser/downloads)](https://packagist.org/packages/vluzrmos/badge-poser) [![Latest Unstable Version](https://poser.pugx.org/vluzrmos/badge-poser/v/unstable)](https://packagist.org/packages/vluzrmos/badge-poser) [![License](https://poser.pugx.org/vluzrmos/badge-poser/license)](https://packagist.org/packages/vluzrmos/badge-poser)

That package is a easy wrapper to [Badges/Poser](https://github.com/badges/poser).

#Installing

```bash
composer require vluzrmos/laravel-badge-poser
```
## Laravel
configure the aliases and providers on Laravel `config/app`:

The provider:
```php
  'Vluzrmos\BadgePoser\BadgePoserSeviceProvider',
```

and the alias:

```php
  'Poser' => 'Vluzrmos\BadgePoser\PoserFacade',
```

## Lumen

edit the `bootstrap/app.php`:

```php
$app->register('Vluzrmos\BadgePoser\BadgePoserSeviceProvider');

//register the facade, if you need
if(!class_exists('Poser')){
  class_alias('Vluzrmos\BadgePoser\PoserFacade', 'Poser');
}
```

# Usage

Using IoC Container

```php
class YourController extends Controller
{
  public function controllerMethod(\Vluzrmos\BadgePoser\Contracts\Poser $poser)
  {
    return $poser->generate('slogan', 'status', 'FFFFFF', 'flat');
  }
} 
```

## Facade

```php
$response = Poser::generate('licence', 'MIT', 'FFFFF', 'plastic');
```

## API

```php
$response = Poser::generate($message, $status, $color, $format);
//where $format is 'flat' or 'plastic'


$response = Poser::generateFromURI('license-MIT-blue.svg');
```

# License

DBAD.
