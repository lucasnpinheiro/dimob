**Layout para geração "exportação" de certificados de origem**

**Certificados de Origem:**

**Nome do arquivo TXT que deverá ser gravado/gerado (CO_TEXTO.TXT)**

**Registro do tipo “H” - Header**

|     |     |     |     |     |     |     |
| --- | --- | --- | --- | --- | --- | --- |
| **Ordem** | **Campo** | **Posição**<br><br>**Inicial** | **Tamanho** | **Tipo** | **Formatação**<br><br>**Exemplo** | **Observações** |
| 1   | Tipo Registro | 1   | 1   | Alfanumérico | H   | Campo deverá conter o tipo de registro<br><br>Fixo “H” para cabeçalho |
| 2   | Reservado | 2   | 102 | Alfanumérico |     | Espaço reservado para uso futuro |
| 3   | Cod País Destino | 104 | 3   | Numérico | 000 | Código do país de destino SISCOMEX |
| 4   | Nome País destino | 107 | 60  | Alfanumérico |     | Nome do país de destino |
| 5   | Data Embarque | 167 | 8   | Date | YYYYMMDD<br><br>20060101 | Data de Embarque, sem formatação |
| 6   | Data Fatura | 175 | 8   | Date | YYYYMMDD<br><br>20060101 | Data da Fatura, sem formatação |
| 7   | Fatura | 183 | 10  | Alfanumérico |     | Número da Fatura Comercial |
| 8   | Porto Embarque | 193 | 20  | Alfanumérico |     | Local/Porto de Embarque |
| 9   | Porto Destino | 213 | 20  | Alfanumérico |     | Local/Porto de Destino Final |
| 10  | Reservado | 233 | 767 | Alfanumérico |     | Espaço reservado para uso futuro |

**Registro do tipo “I” - Ítens**

|     |     |     |     |     |     |     |
| --- | --- | --- | --- | --- | --- | --- |
| **Ordem** | **Campo** | **Posição**<br><br>**Inicial** | **Tamanho** | **Tipo** | **Formatação**<br><br>**Exemplo** | **Observações** |
| 1   | Tipo Registro | 1   | 1   | Alfanumérico | I   | Campo deverá conter o tipo de registro<br><br>Fixo “I” para ítem |
| 2   | Número Peça | 2   | 16  | Alfanumérico |     | Número da Peça |
| 3   | NCM | 18  | 8   | Numérico | 00000000 | Número da NCM, apenas números |
| 4   | Naladi | 26  | 6   | Alfanumérico |     | Campo não obrigatório |
| 5   | Descrição da peça | 32  | 35  | Alfanumérico |     | Descrição da peça |
| 6   | Reservado | 67  | 35  | Alfanumérico |     | Espaço reservado para uso futuro |
| 7   | Quantidade | 102 | 6   | Numérico | 000000 | Quantidade de volumes |
| 8   | Unidade | 108 | 2   | Alfanumérico | KG, PC, UN | Unidade de medida |
| 9   | Reservado | 110 | 35  | Alfanumérico |     | Espaço reservado para uso futuro |
| 10  | Valor FOB | 145 | 15  | Numérico | 000000000000000<br><br>Para 1,250<br><br>Informe: 0000000001250 | Informar o valor FOB sem separador decimal ou separador de miliar |
| 11  | Reservado | 160 | 92  | Alfanumérico |     | Espaço reservado para uso futuro |
| 12  | Norma de Origem | 252 | 100 | Alfanumérico |     | Descrição da Norma de Origem |
| 13  | Reservado | 352 | 648 | Alfanumérico |     | Espaço reservado para uso futuro |