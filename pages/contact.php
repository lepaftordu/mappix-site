<h2>Contact</h2>

<form method="post">
    <label>Nom</label>
    <input name="nom" required>
    <label>Message</label>
    <textarea name="message" required></textarea>
    <button type="submit">Envoyer</button>
    <input type="text" placeholder="Votre nom">
    <input type="email" placeholder="Votre email">
    <button type="submit">Envoyer</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    echo"<p>Merci".htmlspecialchars($_POST["nom"]) ;
}
?>  