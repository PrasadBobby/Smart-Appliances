import  RPi.GPIO as GPIO
import time


GPIO.setmode(GPIO.BCM)
GPIO.setup(20, GPIO.IN,pull_up_down=GPIO.PUD_UP)
GPIO.setwarnings(False)
#GPIO.setup(8,GPIO.OUT)


while True:
    inputValue = GPIO.input(20)
    if (inputValue == False):
        print("Gas ")
        print( "Leaked" )
        #GPIO.output(8,GPIO.LOW)
        time.sleep(1)
    else:
        #GPIO.output(8,GPIO.HIGH)
        print("")
GPIO.cleanup()
