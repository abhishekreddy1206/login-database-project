import MySQLdb

def sql():
  db=MySQLdb.connect("localhost","root","","cs564_abhishek")
  c=db.cursor()
  sql1="""SELECT * FROM activity WHERE LABID>'10A'"""
  c.execute(sql1)
  results=c.fetchall()
  print results

sql()
