#!usr/bin/env/ python 
#Importamos la libreria y le cambiamos el nombre a GPIO
import RPi.GPIO as GPIO 
import time
GPIO.setmode(GPIO.BCM)
GPIO.setup(17, GPIO.OUT) ## GPIO 17 como salida
GPIO.setup(27, GPIO.OUT) ## GPIO 27 como salida
GPIO.setup(4, GPIO.OUT) 
GPIO.setup(22, GPIO.OUT)
i= 0
while i<10: ## Segundos que durara la funcion
	GPIO.output(17, True) ## Enciendo el 17
	GPIO.output(27, False) ## Apago el 27
	GPIO.output(4, True) 
	GPIO.output(22, False) 
	time.sleep(0.5) ## Esperamos segundo
	GPIO.output(17, False) ## Apago 
	GPIO.output(27, True) ## Enciendo el 27
	GPIO.output(4, False) 
	GPIO.output(22, True)
	time.sleep(0.5) ## Esperamos  
	i=i+1
print "Ejecucion finalizada"
GPIO.cleanup() ## Hago una limpieza de los GPIO
