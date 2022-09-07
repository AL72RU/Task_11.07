<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div>
        <center>
            <h1>Задание 1</h1>
            <h2>Таблица истинности</h2>
        </center>
        <table border="1">
            <thead>
                <tr>
                    <th><strong>A</strong></th>
                    <th><strong>B</strong></th>
                    <th><strong>!A</strong></th>
                    <th><strong>A || B</strong></th>
                    <th><strong>A &amp;&amp; B</strong></th>
                    <th><strong>A xor B</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>0</th>
                    <th>0</th>
                    <th>
                        <?php
                            $a = 0;
                            echo (int)!$a;
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = 0;
                            echo (int)($a || $b);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = 0;
                            echo (int)($a && $b);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = 0;
                            echo (int)($a xor $b);
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>0</th>
                    <th>1</th>
                    <th>
                        <?php
                            $a = 0;
                            echo (int)!$a;
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = 1;
                            echo (int)($a || $b);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = 1;
                            echo (int)($a && $b);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = 1;
                            echo (int)($a xor $b);
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>0</th>
                    <th>
                        <?php
                            $a = 1;
                            echo (int)!$a;
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = 0;
                            echo (int)($a || $b);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = 0;
                            echo (int)($a && $b);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = 0;
                            echo (int)($a xor $b);
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>1</th>
                    <th>
                        <?php
                            $a = 1;
                            echo (int)!$a;
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = 1;
                            echo (int)($a || $b);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = 1;
                            echo (int)($a && $b);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = 1;
                            echo (int)($a xor $b);
                        ?>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div>
        <center>
            <h1>Задание 2</h1>
            <h2>Гибкое сравнение в PHP</h2>
        </center>
        <table border="1">
            <thead>
                <tr>
                    <th></th>
                    <th>true</th>
                    <th>false</th>
                    <th>1</th>
                    <th>0</th>
                    <th>-1</th>
                    <th>"1"</th>
                    <th>null</th>
                    <th>"php"</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th><strong>true</strong></th>
                    <th>
                        <?php
                            $a = true;
                            $b = true;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = true;
                            $b = false;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = true;
                            $b = 1;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = true;
                            $b = 0;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = true;
                            $b = -1;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = true;
                            $b = "1";
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = true;
                            $b = null;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = true;
                            $b = "php";
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                </tr>
                <tr>
                    <th><strong>false</strong></th>
                    <th>
                        <?php
                            $a = false;
                            $b = true;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = false;
                            $b = false;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = false;
                            $b = 1;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = false;
                            $b = 0;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = false;
                            $b = -1;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = false;
                            $b = "1";
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = false;
                            $b = null;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = false;
                            $b = "php";
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                </tr>
                <tr>
                    <th><strong>1</strong></th>
                    <th>
                        <?php
                            $a = 1;
                            $b = true;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = false;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = 1;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = 0;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = -1;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = "1";
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = null;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = "php";
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                </tr>
                <tr>
                    <th><strong>0</strong></th>
                    <th>
                        <?php
                            $a = 0;
                            $b = true;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = false;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = 1;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = 0;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = -1;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = "1";
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = null;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = "php";
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                </tr>
                <tr>
                    <th><strong>-1</strong></th>
                    <th>
                        <?php
                            $a = -1;
                            $b = true;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = -1;
                            $b = false;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = -1;
                            $b = 1;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = -1;
                            $b = 0;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = -1;
                            $b = -1;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = -1;
                            $b = "1";
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = -1;
                            $b = null;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = -1;
                            $b = "php";
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                </tr>
                <tr>
                    <th><strong>"1"</strong></th>
                    <th>
                        <?php
                            $a = "1";
                            $b = true;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "1";
                            $b = false;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "1";
                            $b = 1;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "1";
                            $b = 0;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "1";
                            $b = -1;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "1";
                            $b = "1";
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "1";
                            $b = null;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "1";
                            $b = "php";
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                </tr>
                <tr>
                    <th><strong>null</strong></th>
                    <th>
                        <?php
                            $a = null;
                            $b = true;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = null;
                            $b = false;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = null;
                            $b = 1;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = null;
                            $b = 0;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = null;
                            $b = -1;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = null;
                            $b = "1";
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = null;
                            $b = null;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = null;
                            $b = "php";
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                </tr>
                <tr>
                    <th><strong>"php"</strong></th>
                    <th>
                        <?php
                            $a = "php";
                            $b = true;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "php";
                            $b = false;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "php";
                            $b = 1;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "php";
                            $b = 0;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "php";
                            $b = -1;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "php";
                            $b = "1";
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "php";
                            $b = null;
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "php";
                            $b = "php";
                            echo var_export($a == $b, true);
                        ?>
                    </th>
                </tr>
            </tbody>
        </table>
        <center>
            <h2>Жёсткое сравнение в PHP</h2>
        </center>
        <table border="1">
            <thead>
                <tr>
                    <th></th>
                    <th>true</th>
                    <th>false</th>
                    <th>1</th>
                    <th>0</th>
                    <th>-1</th>
                    <th>"1"</th>
                    <th>null</th>
                    <th>"php"</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th><strong>true</strong></th>
                    <th>
                        <?php
                            $a = true;
                            $b = true;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = true;
                            $b = false;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = true;
                            $b = 1;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = true;
                            $b = 0;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = true;
                            $b = -1;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = true;
                            $b = "1";
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = true;
                            $b = null;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = true;
                            $b = "php";
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                </tr>
                <tr>
                    <th><strong>false</strong></th>
                    <th>
                        <?php
                            $a = false;
                            $b = true;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = false;
                            $b = false;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = false;
                            $b = 1;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = false;
                            $b = 0;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = false;
                            $b = -1;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = false;
                            $b = "1";
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = false;
                            $b = null;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = false;
                            $b = "php";
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                </tr>
                <tr>
                    <th><strong>1</strong></th>
                    <th>
                        <?php
                            $a = 1;
                            $b = true;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = false;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = 1;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = 0;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = -1;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = "1";
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = null;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 1;
                            $b = "php";
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                </tr>
                <tr>
                    <th><strong>0</strong></th>
                    <th>
                        <?php
                            $a = 0;
                            $b = true;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = false;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = 1;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = 0;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = -1;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = "1";
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = null;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = 0;
                            $b = "php";
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                </tr>
                <tr>
                    <th><strong>-1</strong></th>
                    <th>
                        <?php
                            $a = -1;
                            $b = true;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = -1;
                            $b = false;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = -1;
                            $b = 1;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = -1;
                            $b = 0;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = -1;
                            $b = -1;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = -1;
                            $b = "1";
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = -1;
                            $b = null;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = -1;
                            $b = "php";
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                </tr>
                <tr>
                    <th><strong>"1"</strong></th>
                    <th>
                        <?php
                            $a = "1";
                            $b = true;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "1";
                            $b = false;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "1";
                            $b = 1;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "1";
                            $b = 0;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "1";
                            $b = -1;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "1";
                            $b = "1";
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "1";
                            $b = null;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "1";
                            $b = "php";
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                </tr>
                <tr>
                    <th><strong>null</strong></th>
                    <th>
                        <?php
                            $a = null;
                            $b = true;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = null;
                            $b = false;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = null;
                            $b = 1;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = null;
                            $b = 0;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = null;
                            $b = -1;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = null;
                            $b = "1";
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = null;
                            $b = null;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = null;
                            $b = "php";
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                </tr>
                <tr>
                    <th><strong>"php"</strong></th>
                    <th>
                        <?php
                            $a = "php";
                            $b = true;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "php";
                            $b = false;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "php";
                            $b = 1;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "php";
                            $b = 0;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "php";
                            $b = -1;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "php";
                            $b = "1";
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "php";
                            $b = null;
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                    <th>
                        <?php
                            $a = "php";
                            $b = "php";
                            echo var_export($a === $b, true);
                        ?>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div>
        <center>
            <h2>Выводы о сравнении в PHP</h2>
            <table border="1">
                <tr>
                    <th>
                        Отличие гибкого сравнения от строгого в то, что в гибком, переменные сравниваются после преобразования к общему типу (если они разные). 
                    </th>
                </tr>
            </table>
        </center>
    </div>
</body>
</html>