 <div class="user-section">
                            <div class="user-info">
                               <div class="user-name">
                                <?php
                                    $nome_usu=mysql_query("SELECT * FROM `usuarios` where EMAIL = '$logado'"); 
                                                    $nome_usu1=mysql_fetch_assoc($nome_usu);
                                                    $nome=$nome_usu1['P_NOME'];
                                                    echo $nome;
                                ?>
                                        </div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>