import time
import mysql.connector
from funciones import *
lista_actual=listar(conexion())
lista_ritmo=listar_ritmo(conexion())

if (len(lista_actual)==0) or (len(lista_ritmo)==0) :
    agregar_frecuencia(conexion(),lista_actual)
cont=0
while(True):
    lista_nueva=listar(conexion())
    if comparar_listas(lista_actual,lista_nueva)==True:
        actualizar_frecuencia (conexion(), lista_actual)
    else:
        lista_actual = nueva_lista_actual(lista_actual, lista_nueva,conexion())
    print ("dormi")
    time.sleep (5)

    print("desperte")
print("se detuvo")



