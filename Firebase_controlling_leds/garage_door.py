#!/usr/bin/python
import sys
import signal
import time
import RPi.GPIO as GPIO
from gpiozero import LED
from garage.Conexion import Conexion

GPIO.setmode(GPIO.BCM)                    ## Use BOARD pin numbering.
GPIO.setup(19 ,GPIO.OUT)
garagedoor = LED(24)
pwm=GPIO.PWM(19,100)                        ## PWM Frequency
pwm.start(5)

angle1=10
duty1= float(angle1)/10 + 2.5               ## Angle To Duty cycle  Conversion

angle2=160
duty2= float(angle2)/10 + 2.5

GPIO.setwarnings (False)

ck=0
while(1):
    def procesa(value_garagedoor):
        print ("Response")
        
        if value_garagedoor:
         garagedoor.on()
         pwm.ChangeDutyCycle(duty1)
         print ("On")
        else:
         garagedoor.off()
         print ("Off")
         pwm.ChangeDutyCycle(duty2)
        sys.stdout.flush()

    try:
     print ("Connecting...")
     t = Conexion(procesa)
     t.daemon=True
     t.start()
     signal.pause()
    except (KeyboardInterrupt, SystemExit):
     raise
     print ("Failed")
GPIO.cleanup()           
