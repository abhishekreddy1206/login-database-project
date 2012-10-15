import MySQLdb

db=MySQLdb.connect("localhost","root","","cs564_abhishek")
c=db.cursor()

sql1="""INSERT INTO user VALUES(12345678,'sandeep','4589REDONDOdrive','sandy','ydnas','E','EC2')"""
c.execute(sql1)

sql2="""INSERT INTO system VALUES('23byub23bibi','127.0.1.2','lovely','L')"""
c.execute(sql2)

sql3="""UPDATE user set address='1305copper' where name='sandeep'"""
c.execute(sql3)

sql4="""UPDATE system SET MACaddress='wno3409nmsni',OPERATINGSYSTEM='M' WHERE SYSTEMNAME='lovely'"""
c.execute(sql4)

sql5="""DELETE FROM user WHERE BANNERID>90000000"""
c.execute(sql5)

sql6="""DELETE FROM system WHERE IPaddress>8000000000"""
c.execute(sql6)

