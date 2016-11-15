#!usr/bin/env/ python
#Importamos la libreria y le cambiamos el nombre a GPIO
import RPi.GPIO as GPIO
import time
import random
GPIO.setmode(GPIO.BCM)
GPIO.setup(17, GPIO.OUT) ## GPIO 17 como salida
GPIO.setup(27, GPIO.OUT) ## GPIO 27 como salida
GPIO.setup(4, GPIO.OUT)
GPIO.setup(22, GPIO.OUT)
temp=0.4
def efecto1():
## efecto 1
	GPIO.output(17, True) ## Enciendo el 17
	GPIO.output(27, False) ## Apago el 27
	GPIO.output(4, True)
	GPIO.output(22, False)
	time.sleep(temp) ## Esperamos segundo
	GPIO.output(17, False) ## Apago
	GPIO.output(27, True) ## Enciendo el 27
	GPIO.output(4, False)
	GPIO.output(22, True)
	time.sleep(temp) ## Esperamos

def efecto2():
##efecto 2
	GPIO.output(27, GPIO.HIGH)
	GPIO.output(17, GPIO.HIGH)
	GPIO.output(4, GPIO.HIGH)
	GPIO.output(22, GPIO.HIGH)
	time.sleep(temp)
	#Apagamos el led
	GPIO.output(27, GPIO.LOW)
	GPIO.output(17, GPIO.LOW)
	GPIO.output(4, GPIO.LOW)
	GPIO.output(22, GPIO.LOW)
	time.sleep(temp)
 
def efecto3():
##efecto 3
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

i= 0
while i<20: 
	var= random.randint(0, 2)
	if var ==0:
		efecto1()
	elif var ==1:
		efecto2()
	else:
		efecto3()
	i=i+1

GPIO.cleanup() ## Hago una limpieza de los GPIO

