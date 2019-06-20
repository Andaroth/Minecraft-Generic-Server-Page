<div class="register row">
                    <div class="col s12 center-align">
                        <h2 style="display:none;">Nous rejoindre</h2>
                        <p>Le serveur est privé, merci de votre compréhension. </p>
                        <p>Si vous souhaitez nous rejoindre, vous pouvez en faire la demande via ce formulaire :</p>
                        <div class="card grey lighten-5">
                            <div class="card-content">
                                <div class="container">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="ame" type="text" class="validate">
                                                <label for="name">Votre nom réel<label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="in_game_name" type="text" class="validate">
                                                <label for="in_game_name">Votre pseudo<span class="nomobile"> Minecraft</span></label>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s6">
                                                <input id="email" type="email" class="validate">
                                                <label for="email">Votre<span class="nomobile"> adresse</span> e-mail</label>
                                                </div>
                                            </div>
                                            <div class="input-field col s12">
                                                <textarea id="textarea" class="materialize-textarea"></textarea>
                                                <label for="textarea">Présentez-vous<span class="nomobile">, pourquoi voulez-vous jouer sur notre serveur ?</span></label>
                                            </div>
                                            <label>
                                                <input type="checkbox" class="filled-in" />
                                                <span>J'accepte le <a href="#reglement" class="modal-trigger">Règlement du serveur</a></span>
                                            </label>
                                        </div>
                                        <a class="waves-effect waves-light btn orange accent-2">Soumettre <i class="material-icons right">send</i></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include('rules.php'); ?>