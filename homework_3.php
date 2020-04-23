<?php

# Задание 1
$num = 0;
while ($num <= 100) {
    if ($num % 3 == 0) {
        echo $num . ' ';
    }
    $num++;
}
echo '<br>';


# Задание 2
function getNumbers($num) {
    $count = 0;
    do {
        if ($count == 0) {
            echo $count . ' - ноль.<br>';
        } elseif ($count % 2 == 0) {
            echo $count . ' - четное число.<br>';
        } else {
            echo $count . ' - нечетное число.<br>';
        }
        $count++;
    } while ($count <= $num);
}

getNumbers(10);


echo '<br>';

# Задание 3
$cities = [
    'Амурская область' =>
        [
        'Белогорск',
        'Благовещенск',
        'Завитинск',
        'Зея',
        'Райчихинск',
        'Свободный',
        'Сковородино',
        'Тында',
        'Циолковский',
        'Шимановск'
        ],
    'Ульяновская область' =>
        [
            'Барыш',
            'Димитровград',
            'Инза',
            'Новоульяновск',
            'Сенгилей',
            'Ульяновск'
        ],
    'Мурманская область' =>
        [
            'Апатиты',
            'Гаджиево',
            'Заозёрск',
            'Заполярный',
            'Кандалакша',
            'Кировск',
            'Ковдор',
            'Кола',
            'Мончегорск',
            'Мурманск',
            'Оленегорск',
            'Островной',
            'Полярные Зори',
            'Полярный',
            'Североморск',
            'Снежногорск'
        ]
];
foreach ($cities as $region => $value) {
    echo $region . ':<br>';
    foreach ($value as $city) {
        echo $city . ', ';
    }
    echo '<br><br>';
}

# Задание 4

$letters = ['а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e',
            'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k',
            'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r',
            'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
            'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shch', 'ъ' => '"', 'ы' => 'y', 'ь' => "'", 'э' => 'e',
            'ю' => 'yu', 'я' => 'ya'];

$str = "Привет мир!";

function transliterateString($str, $letters) {
    $result = null;

    // перевод всех символов в нижний регистр
    $str = mb_strtolower($str);

    // преобразование строки в массив - вариант с поддержкой кириллицы
    $arr = [];
    for ($i = 0; $i <= strlen($str); $i++) {
        $arr[$i] = mb_substr($str, $i, 1);
    }

    // удаление пустых элементов в массиве
    for ($i = 0; $i <= count($arr); $i++) {
        if ($arr[$i] == '') {
            array_splice($arr, $i);
        }
    }

    // замена элементов массива
    for ($i = 0; $i <= count($arr); $i++) {
        foreach ($letters as $key => $value) {
            if ($arr[$i] == $key) {
                $arr[$i] = $value;
            }
        }
    }

    $result = implode($arr);

    return $result;

}

echo transliterateString($str, $letters)  . '<br>';



# Задание 5

// замена пробела на подчеркивание
$changeStr = str_ireplace(' ', '_', $str);
echo $changeStr;







