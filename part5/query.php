<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Querying</title>
<script type="text/javascript">
function MM_jumpMenuGo(objId,targ,restore){ //v9.0
  var selObj = null;  with (document) { 
  if (getElementById) selObj = getElementById(objId);
  if (selObj) eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0; }
}
</script>
</head>
<body>

Listings by location:
<form name="form" id="form" action="query1.php" method="get">
  <select name="jumpMenu" id="jumpMenu">
    <option selected="selected">1986</option>
        <option>1986</option>
        <option>1987</option>
        <option>1988</option>
        <option>1989</option>
        <option>1990</option>
        <option>1991</option>
        <option>1992</option>
        <option>1993</option>
        <option>1994</option>
        <option>1995</option>
        <option>1996</option>
        <option>1997</option>
        <option>1998</option>
        <option>1999</option>
        <option>2000</option>
		<option>2001</option>
        <option>2002</option>
        <option>2003</option>
        <option>2004</option>
        <option>2005</option>
        <option>2006</option>
        <option>2007</option>
        <option>2008</option>
        <option>2009</option>
        <option>2010</option>
        <option>2011</option>
        <option>2012</option>
        <option>2013</option>
        <option>2014</option>
        <option>2015</option>
        <option>2016</option>
        <option>2017</option>
        <option>2018</option>
        <option>2019</option>
        <option>2020</option>
  </select>
  <input type="submit" name="go_button" id= "go_button" value="Go" />
  
</form>
<br><br><br>
Search by keyword(s): <br>
Search all accident records by entering a keyword or keywords. Accident records including all of the keywords entered will be displayed. <br>

<form name="form_1" id="form_1" action="query2.php" method="post">
Accident date: &nbsp; 
<input type="text" size="20" maxlength="100" name="text1"><br>
Vehicle Model:&nbsp;
<input type="text" size="20" maxlength="100" name="text2"><br>
Location: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" size="20" maxlength="100" name="text3"><br>
Car Number: &nbsp;&nbsp;&nbsp;		
<input type="text" size="20" maxlength="100" name="text4"><br>

<input type="submit" name="submit1" value="Search">

</form>

</body>
</html>