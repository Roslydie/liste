<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h1>Login Utilisateur</h1>
    <form action="{{url('save')}}" method="POST">
    @csrf

            <div class="mb-3">
           <label for="nom">Nom *</label>
           <input type="text" class="form-control" id="nom" name="nom" >
             </div>

             <div class="mb-3">
             <label for="prenom">Prenom *</label>
             <input type="text" class="form-control" id="prenom" name="prenom" >
           </div>
           <div class="mb-3">
           <label for="email">Email *</label>
           <input type="email" class="form-control" id="mail" name="mail" >
           </div>

            <div class="mb-3">
           <label for="tel">Tel *</label>
           <input type="tel" class="form-control" id="tel" name="tel" >
           </div>
          
           <div class="mb-3">
           <label for="prof">Prof *</label>
           <input type="prof" class="form-control" id="prof" name="prof" >
           </div>
        
           <div class="mb-3">
           <label for="adresse">Adresse *</label>
           <input type="adresse" class="form-control" id="adresse" name="adresse" >
           </div>
           <div class="mb-3">
           <label for="password">Mot de passe *</label>
           <input type="password" class="form-control" id="mdp" name="mdp" >
           </div>

        
    <!-- @if (session('status'))
   <a href="" class="botton-text"> S'inscrire ((session('status'))) </a>
   @endif -->
    <!-- <button type="submit">S'inscrire</button> -->
    <div class="row">
              <div class="col-md-12-mb-12">
                <input type="submit" value="Sign up" class="btn-btn-default hvr-hover">
              </div>
    </div>
    </form>

    </div>
</body>
</html>