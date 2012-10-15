import random as rd
import MySQLdb
alphabet = 'a1234567890bcdefghijklmnopqrstuvwxyz'
mi = 4
ma = 8
total = 10
s=''
P = []

alpha = 'qwertyuiopasdfghjklzxcvbnm'
deptid = '0123456789qwertyuiopasdfghjklzxcvbnm'
floor = '12345'
building='1234567890'
def stri(k):
  

  P = []
  n=0
  s=''
  f=''
  g=''
  h=''
  d=0
  for i in xrange(k):
    P.append([])
    for l in xrange(1):
      #for j in range(1):
        for m in rd.sample(building,3):
          h+=m
        P[i].append(h)

        for x in rd.sample(alpha,8):
          s+=x
        P[i].append(s)
        
        for m in rd.sample(alphabet,10):
          g+=m
        P[i].append(g)

              
        
        h=''
        s=''
        g=''
     
        
  return P

t=stri(10)
print t


def sql(t):
  db=MySQLdb.connect("localhost","root","","cs564_abhishek")
  c=db.cursor()
  at=tuple(t)
  print at
  sql="""INSERT INTO LOCATION(BUILDINGno,BUILDINGNAME,CAMPUSAREA) VALUES (%s, %s, %s)"""
  c.executemany(sql,at)
  db.commit()
sql(t)
