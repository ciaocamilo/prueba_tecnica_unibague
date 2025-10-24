# Prueba técnica Unibague
Esta prueba se encarga de evaluar el dominio de competencias específicas para crear un pequeño sistema de backend y frontend que sea capaz de procesar un CRUD de contratos, de acuerdo a una serie de requerimientos específicos.

#### Desarrollado por Camilo Andrés Castañeda Galindo

## Versiones
PHP 8.3.11
Composer version 2.8.8
Laravel 11
Postgresql 

## Ejecución
1 - Verificar instalación de PHP con `PHP -v`
2 - Verificar instlación de PostgreSQL con `psql --version`
3 - Crear base de datos y usuario mediante:
`CREATE DATABASE contract_camilo;`
`CREATE USER camilo WITH PASSWORD 'unibague';`
`GRANT ALL PRIVILEGES ON DATABASE contract_camilo TO camilo;`
`ALTER ROLE camilo`
`CREATEDB`
`CREATEROLE;`
`ALTER DATABASE contract_camilo OWNER TO camilo;`