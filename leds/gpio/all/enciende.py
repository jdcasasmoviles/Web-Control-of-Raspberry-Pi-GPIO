#!usr/bin/env/ python
## enciende.py
#Importamos la libreria y le cambiamos el nombre a GPIO
import RPi.GPIO as GPIO
#Establecemos el sistema de numeracion que queramos, en este caso el sistema BCM
GPIO.setmode(GPIO.BCM)
#Configuramos el pin GPIO como una salida
GPIO.setup(27, GPIO.OUT) 
GPIO.setup(17, GPIO.OUT) 
GPIO.setup(4, GPIO.OUT) 
GPIO.setup(22, GPIO.OUT)
#Encendemos el led
GPIO.output(27, GPIO.HIGH) 
GPIO.output(17, GPIO.HIGH) 
GPIO.output(4, GPIO.HIGH)
GPIO.output(22, GPIO.HIGH)
