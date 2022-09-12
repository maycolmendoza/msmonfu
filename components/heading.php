<?php
                                date_default_timezone_set('America/Lima');
                                 $hora = date("H");
                                if ($hora < 13) {
                                ?>
                                    <div class="jumbotron text-center" style="background-image: url('https://res.cloudinary.com/dicmh7cfa/image/upload/v1662503457/clima-etapas/pexels-pixabay-531321_nuzby8.jpg');background-size: cover;">
                                        <h1 class="welcome-text">
                                            <?php echo "Buenos dias"; ?>,
                                            <span class="text-black fw-bold"><?php echo get_current_user(); ?></span>
                                        </h1>
                                        <p class="titlo-heading">Tenemos el reporte de hoy <?php  date_default_timezone_set('America/Lima');
;echo date('l jS \of F Y h:i:s A');?></p>
                                    </div>
                                <?php
                                } else { if ($hora >= 13 && $hora < 18){
                                ?>
                                 <div class="jumbotron text-center" style="background-image: url('https://res.cloudinary.com/dicmh7cfa/image/upload/v1662503548/clima-etapas/pexels-tyler-lastovich-937783_kozxh6.jpg');background-size: cover;">
                                        <h1 class="welcome-text" >
                                            <?php echo "Buenas tardes"; ?>,
                                            <span class="text-black fw-bold"><?php echo get_current_user(); ?></span>
                                        </h1>
                                        <p class="titlo-heading">Tenemos el reporte de hoy <?php  date_default_timezone_set('America/Lima');
;echo date('l jS \of F Y h:i:s A');?></p>
                                    </div>
                                <?php                        
                                }else {
                                ?>
                                 <div class="jumbotron text-center" style="background-image: url('https://res.cloudinary.com/dicmh7cfa/image/upload/v1662503453/clima-etapas/pexels-nout-gons-248159_h3ki8p.jpg');background-size: cover;">
                                        <h1 class="welcome-text">
                                            <?php echo "Buenas Noches"; ?>,
                                            <span class="text-black fw-bold"><?php echo get_current_user(); ?></span>
                                        </h1>
                                        <p class="titlo-heading">Tenemos el reporte de hoy <?php  date_default_timezone_set('America/Lima');
;echo date('l jS \of F Y h:i:s A');?></p>
                                    </div>
                                <?php
                                }}
                                ?>
                                <style>
                                    .titlo-heading{
                                        color: #fff !important;
                                    }
                                    .welcome-text{
                                        color: #fff !important;
                                    }
                                    .jumbotron{
                                        width: 100% !important;
                                    }
                                </style>

