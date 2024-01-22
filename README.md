# Autista.live
Autista.live é uma solução de identificação digital desenvolvida para atender uma necessidade da comunidade autista. Este software foi projetado com o objetivo de oferecer uma maneira eficaz e personalizada de fornecer o laudo e uma identificação eletronica na palma da sua mão.
Com Autista.live, o usuário tem um perfil digital com foto, laudo e identificação digital, incluindo detalhes relevantes e necessidades de acordo com o laudo. 

<img src="logo.png" alt="Logo Projeto" style="width:300px;"/>

# Deploy

A aplicação é executada de forma simples em ambiente docker:

### Linux
```
cd web/
cp .env.example .env
./vendor/bin/sail up -d
```

### Windows
```
cd web/
wsl -d <distro name>
cp .env.example .env
./vendor/bin/sail up -d
```

A primeira vez que o deploy for realizado, pode demorar um pouco, a imagem do projeto será construida, os deploys seguintes serão instantâneos eventualmente.

##### Obs: Deploy usando Docker Desktop no Windows requer que acesse o projeto dentro do WSL.

## Roadmap
Por favor leia nosso  [Roadmap](roadmap.md)

## Obrigado aos contribuidores ❤

 <a href = "https://github.com/Autistalive/web/graphs/contributors">
   <img src = "https://contrib.rocks/image?repo=Autistalive/web"/>
 </a>
