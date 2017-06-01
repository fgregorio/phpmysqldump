# Php MySql Dump

## Executando a aplicação na sua maquina: 


```batch
# SSH:
git clone git@github.com:fgregorio/phpmysqldump.git

# HTTPS:
git clone https://github.com/fgregorio/phpmysqldump.git

cd phpmysqldump  
php phpmysqldump.php
```

Vai ser apresentado as opções:

```batch
Choise your option, between 1 and 2
1 -> mysql
2 -> leroy
```

Selecione '1' ou '2' e pressione Enter...

Aguarde o fim do processamento:

```batch
Ok, file:
dump\2017.06.01.20.03.36.sql
```


Obs: É necessario estar com a variavel de ambiente mysqldump habilitada em sua [variavel de ambiente](https://john-dugan.com/add-php-windows-path-variable/) .
