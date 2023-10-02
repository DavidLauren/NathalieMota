<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Trigger/Open The Modal -->
<button id="myBtn">Contact</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">x</span>
    <img src=".../assets/img/Contact-header.png" alt="Image de formulaire de contact">
    
    <!--ajout code court contact-form -->
    <?php echo do_shortcode('[wpforms id="25"]'); ?>
    
    
    
  </div>

</div>
    
</body>
</html>