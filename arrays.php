<?php
$arrayOfNumbers = array(1, 2, 3, 4, 5);
print_r($arrayOfNumbers);

$arrayOfNumbersInBrackets = [1, 2, 3, 4, 5];
print_r($arrayOfNumbersInBrackets);

echo 'This is the index 3 of $arrayofNumbers: ' . $arrayOfNumbers[3] . PHP_EOL;

$person1 = [
    'first_name'    => 'Tomas',
    'last_name'    => 'Leffew',
    'email'        => 'tleffew1994@gmail.com',
    'phone_number' => '210-290-4890'
];

$person2 = [
    'first_name'    => 'Borb',
    'last_name'    => 'Martison',
    'email'        => 'Bmartison@gmail.com',
    'phone_number' => '210-290-9878'
];

$people = ['person1' => $person1, $person2];

echo $people['person1']['first_name'];


$books = [
    'book1' => [
      'book_name'   => 'Harry Potter',
      'book_author' => [
          'first_name' => 'jk',
          'last_name'  => 'Rowling'
      ]
    ],
    'book2' => [
        'book_name'   => 'Harry Potter',
        'book_author' => [
            'first_name' => 'jk',
            'last_name'  => 'Rowling'
        ]
    ],
    'book3' => [
        'book_name'   => 'Harry Potter',
        'book_author' => [
            'first_name' => 'jk',
            'last_name'  => 'Rowling'
        ]
    ],
    'book4' => [
        'book_name'   => 'Harry Potter',
        'book_author' => [
            'first_name' => 'jk',
            'last_name'  => 'Rowling'
        ]
    ],
    'book5' => [
        'book_name'   => 'Harry Potter',
        'book_author' => [
            'first_name' => 'jk',
            'last_name'  => 'Rowling'
        ]
    ],
];
print_r($books);
$book3Author = $books['book3']['book_author'];
echo  "{$book3Author['last_name']}, {$book3Author['first_name']}". PHP_EOL;