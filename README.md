# A Laravel Nepali Date Converter.


A laravel date package which convert AD to BS or viceversa.

#Installation
1) In order to install Laravel 5 Laravelbsdate, just add the following to your composer.json in require. Then run composer update:

```json
composer require vinus/nepalidateconverter
```

2) Open your `config/app.php` and add the following to the `providers` array:

```php
Vinus\NepaliDateconverter\NDCServiceProvider::class,
```

3) In the same `config/app.php` and add the following to the `aliases ` array: 

```php
'npDate' => Vinus\NepaliDateconverter\NDCeFacade::class,
```

## Usage

```php
npDate::eng_to_nep(2016,12,31); //For converting AD TO BS
npDate::nep_to_eng(2073,09,16); //For converting BS TO AD
// output 
Array
(
    [year] => २०७३
    [month] => ९
    [date] => १६
    [day] => शनिबार
    [nmonth] => पुष
    [num_day] => ७
)
```