# Siakad an Online Campus Management App

*It will soon be added, since it's still and idea

## Design

It's still on design process, as you know I'm a backend developer not frontend developer

<https://www.figma.com/file/Oiy1EjRStvLyX7Mxwe4j5h/Siakad?node-id=12%3A1461&t=V6cmZnTmNPJw3xoB-1>

## 🛠️ Development & Running

```bash
# git clone this repository
> git clone https://github.com/UnknownRori/siakad-api

# enter to the cloned directory
> cd siakad-api

# install Laravel's dependency
> composer install

# generate Laravel secret key and JWT secret key
> php artisan key:generate && php artisan jwt:secret

# migrate database
> php artisan migrate:fresh --seed

# run local development server
> php artisan serve
```

## 🌟 Contribution

Feel free to contribute and improve the codebase, send pull request or create an issues if something is wrong or need some additional feature we will review it.
