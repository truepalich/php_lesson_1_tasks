<?php

    //LOGIC

    //Task 18
    $countries = array('Ukraine', 'Italy', 'Montenegro', 'Germany', 'Spain');

    //Task 19
    $capitals = array('Ukraine' => 'Kyiv', 'Italy' => 'Rome', 'Montenegro' => 'Podgorica', 'Germany' => 'Berlin', 'Spain' => 'Barcelona');

    //Task 20
    $books = array('book1' => array('style' => 'Detective',
                                    'author' => 'Conan Doyle',
                                    'name' => 'Sherlock Holmes',
                                    'price' => '20',
                                    'currency' => 'usd'),
                   'book2' => array('style' => 'Adventure',
                                    'author' => 'Jules Verne',
                                    'name' => 'Mysterious Island',
                                    'price' => '35',
                                    'currency' => 'usd'),
                   'book3' => array('style' => 'Fantasy',
                                    'author' => 'George Martin',
                                    'name' => 'A song of ice and fire',
                                    'price' => '54',
                                    'currency' => 'usd'));

    //Task 22
    define('UKRAINE_COUNTRY', 'Ukraine');
    define('ITALY_COUNTRY', 'Italy');
    define('SPAIN_COUNTRY', 'Spain');

    $countryConstants = array(UKRAINE_COUNTRY, ITALY_COUNTRY, SPAIN_COUNTRY);

    //Task 23
    $hello = 'hey';
    $hey = 'bro';
    $bro = 'mother';
    $mother = 'brother';
    $brother = 'Hello, brother';

?>

<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Document</title>
    </head>
    <body>

    <!--VIEW-->

    <!--Task 18-->
    <h2>Task 18</h2>
    <pre>
      <?php print_r($countries); ?>
    </pre>
    <hr/>
    <!--Task 18-->

    <!--Task 19-->
    <h2>Task 19</h2>
    <pre>
      <?php print_r($capitals); ?>
    </pre>
    <hr/>
    <!--Task 19-->

    <!--Task 20-->
    <h2>Task 20</h2>
    <pre>
      <?php print_r($books); ?>
    </pre>
    <hr/>
    <!--Task 20-->

    <!--Task 22-->
    <h2>Task 22</h2>
    <pre>
      <?php print_r($countryConstants); ?>
    </pre>
    <hr/>
    <!--Task 22-->

    <!--Task 23-->
    <h2>Task 23</h2>
    <pre>
      <?= $$$$$hello; ?>
    </pre>
    <hr/>
    <!--Task 23-->

    <!--Task 28-->
    <h2>Task 28</h2>
    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="name"/>
        <input type="text" name="email" placeholder="email"/>
        <input type="text" name="phone" placeholder="phone"/>
        <input type="submit"/>
    </form>
    <? if (!empty($_POST)): ?>
      <pre>
        <?=print_r($_POST)?>
      </pre>
    <? endif; ?>
    <hr/>
    <!--Task 28-->

  </body>
</html>
