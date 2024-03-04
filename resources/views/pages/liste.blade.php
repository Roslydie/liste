<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
          
           <h1>Bienvenu</h1>
       <table>
                 <tr>
                       <th>Nom:</th>
                       <th>Prenom:</th>
                       <th>Profession:</th>
                 </tr>  
                 @foreach ($utilisateur as $u)
                     
                     <tr>
                         <td> {{ $u->nom }} </td>
                         <td> {{ $u->prenom }} </td>
                         <td> {{ $u->prof }} </td>
                       
                     </tr>
                 @endforeach
              
              <input type="file" name="cv" id="cv" required placeholder="insérer votre CV">
              <input type="file" name="attestation" id="attestation" required placeholder="insérer votre Attestation">
       </table>
</body>
</html>