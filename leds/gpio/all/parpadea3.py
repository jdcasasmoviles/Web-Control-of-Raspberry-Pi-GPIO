#!usr/bin/env/ python
#Importamos la libreria y le cambiamos el nombre a GPIO
import RPi.GPIO as GPIO 
import time 
GPIO.setmode(GPIO.BCM)
#Configuramos el pin GPIO como una salida
GPIO.setup(27, GPIO.OUT) 
GPIO.setup(17, GPIO.OUT) 
GPIO.setup(4, GPIO.OUT) 
GPIO.setup(22, GPIO.OUT) 
temp=0.1
i=0
try:
	while i<10: ## Segundos que durara la funcion
		#Encendemos el led
		GPIO.output(27, GPIO.HIGH)
		time.sleep(temp)
		GPIO.output(17, GPIO.HIGH)
		time.sleep(temp)
		GPIO.output(4, GPIO.HIGH)
		time.sleep(temp)
		GPIO.output(22, GPIO.HIGH)
		time.sleep(temp)
		#Apagamos el led
		GPIO.output(27, GPIO.LOW)
		time.sleep(temp)
		GPIO.output(17, GPIO.LOW)
		time.sleep(temp)
		GPIO.output(4, GPIO.LOW)
		time.sleep(temp)
		GPIO.output(22, GPIO.LOW)
		time.sleep(temp)
		i=i+1
finally:
	GPIO.cleanup() ## Hago una limpieza de los GPIO
