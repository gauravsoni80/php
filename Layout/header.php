<?php
   
            function header_body($name="index"){

                 $path = directory_root;

                echo "<head>";
                foreach(meta as $c){
                    echo $c;
                }

                echo '<title>'.strtoupper(title[$name]) . ' || Lorem ipsum dolor sit amet consectetur.</title>';
                
                if(css["icon"] !== ""){
                    echo '<link href="'.css["icon"].'" rel="icon"/>';
                }else{
                    echo '<link href="'.$path.'/favicon.png" rel="icon"/>';
                }

                foreach(css as $c){
                    if($c === css["icon"]){
                        continue;
                    }
                    echo '<link href="'.$path.'/'.$c.'" rel="stylesheet" type="text/css"/>';
                }

                echo '<script src="'.$path.'/Assets/js/jquery-3.7.0.min.js" type="text/javascript"></script>';
                echo "</head>";



                echo "<style type='text/css'>";
                    foreach(font as $c) {
                        $name=basename(explode('.', $c)[0]);
                
                        ?>@font-face {
                            font-family: "<?php echo $name;?>";
                            src:url("<?php echo $path."/".$c;?>");
                        }
                
                        <?php
                    }
                echo "</style>";
            

            }

    ?>