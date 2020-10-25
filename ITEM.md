Informações  referentes  aos  dados  cadastrais  do  consumidor  da  energia  elétrica  ou tomador dos serviços de comunicação/telecomunicação. 

| Campo | Descrição | Tamanho | Inicio | Fim | Tipo |
| -- | -- | -- | -- | -- | -- |
| 01 | CNPJ ou CPF   | 14   | 1   | 14   | N |
| 02 | UF   | 2   | 15   | 16   | X |
| 03 | Classe do Consumo   | 1   | 17   | 17   | N |
| 04 | Fase ou Tipo de Utilização   | 1   | 18   | 18   | N |
| 05 | Grupo de Tensão   | 2   | 19   | 20   | N |

Informações referentes ao documento fiscal 

| Campo | Descrição | Tamanho | Inicio | Fim | Tipo |
| -- | -- | -- | -- | -- | -- |
| 06 | Data de Emissão   | 8   | 21   | 28   | N |
| 07 | Modelo   | 2   | 29   | 30   | N |
| 08 | Série   | 3   | 31   | 33   | X |
| 09 | Número   | 9   | 34   | 42   | N |

Informações referentes aos itens de fornecimento de energia elétrica ou de prestação de serviços de comunicação/telecomunicação 

| Campo | Descrição | Tamanho | Inicio | Fim | Tipo |
| -- | -- | -- | -- | -- | -- |
| 10 | CFOP   | 4   | 43   | 46   | N |
| 11 | Nº de ordem do Item   | 3   | 47   | 49   | N |
| 12 | Código do item   | 10   | 50   | 59   | X |
| 13 | Descrição do item   | 40   | 60   | 99   | X |
| 14 | Código de classificação do item   | 4   | 100   | 103   | N |
| 15 | Unidade   | 6   | 104   | 109   | X |
| 16 | Quantidade contratada (com 3 decimais)   | 12   | 110   | 121   | N |
| 17 | Quantidade medida (com 3 decimais)   | 12   | 122   | 133   | N |

Informações referentes aos valores dos itens de fornecimento de energia elétrica ou de prestação de serviços de comunicação/telecomunicação 

| Campo | Descrição | Tamanho | Inicio | Fim | Tipo |
| -- | -- | -- | -- | -- | -- |
| 18 | Total (com 2 decimais)   | 11   | 134   | 144   | N |
| 19 | Desconto / Redutores (com 2 decimais)   | 11   | 145   | 155   | N |
| 20 | Acréscimos e Despesas Acessórias (com 2 decimais)   | 11   | 156   | 166   | N |
| 21 | BC ICMS (com 2 decimais)   | 11   | 167   | 177   | N |
| 22 | ICMS (com 2 decimais)   | 11   | 178   | 188   | N |
| 23 | Operações Isentas ou não tributadas (com 2 decimais)   | 11   | 189   | 199   | N |
| 24 | Outros valores (com 2 decimais)   | 11   | 200   | 210   | N |
| 25 | Alíquota do ICMS (com 2 decimais)   | 4   | 211   | 214   | N |

Informações de Controle

| Campo | Descrição | Tamanho | Inicio | Fim | Tipo |
| -- | -- | -- | -- | -- | -- |
| 26 | Situação   | 1   | 215   | 215   | X |
| 27 | Ano e Mês de referência de apuração   | 4   | 216   | 219   | X |
| 28 | Número do Contrato   | 15   | 220   | 234   | X |
| 29 | Quantidade faturada (com 3 decimais)   | 12   | 235   | 246   | N |

Informações complementares

| Campo | Descrição | Tamanho | Inicio | Fim | Tipo |
| -- | -- | -- | -- | -- | -- |
| 30 | Tarifa Aplicada / Preço Médio Efetivo (com 6 decimais)   | 11   | 247   | 257   | N |
| 31 | Alíquota PIS/PASEP (com 4 decimais)   | 6   | 258    | 263   | N |
| 32 | PIS/PASEP (com 2 decimais)   | 11   | 264    | 274   | N |
| 33 | Alíquota COFINS (com 4 decimais)   | 6   | 275    | 280   | N |
| 34 | COFINS (com 2 decimais)   | 11   | 281    | 291   | N |
| 35 | Indicador de Desconto Judicial   | 1   | 292   | 292    | X |
| 36 | Tipo de Isenção/Redução de Base de Cálculo   | 2   | 293   | 294    | N |
| 37 | Brancos - reservado para uso futuro   | 5   | 295    | 299   | X |
| 38 | Código de Autenticação Digital do registro   | 32   | 300   | 331   | X |