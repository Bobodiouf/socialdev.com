<?php require_once "config/header.php" ?>

<div class="container">
    <div class="mb-5">
        <div>
            <div class="row vh-100 d-flex align-items-center justify-content-center">
                <div class="col">
                    <h1 class="fw-bold fs-1 text-primary">socialdev</h1>
                    <p>socialdev is a social network for developer and programer.</p>
                </div>
                <div class="col">
                    <div class="col-md-8">
                        <div class="p-4 shadow">
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Adresse e-mail ou numéro de tél.">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Mot de passe">
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary fw-bold" type="submit" name="connexion">Se connecter</button>
                                </div>
                                <div class="my-3 text-center">
                                    <a href="" class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Mot de passe oublié ?</a>
                                </div>
                                <hr class="text-secondary">
                            </form>
                            <div class="mx-5">
                                <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#inscriptionModal">Créer un nouveau compte</a>
                            </div>
                        </div>
                        <div class="mt-3 p-1">
                            <p class="text-center" style="font-size: .9rem;">
                                <a href="" class="text-decoration-none fw-bold text-black">Créer une page </a>
                                pour une célébrité, une marque ou une entreprise
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div>
            <div class="d-flex flex-column lh-lg" style="font-size: .75rem;">
                <div class="col d-inline-flex">
                    <a href="#" class="text-secondary">Français (France)</a>
                    <a href="#" class="text-secondary">Fula</a>
                    <a href="#" class="text-secondary">English (US)</a>
                    <a href="#" class="text-secondary">Italiano</a>
                    <a href="#" class="text-secondary">Español (España)</a>
                    <a href="#" class="text-secondary">العربية</a>
                    <a href="#" class="text-secondary">Português (Portugal)</a>
                    <a href="#" class="text-secondary">Deutsch</a>
                    <a href="#" class="text-secondary">हिन्दी</a>
                    <a href="#" class="text-secondary">中文(简体)</a>
                    <a href="#" class="text-secondary">日本語</a>
                </div>
                <div class="col d-inline-flex flex-wrap">
                    <a href="#" class="text-secondary">S’inscrire</a>
                    <a href="#" class="text-secondary">Se connecter</a>
                    <a href="#" class="text-secondary">Messenger</a>
                    <a href="#" class="text-secondary">Socialdev Lite</a>
                    <a href="#" class="text-secondary">Watch</a>
                    <a href="#" class="text-secondary">Lieux</a>
                    <a href="#" class="text-secondary">Jeux</a>
                    <a href="#" class="text-secondary">Marketplace</a>
                    <a href="#" class="text-secondary">Meta Pay</a>
                    <a href="#" class="text-secondary">Meta Store</a>
                    <a href="#" class="text-secondary">Meta Quest</a>
                    <a href="#" class="text-secondary">Instagram</a>
                    <a href="#" class="text-secondary">Threads</a>
                    <a href="#" class="text-secondary">Collectes de dons</a>
                    <a href="#" class="text-secondary">Services</a>
                    <a href="#" class="text-secondary">Centre d’information sur les élections</a>
                    <a href="#" class="text-secondary">Politique de confidentialité</a>
                    <a href="#" class="text-secondary">Centre de confidentialité</a>
                    <a href="#" class="text-secondary">Groupes</a>
                    <a href="#" class="text-secondary">À propos</a>
                    <a href="#" class="text-secondary">Créer une publicité</a>
                    <a href="#" class="text-secondary">Créer une Page</a>
                    <a href="#" class="text-secondary">Développeurs</a>
                    <a href="#" class="text-secondary">Emplois</a>
                    <a href="#" class="text-secondary">Cookies</a>
                    <a href="#" class="text-secondary">Choisir sa publicité</a>
                    <a href="#" class="text-secondary">Conditions générales</a>
                    <a href="#" class="text-secondary">Aide</a>
                    <a href="#" class="text-secondary">Importation des contacts et non-utilisateurs</a>
                    <a href="#" class="text-secondary">Paramètres</a>
                    <a href="#" class="text-secondary">Historique d’activité</a>
                </div>

                <a href="#" class="text-secondary">Meta © 2023</a>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="inscriptionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">S'inscrire</h1>
                <p>C'est rapide et facile.</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Prénom">
                    </div>
                    <div class="col-md-6">
                        <input type="password" class="form-control" placeholder="Nom">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control" placeholder="Numéro de mobile ou e-mail">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control" placeholder="Nouveau mot de passe">
                    </div>
                    <p>Date de naissance</p>
                    <div class="col-md-4">
                        <select id="inputState" class="form-select">
                            <option selected>13</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select id="inputState" class="form-select">
                            <option selected>juil</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select id="inputState" class="form-select">
                            <option selected>2023</option>
                            <option>...</option>
                        </select>
                    </div>
                    <p>Genre</p>
                    <div class="d-inline-flex align-items-center justify-content-center w-100">
                        <div class="input-group">
                            <span class="input-group-text border-end-0">Femme</span>
                            <div class="input-group-text">
                                <input class="form-check-input border-start-0" name="sexe" type="radio" value="feminin">
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text border-end-0">Homme</span>
                            <div class="input-group-text">
                                <input class="form-check-input border-start-0" name="sexe" type="radio" value="masculin">
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text border-end-0">Personnalisé</span>
                            <div class="input-group-text">
                                <input class="form-check-input border-start-0" name="sexe" type="radio" value="">
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>Les personnes qui utilisent notre service ont pu importer vos coordonnées sur Socialdev. <a href="#">En savoir plus</a>.</p>
                        <p>En cliquant sur <a href="#">S’inscrire</a>, vous acceptez nos <a href="#">Conditions générales</a>, notre <a href="#">Politique de confidentialité</a> et notre <a href="#">Politique d’utilisation des cookies</a>. Vous recevrez peut-être des notifications par texto de notre part et vous pouvez à tout moment <a href="#">vous désabonner</a>.</p>
                    </div>

                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" name="inscription" class="btn fw-bold btn-success w-50">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once "config/footer.php" ?>