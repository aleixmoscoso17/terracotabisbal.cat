Fases del projecte
-------------------------------------------------------------------------------------------------------------------------------------------------------------------
Fase 1: Implementació inicial

En la fase inicial es defineix la idea principal del projecte i es decideix com es vol aplicar al Terracotta Museu. El punt de partida és un museu amb informació principalment física, basada en cartells i panells, i es proposa complementar aquesta informació amb una plataforma web accessible des del mòbil.

Durant aquesta fase es seleccionen les peces principals que formaran part de la demo i es prepara l’estructura bàsica del sistema. També es defineix que cada peça tindrà una fitxa digital pròpia, accessible mitjançant una URL individual que més endavant es podrà associar a un codi QR.

A nivell tècnic, es crea la base del projecte web amb PHP, HTML i CSS, i es prepara la base de dades MariaDB per guardar les peces, els ceramistes, els usuaris, els comentaris i els missatges. Aquesta fase serveix per deixar preparada l’estructura principal de la plataforma.


-------------------------------------------------------------------------------------------------------------------------------------------------------------------
Fase 2: Desenvolupament de continguts i plataformes

La segona fase se centra en desenvolupar la web i afegir les funcionalitats principals. Es creen les pàgines de peces, les fitxes digitals individuals i la secció de ceramistes locals.

Cada fitxa de peça inclou informació bàsica com el nom, autor, època, imatge, descripció i curiositat. També s’hi afegeix un formulari perquè els visitants puguin deixar una valoració i un comentari. Aquestes dades es guarden a la base de dades i després es poden consultar.

En aquesta fase també es desenvolupa la plataforma de ceramistes locals. Cada ceramista disposa d’un perfil públic amb informació professional, imatge, especialitat i biografia. A més, s’afegeix un formulari de contacte perquè els visitants puguin enviar missatges relacionats amb cada ceramista.

Finalment, es crea un panell d’administració bàsic amb login. Des d’aquest panell es poden consultar dades generals del sistema i gestionar l’estat dels ceramistes, marcant-los com a validats, pendents o rebutjats.


--------------------------------------------------------------------------------------------------------------------------------------------------------------------
Fase 3: Desplegament, proves i millores

La tercera fase consisteix a posar la demo en funcionament en un hosting real i comprovar que tot funciona correctament. La web es puja a Dinahosting i es configura la connexió amb la base de dades MariaDB.
Durant aquesta fase es fan proves de les pàgines principals: inici, peces, fitxes individuals, ceramistes, formularis, login i panell d’administració. També es comprova que els comentaris i missatges s’envien correctament i queden guardats a phpMyAdmin.


A nivell de seguretat, s’apliquen mesures bàsiques com el control d’accés al panell d’administració mitjançant sessions PHP i la validació bàsica dels formularis. Altres mesures més avançades, com HTTPS forçat, xifrat de contrasenyes o consultes preparades, es deixen com a millores futures.


Finalment, es revisen els errors trobats durant el desplegament, com problemes de connexió amb la base de dades o rutes d’imatges, i es corregeixen per deixar la demo estable i preparada per ser mostrada.
Finalment, es formarà el personal del museu en l’ús de la plataforma, la gestió de continguts, la validació de ceramistes, l’actualització de fitxes digitals i la consulta de dades d’ús. Aquesta formació permetrà que el sistema pugui mantenir-se actiu i actualitzat un cop finalitzada la implementació inicial del projecte.
