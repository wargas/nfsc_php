
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

5.2.1.  Informações  referentes  aos  dados  cadastrais  do  consumidor  da  energia  elétrica  ou tomador dos serviços de comunicação/telecomunicação 

5.2.1.1.  Campo  01  -  Informar  o  CNPJ  ou  CPF.  Em  se  tratando  de  pessoa  não  obrigada  à inscrição no CNPJ ou CPF, preencher o campo com zeros; 

5.2.1.2. Campo 02 - Informar a Inscrição Estadual. Em se tratando de pessoa não obrigada à inscrição estadual, preencher o campo com a expressão “ISENTO”; 

5.2.1.3. Campo 03 - Informar a razão social, denominação ou nome; 

5.2.1.4. Campo 04 - Informar a sigla da UF da localização do consumidor da energia elétrica ou tomador  dos  serviços  de  comunicação/telecomunicação.  Em  se  tratando  de  operações  com  exterior, preencher o campo com a expressão “EX”; 

5.2.1.5. Campo 05 - Em se tratando de nota fiscal modelo 6, informar o código da classe de consumo da energia elétrica, utilizando tabela de item 11.1.1. Nos demais casos, preencher com zeros; 

5.2.1.6.  Campo  06  -  Informar  o  código  do  tipo  de  ligação  (Mono/Bi/Trifásico)  ou  tipo  de utilização, conforme tabela de item 11.2; 

5.2.1.7. Campo 07 - Informar o código do Grupo de Tensão, conforme tabela de item 11.3; 

5.2.1.8. Campo 08 - Informar o código de identificação do consumidor ou assinante utilizado pelo contribuinte; 

5.2.2. Informações referentes ao documento fiscal 

5.2.2.1. Campo 09 - Informar a data de emissão do documento fiscal no formato AAAAMMDD; 

5.2.2.2.  Campo  10  -  Informar  o  modelo  do  documento  fiscal,  conforme  código  da  tabela  de documentos fiscais, do item 11.4; 

5.2.2.3. Campo 11 - Informar a série do documento fiscal, que deverá conter, no mínimo, uma letra  não  acentuada,  ou  um  algarismo  de  1  a  9  e  ter  seu  preenchimento  iniciado  a  partir  da  esquerda (exemplo: “A  “, e não “  A”), observando o seguinte: 

5.2.2.3.1. Os caracteres válidos para identificação da série dos documentos fiscais são: 

5.2.2.3.1.1. Algarismos (“1234567890”); 

5.2.2.3.1.2. Letras  não  acentuadas  (“abcdefghijklmnopqrstuvwxyz”,  ou “ABCDEFGHIJKLMNOPQRSTUVWXYZ”); 

5.2.2.3.1.3. Hífen, espaço em branco (“-“, “ “); 

5.2.2.3.2. O primeiro caractere não pode ser hífen ou espaço em branco (“-“, “ “); 

5.2.2.3.3. Utilizar a letra “U” para indicar a série única. 

5.2.2.4.  Campo  12  -  Informar  o  número  seqüencial  atribuído  pelo  sistema  eletrônico  de processamento de dados ao documento fiscal (vide item 2.1.2). O campo deverá ser alinhado à direita com as posições não significativas preenchidas com zeros; 

5.2.2.5. Campo 13 - Informar o código de autenticação digital obtido por meio da aplicação do algoritmo  MD5  (Message  Digest  5,  vide  item  11.7)  de  128  bits  na  cadeia  de  caracteres  formada  pelos campos 01, 12, 14, 15, 16, 09 e 27, nessa ordem, respeitando o tamanho previsto do campo, assim como os brancos e zeros de preenchimento.  

5.2.3. Informações referentes aos valores do documento fiscal 

5.2.3.1. Campo 14 - Informar o Valor Total do documento fiscal, com 2 decimais; 

5.2.3.2. Campo 15 - Informar a Base de Cálculo do ICMS destacado no documento fiscal, com 2 decimais; 

5.2.3.3. Campo 16 - Informar o valor do ICMS destacado no documento fiscal, com 2 decimais; 

5.2.3.4. Campo 17 - Informar o valor das operações ou serviços isentos ou não tributados pelo ICMS, com 2 decimais; 

5.2.3.5.  Campo  18  -  Informar  os  outros  valores  constantes  do  documento  fiscal,  com  2 decimais.  Neste  campo  devem  ser  informados  multa e  juros,  tributos  que  não  compõem  a  BC  do ICMS, cobrança de terceiros, mercadorias ou serviços com ICMS diferido e quaisquer outros valores, ainda que estranhos à tributação do ICMS. 

5.2.4. Informações de controle 

5.2.4.1. Campo 19 - Informar a situação do documento. Este campo deve ser preenchido com: 

5.2.4.1.1.  “S”,  em  se  tratando  de  documento  fiscal  cancelado  dentro  do  mesmo  período  de apuração;  

5.2.4.1.2. “R”, em se tratando de documento fiscal emitido em substituição a um documento fiscal cancelado dentro do mesmo período de apuração;  

5.2.4.1.3. “C”, em se tratando de documento fiscal complementar;  

5.2.4.1.4. “N”, nos demais casos.  

5.2.4.1.5.  Nas  hipóteses  de  situação  “R”  ou  “C”,  deve  ser  preenchido  o  campo  34  - “Informações Adicionais” (item 5.2.5.10). 

5.2.4.1.5.  Nas  hipóteses  de  situação  “R”  ou  “C”,  deve  ser  preenchido  o campo 34 - “Informações Adicionais” (item 5.2.5.13). 

5.2.4.2. Campo 20 - Informar o ano e mês de referência de apuração do ICMS do documento fiscal, utilizando o formato “AAMM”; 

5.2.4.3.  Campo  21  -  Informar  o  número  do  registro  do  arquivo  ITEM  DO  DOCUMENTO FISCAL, onde se encontra o primeiro item do documento fiscal; 

5.2.4.4. Campo 22 - Em se tratando de Nota Fiscal de Serviço de Comunicação, modelo 21, ou Nota Fiscal de Serviço de Telecomunicação, modelo 22, informar a localidade de registro e o número do terminal no formato “LLNNNNNNNN”, onde “LL” é o  código da localidade e “NNNNNNNN”, o número de identificação do terminal. No caso de número de identificação do terminal com 9 (nove) dígitos, utilizar o formato “LLNNNNNNNNN”. Quando se tratar de Nota Fiscal/Conta de Energia Elétrica, modelo 6, informar o número da unidade consumidora. Nos demais casos, deixar em branco; 

5.2.4.5. Campo 23 - Identificar o tipo de informação contida no campo 1, preenchendo com o dígito “1” se o conteúdo for um CNPJ ou com o dígito “2” se o conteúdo for um CPF. Em se tratando de pessoa  jurídica  não  obrigada  à  inscrição  no  CNPJ,  preencher  com  o  dígito  “3”,  se for  pessoa  física  não obrigada ao CPF, preencher com o dígito “4”;  

5.2.4.6.  Campo  24  -  Em  se  tratando  de  nota  fiscal  modelo  6,  informar  o  tipo  de  cliente, conforme a tabela 11.8.1. Em se tratando de Nota Fiscal de Serviço de Comunicação, modelo 21, ou Nota Fiscal de Serviço de Telecomunicação, modelo 22, informar o tipo de cliente, conforme a tabela 11.8.2. 

5.2.5. Outras informações complementares aos itens 5.2.1, 5.2.2, 5.2.3 e 5.2.4: 

5.2.5.1. Campo 25 - Em se tratando de nota fiscal modelo 6, informar a subclasse de consumo, conforme a tabela 11.9. Em se tratando de Nota Fiscal de Serviço de Comunicação, modelo 21, ou Nota Fiscal de Serviço de Telecomunicação, modelo 22, preencher com zeros. 

5.2.5.2. Campo 26 - Em se tratando de plano de prestação de serviço telefônico corporativo, familiar ou similares, informar o número do terminal telefônico principal do plano. Informar a localidade de registro e o número no formato “LLNNNNNNNN”, onde “LL” é o código da localidade e “NNNNNNNN”, o número  de identificação  do  terminal  telefônico  principal.  No caso  de  número  de  identificação  do terminal com 9 (nove) dígitos, utilizar o formato “LLNNNNNNNNN”. Para planos individuais e nota fiscal modelo 6, o campo deve ser preenchido com brancos. A seguir, exemplo hipotético de preenchimento dos campos dos registros  mestre  referentes  a  um  plano  corporativo  composto  por  4  terminais  telefônicos,  sendo  que  o primeiro é o terminal principal e os demais terminais vinculados. O quinto registro refere-se a um terminal telefônico de plano individual, não relacionado com os anteriores: 


| TERMINAL  | CAMPO 22 DO REGISTRO MESTRE |  CAMPO 26 DO REGISTRO MESTRE |
| - | - | - |
| (11)95555-0001 |  11955550001|  11955550001 |
| (11)95555-0002 | 11955550002 |11955550001 |
| (11)95555-0003 | 19555550003 |11955550001 |
| (11)95555-0004 | 11955550004 |11955550001 |
| (11)99999-1234 | 11999991234 |  |

5.2.5.2.1  Nos  casos  de  planos  de  prestação  de  serviço  telefônico  corporativo,  familiar  ou similares, em substituição ao procedimento estabelecido no item 5.2.5.2 para emissão de  um documento fiscal para cada terminal desse plano, a prestadora de serviço poderá emitir um único documento fiscal para o terminal principal englobando o valor total do plano (corporativo, familiar ou similar), desde que as demais informações  inerentes  aos  terminais  vinculados  ao  terminal  principal  sejam  apresentadas  em  arquivo distinto, conforme leiaute estabelecido no Ato Cotepe 74/2017. 

5.2.5.3.  Campo 27 - Informar o CNPJ do emitente do documento fiscal. 

5.2.5.4. Campo 28 - Informar o número ou o código da fatura comercial, atribuído pelo sistema de faturamento do emitente.  

5.2.5.5. Campo 29 - Informar o valor total da fatura comercial, com 2 decimais.  

5.2.5.6. Campo 30 - Em se tratando de nota fiscal modelo 6, informar a data da leitura anterior, no formato AAAAMMDD. Nos demais casos, preencher com zeros; 

5.2.5.7. Campo 31 - Em se tratando de nota fiscal modelo 6, informar a data de leitura atual, no formato AAAAMMDD. Nos demais casos, preencher com zeros; 

5.2.5.8 Campo 32 - Informar a chave de acesso do documento fiscal eletrônico (CV115-e). Nas unidades federadas em que tal documento não tiver sido implementado, preencher com brancos; 

5.2.5.9 Campo 33 - Informar a data da autorização de emissão do documento fiscal eletrônico (CV115-e),  no  formato  AAAAMMDD.  Nas  unidades  federadas  em  que  tal  documento  não  tiver  sido implementado, preencher com zeros; 

5.2.5.10.  Campo  34  -  Informar  os  dados  dos  documentos  fiscais  substituídos  ou complementados nos casos de: a) documento fiscal emitido em substituição a outro que tenha sido objeto de estorno de débito (apenas para as unidades federadas que admitem esta hipótese) b) o campo 19 ter sido preenchido com “R” (documento fiscal emitido em substituição a um documento fiscal cancelado) ou com “C” (documento fiscal complementar). Devem ser informados: referência de apuração (4 algarismos), modelo  (2  caracteres),  série  (3  caracteres),  número  (9  algarismos)  e  data  de  emissão  (8  algarismos), totalizando 30 caracteres, no seguinte formato: “AAMM_MO_SSS_NNNNNNNNN_AAAAMMDD”. Exemplo: “0901_22_A_000001234_20090131“, para o documento fiscal da referência “0901”, modelo “22”, série “A“, número “000001234”, emitido em 31/01/2009. Nos demais casos, preencher com brancos;  

5.2.5.11. Campo 35 - Campo reservado para uso futuro. Preencher com espaços em branco; 

5.2.5.12. Campo 36 - Informar o código de autenticação digital obtido por meio da aplicação do algoritmo  MD5  (Message  Digest  5,  vide  item  11.7)  de  128  bits  na  cadeia  de  caracteres  formada  pelos campos 01 a 35; 

5.2.6. Deverá ser criado um único registro fiscal mestre para cada documento fiscal emitido. 
