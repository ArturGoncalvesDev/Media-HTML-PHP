<? php

$ notas = array (
    $ _POST [ '1' ], $ _POST [ '2' ], $ _POST [ '3' ], $ _POST [ '4' ], $ _POST [ '5' ],
    $ _POST [ '6' ], $ _POST [ '7' ], $ _POST [ '8' ], $ _POST [ '9' ], $ _POST [ '10' ]
);
$ num_position = count ( $ notas );
$ soma = 0 ;

para ( $ i = 0 ; $ i <= $ posição_ num ; $ i ++) {
    $ soma + = @ $ notas [ $ i ];
}

$ media = $ soma / 10 ;

echo  "Sua média é $ media" ;


?>
