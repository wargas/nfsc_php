
Informações  referentes  aos  dados  cadastrais  do  consumidor  da  energia  elétrica  ou  tomador dos serviços de comunicação/telecomunicação 

| Campo | Descrição | Tamanho | Inicio | Fim | Tipo |
| -- | -- | -- | -- | -- | -- |
| 01 | CNPJ ou CPF  | 14  | 1  | 14  | N |
| 02 | IE  | 14  | 15  | 28  | X |
| 03 | Razão Social  | 35  | 29  | 63  | X |
| 04 | UF  | 2  | 64  | 65  | X |
| 05 | Classe de Consumo  | 1  | 66  | 66  | N |
| 06 | Fase ou Tipo de Utilização  | 1  | 67  | 67  | N |
| 07 | Grupo de Tensão  | 2  | 68  | 69  | N |
| 08 | Código de Identificação do consumidor ou assinante  | 12  | 70  | 81  | X |

Informações referentes ao documento fiscal 

| Campo | Descrição | Tamanho | Inicio | Fim | Tipo |
| -- | -- | -- | -- | -- | -- |
| 09 | Data de emissão  | 8  | 82  | 89  | N |
| 10 | Modelo  | 2  | 90  | 91  | N |
| 11 | Série  | 3  | 92  | 94  | X |
| 12 | Número  | 9  | 95  | 103  | N |
| 13 | Código de Autenticação Digital do documento fiscal  | 32  | 104  | 135  | X |

Informações referentes aos valores do documento fiscal 

| Campo | Descrição | Tamanho | Inicio | Fim | Tipo |
| -- | -- | -- | -- | -- | -- |
| 14 | Valor Total (com 2 decimais)  | 12  | 136  | 147  | N |
| 15 | BC ICMS (com 2 decimais)  | 12  | 148  | 159  | N |
| 16 | ICMS destacado (com 2 decimais)  | 12  | 160  | 171  | N |
| 17 | Operações isentas ou não tributadas (com 2 decimais)  | 12  | 172  | 183  | N |
| 18 | Outros valores (com 2 decimais)  | 12  | 184  | 195  | N |

Informações de controle 

| Campo | Descrição | Tamanho | Inicio | Fim | Tipo |
| -- | -- | -- | -- | -- | -- |
| 19 | Situação do documento  | 1  | 196  | 196  | X |
| 20 | Ano e Mês de referência de apuração  | 4  | 197  | 200  | N |
| 21 | Referência ao item da NF  | 9  | 201  | 209  | N |
| 22 | Número  do  terminal  telefônico  ou  da  unidade consumidora | 12  | 210  | 221  | X |
| 23 | Indicação do tipo de informação contida no campo 1  | 1  | 222  | 222  | N |
| 24 | Tipo de cliente  | 2  | 223  | 224  | N |

Outras informações complementares

| Campo | Descrição | Tamanho | Inicio | Fim | Tipo |
| -- | -- | -- | -- | -- | -- |
| 25 | Subclasse de consumo  | 2  | 225  | 226  | N |
| 26 | Número do terminal telefônico principal  | 12  | 227  | 238  | X |
| 27 | CNPJ do emitente  | 14  | 239  | 252  | N |
| 28 | Número ou código da fatura comercial  | 20  | 253  | 272  | X |
| 29 | Valor total da fatura comercial  | 12  | 273  | 284  | N |
| 30 | Data de leitura anterior  | 8  | 285  | 292  | N |
| 31 | Data de leitura atual  | 8  | 293  | 300  | N |
| 32 | Brancos - reservado para uso futuro  | 50  | 301  | 350  | X |
| 33 | Brancos - reservado para uso futuro  | 8  | 351  | 358  | N |
| 34 | Informações adicionais  | 30  | 359  | 388  | X |
| 35 | Brancos - reservado para uso futuro  | 5  | 389  | 393  | X |
| 36 | Código de Autenticação Digital do registro  | 32  | 394  | 425  | X |