<?php
            $keyboard = "QWERTYUIOPASDFGHJKLZXCVBNM";
            $button = "<input type=button class=button ";    
            
            for( $i = 0; $i < 26; $i++ ):
                echo $button." value=$keyboard[$i] onclick=''>";
                if( $i  == 9 || $i == 18){
                    echo "<br>";
                }
            endfor;