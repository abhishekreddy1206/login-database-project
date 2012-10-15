import random as rd
import MySQLdb
import time

def strTimeProp(start, end, format, prop):
    """Get a time at a proportion of a range of two formatted times.

    start and end should be strings specifying times formated in the
    given format (strftime-style), giving an interval [start, end].
    prop specifies how a proportion of the interval to be taken after
    start.  The returned time will be in the specified format.
    """

    stime = time.mktime(time.strptime(start, format))
    etime = time.mktime(time.strptime(end, format))

    ptime = stime + prop * (etime - stime)

    return time.strftime(format, time.localtime(ptime))


def randomDate(start, end, prop):
    return strTimeProp(start, end, '%m/%d/%Y %I:%M %p', prop)

'''
The following function will be used to randomly assign data to the query

'''
alphabet = 'a1234567890bcdefghijklmnopqrstuvwxyz'
alpha = 'qwertyuiopasdfghjklzxcvbnm'
labid = '0123456789qwertyuiopasdfghjklzxcvbnm'
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
        for m in rd.sample(alpha,3):
          h+=m
        P[i].append(h)

        for x in xrange(1):
          s=randomDate("1/1/1990 12:00 AM", "1/1/2012 11:59 PM", rd.random())
        P[i].append(s)
        
        for m in xrange(1):
          g=randomDate("1/1/1990 12:00 AM", "1/1/2012 11:59 PM", rd.random())
        P[i].append(g)

        for x in rd.sample(labid,3):
          f+=x
        P[i].append(f)
        
        
        h=''
        s=''
        g=''
        f=''
        
  return P

t=stri(480)
print t

'''
The following function will be used to connect to the database and the insertion into the database takes place
'''
def sql(t):
  db=MySQLdb.connect("localhost","root","","cs564_abhishek")
  c=db.cursor()
  at=tuple(t)
  print at
  sql="""INSERT INTO ACTIVITY(AIV,LOGINTIME,LOGOUTTIME,LABID) VALUES (%s, %s, %s, %s)"""
  c.executemany(sql,at)
  db.commit()
sql(t)
