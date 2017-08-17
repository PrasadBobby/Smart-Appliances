import  RPi.GPIO as GPIO
import time


GPIO.setmode(GPIO.BCM)
GPIO.setup(24, GPIO.IN,pull_up_down=GPIO.PUD_UP)
GPIO.setwarnings(False)
GPIO.setup(8,GPIO.OUT)


while True:
    inputValue = GPIO.input(24)
    if (inputValue == False):
        print("raining ")
        print( "LED on" )
        GPIO.output(8,GPIO.LOW)
    else:
        GPIO.output(8,GPIO.HIGH)
GPIO.cleanup()
