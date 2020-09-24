<!DOCTYPE html>
<html>
<body>

<h2>Convert a JavaScript object into a JSON string, and send it to the server.</h2>

<script>

</script>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<p>Looping through an array using a for in loop:</p>

<p id="demo"></p>

<script>
var myObj, i, x = "";
var myObj = {
 “id” : 4, “name” : “abc”,
 “id” : 10, “name” : “ab2”,
 “id” : 5, “name” : “abc3”,
 “id” : 6, “name” : “abc5”
}

for (i in myObj.cars) {
  x += myObj.cars[i].val + "<br>";
}
json.sort(function(a, b){
    return a.id - b.id;
});
document.getElementById("demo").innerHTML = x;
</script>

</body>
</html>


