<?php

return [
    [
        "posicao" => 1,
        "coluna" => "campo_1",
        "tamanho" => 14,
        "inicio" => 1,
        "fim" => 14,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "CNPJ ou CPF",
        "info" => "documento"
    ],
    [
        "posicao" => 2,
        "coluna" => "campo_2",
        "tamanho" => 14,
        "inicio" => 15,
        "fim" => 28,
        "tipo" => "X",
        "default" => "ISENTO",
        "descricao" => "IE"
    ],
    [
        "posicao" => 3,
        "coluna" => "campo_3",
        "tamanho" => 35,
        "inicio" => 29,
        "fim" => 63,
        "tipo" => "X",
        "default" => "",
        "descricao" => "Razão Social ou nome do cliente",
        "info" => "razao_social"
    ],
    [
        "posicao" => 4,
        "coluna" => "campo_4",
        "tamanho" => 2,
        "inicio" => 64,
        "fim" => 65,
        "tipo" => "X",
        "default" => "",
        "descricao" => "UF"
    ],
    [
        "posicao" => 5,
        "coluna" => "campo_5",
        "tamanho" => 1,
        "inicio" => 66,
        "fim" => 66,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "Classe de Consumo"
    ],
    [
        "posicao" => 6,
        "coluna" => "campo_6",
        "tamanho" => 1,
        "inicio" => 67,
        "fim" => 67,
        "tipo" => "N",
        "default" => 4,
        "descricao" => "Fase ou Tipo de Utilização"
    ],
    [
        "posicao" => 7,
        "coluna" => "campo_7",
        "tamanho" => 2,
        "inicio" => 68,
        "fim" => 69,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "Grupo de Tensão"
    ],
    [
        "posicao" => 8,
        "coluna" => "campo_8",
        "tamanho" => 12,
        "inicio" => 70,
        "fim" => 81,
        "tipo" => "X",
        "default" => "",
        "descricao" => "Código de Identificação do consumidor ou assinante",
        "info" => "cliente_id"
    ],
    [
        "posicao" => 9,
        "coluna" => "campo_9",
        "tamanho" => 8,
        "inicio" => 82,
        "fim" => 89,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "Data de emissão"
    ],
    [
        "posicao" => 10,
        "coluna" => "campo_10",
        "tamanho" => 2,
        "inicio" => 90,
        "fim" => 91,
        "tipo" => "N",
        "default" => 21,
        "descricao" => "Modelo"
    ],
    [
        "posicao" => 11,
        "coluna" => "campo_11",
        "tamanho" => 3,
        "inicio" => 92,
        "fim" => 94,
        "tipo" => "X",
        "default" => "U",
        "descricao" => "Série"
    ],
    [
        "posicao" => 12,
        "coluna" => "campo_12",
        "tamanho" => 9,
        "inicio" => 95,
        "fim" => 103,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "Número",
        "info" => "nf_numero"
    ],
    [
        "posicao" => 13,
        "coluna" => "campo_13",
        "tamanho" => 32,
        "inicio" => 104,
        "fim" => 135,
        "tipo" => "X",
        "default" => "",
        "descricao" => "Código de Autenticação Digital do documento fiscal"
    ],
    [
        "posicao" => 14,
        "coluna" => "campo_14",
        "tamanho" => 12,
        "inicio" => 136,
        "fim" => 147,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "Valor Total (com 2 decimais)"
    ],
    [
        "posicao" => 15,
        "coluna" => "campo_15",
        "tamanho" => 12,
        "inicio" => 148,
        "fim" => 159,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "BC ICMS (com 2 decimais)"
    ],
    [
        "posicao" => 16,
        "coluna" => "campo_16",
        "tamanho" => 12,
        "inicio" => 160,
        "fim" => 171,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "ICMS destacado (com 2 decimais)"
    ],
    [
        "posicao" => 17,
        "coluna" => "campo_17",
        "tamanho" => 12,
        "inicio" => 172,
        "fim" => 183,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "Operações isentas ou não tributadas (com 2 decimais)"
    ],
    [
        "posicao" => 18,
        "coluna" => "campo_18",
        "tamanho" => 12,
        "inicio" => 184,
        "fim" => 195,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "Outros valores (com 2 decimais)"
    ],
    [
        "posicao" => 19,
        "coluna" => "campo_19",
        "tamanho" => 1,
        "inicio" => 196,
        "fim" => 196,
        "tipo" => "X",
        "default" => "N",
        "descricao" => "Situação do documento"
    ],
    [
        "posicao" => 20,
        "coluna" => "campo_20",
        "tamanho" => 4,
        "inicio" => 197,
        "fim" => 200,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "Ano e Mês de referência de apuração"
    ],
    [
        "posicao" => 21,
        "coluna" => "campo_21",
        "tamanho" => 9,
        "inicio" => 201,
        "fim" => 209,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "Referência ao item da NF"
    ],
    [
        "posicao" => 22,
        "coluna" => "campo_22",
        "tamanho" => 12,
        "inicio" => 210,
        "fim" => 221,
        "tipo" => "X",
        "default" => "",
        "descricao" => "Número do terminal telefônico ou da unidade "
    ],
    [
        "posicao" => 23,
        "coluna" => "campo_23",
        "tamanho" => 1,
        "inicio" => 222,
        "fim" => 222,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "Indicação do tipo de informação contida no campo 1"
    ],
    [
        "posicao" => 24,
        "coluna" => "campo_24",
        "tamanho" => 2,
        "inicio" => 223,
        "fim" => 224,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "Tipo de cliente"
    ],
    [
        "posicao" => 25,
        "coluna" => "campo_25",
        "tamanho" => 2,
        "inicio" => 225,
        "fim" => 226,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "Subclasse de consumo"
    ],
    [
        "posicao" => 26,
        "coluna" => "campo_26",
        "tamanho" => 12,
        "inicio" => 227,
        "fim" => 238,
        "tipo" => "X",
        "default" => "",
        "descricao" => "Número do terminal telefônico principal"
    ],
    [
        "posicao" => 27,
        "coluna" => "campo_27",
        "tamanho" => 14,
        "inicio" => 239,
        "fim" => 252,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "CNPJ do emitente"
    ],
    [
        "posicao" => 28,
        "coluna" => "campo_28",
        "tamanho" => 20,
        "inicio" => 253,
        "fim" => 272,
        "tipo" => "X",
        "default" => "",
        "descricao" => "Número ou código da fatura comercial",
        "info" => "fatura_id"
    ],
    [
        "posicao" => 29,
        "coluna" => "campo_29",
        "tamanho" => 12,
        "inicio" => 273,
        "fim" => 284,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "Valor total da fatura comercial",
        "info" => "valor"
    ],
    [
        "posicao" => 30,
        "coluna" => "campo_30",
        "tamanho" => 8,
        "inicio" => 285,
        "fim" => 292,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "Data de leitura anterior"
    ],
    [
        "posicao" => 31,
        "coluna" => "campo_31",
        "tamanho" => 8,
        "inicio" => 293,
        "fim" => 300,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "Data de leitura atual"
    ],
    [
        "posicao" => 32,
        "coluna" => "campo_32",
        "tamanho" => 50,
        "inicio" => 301,
        "fim" => 350,
        "tipo" => "X",
        "default" => "",
        "descricao" => "Brancos - reservado para uso futuro"
    ],
    [
        "posicao" => 33,
        "coluna" => "campo_33",
        "tamanho" => 8,
        "inicio" => 351,
        "fim" => 358,
        "tipo" => "N",
        "default" => 0,
        "descricao" => "Brancos - reservado para uso futuro"
    ],
    [
        "posicao" => 34,
        "coluna" => "campo_34",
        "tamanho" => 30,
        "inicio" => 359,
        "fim" => 388,
        "tipo" => "X",
        "default" => "",
        "descricao" => "Informações adicionais"
    ],
    [
        "posicao" => 35,
        "coluna" => "campo_35",
        "tamanho" => 5,
        "inicio" => 389,
        "fim" => 393,
        "tipo" => "X",
        "default" => "",
        "descricao" => "Brancos - reservado para uso futuro"
    ],
    [
        "posicao" => 36,
        "coluna" => "campo_36",
        "tamanho" => 32,
        "inicio" => 394,
        "fim" => 425,
        "tipo" => "X",
        "default" => "",
        "descricao" => "Código de Autenticação Digital do registro",
        "info" => "nf_hash"
    ]
];
