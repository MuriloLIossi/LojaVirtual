<?php 

//tipos 1 = calçado
//tipo 2 = camiseta
//tipo 3 = disco

$produtos = [
    [
        "nome" => "Coturno All star",
        "valor" => "499", 
        "img" => "coturno all star.png",
        "tipo" => 1,
        "descricao" => "<p class='desc'>Sapato coturno na cor branco e preto, fabricado pela marca converse, alta qualidade e confortável</p>",
        "juros" => 0.87,
        "parcelamento_max_sj" => 10, //parcelamento máximo sem juros
        "parcelamento_max_cj" => 12, //parcelamento máximo com juros
    ],

    [
        "nome" => "Coturno All terrain",
        "valor" => "359.99", 
        "img" => "coturno marrom.png",
        "tipo" => 1,
        "descricao" => "<p class='desc'>Coturno na cor marrom, alta qualidade, confortável e estiloso, além de impermeável, para andar em qualquer terreno</p>",
        "juros" => 0.87,
        "parcelamento_max_sj" => 10, //parcelamento máximo sem juros
        "parcelamento_max_cj" => 12, //parcelamento máximo com juros
    ],

    [
        "nome" => "Camiseta Gojira From mars to Sirius",
        "valor" => "169.90", 
        "img" => "camisa gojira.jpeg",
        "tipo" => 2,
        "descricao" => "<p class='desc'>Camiseta na cor preta da maior banda do metal moderno, os franceses do Gojira, camiseta sobre o album mais popular da banda, contando com a música flying whales</p>",
        "juros" => 0.87,
        "parcelamento_max_sj" => 5, //parcelamento máximo sem juros
        "parcelamento_max_cj" => 10, //parcelamento máximo com juros
        
    ],

    [
        "nome" => "Camisa Black Sabbath",
        "valor" => "159.90", 
        "img" => "Black sabbath.jpg",
        "tipo" => 2,
        "descricao" => "<p class='desc'>Camisa na cor preta da banda fundadora do heavy metal, sem mais comentários</p>",
        "juros" => 0.87,
        "parcelamento_max_sj" => 5, //parcelamento máximo sem juros
        "parcelamento_max_cj" => 10, //parcelamento máximo com juros
    ],
    
    [
        "nome" => "Camiseta Slipknot",
        "valor" => "159.90", 
        "img" => "slipknot.jpeg",
        "tipo" => 2,
        "descricao" => "<p class='desc'>Camiseta da maior nome do NuMetal nos dias de hoje na cor preta e diversos tamanhos, e conta com Eloy Casagrande na Batera</p>",
        "juros" => 0.87,
        "parcelamento_max_sj" => 5, //parcelamento máximo sem juros
        "parcelamento_max_cj" => 10, //parcelamento máximo com juros
    ],

    [
        "nome" => "Camiseta Metallica And Justice for All",
        "valor" => "149.90", 
        "img" => "metallica.png",
        "tipo" => 2,
        "descricao" => "<p class='desc'>Camiseta branca da banda Metallica, do lendário album And justice for all</p>",
        "juros" => 0.87,
        "parcelamento_max_sj" => 5, //parcelamento máximo sem juros
        "parcelamento_max_cj" => 10, //parcelamento máximo com juros
    ],

    [
        "nome" => "Disco Gojira Fortitude",
        "valor" => "329.99", 
        "img" => "fortitude.jpeg",
        "tipo" => 3,
        "descricao" => "<p class='desc'>Disco do Album Fortitude da banda francesa de Groove Metal Gojira, qualidade original do estúdio</p>",
        "juros" => 0.87,
        "parcelamento_max_sj" => 10, //parcelamento máximo sem juros
        "parcelamento_max_cj" => 12, //parcelamento máximo com juros
    ],

    [
        "nome" => "Disco Gojira From Mars to Sirius",
        "valor" => "319.99", 
        "img" => "from mars to sirius.jpg",
        "tipo" => 3,
        "descricao" => "<p class='desc'>Disco do álbum From Mars to Sirius da banda Gojira, qualidade altissíma</p>",
        "juros" => 0.87,
        "parcelamento_max_sj" => 5, //parcelamento máximo sem juros
        "parcelamento_max_cj" => 10, //parcelamento máximo com juros
    ],

    [
        "nome" => "Disco Metallica ride the lightning",
        "valor" => "358.80", 
        "img" => "vinil ride the lightning.png",
        "tipo" => 3,
        "descricao" => "<p class='desc'>FUCKING RIDE THE LIGHTNING!, disco novo em alta qualidade</p>",
        "juros" => 0.87,
        "parcelamento_max_sj" => 10, //parcelamento máximo sem juros
        "parcelamento_max_cj" => 12, //parcelamento máximo com juros
    ],

    [
        "nome" => "Disco Sepultura Quadra",
        "valor" => "415.90", 
        "img" => "quadra.png",
        "tipo" => 3,
        "descricao" => "<p class='desc'>Sepultura, do Brasil. Disco em altíssima qualidade de um ótimo album, mas muito subestimado</p>",
        "juros" => 0.87,
        "parcelamento_max_sj" => 10, //parcelamento máximo sem juros
        "parcelamento_max_cj" => 12, //parcelamento máximo com juros
    ],

    [
        "nome" => "Vinil Black Sabbath Master of Reality",
        "valor" => "450.90", 
        "img" => "master of reality.png",
        "tipo" => 3,
        "descricao" => "<p class='desc'>Simplesmente um vinil NOVO de um dos albuns mais lendários do Heavy metal, Qualidade não só de som, mas de música</p>",
        "juros" => 0.87,
        "parcelamento_max_sj" => 10, //parcelamento máximo sem juros
        "parcelamento_max_cj" => 12, //parcelamento máximo com juros
    ],

    [
        "nome" => "Vinil Megadeath Rust in Peace",
        "valor" => "379.99", 
        "img" => "rust in peaxe.jpeg",
        "tipo" => 3,
        "descricao" => "<p class='desc'>Vinil de um dos albuns mais lendários do trash, Rust in Peace do megadeath, novo, em alta qualidade</p>",
        "juros" => 0.87,
        "parcelamento_max_sj" => 10, //parcelamento máximo sem juros
        "parcelamento_max_cj" => 12, //parcelamento máximo com juros
    ],

    [
        "nome" => "Vinil Megadeath Peace sells",
        "valor" => "479.99", 
        "img" => "peace sells.jpg",
        "tipo" => 3,
        "descricao" => "<p class='desc'>Peace Sells... but Who's Buying?</p>",
        "juros" => 0.87,
        "parcelamento_max_sj" => 10, //parcelamento máximo sem juros
        "parcelamento_max_cj" => 12, //parcelamento máximo com juros
    ],
]

?>