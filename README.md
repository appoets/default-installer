
# Default Installer
Laravel Setup Wizard for 5.*

<p align="left">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/appoets/default-installer/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/appoets/default-installer/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/appoets/default-installer/license.svg" alt="License"></a>
</p>

The current features are : 

	- Check For Server Requirements.
	- Check For Folders Permissions.
	- Ability to set database information.
	- Migrate The Database.
	- Seed The Tables.
  

## Installation

First, pull in the package through Composer.

```
composer require "appoets/default-installer":"dev-master"

```

After that, include the service provider within `config/app.php`.

```
'providers' => [
    Appoets\DefaultInstaller\Providers\DefaultInstallerServiceProvider::class,
];
```

## Usage

Before using this package you need to run :
```bash
php artisan vendor:publish --provider="Appoets\DefaultInstaller\Providers\DefaultInstallerServiceProvider"
```

Happy Coding :)
