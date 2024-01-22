# Autista.live
Autista.live é uma solução de identificação digital desenvolvida para atender uma necessidade da comunidade autista. Este software foi projetado com o objetivo de oferecer uma maneira eficaz e personalizada de fornecer o laudo e uma identificação eletronica na palma da sua mão.
Com Autista.live, o usuário tem um perfil digital com foto, laudo e identificação digital, incluindo detalhes relevantes e necessidades de acordo com o laudo. 

<img src="logo.png" alt="Logo Projeto" style="width:300px;"/>

## Comunicação
Temos um grupo para comunicação em tempo real aonde discutimos sobre o projeto no XMPP.
Favor participar!

```
autista.live@conference.slackjeff.com.br
```
Se você estiver usando Linux, você pode usar os seguintes clientes: Gajim, Dino, ou via web Converse.js

## Dependências

- PHP <= 8.1
- Composer <= 2.6
- NPM <= 10.2
- NodeJS <= 18.19
- Laravel == 10
- Docker <= 24.0
- Docker Compose <= v2.23

## Instalação

A aplicação é executada de forma simples em ambiente docker.

### Linux

1. Clone o repositório
```
git clone https://github.com/Autistalive/web.git && cd web
```

2. Instale as dependências via `composer` e `npm`.
```
composer install
npm install
```

3. Crie o arquivo `.env` e gere uma `APP_KEY`
```
cp .env.example .env
php artisan key:generate
```

3. Faça o deploy do ambiente de teste
```
./vendor/bin/sail up -d
```

### Windows

1. Clone o repositório.
```
git clone https://github.com/Autistalive/web.git
cd web
```

2. Instale as dependências via `composer` e `npm`.
```
composer install
npm install
```

3. Dentro da pasta do projeto, entre no WSL2.
```
wsl -d <distro name>
```
<small>`Obs: Distros podem ser instaladas pela Microsoft Store.`</small>

4. Crie o arquivo `.env` e gere uma `APP_KEY`.
```
cp .env.example .env
php artisan key:generate
```

5. Faça o deploy do ambiente de teste.
```
./vendor/bin/sail up -d
```

A primeira vez que o deploy for realizado, pode demorar um pouco, a imagem do projeto será construida, os deploys seguintes serão instantâneos eventualmente.

##### Obs: Deploy usando Docker Desktop no Windows requer que acesse o projeto dentro do WSL.

## Roadmap
Por favor leia nosso [Roadmap](ROADMAP.md)

## Obrigado aos contribuidores ❤

<a href = "https://github.com/Autistalive/web/graphs/contributors">
  <img src = "https://contrib.rocks/image?repo=Autistalive/web"/>
</a>
