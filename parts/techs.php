<div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                <span class="card-title">État du serveur</span>
                                    <div class="row">
                                        <div class="col s3 right-align nomobile">
                                            <p>Status</p>
                                            <p>Charge</p>
                                        </div>
                                        <div class="col s9">
                                            <p>- Le serveur est <span class="server-status">?</span>. </p>
                                            <p>- <span class="player-count">?</span>/<span class="player-max">20</span> joueurs</p>
                                        </div>
                                    </div>
                                    <span class="card-title">Informations techniques</span>
                                    <div class="row">
                                        <div class="col s3 right-align nomobile">
                                            <p>IP</p>
                                            <p>Jeu</p>
                                            <p>Serveur</p>
                                        </div>
                                        <div class="col s9">
                                            <p>- Via <strong class="server-ip tooltipped" data-position="right" data-tooltip="Cliquer pour copier"><?php echo $server_ip.':'.$server_port ?></strong></p>
                                            <p>- Supporte <?php echo $game_version ?></p>
                                            <p>- Tourne sous <span class="server-name">?</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>