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

Po grubszych zmianach takich jak np. dodanie 
xdebug-a trzeba przebudować kontenery

```bash
    $ docker-compose buil && docker-compose up -d
```

###MySql

Jeżeli <code>docker-compose</code> będzie się wywalał na mysql to 
trzeba zatrzymać usługę mysql na local-u


###XDebug

Host kontenera

```bash
    $ docker inspect <NAZWA KONTENERA>
```
W wyplutym wyniku szukaj pola: <code>IPAddress</code>

#####PHPStorm
Pamiętaj o mapowaniu ścieżek
