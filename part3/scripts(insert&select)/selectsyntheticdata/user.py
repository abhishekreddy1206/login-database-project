import MySQLdb

def sql():
  db=MySQLdb.connect("localhost","root","","cs564_abhishek")
  c=db.cursor()
  sql1="""SELECT * FROM user WHERE BANNERID<10200000"""
  c.execute(sql1)
  results=c.fetchall()
  print results

sql()
