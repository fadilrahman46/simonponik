# -*- coding: utf-8 -*-
"""
Created on Mon Jul  1 20:06:47 2019

@author: hape
"""

import MySQLdb


db = MySQLdb.connect("localhost","root","","simonponik")
cursor = db.cursor()

#input 
tanaman = str(input("masukkan nama tanaman : "))
ph = str(input("masukkan ph ideal : "))
ppm = str(input("masukkan ppm ideal : "))
humid = str(input("masukkan kelembapan ideal : "))
level = str(input("masukkan ketinggian air ideal : "))
temp = str(input("masukkan suhu air ideal : "))

#masuk database 
tbl_tanam =[]


inp_tanam= tanaman,ph,ppm,humid,level,temp
tbl_tanam.append(inp_tanam)


sql = "insert into set_poin (nama_tanaman,ph,ppm,room_humidity,water_level,water_temperature) values (%s,%s,%s,%s,%s,%s)"
inptdata = cursor.executemany(sql,tbl_tanam)

print("berhasil",tbl_tanam)

db.commit()
db.close()