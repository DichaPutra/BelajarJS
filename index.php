<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>


        <!--Insert JS Method 1 | embed langsung di file HTML -->
        <script>
            // komentar one liner 
            /* Komentar multiple line 
             * yes yess
             * */
            document.writeln("<p>Hello World</p>");
            document.writeln("<hr>");

            // (1)  Tipe data number default basis 10
            document.writeln("100");
            document.writeln(100);
            document.writeln(100.123);
            document.writeln("<hr>");
            //hexadecimal 0xFF
            //binary  0b1010
            //octal 0o10


            // (2) Tipe data boolean | berisikan true/false 
            document.writeln(true);
            document.writeln(false);
            document.writeln("<hr>");


            // (3) Tipe data string | tipe data berisikan teks dimulai dengan "" atau ''
            document.writeln("Dicha Putra A" + "<br>");
            document.writeln('Dicha Putra A <br>');
            document.writeln("<hr>");
            // escape sequence  \n = enter , \t = tab , \' = ' , \" = " ,  \\ = 


            // (4) Variable 
            var fullName = "1 Dicha Putra A" + "<br>";
            document.writeln(fullName);
            fullName = "2 Dicha Putra A";
            document.writeln(fullName);

            let a; //disarankan untuk menggunakan let, karena ada masalah dengan var
            const b = "konstanta"; // constant = tidak bisa diubah lagi value variablenya | awal harus di declare
            document.writeln("<hr>");


            // (5) Operator Matematika
            /*  
             *  +  penjumlahan
             *  -  pengurangan
             *  *  perkalian
             *  ** eksponensial/pangkat
             *  /  pembagian
             *  %  sisa bagi/modulo
             * */
            let result = 1 + 2;
            result += 2;
            result--;
            result = -result;
            document.writeln("1+2+2-1=" + result);
            document.writeln("<hr>");

            // (6) Operasi perbandingan  | operator yg menghasilkan boolean , true/false.   > , < , >= , <= , ==, === sama dengan sama tipe, != , !==
            let angka = 5 == '5'
            document.writeln(angka);
            document.writeln("<hr>");

            // (7) Operator logika |  && dan , || atau, ! negasi/kebalikan
            const  nilaiUjian = 70;
            const  nilaiAbsensi = 70;

            const lulusUjian = nilaiAbsensi > 75;
            const lulusAbsensi = nilaiAbsensi > 75;

            const lulus = lulusUjian && lulusAbsensi;
            document.writeln(lulus);
            document.writeln("<hr>");



        </script>

        <!--Insert JS Method 2 | insert dari file .js terpisah-->
        <!--<script src="js/hello-world.js"></script>-->
    </body>
</html>
