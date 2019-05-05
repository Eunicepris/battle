<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Table des habitants de l'Afrique</h2>
<form class="form-group">
    <input class="form-control" name="supreficie" placeholder="Entrez une Taille en km2">
    <div class="row">
        <div class="col-md-6">
            <select class="form-control">
            <option value="volvo">Abidjan</option>
            <option value="saab">Bouake</option>
            <option value="vw">Yamoussoukro</option>
            </select>
        </div>
        <div class="col-md-6">
                <button class="btn btn-primary">Modifier la superficie</button>

        </div>
    </div>
  </form>
  <table class="table">
    <thead>
      <tr>
        <th>nom</th>
        <th>superficie</th>
        <th>Pays</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Abidjan</td>
        <td>**********</td>
        <td>
           côte d'Ivoire
        </td>
      </tr>
      <tr>
        <td>Bouake</td>
        <td>**********</td>
        <td>
          Côte d'Ivoire
        </td>
      </tr>
        <tr>
        <td>Yamoussoukro</td>
        <td>**********</td>
        <td>
          Côte d'Ivoire
        </td>
      </tr>
      
      
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
