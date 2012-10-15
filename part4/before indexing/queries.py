import MySQldb

db=MySQLdb.connect("localhost","root","","cs564_abhishek")
c=db.cursor()

sql1="""select * from location where buildingno<11 and campusarea='duckpond'"""

c.execute(sql1)
for i in c:
    print i

sql2="""SELECT systemname FROM system WHERE operatingsystem='L' and ipaddress='127.0.82.63'"""

c.execute(sql2)
for i in c:
    print i

sql3="""SELECT name,username FROM user WHERE bannerid>10000011 and bannerid<12000000 and accessrights='W'"""
c.execute(sql3)
for i in c:
    print i

sql4="""SELECT * FROM lab l CROSS JOIN has h CROSS JOIN system s ON l.LABID=h.LABID AND h.MACaddress=s.MACaddress"""
c.execute(sql4)
for i in c:
    print i

sql5="""SELECT * FROM user u CROSS JOIN department d ON u.DEPTID=d.DEPTID"""
c.execute(sql5)
for i in c:
    print i

sql6="""(SELECT LABID FROM at) UNION (SELECT LABID FROM belongs_to)"""
c.execute(sql6)
for i in c:
    print i

sql7="""SELECT * FROM user WHERE BANNERID<12000000 GROUP BY ACCESSRIGHTS"""
c.execute(sql7)
for i in c:
    print i

sql8="""SELECT DISTINCT CAMPUSAREA FROM location WHERE BUILDINGno<12"""
c.execute(sql8)
for i in c:
    print i

sql9="""SELECT * FROM user WHERE BANNERID<12000000 ORDER BY ACCESSRIGHTS"""
c.execute(sql9)
for i in c:
    print i

sql10="""select count(bannerid) from user where bannerid>10000000 and bannerid<40000000"""
c.execute(sql10)
for i in c:
    print i

