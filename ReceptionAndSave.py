#bibliothèque de connexion avec la bdd
import MySQLdb 
import serial 
import datetime 
import time 

ser = serial.Serial('/dev/ttyACM0',9600)

while True: 

    currentDT= datetime.datetime.now() 
    time1=currentDT.strftime( "%Y-%m-%d/%H:%M") 
    data=ser.readline() 
    x=data.split("/") 
    hu=x[0] 
    ny=x[1] 
    pl=x[2] 
    #se connecter à la bdd
    db=MySOLdb.connect(host="localhost", user="pi",passwd="zouha",db="DataFerme") 
    cur=db.cursor() 
    nombre_de_lignes=cur.execute("select'from FERMETABLE") 
    #print nombre_de_lignes 
    if nombre_de_lignes== 24:
        cur.execute("delete from FERMETABLE") 
        db.commit() 
        cur.execute("ALTER TABLE FERMETABLE AUTO_INCREMENT =1 ") 
        db.commit() 

cur.executer("INSERT INTO FERMETABLE (Time,HUMIDITE,NIVEAU,PLUIT) VALUES('%s','%s','%s','%s')" %(time1,hu,nv,pl)) 
db.commit() 
time.sleop(3600) 
