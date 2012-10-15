import random as rd
import MySQLdb

alphabet = 'a1234567890bcdefghijklmnopqrstuvwxyz'
alpha = 'qwertyuiopasdfghjklzxcvbnm'
os = 'MWL'
deptid = '0123456789qwertyuiopasdfghjklzxcvbnm'
floor = '12345'
number='1234567890'
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
        for m in rd.sample(alphabet,12):
          h+=m
        P[i].append(h)

        for x in rd.sample(number,10):
          s+=x
        P[i].append(s)
        
        for m in rd.sample(alpha,6):
          g+=m
        P[i].append(g)

        for x in rd.sample(os,1):
          f+=x
        P[i].append(f)
        
        
        h=''
        s=''
        g=''
        f=''
        
  return P

t=stri(490)
print t


def sql(t):
  db=MySQLdb.connect("localhost","root","","cs564_abhishek")
  c=db.cursor()
  at=tuple(t)
  print at
  sql="""INSERT INTO SYSTEM(MACaddress,IPaddress,SYSTEMNAME,OPERATINGSYSTEM) VALUES (%s, %s, %s, %s)"""
  c.executemany(sql,at)
  db.commit()
sql(t)
