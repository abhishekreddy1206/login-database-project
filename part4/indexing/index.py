import MySQldb

db=MySQldb.connect("localhost","root","","cs 564_abhishek")
c=db.cursor()

sql1="""create index bannerid on user(bannerid)"""
c.execute(sql1)

sql2="""create index macaddress on system(macaddress)"""
c.execute(sql2)

sql3="""create index buildno on location(buildingno)"""
c.execute(sql3)

sql4="""create index deptid on department(deptid)"""
c.execute(sql4)

