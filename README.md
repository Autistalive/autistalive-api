# Autista.live
Autista.live é uma solução de identificação digital desenvolvida para atender uma necessidade da comunidade autista. Este software foi projetado com o objetivo de oferecer uma maneira eficaz e personalizada de fornecer o laudo e uma identificação eletronica na palma da sua mão.
Com Autista.live, o usuário tem um perfil digital com foto, laudo e identificação digital, incluindo detalhes relevantes e necessidades de acordo com o laudo. 

<img src="logo.png" alt="Logo Projeto" style="width:300px;"/>

# Instalação
Para realizar a instalação é necessário [docker](https://www.docker.com/).

```bash
$ git clone https://github.com/Autistalive/web.git
$ cd web/
$ docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
$ ./vendor/bin/sail up -d
```

Acesse a aplicação utilizando http://localhost

A primeira vez que a instalação for realizada, pode demorar um pouco, a imagem do projeto será construida, os deploys seguintes serão instantâneos eventualmente.

##### Obs: Deploy usando Docker Desktop no Windows requer que acesse o projeto dentro do WSL.

## Roadmap
Por favor leia nosso  [Roadmap](roadmap)

## Obrigado aos contribuidores ❤

 <a href = "https://github.com/Autistalive/web/graphs/contributors">
   <img src = "https://contrib.rocks/image?repo=Autistalive/web"/>
 </a>
