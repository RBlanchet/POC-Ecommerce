<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark blue">
  <div class='container'>
    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Ecommerce</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Accueil</a>
        </li>
        <?php if (isset($_SESSION['user']) && $valid) : ?>
          <li class="nav-item">
            <a class="nav-link" href="add.php">Ajouter un produit</a>
          </li>
        <?php endif; ?>
      </ul>
      <!-- Search form -->
      <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
          <!--Content-->
          <div class="modal-content">

            <!--Header-->
            <div class="modal-header light-blue darken-3 white-text">
              <h4 class="title"><i class="fa fa-user"></i>Se connecter</h4>
              <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!--Body-->
            <div class="modal-body">
              <form method='POST' action='login/connect.php' style="margin: 0; padding: 0;">
                <div class="md-form form-sm">
                  <i class="fa fa-envelope prefix"></i>
                  <input type="text" class="form-control" name="username">
                  <label for="form30">Nom d'utilisateur</label>
                </div>

                <div class="md-form form-sm">
                  <i class="fa fa-lock prefix"></i>
                  <input type="password" class="form-control" name='password'>
                  <label for="form31">Mot de passe</label>
                </div>

                <div class="text-center mt-2">
                  <button type="submit" class="btn btn-primary">Se connecter<i class="fa fa-sign-in ml-1"></i></button>
                </div>
              </form>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Nous rejoindre ?<a href="#">S'inscrire</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Fermer</button>
            </div>
          </div>
          <!--/.Content-->
        </div>
      </div>
      <?php if (isset($_SESSION['user']) && $valid) : ?>
        <a href="#" data-toggle='modal' data-target="#modalCart" style="color: white;">
          <i class="fa fa-shopping-basket" aria-hidden="true"></i>
        </a>
        <!-- Modal: modalCart -->
        <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <!--Header-->
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Votre panier</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <!--Body-->
              <div class="modal-body">

                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nom</th>
                      <th>Prix</th>
                      <th>Supprimer</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($_SESSION['basket'] as $value) : ?>
                    <tr>
                      <?php foreach($value as $values) : ?>
                        <th scope="row">1</th>
                        <td><?= $values['title'] ?></td>
                        <td><?= $values['price'] ?> €</td>
                        <td><a href='basket/remove.php?id=<?= $values['id'] ?>'><i class="fa fa-remove"></i></a></td>
                      <?php endforeach ?>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>

              </div>
              <!--Footer-->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Fermer</button>
                <button class="btn btn-primary">On paye !</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal: modalCart -->
        <a href="login/deconnect.php" style="color: white;">
          <i class="fa fa-power-off" aria-hidden="true"></i>
        </a>
      <?php else : ?>
        <a href="#" data-toggle='modal' data-target="#modalLogin" style="color: white;">
          <i class="fa fa-user-o" aria-hidden="true"></i>
        </a>
      <?php endif; ?>
      <!-- Collapsible content -->
    </div>
  </nav>
  <!--/.Navbar-->
