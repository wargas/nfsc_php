# GERADOR de NFSC21

Gera arquivos de remessa de Nota Fiscal de Serviço de Comunicação de acordo com convênio CONFAZ 115/03.

## **INSTALAÇÃO**

### Requisitos 

- PHP 7.1 ou maior;
- Composer 2.0;

### Procedimento para instalação

Rode no seu terminal o seguinte comando:

```shell
git clone https://github.com/wargas/nfsc_php.git pasta_do_projto
cd pasta_do_projeto
composer install
```

Se tiver algum servidor Web rodando (APACHE, NGINX, etc), já está pronto

# Como gerar

Faça uma requisição POST para a url da pasta onde o projeto foi criado. Passando os dados de acordo com o exemplo abaixo:

```json
{
	"cnpj": 1234567891232,
	"competencia": "2010",
	"emissao": "20201021",
	"numero": 100, 
	"uf": "PE",
	"items": [
		{
      "nf_numero": 1,
			"nome": "Joao da Silva",
			"documento": "12345678910",
			"uf": "PE",
			"cliente_id": "200",
			"fatura_id": "10002",
			"valor": 169.9,
			"telefone": "87999999999",
			"logradouro": "Rua Joao Pereira",
			"complemento": "CASA",
			"numero": "1",
			"cep": "56210-000",
			"bairro": "Distrito do Socorro",
			"cidade": "Santa Filomena",
			"ibge": "2612554"
		},
    {
      "nf_numero": 2,
			"nome": "Maria da Silva",
			"documento": "99876543210",
			"uf": "PE",
			"cliente_id": "200",
			"fatura_id": "10002",
			"valor": 169.9,
			"telefone": "87999999999",
			"logradouro": "Rua Franciso de Souza",
			"complemento": "CASA",
			"numero": "1",
			"cep": "56210-000",
			"bairro": "Distrito do Socorro",
			"cidade": "Santa Filomena",
			"ibge": "2612554"
		}
	]
}
```

Se der tudo certo vc obterá uma resposta como esta:

```json
{
  "arquivos": {
    "mestre": "geradas\/2010\/PE123456789123221U  2010N01M.001",
    "cadastro": "geradas\/2010\/PE123456789123221U  2010N01D.001",
    "item": "geradas\/2010\/PE123456789123221U  2010N01I.001",
    "zip": "geradas\/2010\/2010.zip"
  },
  "infos": {
    "mestre": [
      {
        "documento": "00012345678910",
        "razao_social": "Joao da Silva                      ",
        "cliente_id": "200         ",
        "numero": "000000100",
        "fatura_id": "10002               ",
        "valor": "000000016990",
        "codigo_validacao": "d6e4ace591651a3e29eac94dd0704322"
      },
      {
        "documento": "00099876543210",
        "razao_social": "Maria da Silva                     ",
        "cliente_id": "200         ",
        "numero": "000000101",
        "fatura_id": "10002               ",
        "valor": "000000016990",
        "codigo_validacao": "cb3446e461f5e227ff5c35ad53cc6b0d"
      }
    ],
    "cadastro": [],
    "item": [
      {
        "documento": "00012345678910",
        "uf": "PE",
        "numero": "000000100"
      },
      {
        "documento": "00099876543210",
        "uf": "PE",
        "numero": "000000101"
      }
    ]
  }
}
```

As infos que serão retornadas podem ser alteradas nos arquivos situados na pasta `  src/data `, adicionando o info e nome da coluna que o usuário queira que apareça, de acordo com imagem abaixo:

![Image](https://sefaz-ce.s3.amazonaws.com/images/20201025093500_image.png)

Para baixar o arquivo zip, basta chamar a seguinte url ` http://url_do-projeto/baixadas/2001/2001.zip `, substituindo pelo valor da competência que se deseja baixar.
