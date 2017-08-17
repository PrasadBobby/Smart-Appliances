from firebase import firebase
import threading
import time

class Conexion(threading.Thread):

    def __init__(self, retorno):
        threading.Thread.__init__(self)
        self.retorno = retorno
        self.fire = firebase.FirebaseApplication('https://smart-home-6ad7f.firebaseio.com/', None)
        self.ultimo_estado_sala = self.fire.get('/bedroom/', None)
        self.retorno(self.ultimo_estado_sala)

    def run(self):
      ES = []
      ES.append(self.ultimo_estado_sala)
      i = 0
  
      while True:
       estado_actual_sala = self.fire.get('/bedroom/kitchen', None)
       ES.append(estado_actual_sala)

       if ES[i] != ES[-1]:
        self.retorno(estado_actual_sala)
   
       del ES[0]
       i = i+i
       time.sleep(0.1)
