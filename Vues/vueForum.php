<?php require 'Vues/header.php' ?>

<link rel="stylesheet" type="text/css" href="../Contenu/ForumCSS.css">


<p>Bienvenue sur le Forum du site MyBoost</p>
<table>
<tr>
<td>Pseudo</td>
<td><INPUT type="text" name="pseudo" value="<?php if(isset($_POST['pseudo'])){ echo htmlentities($_POST['pseudo']);}?>"/></td>
</tr>
<tr>
<td>Message</td>
<td><INPUT type="text" name="MESSAGE" value="<?php if(isset($_POST['message'])){ echo htmlentities($_POST['message']);}?>"/> </td>
</tr>

<?php require '../Vues/footer.php'; ?>
