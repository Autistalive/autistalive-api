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

- Docker <= 24.0
- Docker Compose <= v2.23

## Instalação

A aplicação é executada de forma simples em ambiente docker.

### Linux

1. Clone o repositório
```
git clone https://github.com/Autistalive/autistalive-api.git && cd autistalive-api
```

2. Crie o arquivo `.env`.
```
cp .env.example .env
```

3. Instale as dependências via `composer`.
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v ".:/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```

4. Faça o deploy da aplicação.
```
sail up -d
```
<small>Em caso de erro: https://laravel.com/docs/10.x/sail#configuring-a-shell-alias</small>

3. Crie uma nova `APP_KEY` para a aplicação
```
sail php artisan key:generate
```

4. Acesse `http://localhost`

### Windows

1. Clone o repositório.
```
git clone https://github.com/Autistalive/autistalive-api.git
cd autistalive-api
```

2. Crie o arquivo `.env`.
```
cp .env.example .env
```

3. Instale as dependências via `composer`.
```
docker run --rm \
    -u "1000:1000" \
    -v ".:/var/www/html" \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

4. Dentro da pasta do projeto, entre no WSL2.
```
wsl -d <distro name>
```
<small>`Obs: Distros podem ser instaladas pela Microsoft Store.`</small>

5. Faça o deploy da aplicação.
```
./vendor/bin/sail up -d
```

6. Crie uma nova `APP_KEY` para a aplicação
```
./vendor/bin/sail php artisan key:generate
```

7. Acesse `http://localhost`

A primeira vez que o deploy for realizado, pode demorar um pouco, a imagem do projeto será construida, os deploys seguintes serão instantâneos eventualmente.

<small>`Obs: Deploy usando Docker Desktop no Windows requer que acesse o projeto dentro do WSL.`</small>

## Roadmap
Por favor leia nosso [Roadmap](ROADMAP.md)

## Obrigado aos contribuidores ❤

<a href = "https://github.com/Autistalive/web/graphs/contributors">
  <img src = "https://contrib.rocks/image?repo=Autistalive/autistalive-api"/>
</a>
