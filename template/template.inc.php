<!DOCTYPE html>

<html>
    <head>
        <title>{{titre}}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="./styles/styles.css" rel="stylesheet" type="text/css"/>
        
    </head>
    
    <body>
        
        <header>
            
            <nav>
                <ul>
                    <li><a href="./index.php?page=ticket">Tickets</a></li>
                    <li><a href="./index.php?page=utilisateurs">Utilisateurs</a></li>
                    <li><a href="./index.php?page=configuration">Configuration</a></li>
                </ul>
            </nav>
            
            <form method="post" action="./index.php?page=search">
                <label for="search">Rechercher un ticket</label>
                <input type="search" name="search" id="search" />
                <input type="hidden" value="ticket" />
                <input type="submit" value="chercher" />
            </form>
            
        </header>

        <main>
            {{corps}}
        </main>
        
        <footer>
            <a href="https://github.com/phil6611/tickets" >Fork me on Github</a>
        </footer>
        
        
    </body>
    
</html>
