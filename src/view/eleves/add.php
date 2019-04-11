<!doctype>
<html>
    
    <body>
        <form action="formEleve" method="post">
            <div>
                <label for="nom">Nom : </label>
                <input name="nom" id="nom" type="text">
            </div>
            <br> 
            <div>
                <label for="nom">Prenom : </label>
                <input name="prenom" id="prenom" type="text">
            </div>
            <br>
            <div>
                <input name="add" type="submit">
            </div>
        </form>
        
        <?= $data['result'] ?>
    </body>
    
</html>