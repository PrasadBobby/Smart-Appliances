from firebase import firebase
import threading
import time

class Conexion(threading.Thread):

    def __init__(self, retorno):
        threading.Thread.__init__(self)
        self.retorno = retorno
        self.fire = firebase.FirebaseApplication('https://smart-home-6ad7f.firebaseio.com/', None)
        self.ultimo_estado_sala = self.fire.get('/bedroom/', None)
        self.ultimo_estado_habitacion = self.fire.get('/bedroom/livled', None)
        self.retorno(self.ultimo_estado_sala, self.ultimo_estado_habitacion)

    def run(self):
      ES = []
      ES.append(self.ultimo_estado_sala)
      EH = []
      EH.append(self.ultimo_estado_habitacion)
      i = 0
  
      while True:
       estado_actual_sala = self.fire.get('/bedroom/led', None)
       ES.append(estado_actual_sala)
       estado_actual_habitacion = self.fire.get('/bedroom/livled', None)
       EH.append(estado_actual_habitacion)

       if ES[i] != ES[-1]:
        self.retorno(estado_actual_sala, estado_actual_habitacion)
   
       del ES[0]

       if EH[i] != EH[-1]:
        self.retorno(estado_actual_sala, estado_actual_habitacion)
   
       del EH[0]
       
       i = i+i
       time.sleep(0.1)
