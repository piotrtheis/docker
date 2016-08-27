Zestaw kontenerów do szybkiego stawiania środowiska


### Podstawowe komendy

Odpalanie kontenerów
```bash
    $ docker-compose up -d
```

Zatrzymanie kontenerów
```bash
    $ docker-compose down
```

Listowanie, usuwanie, stopowanie

```bash
    $ docker ps         # odpalone
    $ docker ps -a     # wszystkie
    
    $ docker rm $(docker ps -a -q)
    $ docker stop $(docker ps -a -q)
```



###MySql

Jeżeli <code>docker-compose</code> będzie się wywalał na mysql to 
trzeba zatrzymać usługę mysql na local-u
 
