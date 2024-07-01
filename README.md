
# Radio Stream

Radio Stream is a website that used for listening radio online.


## Features

- Listen to radio
- Ai generated description

## Tech Stack

**Client:** Laravel 11, Livewire 3,  Javascript, TailwindCSS

**Server:** PHP


## Installation

Clone project ini

```bash
  git clone https://github.com/Kepoo311/Radio_Stream.git
  cd Radio_Stream
```

Install dependencies

```bash
  composer install
  npm install
```

Configurasi DB

```bash
  php artisan migrate:fresh --seed
```

Add Groq AI api key in env

```bash

    GROQ_API_KEY=
```

Run this project

 ```bash
  php artisan serve
```   

* If you want to change the style do:

 ```bash
  npm run dev
```  

* Dont forget to uncomment the @vite(..) in resources\views\components\layouts\app.blade.php and comment the 
   link rel="stylesheet" href="{{asset('css/build.css')}}"

## Authors

- [@Kepoo311](https://www.github.com/kepoo311)

