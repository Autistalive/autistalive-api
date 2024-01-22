# Autista.live
Programa de identificação digital para autistas.

<img src="logo.png" alt="Logo Projeto" style="width:400px;"/>

# Deploy

A aplicação é executada de forma simples em ambiente docker:

### Linux
```
cd web/
./vendor/bin/sail up -d
```

### Windows
```
cd web/
wsl -d <distro name>
./vendor/bin/sail up -d
```

A primeira vez que o deploy for realizado, pode demorar um pouco, a imagem do projeto será construida, os deploys seguintes serão instantâneos eventualmente.

##### Obs: Deploy usando Docker Desktop no Windows requer que acesse o projeto dentro do WSL.

## Roadmap
Por favor leia nosso  [Roadmap](roadmap)
