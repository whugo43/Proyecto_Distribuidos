import mysql.connector
from datetime import datetime
from random import randint
def conexion():
    mydb = mysql.connector.connect (
        host="localhost",
        user="root",
        passwd="",
        database="hospital_sd")
    return mydb

def listar(mydb):
    mycursor = mydb.cursor ()
    mycursor.execute ("SELECT cedula FROM paciente")
    myresult = mycursor.fetchall ()
    lista=[]
    for x in myresult:
        lista.append(x[0])
    return sorted(lista)
def listar_ritmo(mydb):
    mycursor = mydb.cursor ()
    mycursor.execute ("SELECT id FROM ritmo_cardiaco")
    myresult = mycursor.fetchall ()
    lista=[]
    for x in myresult:
        lista.append(x[0])
    return sorted(lista)

def agregar_frecuencia(mydb,lista):
    cont=0
    while cont<len(lista):
        mycursor = mydb.cursor ()
        sql = "INSERT INTO  ritmo_cardiaco (id, ritmo) VALUES (%s, %s)"
        val = (lista[cont],ritmo_cardiaco())
        mycursor.execute (sql,val)
        mydb.commit ()
        cont+=1

def agrega_nueva_fecuencia_nuevo_paciente(mydb,paciente):
    mycursor = mydb.cursor ()
    sql = "INSERT INTO  ritmo_cardiaco (id, ritmo) VALUES (%s, %s)"
    val = (paciente, ritmo_cardiaco())
    mycursor.execute (sql, val)
    mydb.commit ()

def actualizar_frecuencia(mydb,lista):
    cont=0
    while cont<len(lista):
        mycursor = mydb.cursor ()
        sql = "UPDATE ritmo_cardiaco  SET ritmo = %s WHERE id = %s"
        val = (ritmo_cardiaco(), lista[cont])
        mycursor.execute (sql,val)
        mydb.commit ()
        cont+=1

def comparar_listas(lista_anterior, lista_nueva):
    if sorted(lista_anterior) == sorted(lista_nueva):

        print("son iguales")
        return True
    else :
        print("son distintas")
        return False

def nueva_lista_actual(lista_actual,lista_nueva,mydb):
    cont=0
    while cont<len(lista_nueva):
        if lista_nueva[cont] in  lista_actual:
            print(" ")
        else:
            agrega_nueva_fecuencia_nuevo_paciente(mydb,lista_nueva[cont])
            lista_actual.append(lista_nueva[cont])
        cont+=1
    return lista_actual
def ritmo_cardiaco():
    hora_inicio = datetime.strptime ("08:30:00", "%X").time ()
    hora_fin = datetime.strptime ("08:34:00", "%X").time ()
    hora_act = datetime.now ().time ()
    if (hora_act > hora_inicio and hora_act < hora_fin):
        return randint (80, 120)
    else:
        return randint (60, 80)

