<!DOCTYPE html>

<html>
    
    <head>
        <title>Page d'accueil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="./styles/styles.css" rel="stylesheet" type="text/css"/>
        
        
    </head>
    
    
    
    
    <body>
        
        <nav></nav>
        
        <main>
            
            <form action="./index.php?page=identification" method="post" autocomplete="on" id="identification">
                {{message}}
                <div class="champs">
                    <label for="id">Identifiant : </label>
                    <input type="text" name="id" id="id" required />
                </div>
                
                <div class="champs">
                    <label for="pwd">Mot de passe : </label>
                    <input type="password" name="pwd" id="pwd" required />
                </div>
                
                <div id="boutons">
                    <input type="submit" name="submit" value="Se connecter" class="boutons" />
                    <input type="reset" name="reset" value="annuler" class="boutons" />
                    <input type="hidden" name="soumis" value="TRUE" />
                    <input type="hidden" name="count" value="{{compte}}" />
                </div>
                
            </form>
            
        </main>
        
        <footer></footer>
        
    </body>
    
    
    
</html>