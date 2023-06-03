<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
        $bandaraasal=['Soekarno Hatta','Husein Sastranegara','Abdul Rachman Saleh','Juanda '];
    ?>
    
</head>
<body>
    <div class="wrapper">
        <div class="formbox">
            <form action="">
                <div class="inputarea">
                    <label for="maskapai">Nomor Maskapai</label>
                    <input type="number" name="maskapai" id="maskapai">
                </div>
                <div class="inputarea">
                    <label for="asal">Bandara Asal</label>
                    <select name="asal" id="asal">
                        <?php
                        foreach ($bandaraasal as $asal){
                            echo "<option value='$asal'>$asal</option>";
                        }
                        ?>
                    </select>
                    <option value=""></option>
                </div>
                <div class="inputarea">
                    <label for="maskapai">Nomor Maskapai</label>
                    <input type="number" name="maskapai" id="maskapai">
                </div>
                <div class="inputarea">
                    <label for="maskapai">Nomor Maskapai</label>
                    <input type="number" name="maskapai" id="maskapai">
                </div>
            </form>
        </div>
    </div>
</body>
</html>