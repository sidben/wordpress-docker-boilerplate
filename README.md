# Modelo para projetos Wordpress via Docker

Este modelo permite criar plugins e/ou temas filhos para Wordpress.


### Acesso local

- Front End: http://localhost:8080/
- Back End: http://localhost:8080/wp-login.php
- phpMyAdmin: http://localhost:8081/
- MailHog: http://localhost:8025/

| Usuário | Senha |
|---|---|
| admin | senha123 |


### Comandos Docker
```
docker-compose up -d
docker-compose down
```


### Referências

[Theme Handhook - Child Themes](https://developer.wordpress.org/themes/advanced-topics/child-themes/)

[DevinVinson/WordPress-Plugin-Boilerplate](https://github.com/DevinVinson/WordPress-Plugin-Boilerplate/)