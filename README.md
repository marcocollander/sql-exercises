# sql-exercises

# Podstawy MySQL

Praktycznie każdy serwis (strona) internetowa używa bazy danych, które służą do przechowywania informacji.

Istnieje wiele rodzajów baz danych:

- relacyjne
- nie-relacyjne &mdash; istnieje powiązanie (relacje między danymi)

Nie-relacyjne bazy danych, czyli tak zwane NoSql. Można tu przytoczyć choćby takie nazwy jak:

- MongoDb &mdash; dokumentowa baza danych

- Neo4j &mdash; grafowa baza danych

W projektach &bdquo;dość standardowych&rdquo; i charakteryzujących się tym, że dane są zapisywane o tej samej
strukturze, np. zawsze będą miały tytuł, opis i datę najlepszym wyborem są relacyjne bazy danych.

Istnieje wiele silników baz relacyjnych. Głównymi graczami na rynku są: MySql, PostgreSql, SqlLite, MSSQL, Oracle. Dwie
ostatnie to są tak zwane rozwiązania Enterprise i są dość drogie. Natomiast trzy pierwsze są rozwiązaniami darmowymi.

MySql jest bardzo popularną bazą danych. Większość ofert pracy dotyczy połączenia PHP i MySQL.

## Czym jest MySQL?

Tworząc serwis internetowy, trzeba wybrać sposób, w jaki będą w nim przechowywane dane. Można przechowywać dane w
plikach na dyskach. Jest to jednak mało wygodne i mało wydajne wraz ze wzrostem ilości przechowywanych danych. Dlatego
wykorzystuje się bazy danych i to bazy relacyjne zarządzane systemem RDBMS (ang. Relational Database Management System).

MySQL to system zarządzania bazą danych. To serwer baz danych dostępny m.in. na licencji GPL (dzięki czemu dostępny jest
nieodpłatnie nawet w zastosowaniach firmowych). Odpowiednią wersję dystrybucyjną
można [pobrać ze strony producenta](http://www.mysql.com) (należy szukać darmowej wersji Community).

## Instalacja i konfiguracja

## Zarządzanie serwerem

## Koncepcja relacyjnych baz danych

### Tabele

W systemach relacyjnych baz danych (a takim jest MySQL) dane przechowywane są w tabelach. Pomiędzy tymi tabelami (a
dokładniej pomiędzy danymi w tych tabelach) występują wiążące je relacje. Tabela składa się z wierszy i kolumn. Każdy
wiersz opisuje jeden rekord (zestaw danych), a kolumna — właściwości danego rekordu.

### Klucze

Podczas projektowania tabeli należy utworzyć taką strukturę kolumn, aby każdy rekord mógł być jednoznacznie
zidentyfikowany. Podczas projektowania tabeli należy utworzyć taką strukturę kolumn, aby każdy rekord mógł być
jednoznacznie zidentyfikowany. Do tabeli wprowadza się dodatkową, abstrakcyjną (niemającą odzwierciedlenia w
rzeczywistych danych) kolumnę identyfikujące każdy wiersz.

Taka kolumna, zawierająca wartość jednoznacznie identyfikującą każdy rekord, nazywana jest kluczem głównym lub
podstawowym (_ang. primary key_). Ogólnie rzecz biorąc, kluczem można nazwać dowolnie wybrany zestaw kolumn, niemniej
klucz główny powinien zawsze jednoznacznie identyfikować każdy wiersz tabeli. O tym, która kolumna (lub kolumny) będzie
kluczem głównym, decyduje programista tworzący bazę. Klucze pozwalają zaś na budowanie powiązań
(relacji) między tabelami.

### Relacje

Dane w bazie są przechowywane tabelach. Tabele, żeby były użyteczne, muszą być ze sobą w jakiś sposób powiązane. Jeśli
prowadzimy sklep internetowy to tabela zamówień i tabela klientów, aby było wiadomo, które zamówienie złożył dany
klient, muszą być ze sobą w jakieś relacji. Realizuje się to przez wprowadzenie do jednej z tabeli tzw. klucza obcego.
Np. w tabeli klientów wprowadza się klucz identyfikujący klientów, a w tabeli zamówień oprócz klucza identyfikującego
zamówienia wprowadza się klucz obcy, który jest kluczem głównym z tabeli klientów. W ten sposób między tymi tabelami
powstanie relacja.

W teorii projektowania relacyjnych baz danych wyróżnia się trzy podstawowe typy relacji:

- jeden do jednego — jednemu rekordowi (wierszowi) z tabeli X odpowiada dokładnie jeden rekord z tabeli Y.
- jeden do wielu — jednemu rekordowi (wierszowi) z tabeli X może odpowiadać jeden lub więcej rekordów z tabeli Y, ale
  jednemu wierszowi z tabeli Y odpowiada dokładnie jeden wiersz z tabeli X.
- wiele do wielu — jednemu wierszowi z tabeli X może odpowiadać wiele wierszy z tabeli Y oraz jednemu wierszowi z tabeli
  Y może odpowiadać wiele wierszy z tabeli X.

W przypadku wystąpienia relacji wiele do wielu należy stosować dodatkową tabelę pomocniczą łączącą tabele, między
którymi relacja występuje. W takiej tabeli wprowadza się klucze główne z tabel, które chcemy powiązać, które
są kluczami obcymi, ale łącznie stanowią klucz główny, który jednoznacznie identyfikuje dany wiersz tabeli
pomocniczej. Prawidłowe rozwiązanie jest zatem takie jak na rysunku.

## Jak projektować tabele bazy

<!-- TODO -->

## Tworzenie i usuwanie baz

### Łączenie z serwerem

## Zarzadzanie kontami użytkowników

## Inne czynnośći zarządzające

# Podstawy SQL

## Czym jest SQL?

SQL, czyli Structured Query Language , to strukturalny język zapytań, który umożliwia wykonywanie wszelkich operacji na
relacyjnych bazach danych. Jest to język uniwersalny, stosowany praktycznie w każdym popularnym systemie relacyjnych baz
danych, i to zarówno w systemach komercyjnych, takich jak DB2, MS SQL czy Oracle, jak i w systemach rozwijanych na
zasadach Open Source , jak PostgreSQL czy MySQL.

Mimo iż istnieją standardy SQL trudno wskazać system zarządzania bazą danych, który byłby ściśle zgodny z którymkolwiek
ze standardów. Najczęściej producenci dodają swoje własne rozszerzenia, niekiedy też niektóre elementy standardów nie są
implementowane. Można jednak założyć, że wszelkie typowe, nawet stosunkowo skomplikowane operacje będą wykonywane tak
samo we wszystkich popularnych systemach, w tym także w MySQL.

Występujące w SQL instrukcje można podzielić na trzy grupy:

1. DDL, język definiowania danych(ang. _Data Definition Language_) &mdash; umożliwia definicję struktur danych.
2. DML, język manipulacji danymi (ang. _Data Manipulation Language_) — umożliwia pobieranie i modyfikowanie danych.
3. DCL, język kontroli danych (ang._Data Control Language_) — umożliwia kontrolę dostępu do danych.

Podstawowe instrukcje należące do DCL zostały przedstawione w rozdziale &bdquo;Podstawy MySQL&rdquo; umożliwiały one
m.in. zarządzanie kontami użytkowników i kontem administratora.

W SQL nie są rozróżniane duże i małe litery, można ich więc używać zamiennie, wedle uznania.

[Dobrym narzędziem do poćwiczenia języka SQL jest:](https://www.w3schools.com/sql/trysql.asp?filename=trysql_select_all)

## Podstawowe zapytania:

- SELECT
- INSERT
- UPDATE
- DELETE

### SELECT &mash; wyciąganie danych

```sql
SELECT select_expr[,
       select_expr …]
FROM
    tbl_name
    [
WHERE where_condition]
    [
ORDER BY {col_name | expr | position} [ASC |
DESC], …]
    [LIMIT {[offset,] row_count | row_count OFFSET offset}]
```

[Pełną konstrukcję na stronie](https://dev.mysql.com/doc/refman/8.0/en/select.html)

```sql
SELECT *
FROM tableName # wszystkie rekordy z tabeli
```

```sql
SELECT columnName1, columnName2, ..., columnNameN
FROM tableName
```

       SELECT ... JOIN
       INNER, LEFT, RIGHT

INSERT - dodawanie nowych rekordów: https://dev.mysql.com/doc/refman/8.0/en/insert.html

       INSERT
           [INTO] tbl_name
           [(col_name [, col_name] ...)]
           { {VALUES | VALUE} (value_list) [, (value_list)] ... | VALUES row_constructor_list}


       INSERT INTO tbl_name (id, title, desc) VALUES(11, 'test', 'desc');


    UPDATE - aktualizacja rekordów

        UPDATE tbl_name
            SET col1={expr1|DEFAULT} [,col2={expr2|DEFAULT}] …
            [WHERE where_condition]

        UPDATE t1 SET col1 = col1 + 1, col2 = col1;


    DELETE - usuwanie rekordów

        DELETE FROM tbl_name
            [WHERE where_condition]
            [LIMIT row_count]

        DELETE FROM emails LIMIT 2

## Typy danych w kolumnach

Występujące w SQL typy danych można podzielić na trzy główne rodzaje:

1. Typy liczbowe.
2. Typy daty i czasu.
3. Typy łańcuchowe.

### Typy liczbowe

Typy liczbowe można podzielić na dwa rodzaje:

- typy całkowitoliczbowe
- typy zmiennoprzecinkowe (zmiennopozycyjnych, rzeczywistych).

Typy całkowitoliczbowe zostały przedstawione w tabeli. W każdym z wymienionych przypadków, z wyjątkiem `BOOL`
i `BOOLEAN`, można zastosować dodatkowy modyfikator określający maksymalną szerokość wyświetlania w
postaci: `nazwa_typu (ile)`

| Typ       | Zakres warośći                                                                                                                                                         | Liczba zajmowanych bajtów | Opis                                                                                             |
| --------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------- | ------------------------------------------------------------------------------------------------ |
| BIT       | -                                                                                                                                                                      | zmienna                   | Reprezentuje pola bitowe od 1 do 64 bitów, w wersjach wcześniejszych synonim dla TINYINT (1) .   |
| BOOL      | -                                                                                                                                                                      | 1                         | Synonim dla TINYINT (1). Wartość 0 jest interpretowana jako false, wartość różna od 0 jako true. |
| BOOLEAN   | -                                                                                                                                                                      | 1                         | Synonim dla TINYINT (1). Wartość 0 jest interpretowana jako false, wartość różna od 0 jako true. |
| TINYINT   | Od –128 do 127 dla liczb ze znakiem i od 0 do 255 dla liczb bez znaku.                                                                                                 | 1                         | Reprezentacja bardzo małych wartości całkowitoliczbowych.                                        |
| SMALLINT  | Od –32 768 (–2<sup>15</sup>) do 32 767 (2<sup>15</sup> – 1) dla liczb ze znakiem i od 0 do 65 535 (2<sup>16</sup> – 1) dla liczb bez znaku.                            | 2                         | Reprezentacja małych wartości całkowitoliczbowych.                                               |
| MEDIUMINT | Od –8 388 608 (–2<sup>23</sup> ) do 8 388 607 (2<sup>23</sup> – 1) dla liczb ze znakiem i od 0 do 16 777 215 (2<sup>24</sup> – 1) dla liczb bez znaku.                 | 3                         | Reprezentacja średnich wartości całkowitoliczbowych.                                             |
| INT       | Od –2 147 483 648 (–2 31 ) do 2 147 483 647 (2 31 –1) dla liczb ze znakiem i od 0 do 4 294 967 295 (2 32 –1) dla liczb bez znaku.                                      | 4                         | Reprezentacja zwykłych wartości całkowitoliczbowych.                                             |
| INTEGER   | Od –2 147 483 648 (–2 31 ) do 2 147 483 647 (2 31 –1) dla liczb ze znakiem i od 0 do 4 294 967 295 (2 32 –1) dla liczb bez znaku.                                      | 4                         | Synonim dla INT                                                                                  |
| BIGINT    | Od –9 223 372 036 854 775 808 (–2 63 ) do 9 223 372 036 854 775 807 (2 63 –1) dla liczb ze znakiem i od 0 do 18 446 744 073 709 551 615 (2 64 –1) dla liczb bez znaku. | 8                         | Reprezentacja dużych wartości całkowitoliczbowych                                                |

Dozwolone są także modyfikatory:

- _UNSIGNED_ oznacza, że wartość ma być traktowana jako liczba bez znaku,
- _ZEROFILL_ oznacza, że jeżeli liczba cyfr w danej wartości jest mniejsza od maksymalnej liczby wyświetlanych znaków,
  wolne miejsca zostaną dopełnione zerami; automatycznie zostanie również zastosowany atrybut `UNSIGNED`.

Przykład

```SQL
TINYINT
UNSIGNED # w kolumnach będzie można zapisywać wartości od 0 do 255

TINYINT(4) ZEROFILL
# W kolumny można zapisywać wartości od 0 do 255, ale będą one wyświetlane w postaci czteroznakowej,
# w której wolne miejsca z lewej strony zostały wypełnione zerami. Oznacza to, że wartość 2 będzie
# wyświetlana jako 0002, wartość 64 jako 0064, a wartość 128 jako 0128.
```

Typy zmiennoprzecinkowe zostały przedstawione w tabeli. Podobnie jak w przypadku typów całkowitoliczbowych, istnieje
możliwość zastosowania modyfikatora określającego szerokość wyświetlania. W przypadku typów FLOAT, DOUBLE i DOUBLE
PRECISION występuje on zawsze jednocześnie z modyfikatorem określającym liczbę miejsc po przecinku, ogólnie:

nazwa_typu (mod1 , mod2)

gdzie mod1 określa szerokość wyświetlania, a mod2 liczbę miejsc uwzględnianych po przecinku.

| Typ              | Zakres warośći                                         | Liczba zajmowanych bajtów | Opis                                                                                                                                                                                                                                                                                                    |
| ---------------- | ------------------------------------------------------ | ------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| FLOAT (precyzja) | zmienny                                                | 4 lub 8                   | Parametr precyzja określa precyzję, z jaką będzie reprezentowana dana wartość rzeczywista. W przypadku wartości od 0 do 24 mamy do czynienia z liczbami o pojedynczej precyzji, a w przypadku wartości od 25 do 63 — z liczbami o podwójnej precyzji, co odpowiada opisanym niżej typom FLOAT i DOUBLE. |
| FLOAT            | od –3.402823466E+38 do 3.402823466E+38                 | 4                         | Liczby zmiennoprzecinkowe pojedynczej precyzji.                                                                                                                                                                                                                                                         |
| DOUBLE           | od –1.7976931348623157E+308 do 1.7976931348623157E+308 | 8                         | Liczby zmiennoprzecinkowe podwójnej precyzji.                                                                                                                                                                                                                                                           |
| DOUBLE PRECISION | jw.                                                    | jw.                       | Synonim dla DOUBLE                                                                                                                                                                                                                                                                                      |
| REAL             | jw.                                                    | jw.                       | Synonim dla DOUBLE                                                                                                                                                                                                                                                                                      |
| DECIMAL          | zmienny                                                | zmienny                   | Wartości z separatorem dziesiętnym. W wersjach przed 5.0.3 przechowywana jako łańcuch znaków. Zarówno całkowita maksymalna liczba znaków, jak i liczba znaków po separatorze dziesiętnym może być określana przez dodatkowe parametry.                                                                  |
| DEC              | j.w.                                                   | j.W                       | Synonim dla DECIMAL                                                                                                                                                                                                                                                                                     |
| NUMERIC          | j.w.                                                   | j.w.                      | Synonim dla DECIMAL                                                                                                                                                                                                                                                                                     |
| FIXED            | j.w.                                                   | j.w.                      | Synonim dla DECIMAL                                                                                                                                                                                                                                                                                     |

// TODO modyfikatory dall typu zmiennoprzecinkowego

### Typy daty i czasu

Typy pozwalające na reprezentację daty i czasu zostały zebrane w tabeli. W przypadku typów DATE , DATETIME i TIMESTAMP
dopuszczalne są formaty:

- Ciąg znaków RRRR-MM-DD GG:MM:SS i RR-MM-DD GG:MM:SS. Pomiędzy składowymi daty oraz pomiędzy składowymi czasu mogą
  występować dowolne znaki przestankowe. Prawidłowe są zatem zapisy: 2018-05-20 20:12:55 , 2018.05.20 20-12-55 , 2018*
  05*20 20%12%55.

- Ciąg znaków RRRR-MM-DD i YY-MM-DD. Pomiędzy składowymi daty mogą występować dowolne znaki przestankowe. Prawidłowe są
  zatem zapisy: 2018- 05-20, 2018.05.20, 18*05*20

- Ciąg znaków RRRRMMDDGGMMSS i RRMMDDGGMMSS. Prawidłowe są zatem zapisy: 20180520201255 , 180520201255 — oba
  interpretowane jako 2018-05-20 20:12:55.

- Ciąg znaków RRRRMMDD i RRMMDD. Prawidłowe są zatem zapisy: 20180520, 180520, oba interpretowane jako 2018-05- 20.

- Wartość liczbowa zapisana jako RRRRMMDDGGMMSS, RRMMDDGGMMSS, RRRRMMDD lub RRMMDD, o ile reprezentuje poprawną datę i (
  lub) czas.

| Typ       | Zakres warości                       | Liczba zajmowanych bajtów | Opis                                                                                                                                                     |
| --------- | ------------------------------------ | ------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------- |
| DATE      | Od 1000-01-01 do 9999-12-31.         | 3                         | Typ przeznaczony do reprezentacji daty. Wartości będą pobierane z bazy i wyświetlane w formacie RRRR - MM - DD                                           |
| DATETIME  | Od 1000-01-01 00:00:00 do 9999-12-31 | 8                         | Typ przeznaczony do reprezentacji daty i czasu. Wartości będą pobierane z bazy i wyświetlane w formacie RRRR - MM - DD GG : MM : SS                      |
| TIMESTAMP | Zależne od dodatkowych opcji.        | 4                         | Typ przeznaczony do reprezentacji znacznika czasu.                                                                                                       |
| TIME      | Od –838:59:59 do 838:59:59.          | 3                         | Typ przeznaczony do reprezentacji czasu. Wartości będą pobierane z bazy i wyświetlane w formacie GG : MM : SS lub GGG : MM : SS                          |
| YEAR      | Od 1901 do 2155.                     | 1                         | Typ przeznaczony do reprezentacji lat. Wartości będą pobierane z bazy i wyświetlane w formacie RRRR . Wartości tego typu są zapisywane na jednym bajcie. |

W przypadku typu TIME dopuszczalne są następujące formaty:

- Ciąg znaków D GG : MM : SS . Ciąg D reprezentuje dni i może przyjmować wartości od 0 do 34. Możliwe są również
  warianty skrócone w następujących postaciach: GG : MM : SS , GG : MM , D GG : MM , D GG i SS . Poprawne są zatem
  zapisy: 12:52:24 , 12:52 , 24 .

- Ciąg znaków GGMMSS. Pomiędzy składowymi nie mogą występować żadne znaki przestankowe, cały ciąg musi zaś reprezentować
  poprawny czas. Poprawne są zatem zapisy: 125224 (co oznacza 12:52:24), 182931 (co oznacza 18:29:31).

- Wartość liczbowa zapisana jako GGMMSS, o ile reprezentuje poprawny czas. Możliwe są również alternatywne zapisy w
  postaci: SS, MMSS, GGMMSS

W przypadku typu YEAR dopuszczalne są następujące formaty:

- Ciąg znaków w formacie RRRR. Dopuszczalny zakres to 1901 – 2155.
- Ciąg znaków w formacie RR. Dopuszczalny zakres to 00 – 99. Ciągi od 00 do 69 są interpretowane jako lata 2000 – 2069,
  natomiast ciągi od 70 do 99 jako lata 1970 –1999.
- Wartość liczbowa w formacie RRRR. Dopuszczalny zakres to 1901 – 2155.
- Wartość liczbowa w formacie RR. Dopuszczalny zakres to 1 – 99. Wartości od 1 do 69 są interpretowane jako lata 2001 –
  2069, natomiast ciągi od 70 do 99 jako lata 1970 – 1999.

### Typy łańcuchowe

Typy łańcuchowe służą do przechowywania zarówno ciągów znaków, jak i danych binarnych. Można je podzielić na cztery
grupy:
typy CHAR i VARCHAR typy BINARY i VARBINARY typy BLOB i TEXT typy ENUM i SET

#### Typy CHAR I VARCHAR

Typy CHAR [1] i VARCHAR [2] służą do przechowywania łańcuchów znakowych, czyli tekstów. Oba wymagają podania długości
łańcucha (w nawiasie okrągłym) za nazwą typu, czyli: CHAR( długość ) i VARCHAR( długość ), gdzie długość oznacza liczbę
znaków [3]. Przykładowo, aby utworzyć kolumnę, która będzie mogła przechowywać do 20 znaków, należy zastosować
konstrukcję: CHAR(20) lub: VARCHAR(20).

#### Typy BINARY I VARBINARY

Typy BINARY i VARBINARY są podobne do typów CHAR i VARCHAR , przechowują jednak łańcuchy bajtów, a nie znaków. Typ
BINARY definiuje się w postaci: BINARY( długość ) natomiast typ VARBINARY w postaci: VARBINARY( długość )

#### Typy BLOB i TEXT

Typy BLOB i TEXT służą do przechowywania dużej ilości danych: typ BLOB (ang. Binary Large Object ) do przechowywania
ciągów binarnych, natomiast typ TEXT — ciągów tekstowych. Oba typy dzielą się na cztery podtypy, różniące się od siebie
maksymalną wielkością danych, które mogą być za ich pomocą zapisane. Zobrazowano to w tabelach

#### Typy ENUM i SET

Typ ENUM jest typem wyliczeniowym, pozwalającym ograniczyć zbiór wartości, który będzie mógł być przechowywany w danej
kolumnie. Dopuszczalne wartości definiuje się w nawiasie okrągłym za nazwą typu, oddzielając je od siebie znakami
przecinka, schematycznie: ENUM(' wartość1 ', ' wartość2 ', ..., ' wartośćN ')

Typ SET jest również typem wyliczeniowym, definiowanym analogicznie do typu ENUM , czyli: SET(' wartość1 ', ' wartość2 '
, ..., ' wartośćN ')

### Obsługa tabel

#### Tworzenie tabel

```SQL
CREATE TABLE nazwa_tabeli
(
    nazwa_kolumny_1 typ_kolumny_1 [ atrybuty ],
    nazwa_kolumny_2 typ_kolumny_2 [ atrybuty ], . .
    .
    nazwa_kolumny_n
    typ_kolumny_n
[
    atrybuty],
)
```

// TODO

### Zapytania wprowadzające dane

#### Pierwsza postać instrukcji INSERT

```SQL
INSERT [INTO] tabela [( kolumna1 , kolumna2 , ..., kolumnaN )] VALUES ( wartość1 , wartość2 , ..., wartośćN)
```

//TODO

#### Druga postać instrukcji INSERT

```SQL
INSERT [INTO] tabela SET kolumna1=wartość1 , kolumna2 = wartość2 , ..., kolumnaN = wartośćN
```

//TODO

### Zapytania pobierające dane

// TODO

# Więcej o SQL

# Tworzenie bazy w praktyce

# PHP i MySQL w praktyce

## Autoryzacje
