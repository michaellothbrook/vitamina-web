# VITAMINA-WEB - Criando Ambiente Local

## Requisitos (Versões testadas)
- Docker
- PHP = 7.4
- Composer >= 2.0.9
- Nodejs 14.21.1

&nbsp;

## Primeiro passo

- Instale as dependência do ambiente ( ***raiz do projeto*** ) onde será criada 3 pastas `/wordpress`, `/vendor`.
```
$ composer install
```

&nbsp;

- Iniciando o docker onde será criado 1 pasta chamada `/mysql`.
```
-- Linux & Windows --
$ docker-compose up -d
```

&nbsp;

- Caso necessario de permissão máxima para todas as pastas e arquivos do projeto.
```
sudo chmod -R 777 *
```

&nbsp;

## Segundo passo
+ Com o ambiente montado e o docker rodando iremos copiar nosso banco de dados que esta localizado na raiz do projeto `/db.sql` para dentro de /mysql.
    + Lembre que a pasta /mysql só é gerada depois de iniciar o docker (caso não seja criada basta cria-la).
    + Para importar o banco de dados indico pesquisar como realizar esse processo no google mas deixarei um vídeo de como fazer com o Mysql Workbench [Importar banco de dados com Workbench](https://www.youtube.com/watch?v=016N1WIyKdQ).
    + Também é possivel importar o arquivo .sql via linha de comando.
        + Para isso vamos acessar o container mysql do docker utilizando o seguinte comando: `docker exec -it vitamina_db bash`;
        + Agora você está dentro do container `mysql` e para finalizar a importação, basta executar o seguinte comando `mysql -uroot -proot vitamina < /var/lib/mysql/db.sql`; 

&nbsp;

## Terceiro passo

*Obs: caso esteja acessando o banco pelo Mysql Workbench execute apenas os comandos sql nele sem acessar o docker bash*

- Depois de importar o banco de dados precisamos corrigir alguns dados do nosso banco para ele rodar localmente, execute os comandos na ordem:
    ```
    $ docker exec -it vitamina_db bash
    $ mysql -uroot -proot
    $ USE vitamina
    $ UPDATE wp_options SET option_value = 'http://localhost/' WHERE option_id = 1;
    $ UPDATE wp_options SET option_value = 'http://localhost/' WHERE option_id = 2;
    ```

&nbsp;

## Quarto passo *IMPORTANTE*
Agora que você já tem o Wordpress instalado com o seu tema *ativo* e os devidos *plugins* também, basta executar o comando os comandos de build do sage.
É possivel encontrar os comandos no **README.md** da pasta `./themes/vitamina-theme` ou no site oficial do roots sage:
+ Na raiz de './themes/vitamina-web' execute o comando: `composer install` e `yarn install ou npm install`, logo após execute o comando: `yarn build` ou `npm run build`;

&nbsp;

## Quinto passo

Abra agora no navegador http://localhost.
*Obs: as credenciais de acesso ao painel se encontram no email.*
Atenção: caso de algum erro ao abrir o localhost tente derrubar o docker novamente `docker-compose down` =D
&nbsp;

## Banco de Dados
```
database: vitamina
user: root
password: root
host: vitamina_db
```

## Gerar Dump do Banco 

```
docker exec -it <id_container> bash -c 'mysqldump -uroot -proot vitamina > db.sql'
docker cp <id_container>:db.sql .
```