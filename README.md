# Laravel and Lumen Badge Poser 
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
  public functino controllerMethod(\Vluzrmos\BadgePoser\Contracts\Poser $poser)
  {
    returh $poser->generate('slogan', 'status', 'FFFFFF', 'flat');
  }
} 

## Facade

```php
$reponse = Poser::generate('licence', 'MIT', 'FFFFF', 'plastic');
```

## API

```php
Poser::generate($message, $status, $color, $format);
//where $format is 'flat' or 'plastic'


Poser::generateFromURI('license-MIT-blue.svg');
```

# License

DBAD.
