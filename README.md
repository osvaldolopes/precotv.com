<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## INICIAR O PROJETO

- git clone https://github.com/osvaldolopes/precotv.com.git
- composer install
- Duplicar o arquivo .env.example para um arquivo .env
- php artisan key:generate
- php artisan migrate:fresh --seed
- php artisan migrate

## COLOCANDO O PROJETO EM PRODUÇÃO
# No env

- APP_ENV=production
- APP_DEBUG=false
- APP_URL=https://seusite.com

# Limpar e recarregar o cache

- php artisan config:clear
- php artisan cache:clear
- php artisan config:cache

# Ativar otimizações de produção

- php artisan route:cache
- php artisan view:cache
- php artisan optimize

## APRENDENDO LARAVEL

O Laravel tem a mais extensa e completa [documentação](https://laravel.com/docs) e biblioteca de tutoriais em vídeo de todos os frameworks de aplicativos web modernos, facilitando muito o início do uso do framework.

Você também pode experimentar o [Laravel Bootcamp](https://bootcamp.laravel.com), onde você será guiado pela construção de um aplicativo Laravel moderno do zero.

Se você não quiser ler, o [Laracasts](https://laracasts.com) pode ajudar. O Laracasts contém milhares de tutoriais em vídeo sobre uma variedade de tópicos, incluindo Laravel, PHP moderno, testes unitários e JavaScript. Aumente suas habilidades explorando nossa abrangente biblioteca de vídeos.
If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## DOCUMENTAÇÃO

O sistema está implementado com o laravel 10, para mais informações consulte a -> [documentação do Laravel](https://laravel.com/docs/10.x).

## SOBRE O SISTEMA

Sistema de exibição de tabelas de preços em monitores e televisões para Lanchonetes, Padarias, Supermercados etc, conta com um painel de controle para atualizar informações e modificar detalhes da pagina de exibição.

## AUTOR

Osvaldo Filho [Curriculo online](https://osvaldofilho.netlify.app/).
