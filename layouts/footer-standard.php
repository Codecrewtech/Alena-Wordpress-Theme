        <footer id="footer">
            
            <div class="container footer-container">
                <div class="row">

                    <?php
                    $footer_col = 4;
                    $footer_columns = array();
                    $footer_style = TT::get_mod('footer_style');
                    switch($footer_style){
                        case '1':
                            $footer_col = 1;
                            $footer_columns = array(
                                    'col-sm-12'
                                );
                            break;
                        case '2':
                            $footer_col = 2;
                            $footer_columns = array(
                                    'col-sm-6',
                                    'col-sm-6'
                                );
                            break;
                        case '3':
                            $footer_col = 3;
                            $footer_columns = array(
                                    'col-sm-4',
                                    'col-sm-4',
                                    'col-sm-4'
                                );
                            break;
                        case '4':
                            $footer_col = 4;
                            $footer_columns = array(
                                    'col-sm-6 col-md-3',
                                    'col-sm-6 col-md-3',
                                    'col-sm-6 col-md-3',
                                    'col-sm-6 col-md-3'
                                );
                            break;
                        case '5':
                            $footer_col = 4;
                            $footer_columns = array(
                                    'col-sm-6 col-md-4',
                                    'col-sm-6 col-md-2',
                                    'col-sm-6 col-md-3',
                                    'col-sm-6 col-md-3'
                                );
                            break;
                        default:
                            $footer_col = 4;
                            $footer_columns = array(
                                    'col-sm-6 col-md-4',
                                    'col-sm-6 col-md-3',
                                    'col-sm-6 col-md-2',
                                    'col-sm-6 col-md-3'
                                );
                            break;
                    }

                    for ($i = 1; $i <= $footer_col; $i++) {
                        echo "<div class='".$footer_columns[$i - 1]." footer-column-$i'>";
                            dynamic_sidebar('footer'.$i);
                        echo "</div>";
                    }
                    ?>

                </div>
            </div>


            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <div class="widget">
                                <div class="social-links">
                                    <?php TPL::get_social_links(); ?>
                                </div>
                            </div>

                            <div class="widget">
                                <p><?php echo TT::get_mod('copyright_content'); ?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </footer>