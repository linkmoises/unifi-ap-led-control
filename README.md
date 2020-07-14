# Unifi AP led control

_Este script permite crear un contenedor docker minimo
personalizado que a través de la API UniFi PHP de
slooffmaster nos deja controlar el estado de los leds
de los puntos de acceso UniFi._

## Uso

Para usarlo, hay que personalizar el contenido del archivo
config.php con los datos.

```
$controlleruser     = ''; // nombre de usuario
$controllerpassword = ''; // password del usuario
$controllerurl      = ''; // url del controlador en formato https://192.168.1.10:8443 sin poner barra al final
$controllerversion  = ''; // versión del controlador
```

Una vez hecho esto, podemos crear nuestro contenedor docker

```
docker build -t unifi-ap-led-control .
```

y luego iniciarlo

```
docker run -d -p8080:8080 unifi-ap-led-control:latest
```

## Agradecimiento

Un eterno agradecimiento a [slooffmaster](https://github.com/slooffmaster)
por crear esta fantástica API PHP para UniFi.
