<?php
    //funtion faktorial($angka){

    // }

    // // 3x2 = 3+3
    //     function perkalian($angka1, $angka2){
    //         return perkalian
    //     }

    // 4 = 4+3+2+1
        function test($angka){
            if($angka == 1){
                return 1;
            }else{
                return $angka + test($angka-1);
            }
        }
        echo test(1);