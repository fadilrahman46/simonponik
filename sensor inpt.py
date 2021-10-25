# -*- coding: utf-8 -*-
"""
Created on Mon Jul  1 20:58:57 2019

@author: hape
"""

import MySQLdb

import time
import datetime
#import tkinter
#from tkinter import messagebox
from datetime import datetime 
import random

db = MySQLdb.connect("localhost","root","","simonponik")
cursor = db.cursor()

#root = tkinter.Tk()
#root.withdraw()

sql2 = cursor.execute("select count(*) from set_poin")
data = cursor.fetchone()

jml = data[0]
w = 1

#PILIH TANAMAN
print("=====pilih_tanaman======") 
while w < jml+1 :
        z = str(w)
        sql = cursor.execute("select nama_tanaman from set_poin where id_tanaman ='"+z+"'")
        tanaman = cursor.fetchone()
        t = str(tanaman[0])
        print(w,t)
        w+=1
nm_tanaman =  str(input("masukkan nama tanaman : "))

#PILIH SENSOR
print("=======pilih sensor======")
print("1.PH")
print("2.PPM")
print("3.Kelembapan")
print("4.Tinggi Air")
print("5.Suhu Air")

sensor = int(input("masukkan nomor sensor :"))
    
waktu_cek =  input("masukkan waktu (menit) : ")
total_cek =  input("masukkan total cek : ")

a = cursor.execute("select * from set_poin where nama_tanaman like '%"+nm_tanaman+"%'")
b = cursor.fetchone()
id_tanaman = str(b[0])


#sensor PH
if sensor == 1:
    pilih_sensor = 'ph'
    nilai = 0
    ttc = int(total_cek)
    wtc =  int(waktu_cek)
    nilai_max = ttc
    while nilai < nilai_max :
        #x = 0    
        #y = 1
        ph = str(random.randint(0,14))
        #while x < y :
        t_end = time.time() + 60 * wtc
        v=0
        tbl_ph =[]
            
        while time.time() < t_end:
        # do whatever you d
            print("-----")
            v+=1  
           
        waktu = str(datetime.now())
        inp_ph= id_tanaman,waktu,ph
        tbl_ph.append(inp_ph)
        sq = "insert into "+pilih_sensor+" (id_tanaman,Waktu,PH) values (%s,%s,%s)"
        inpt = cursor.executemany(sq,tbl_ph)
        print("BERHASIL",tbl_ph)
            
        nilai+=1 

#SENSOR PPM    
if sensor == 2:
    pilih_sensor = 'ppm'     
    nilai = 0
    ttc = int(total_cek)
    wtc =  int(waktu_cek)
    nilai_max = ttc
    while nilai < nilai_max :
        #x = 0    
        #y = 1
        ph = str(random.randint(300,2500))
        #while x < y :
        t_end = time.time() + 60 * wtc
        v=0
        tbl_ph =[]
            
        while time.time() < t_end:
        # do whatever you d
            print("-----")
            v+=1  
           
        waktu = str(datetime.now())
        inp_ph= id_tanaman,waktu,ph
        tbl_ph.append(inp_ph)
        sq = "insert into "+pilih_sensor+" (id_tanaman,Waktu,Ppm) values (%s,%s,%s)"
        inpt = cursor.executemany(sq,tbl_ph)
        print("BERHASIL",tbl_ph)
            
        nilai+=1 
        
#SENSOR KELEMBAPAN        
if sensor == 3:
    pilih_sensor = 'room_humidity'
    nilai = 0
    ttc = int(total_cek)
    wtc =  int(waktu_cek)
    nilai_max = ttc
    while nilai < nilai_max :
        #x = 0    
        #y = 1
        ph = str(random.randint(20,60))
        #while x < y :
        t_end = time.time() + 60 * wtc
        v=0
        tbl_ph =[]
            
        while time.time() < t_end:
        # do whatever you d
            print("-----")
            v+=1  
           
        waktu = str(datetime.now())
        inp_ph= id_tanaman,waktu,ph
        tbl_ph.append(inp_ph)
        sq = "insert into "+pilih_sensor+" (id_tanaman,Waktu,Humidity) values (%s,%s,%s)"
        inpt = cursor.executemany(sq,tbl_ph)
        print("BERHASIL",tbl_ph)
                        
        nilai+=1 
        
#SENSOR TINGGI        
if sensor == 4:
    pilih_sensor = 'water_level'
    nilai = 0
    ttc = int(total_cek)
    wtc =  int(waktu_cek)
    nilai_max = ttc
    while nilai < nilai_max :
        #x = 0    
        #y = 1
        ph = str(random.randint(10,50))
        #while x < y :
        t_end = time.time() + 60 * wtc
        v=0
        tbl_ph =[]
            
        while time.time() < t_end:
        # do whatever you d
            print("-----")
            v+=1  
           
        waktu = str(datetime.now())
        inp_ph= id_tanaman,waktu,ph
        tbl_ph.append(inp_ph)
        sq = "insert into "+pilih_sensor+" (id_tanaman,Waktu,Water_Level) values (%s,%s,%s)"
        inpt = cursor.executemany(sq,tbl_ph)
        print("BERHASIL",tbl_ph)
            
        nilai+=1 

#SENSOR SUHU        
if sensor == 5:    
    pilih_sensor = 'water_temperature'
    nilai = 0
    ttc = int(total_cek)
    wtc =  int(waktu_cek)
    nilai_max = ttc
    while nilai < nilai_max :
        #x = 0    
        #y = 1
        ph = str(random.randint(10,37))
        #while x < y :
        t_end = time.time() + 60 * wtc
        v=0
        tbl_ph =[]
            
        while time.time() < t_end:
        # do whatever you d
            print("-----")
            v+=1  
           
        waktu = str(datetime.now())
        inp_ph= id_tanaman,waktu,ph
        tbl_ph.append(inp_ph)
        sq = "insert into "+pilih_sensor+" (id_tanaman,Waktu,Temperature) values (%s,%s,%s)"
        inpt = cursor.executemany(sq,tbl_ph)
        print("BERHASIL",tbl_ph)
            
        nilai+=1 

   
    
db.commit()
db.close()