#!usr/bin/env/ python 
## parpadea.py 
#Importamos la libreria y le cambiamos el nombre a GPIO 
import RPi.GPIO as GPIO 
 
#Necesario para los delays 
import time 
 
#Establecemos el sistema de numeracion que queramos,  
#en este caso el sistema BCM 
GPIO.setmode(GPIO.BCM) 
 
#Configuramos el pin GPIO 27 como una salida 
GPIO.setup(27, GPIO.OUT) 
 
#Encendemos y apagamos el led 5 veces 
for i in range(0,10): 
 
        GPIO.output(27, GPIO.HIGH) 
        time.sleep(0.5) 
        GPIO.output(27, GPIO.LOW) 
        time.sleep(0.5) 
 
#Y liberamos los GPIO 
GPIO.cleanup() 



