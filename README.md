# Guia do Calouro - WebService

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

Este projeto foi desenvolvido para criar um back-end para um aplicativo. Desta forma o aplicativo consumirá as requisições de forma mais rápida.

## Resumo
A entrada dos calouros a universidade em geral sempre foi um período difícil. Pelo fato em que de não estarem aptos a Universidade. Nesse trabalho iremos implantar para a UFV- CRP um aplicativo que dê suporte aos calouros. A vantagem da ferramenta é permitir que informações sejam fornecidas em qualquer lugar que tenha um dispositivo mobile. O foco é melhorar a informação oferecida pela Universidade aos calouros.


### Administração
![](http://danielaraujos.com/partners/git_project/calouros-ws/home.png) 
#### Listagem
![](http://danielaraujos.com/partners/git_project/calouros-ws/listagem.png) 
#### CRUD
![](http://danielaraujos.com/partners/git_project/calouros-ws/edicao.png) 
#### Dicionario - API
![](http://danielaraujos.com/partners/git_project/calouros-ws/api.png) 

## Framework
- [x] CakePHP 3
- [x] Mysql
- [x] AdminLte 2

## Requisições
<ul>
    <li>PATH /api/v1/ - Rota padrão. </li>
    <li>GET /buildings - Obtém a lista de todos os predios.</li>
    <li>GET /benefits - Obtém a lista de todos os beneficios.</li>
    <li>GET /abouts - Informações do apliicação</li>
    <li>GET /calendars - Informações sobre a agenda do periodo</li>
    <li>GET /monthCalendars - Obtém a lista de todos os meses do ano.</li>
    <li>GET /typs - Obtém a lista de todas as dicas.</li>
    <li>GET /categoryTyps - Obtém a lista de todas as categorias de dicas.</li>
    <li>GET /telephones - Obtém a lista de todos telefones úteis.</li>
    <li>GET /emails - Obtém a lista de todos os emails.</li>
    <li>GET /managements - Obtém a lista de todos responsáveis da gestao da universidade.</li>
    <li>GET /categoryManagements - Obtém a lista de todas categorias relacionadas a gestao da universidade.</li>
    <li>GET /Feedings - Obtém a lista de todos os cardapios.</li>
    <li>GET /transports - Obtém a lista de todos os locais de transportes.</li>
    <li>GET /places - Obtém a lista de todos os pontos de ônibus.</li>
    
</ul>



## Instalação

1. Baixe [Composer](http://getcomposer.org/doc/00-intro.md) ou atualize `composer self-update`.
2. Execute `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

Se o Composer estiver instalado globalmente, execute
```bash
composer create-project --prefer-dist cakephp/app [app_name]
```

## Configuração
Leia e edite `config/app.php` e configure o 'Datasources' e qualquer outra configuração relevante para sua aplicação.
<strong>Utilize o migrate e seed para popular o banco.</strong>

