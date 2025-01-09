## Simple Env Variable Manager



### Installations:

```php
composer require atekushi/env
```

### How To Use:

- Load Environment File
```php
use Atekushi\Env\Facades\Env;

Env::parser()->loadFromFile(__YOUR_ENV_FILE__);
```

- Add variable manually
```php
add_env(__ENV_KEY__, __ENV_VALUE__);
```

- Get Variable Value
```php
env(__ENV_KEY__);
```
