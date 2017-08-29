## Dev Setup

Use Homestead (vagrant) como ambiente de desenvolvimento. Informações sobre como instalar: [laravel docs](https://laravel.com/docs/5.4/homestead).

Setup básico:

    composer install
    artisan migrate --seed
    npm install
    bower install
    npm run dev

Desenvolvimento diário:

    npm run watch

Isso fará com que os assets em `resources/assets` compilem e sejam copiados para a pasta publica.

## Informações Úteis

Usuários de teste:

customer@test.com / secret
manager@test.com / secret
root@test.com / secret

## Roadmap

- Telas de login e registro;
- Telas de recuperação e reset de senha;
- Crud de usuários e roles;
- Auth social (Socialite);