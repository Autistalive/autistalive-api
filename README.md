# Bem-vindo ao projeto austista livre
Este documento tem por objetivo relatar aspectos como ambientes de desenvolvimento, tutorial de configuração etc... 


# Requisitos de sistema
- utilizar Laravel: https://laravel.com/docs/10.x/

- composer 2.0 ou superior.
- npm 7.5 ou superior.
- php 8 ou superior.
- laravel 10.

##  Configurando ambiente de desenvolvimento  
1º clonar o repositorio em sua maquina e configure o banco de dados conforme exemplo:
Passos para configuração do MariaDB

``` sudo apt install mariadb-client mariadb-server ```
``` sudo mysql -u root -p ```

CREATE DATABASE autistalivre;
CREATE USER 'sistema'@'localhost' IDENTIFIED BY 'senha';
GRANT ALL PRIVILEGES ON autistalivre.* to 'sistema'@'localhost';
FLUSH PRIVILEGES;
quit

``` apt install apache2 libapache2-mod-php8.2 php8.2 php8.2-mysql php8.2-xml php8.2-curl ```


2º dentro da pasta, executar o comando abaixo para instalar as dependências do projeto laralvel  
``` composer install ```  

3º criar uma copia do arquivo .env.example com o nome .env pois este sera seu arquivo de configurações de ambiente do laravel, entrar no arquivo .env e configurar o acesso ao banco de dados local.  
``` cp .env.example .env ```


4º gerar a chave do projeto laravel.  
``` php artisan key:generate ```  

5º  executar os scripts de migração de banco de dados que são os scripts que vão criar as tabelas no banco (importante já ter configurado o banco MariaDB).
``` php artisan migrate ```  

6º popular tabelas com dados para fins de teste.  
``` php artisan db:seed ```  

7º instalar as dependencias Js.  
``` npm install ```  

8º executar os scripts webpack.  
``` npm run build ```  

9º executar servidor de teste do laravel.  
``` php artisan serve ```  


Enjoy!  