<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form id="form">
    <input type="text" name="name" value="rdndeveloper 2">
    <input type="text" name="description" value="Melhor estudante da região">
    <input type="file" name="photo" id="file">
</form>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">
  $('#file').on('change', function () {
    let formData = new FormData();
    formData.append('name', 'rdndeveloper 2');
    formData.append('description', 'Melhor estudante da região');
    formData.append('photo', $('#file')[0].files[0]);
    let headers = {
      'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijc3NTc1MDE0YmY3YjVhZTI1MzJhYmJhYTNhYzE2MDNkYjEwNjg2ZGI5NzdiNjA0ZWE5NjQyYTc4OTM5YzAwMmRhNjBkNGU5MDJmMzE1ZGExIn0.eyJhdWQiOiIzIiwianRpIjoiNzc1NzUwMTRiZjdiNWFlMjUzMmFiYmFhM2FjMTYwM2RiMTA2ODZkYjk3N2I2MDRlYTk2NDJhNzg5MzljMDAyZGE2MGQ0ZTkwMmYzMTVkYTEiLCJpYXQiOjE1MTQ5ODY3MDYsIm5iZiI6MTUxNDk4NjcwNiwiZXhwIjoxNTQ2NTIyNzA2LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.z2VwwxO7g1eVp408tSLxRh2ByU8ngDTdJdlnlS6o2ZrbY4GaYyeRd_ruzl34Ud42LPJmULPE4ld4N6m0OG_TWHEvB0-YfoXunaskKUUrLFw0J5cR8IRwn_Ma09qJe7X4L9xad2UKwa88BDWY4y_esmQOlc765Lv5EhdA_2HDpKXfFWfvA6xXN0L5GzdMwCkdWiy68AsyqtWsOpGDjf3hVBTxsO2reDxmGKaY36Kw0cGcO5KuvkkkbNTAJm02K06YfgxcpS9NZNrZNX3H5b3W1FqQtKY7590uztk9NXhp955_bgNlodkX-2qnXib5JAqeOTO7vzVHhkBJyl7zRo3SZ8zGVSnnx1nKrjjZZ_DuoChy2UBKTM9l8Q1Mf_O6T8dcFwCs-NZfvNn9FtNciykF8WaK7cUGZ_-UL6TI_Rh4b8XGPH5femmEVdF5a_8OWX5GfbSJ0wiqVZ2YlwY4Jsa3b6kDcCqbnrX1xXvMfBVC6nJ-B_vbBTw2c-Ei39nA7TrNMLYSP7npOJBmr0Dg4RBeBJSnl3uOmLrpUxzCYT5dCxzVj6EmofaJslQbAWXN1nV6ekiy5bP0_2XS34ogMFs8kdAwA4NJpDczNCTT7Tecat6wr8j2dZPu4TzwWCyj2pYRGGUBXvxVKSeiap4wqXMR3UFFgYwcFSo_kW4NtcvLkbA',
      //'content-type': 'multipart/form-data'
      'content-type': 'application/x-www-form-urlencoded'
    }
    axios.post('http://localhost:8000/api/v1/restaurants/2', formData, {headers: headers})
  })
</script>
</body>
</html>