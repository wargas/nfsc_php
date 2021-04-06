<?php

return [
    [
        "registro" => 10,
        "decricacao" => "Mestre do estabelecimento",
        "campos" => [
            [
                "campo" => "01",
                "descricacao" => "Tipo",
                "valor" => 10,
                "tamanho" => 2,
                "inicio" => 1,
                "fim" => 2,
                "tipo" => "N"
            ],
            [
                "campo" => "02",
                "descricacao" => "CNPJ",
                "valor" => "CNPJ do estabelecimento informante",
                "tamanho" => 14,
                "inicio" => 3,
                "fim" => 16,
                "tipo" => "N"
            ],
            [
                "campo" => "03",
                "descricacao" => "Inscrição estadual",
                "valor" => "Inscrição estadual do estabelecimento informante",
                "tamanho" => 14,
                "inicio" => 17,
                "fim" => 30,
                "tipo" => "X"
            ],
            [
                "campo" => "04",
                "descricacao" => "Nome do Contribuinte",
                "valor" => "Nome comercial (razão social/ denominação) do contribuinte",
                "tamanho" => 35,
                "inicio" => 31,
                "fim" => 65,
                "tipo" => "X"
            ],
            [
                "campo" => "05",
                "descricacao" => "Município",
                "valor" => "Município onde está domiciliado o estabelecimento informante",
                "tamanho" => 30,
                "inicio" => 66,
                "fim" => 95,
                "tipo" => "X"
            ],
            [
                "campo" => "06",
                "descricacao" => "Unidade da Federação",
                "valor" => "Unidade da Federação referente ao Município",
                "tamanho" => 2,
                "inicio" => 96,
                "fim" => 97,
                "tipo" => "X"
            ],
            [
                "campo" => "07",
                "descricacao" => "Fax",
                "valor" => "Número do fax do estabelecimento informante",
                "tamanho" => 10,
                "inicio" => 98,
                "fim" => 107,
                "tipo" => "N"
            ],
            [
                "campo" => "08",
                "descricacao" => "Data Inicial",
                "valor" => "A data do início do período referente às informações prestadas",
                "tamanho" => 8,
                "inicio" => 108,
                "fim" => 115,
                "tipo" => "N"
            ],
            [
                "campo" => "09",
                "descricacao" => "Data Final",
                "valor" => "A data do fim do período referente às informações prestadas",
                "tamanho" => 8,
                "inicio" => 116,
                "fim" => 123,
                "tipo" => "N"
            ],
            [
                "campo" => "10",
                "descricacao" => "Código da identificação da estrutura do arquivo magnético entregue",
                "valor" => "2",
                "tamanho" => 1,
                "inicio" => 124,
                "fim" => 124,
                "tipo" => "X"
            ],
            [
                "campo" => "11",
                "descricacao" => "Código da identificação da natureza das operações informadas",
                "valor" => "Código da identificação da natureza das operações informadas, conforme tabela abaixo",
                "tamanho" => 1,
                "inicio" => 125,
                "fim" => 125,
                "tipo" => "X"
            ],
            [
                "campo" => "12",
                "descricacao" => "Código da finalidade do arquivo magnético",
                "valor" => "Código do finalidade utilizado no arquivo magnético, conforme tabela abaixo",
                "tamanho" => 1,
                "inicio" => 126,
                "fim" => 126,
                "tipo" => "X"
            ]
        ]
    ],
    [
        "registro" => 11,
        "decricacao" => "Dados complementares do informante",
        "campos" => [
            [
                "campo" => "01",
                "descricacao" => "Tipo",
                "valor" => 11,
                "tamanho" => 2,
                "inicio" => 1,
                "fim" => 2,
                "tipo" => "N"
            ],
            [
                "campo" => "02",
                "descricacao" => "Logradouro",
                "valor" => "Logradouro",
                "tamanho" => 34,
                "inicio" => 3,
                "fim" => 36,
                "tipo" => "X"
            ],
            [
                "campo" => "03",
                "descricacao" => "Número",
                "valor" => "Número",
                "tamanho" => 5,
                "inicio" => 37,
                "fim" => 41,
                "tipo" => "N"
            ],
            [
                "campo" => "04",
                "descricacao" => "Complemento",
                "valor" => "Complemento (e-mail, etc...)",
                "tamanho" => 22,
                "inicio" => 42,
                "fim" => 63,
                "tipo" => "X"
            ],
            [
                "campo" => "05",
                "descricacao" => "Bairro",
                "valor" => "Bairro",
                "tamanho" => 15,
                "inicio" => 64,
                "fim" => 78,
                "tipo" => "X"
            ],
            [
                "campo" => "06",
                "descricacao" => "CEP",
                "valor" => "Código de Endereçamento Postal",
                "tamanho" => 8,
                "inicio" => 79,
                "fim" => 86,
                "tipo" => "N"
            ],
            [
                "campo" => "07",
                "descricacao" => "Nome do Contato",
                "valor" => "Pessoa responsável para contatos",
                "tamanho" => 28,
                "inicio" => 87,
                "fim" => 114,
                "tipo" => "X"
            ],
            [
                "campo" => "08",
                "descricacao" => "Telefone",
                "valor" => "Número dos telefones para contatos",
                "tamanho" => 12,
                "inicio" => 115,
                "fim" => 126,
                "tipo" => "N"
            ]
        ]
    ],
    [
        "registro" => 75,
        "decricacao" => "Código de produtos ou serviços",
        "campos" => [
            [
                "campo" => "01",
                "descricacao" => "Tipo",
                "valor" => 75,
                "tamanho" => 2,
                "inicio" => 1,
                "fim" => "N",
                "tipo" => ""
            ],
            [
                "campo" => "02",
                "descricacao" => "Data inicial",
                "valor" => "Data inicial do período de validade das informações",
                "tamanho" => 8,
                "inicio" => 3,
                "fim" => 10,
                "tipo" => "N"
            ],
            [
                "campo" => "03",
                "descricacao" => "Data final",
                "valor" => "Data final do período de validade das informações",
                "tamanho" => 8,
                "inicio" => 11,
                "fim" => 18,
                "tipo" => "N"
            ],
            [
                "campo" => "04",
                "descricacao" => "Código do produto ou serviço",
                "valor" => "Código do produto ou serviço utilizado pelo contribuinte",
                "tamanho" => 14,
                "inicio" => 19,
                "fim" => 32,
                "tipo" => "X"
            ],
            [
                "campo" => "05",
                "descricacao" => "Código NCM",
                "valor" => "85176259",
                "tamanho" => 8,
                "inicio" => 33,
                "fim" => 40,
                "tipo" => "X"
            ],
            [
                "campo" => "06",
                "descricacao" => "Descrição",
                "valor" => "Descrição do produto ou serviço",
                "tamanho" => 53,
                "inicio" => 41,
                "fim" => 93,
                "tipo" => "X"
            ],
            [
                "campo" => "07",
                "descricacao" => "Unidade de medida de comercialização",
                "valor" => "Unidade de medida de comercialização do produto (un, kg, m, m3, sc, frd, kWh, etc..)",
                "tamanho" => 6,
                "inicio" => 94,
                "fim" => 99,
                "tipo" => "X"
            ],
            [
                "campo" => "08",
                "descricacao" => "Alíquota do IPI",
                "valor" => "Alíquota do IPI do produto (com 2 decimais)",
                "tamanho" => 5,
                "inicio" => 100,
                "fim" => 104,
                "tipo" => "N"
            ],
            [
                "campo" => "09",
                "descricacao" => "Alíquota do ICMS",
                "valor" => "Alíquota do ICMS aplicável a mercadoria ou serviço nas operações ou prestações internas ou naquelas que se tiverem iniciado no exterior (com 2 decimais)",
                "tamanho" => 4,
                "inicio" => 105,
                "fim" => 108,
                "tipo" => "N"
            ],
            [
                "campo" => 10,
                "descricacao" => "Redução da base de cálculo do ICMS",
                "valor" => "% de redução na base de cálculo do ICMS, nas operações internas (com 2 decimais)",
                "tamanho" => 5,
                "inicio" => 109,
                "fim" => 113,
                "tipo" => "N"
            ],
            [
                "campo" => 11,
                "descricacao" => "Base de cálculo do ICMS de substituição tributária",
                "valor" => "Base de cálculo do ICMS de substituição tributária (com 2 decimais)",
                "tamanho" => 13,
                "inicio" => 114,
                "fim" => 126,
                "tipo" => "N"
            ]
        ]
    ],
    [
        "registro" => 76,
        "decricacao" => "Nota fiscal de serviços de comunicação e telecomunicações",
        "campos" => [
            [
                "campo" => "01",
                "descricacao" => "Tipo",
                "valor" => 76,
                "tamanho" => 2,
                "inicio" => 1,
                "fim" => 2,
                "tipo" => "N"
            ],
            [
                "campo" => "02",
                "descricacao" => "CNPJ/CPF",
                "valor" => "CNPJ/CPF do toma-dor do serviço",
                "tamanho" => 14,
                "inicio" => 3,
                "fim" => 16,
                "tipo" => "N"
            ],
            [
                "campo" => "03",
                "descricacao" => "Inscrição estadual",
                "valor" => "Inscrição estadual do tomador do serviço",
                "tamanho" => 14,
                "inicio" => 17,
                "fim" => 30,
                "tipo" => "X"
            ],
            [
                "campo" => "04",
                "descricacao" => "Modelo",
                "valor" => "21",
                "tamanho" => 2,
                "inicio" => 31,
                "fim" => 32,
                "tipo" => "N"
            ],
            [
                "campo" => "05",
                "descricacao" => "Série",
                "valor" => "1",
                "tamanho" => 2,
                "inicio" => 33,
                "fim" => 34,
                "tipo" => "X"
            ],
            [
                "campo" => "06",
                "descricacao" => "Subsérie",
                "valor" => "1",
                "tamanho" => 2,
                "inicio" => 35,
                "fim" => 36,
                "tipo" => "X"
            ],
            [
                "campo" => "07",
                "descricacao" => "Número",
                "valor" => "Número da nota fiscal",
                "tamanho" => 10,
                "inicio" => 37,
                "fim" => 46,
                "tipo" => "N"
            ],
            [
                "campo" => "08",
                "descricacao" => "CFOP",
                "valor" => "Código Fiscal de Operação e Prestação",
                "tamanho" => 4,
                "inicio" => 47,
                "fim" => 50,
                "tipo" => "N"
            ],
            [
                "campo" => "09",
                "descricacao" => "Tipo de receita",
                "valor" => "Código da identifi-cação do tipo de receita, conforme tabela abaixo",
                "tamanho" => 1,
                "inicio" => 51,
                "fim" => 51,
                "tipo" => "N"
            ],
            [
                "campo" => 10,
                "descricacao" => "Data de emissão/Recebimento",
                "valor" => "Data de emissão na saída ou de rece-bimento na entrada",
                "tamanho" => 8,
                "inicio" => 52,
                "fim" => 59,
                "tipo" => "N"
            ],
            [
                "campo" => 11,
                "descricacao" => "Unidade da Federação",
                "valor" => "Sigla da unidade da Federação do reme- tente nas entradas e do destinatário nas saídas",
                "tamanho" => 2,
                "inicio" => 60,
                "fim" => 61,
                "tipo" => "X"
            ],
            [
                "campo" => 12,
                "descricacao" => "Valor Total",
                "valor" => "Valor total da nota fiscal (com 2 decimais)",
                "tamanho" => 13,
                "inicio" => 62,
                "fim" => 74,
                "tipo" => "N"
            ],
            [
                "campo" => 13,
                "descricacao" => "Base de cálculo do ICMS",
                "valor" => "Base de cálculo do ICMS (com 2 decimais)",
                "tamanho" => 13,
                "inicio" => 75,
                "fim" => 87,
                "tipo" => "N"
            ],
            [
                "campo" => 14,
                "descricacao" => "Valor do ICMS",
                "valor" => "Montante do imposto (com 2 decimais)",
                "tamanho" => 12,
                "inicio" => 88,
                "fim" => 99,
                "tipo" => "N"
            ],
            [
                "campo" => 15,
                "descricacao" => "Isenta ou não tributada",
                "valor" => "Valor amparado por isenção ou não-incidência (com 2 decimais)",
                "tamanho" => 12,
                "inicio" => 100,
                "fim" => 111,
                "tipo" => "N"
            ],
            [
                "campo" => 16,
                "descricacao" => "Outras",
                "valor" => "Valor que não confira débito ou crédito do ICMS (com 2 decimais)",
                "tamanho" => 12,
                "inicio" => 112,
                "fim" => 123,
                "tipo" => "N"
            ],
            [
                "campo" => 17,
                "descricacao" => "Alíquota",
                "valor" => "Alíquota do ICMS (valor inteiro)",
                "tamanho" => 2,
                "inicio" => 124,
                "fim" => 125,
                "tipo" => "N"
            ],
            [
                "campo" => 18,
                "descricacao" => "Situação",
                "valor" => "Situação da nota fiscal",
                "tamanho" => 1,
                "inicio" => 126,
                "fim" => 126,
                "tipo" => "X"
            ]
        ]
    ],
    [
        "registro" => 77,
        "decricacao" => "Serviços de comunicação e telecomunicação",
        "campos" => [
            [
                "campo" => "01",
                "descricacao" => "Tipo",
                "valor" => 77,
                "tamanho" => 2,
                "inicio" => 1,
                "fim" => 2,
                "tipo" => "N"
            ],
            [
                "campo" => "02",
                "descricacao" => "CNPJ/CPF",
                "valor" => "CNPJ/CPF do tomador do serviço",
                "tamanho" => 14,
                "inicio" => 3,
                "fim" => 16,
                "tipo" => "N"
            ],
            [
                "campo" => "03",
                "descricacao" => "Modelo",
                "valor" => "Código do modelo da nota fiscal",
                "tamanho" => 2,
                "inicio" => 17,
                "fim" => 18,
                "tipo" => "N"
            ],
            [
                "campo" => "04",
                "descricacao" => "Série",
                "valor" => "Série da nota fiscal",
                "tamanho" => 2,
                "inicio" => 19,
                "fim" => 20,
                "tipo" => "X"
            ],
            [
                "campo" => "05",
                "descricacao" => "Subsérie",
                "valor" => "Subsérie da nota fiscal",
                "tamanho" => 2,
                "inicio" => 21,
                "fim" => 22,
                "tipo" => "X"
            ],
            [
                "campo" => "06",
                "descricacao" => "Número",
                "valor" => "Número da nota fiscal",
                "tamanho" => 10,
                "inicio" => 23,
                "fim" => 32,
                "tipo" => "N"
            ],
            [
                "campo" => "07",
                "descricacao" => "CFOP",
                "valor" => "Código Fiscal de O-peração e Prestação",
                "tamanho" => 4,
                "inicio" => 33,
                "fim" => 36,
                "tipo" => "N"
            ],
            [
                "campo" => "08",
                "descricacao" => "Tipo de receita",
                "valor" => "Código da identifi-cação do tipo de re-ceita, conforme tabela abaixo",
                "tamanho" => 1,
                "inicio" => 37,
                "fim" => 37,
                "tipo" => "N"
            ],
            [
                "campo" => "09",
                "descricacao" => "Número do item",
                "valor" => "Número de ordem do item na nota fiscal",
                "tamanho" => 3,
                "inicio" => 38,
                "fim" => 40,
                "tipo" => "N"
            ],
            [
                "campo" => 10,
                "descricacao" => "Código do serviço",
                "valor" => "Código do serviço do informante",
                "tamanho" => 11,
                "inicio" => 41,
                "fim" => 51,
                "tipo" => "X"
            ],
            [
                "campo" => 11,
                "descricacao" => "Quantidade",
                "valor" => "Quantidade do serviço (com 3 decimais)",
                "tamanho" => 13,
                "inicio" => 52,
                "fim" => 64,
                "tipo" => "N"
            ],
            [
                "campo" => 12,
                "descricacao" => "Valor do serviço",
                "valor" => "Valor bruto do ser-viço (valor unitário multiplicado por quantidade) - com 2 decimais",
                "tamanho" => 12,
                "inicio" => 65,
                "fim" => 76,
                "tipo" => "N"
            ],
            [
                "campo" => 13,
                "descricacao" => "Valor do des-conto/despe-sa acessória",
                "valor" => "Valor do desconto concedido no item (com 2 decimais).",
                "tamanho" => 12,
                "inicio" => 77,
                "fim" => 88,
                "tipo" => "N"
            ],
            [
                "campo" => 14,
                "descricacao" => "Base de cálculo do ICMS",
                "valor" => "Base de cálculo do ICMS (com 2 decimais)",
                "tamanho" => 12,
                "inicio" => 89,
                "fim" => 100,
                "tipo" => "N"
            ],
            [
                "campo" => 15,
                "descricacao" => "Alíquota do ICMS",
                "valor" => "Alíquota utilizada no cálculo do ICMS (valor inteiro)",
                "tamanho" => 2,
                "inicio" => 101,
                "fim" => 102,
                "tipo" => "N"
            ],
            [
                "campo" => 16,
                "descricacao" => "CNPJ/MF",
                "valor" => "CNPJ/MF da ope-radora de destino",
                "tamanho" => 14,
                "inicio" => 103,
                "fim" => 116,
                "tipo" => "N"
            ],
            [
                "campo" => 17,
                "descricacao" => "Código (nº terminal)",
                "valor" => "Código que designa o usuário final na rede do informante",
                "tamanho" => 10,
                "inicio" => 117,
                "fim" => 126,
                "tipo" => "N"
            ]
        ]
    ],
    [
        "registro" => 90,
        "decricacao" => "Totalização do arquivo",
        "campos" => [
            [
                "campo" => "01",
                "descricacao" => "Tipo",
                "valor" => 90,
                "tamanho" => 2,
                "inicio" => 1,
                "fim" => 2,
                "tipo" => "N"
            ],
            [
                "campo" => "02",
                "descricacao" => "CNPJ",
                "valor" => "CNPJ do informante",
                "tamanho" => 14,
                "inicio" => 3,
                "fim" => 16,
                "tipo" => "N"
            ],
            [
                "campo" => "03",
                "descricacao" => "Inscrição estadual",
                "valor" => "Inscrição estadual do informante",
                "tamanho" => 14,
                "inicio" => 17,
                "fim" => 30,
                "tipo" => "X"
            ],
            [
                "campo" => "04",
                "descricacao" => "Tipo a ser totalizado",
                "valor" => "Tipo de registro que será totalizado pelo próximo campo",
                "tamanho" => 2,
                "inicio" => 31,
                "fim" => 32,
                "tipo" => "N"
            ],
            [
                "campo" => "05",
                "descricacao" => "Total de registros",
                "valor" => "Total de registros do tipo informado no campo anterior",
                "tamanho" => 8,
                "inicio" => 33,
                "fim" => 40,
                "tipo" => "N"
            ],
            [
                "campo" => "06",
                "descricacao" => "Tipo a ser totalizado",
                "valor" => "Tipo de registro que será totalizado pelo próximo campo",
                "tamanho" => 2,
                "inicio" => 31,
                "fim" => 32,
                "tipo" => "N"
            ],
            [
                "campo" => "07",
                "descricacao" => "Total de registros",
                "valor" => "Total de registros do tipo informado no campo anterior",
                "tamanho" => 8,
                "inicio" => 33,
                "fim" => 40,
                "tipo" => "N"
            ],
            [
                "campo" => "08",
                "descricacao" => "Tipo a ser totalizado",
                "valor" => "Tipo de registro que será totalizado pelo próximo campo",
                "tamanho" => 2,
                "inicio" => 31,
                "fim" => 32,
                "tipo" => "N"
            ],
            [
                "campo" => "09",
                "descricacao" => "Total de registros",
                "valor" => "Total de registros do tipo informado no campo anterior",
                "tamanho" => 8,
                "inicio" => 33,
                "fim" => 40,
                "tipo" => "N"
            ],
            [
                "campo" => "10",
                "descricacao" => "Tipo a ser totalizado",
                "valor" => "99",
                "tamanho" => 2,
                "inicio" => 31,
                "fim" => 32,
                "tipo" => "N"
            ],
            [
                "campo" => "11",
                "descricacao" => "Total de registros",
                "valor" => "",
                "tamanho" => 8,
                "inicio" => 33,
                "fim" => 40,
                "tipo" => "N"
            ],
            [
                "campo" => "12",
                "descricacao" => "Espaços em branco",
                "valor" => " ",
                "tamanho" => 55,
                "inicio" => 61,
                "fim" => 125,
                "tipo" => "X"
            ],
            [
                "campo" => "13",
                "descricacao" => "Total de registros",
                "valor" => "1",
                "tamanho" => 1,
                "inicio" => 126,
                "fim" => 126,
                "tipo" => "N"
            ]
        ]
    ]
];
