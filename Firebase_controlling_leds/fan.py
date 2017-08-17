#!/usr/bin/python
import sys
import signal
import time
from gpiozero import LED
from func.Conexion import Conexion

garagedoor = LED(21)


while(1):
    def procesa(value_garagedoor):
        print ("Response")
        
        if value_garagedoor:
         garagedoor.on()
         print ("On")
        else:
         garagedoor.off()
         print ("Off")

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
