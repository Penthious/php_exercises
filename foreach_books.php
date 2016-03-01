<?php
$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);
foreach ($books as $title => $book) {
	if ($book['published'] > 1950) {
		echo "title: " . $title . PHP_EOL;
		foreach ($book as $info => $value) {
			echo ucwords($info) . ": $value ";
		}
		echo PHP_EOL;
		// echo "published: " . $book['published'] . PHP_EOL;
		// echo "author: " . $book['author'] . PHP_EOL;
		// echo "pages: " . $book['pages'] . PHP_EOL;
		echo PHP_EOL;
	}
}
