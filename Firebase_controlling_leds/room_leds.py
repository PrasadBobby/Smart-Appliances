#!/usr/bin/python
import sys
import signal
import time
from gpiozero import LED
from clases.Conexion import Conexion

led = LED(15)
lawnled = LED(18)

while(1):
    def procesa(value_led, value_lawnled):
        print ("Response")
        
        if value_led:
         led.on()
         print ("On")
        else:
         led.off()
         print ("Off")

        if value_lawnled:
         lawnled.on()
         print ("On")
        else:
         lawnled.off()
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
            
