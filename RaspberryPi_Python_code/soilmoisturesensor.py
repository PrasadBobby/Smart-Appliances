import  RPi.GPIO as GPIO
import time


GPIO.setmode(GPIO.BCM)
GPIO.setup(23, GPIO.IN,pull_up_down=GPIO.PUD_UP)
GPIO.setwarnings(False)
GPIO.setup(25,GPIO.OUT)


while True:
    inputValue = GPIO.input(23)
    if (inputValue == False):
        print("moisture is high ")
        GPIO.output(25,GPIO.HIGH)
    else:
        GPIO.output(25,GPIO.LOW)
GPIO.cleanup()

