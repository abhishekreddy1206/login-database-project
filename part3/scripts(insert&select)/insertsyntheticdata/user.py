import random as rd
import MySQLdb
alphabet = 'a1234567890bcdefghijklmnopqrstuvwxyz'
alpha = 'qwertyuiopasdfghjklzxcvbnm'
deptid = '0123456789qwertyuiopasdfghjklzxcvbnm'
floor = '12345'
rights = 'RWE'
banner='1234567890'
def stri(k):

  P = []
  n=0
  s=''
  f=''
  g=''
  h=''
  a=''
  b=''
  c=''
  d=0
  for i in xrange(k):
    P.append([])
    for l in xrange(1):
      #for j in range(1):
        for m in rd.sample(banner,9):
          h+=m
        P[i].append(h)

        for x in rd.sample(alpha,10):
          s+=x
        P[i].append(s)
        
        for m in rd.sample(alphabet,20):
          g+=m
        P[i].append(g)

        for x in rd.sample(alphabet,8):
          f+=x
        P[i].append(f)

        for m in rd.sample(alphabet,8):
          a+=m
        P[i].append(a)

        for y in rd.sample(rights,1):
          b+=y
        P[i].append(b)

        for z in rd.sample(deptid,6):
          c+=z
        P[i].append(c)
        
        a=''
        b=''
        c=''
        h=''
        s=''
        g=''
        f=''
        
  return P

t=stri(500)
print t


def sql(t):
  db=MySQLdb.connect("localhost","root","","cs564_abhishek")
  c=db.cursor()
  at=tuple(t)
  print at
  sql="""INSERT INTO USER(BANNERID,NAME,ADDRESS,USERNAME,PASSWORD,ACCESSRIGHTS,DEPTID) VALUES (%s, %s, %s, %s, %s, %s, %s)"""
  c.executemany(sql,at)
  db.commit()
sql(t)
