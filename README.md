Projecte Intermodular: Museu Terracota Bisbal
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Context

El Terracotta Museu de la Bisbal d’Empordà és un espai dedicat a la història, les tècniques i les tradicions de la ceràmica, un element essencial de la identitat cultural i econòmica de la comarca. El museu conserva i exposa peces, maquinària, eines i processos vinculats tant a la ceràmica tradicional com a la contemporània.
Per modernitzar l’experiència dels visitants, es proposa una plataforma web associada a codis QR. Aquesta plataforma permet consultar informació ampliada de les peces, veure imatges, llegir curiositats i participar mitjançant valoracions i comentaris.

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Objectiu principal

Crear una experiència museística més interactiva que permeti als visitants accedir a informació extra sobre les peces del museu mitjançant codis QR i dispositius mòbils, i interactuar amb els continguts a través de valoracions i comentaris.

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Objectius específics

-Oferir informació textual, imatges i curiositats sobre les peces del museu.

-Facilitar l’accés a les fitxes digitals mitjançant URLs preparades per codis QR.

-Fomentar una experiència més educativa i participativa per als visitants.

-Modernitzar la relació visitant–museu mitjançant una web senzilla i accessible.

-Permetre als visitants valorar i comentar les peces del museu.

-Crear perfils públics de ceramistes locals.

-Permetre el contacte amb ceramistes mitjançant formularis.

-Guardar comentaris, valoracions i missatges en una base de dades.

-Incorporar un panell d’administració bàsic per gestionar dades i ceramistes.

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
1. Plataforma per a ceramistes locals

El projecte inclou una secció digital dedicada als ceramistes locals. Aquesta part permet mostrar perfils públics amb informació professional, imatge, especialitat i biografia.

També inclou un formulari de contacte perquè els visitants o el museu puguin enviar missatges relacionats amb cada ceramista. Els perfils poden ser gestionats des del panell d’administració, on es poden marcar com a validats, pendents o rebutjats.

Aquesta plataforma reforça el vincle entre el museu i el teixit artesanal local, donant més visibilitat als professionals de la ceràmica.

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
2. Cloud o espai digital associat als codis QR

Cada peça disposa d’una fitxa digital accessible mitjançant una URL individual, preparada per poder-se associar a un codi QR. Quan el visitant escaneja el QR, accedeix directament a la pàgina de la peça.

Cada fitxa pot contenir:

-Informació detallada de la peça.
-Imatge de la peça.
-Autor o ceramista relacionat.
-Descripció i curiositat.
-Sistema de valoracions i comentaris.

Aquest espai permet mantenir la informació centralitzada i actualitzable des de la base de dades.

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Abast del projecte

-Identificació de peces per associar-les a fitxes digitals.

-Creació d’una plataforma web responsive.

-Creació de fitxes digitals per a les peces.

-Preparació d’URLs individuals per associar-les a codis QR.

-Creació d’una secció de ceramistes locals.

-Integració de valoracions i comentaris.

-Formulari de contacte amb ceramistes.

-Base de dades per guardar peces, ceramistes, comentaris i missatges.

-Panell d’administració bàsic.

-Desplegament de la demo en un hosting real.

-------------------------------------------------------------------------------------------------------------------------------------------------------------------
Fases del projecte



Fase 1: Implementació inicial

En la fase inicial es defineix la idea principal del projecte i es decideix com es vol aplicar al Terracotta Museu. El punt de partida és un museu amb informació principalment física, basada en cartells i panells, i es proposa complementar aquesta informació amb una plataforma web accessible des del mòbil.

Durant aquesta fase es seleccionen les peces principals que formaran part de la demo i es prepara l’estructura bàsica del sistema. També es defineix que cada peça tindrà una fitxa digital pròpia, accessible mitjançant una URL individual que més endavant es podrà associar a un codi QR.

A nivell tècnic, es crea la base del projecte web amb PHP, HTML i CSS, i es prepara la base de dades MariaDB per guardar les peces, els ceramistes, els usuaris, els comentaris i els missatges. Aquesta fase serveix per deixar preparada l’estructura principal de la plataforma.



Fase 2: Desenvolupament de continguts i plataformes

La segona fase se centra en desenvolupar la web i afegir les funcionalitats principals. Es creen les pàgines de peces, les fitxes digitals individuals i la secció de ceramistes locals.

Cada fitxa de peça inclou informació bàsica com el nom, autor, època, imatge, descripció i curiositat. També s’hi afegeix un formulari perquè els visitants puguin deixar una valoració i un comentari. Aquestes dades es guarden a la base de dades i després es poden consultar.

En aquesta fase també es desenvolupa la plataforma de ceramistes locals. Cada ceramista disposa d’un perfil públic amb informació professional, imatge, especialitat i biografia. A més, s’afegeix un formulari de contacte perquè els visitants puguin enviar missatges relacionats amb cada ceramista.

Finalment, es crea un panell d’administració bàsic amb login. Des d’aquest panell es poden consultar dades generals del sistema i gestionar l’estat dels ceramistes, marcant-los com a validats, pendents o rebutjats.



Fase 3: Desplegament, proves i millores

La tercera fase consisteix a posar la demo en funcionament en un hosting real i comprovar que tot funciona correctament. La web es puja a Dinahosting i es configura la connexió amb la base de dades MariaDB. Durant aquesta fase es fan proves de les pàgines principals: inici, peces, fitxes individuals, ceramistes, formularis, login i panell d’administració. També es comprova que els comentaris i missatges s’envien correctament i queden guardats a phpMyAdmin.

A nivell de seguretat, s’apliquen mesures bàsiques com el control d’accés al panell d’administració mitjançant sessions PHP i la validació bàsica dels formularis. Altres mesures més avançades, com HTTPS forçat, xifrat de contrasenyes o consultes preparades, es deixen com a millores futures.

Finalment, es revisen els errors trobats durant el desplegament, com problemes de connexió amb la base de dades o rutes d’imatges, i es corregeixen per deixar la demo estable i preparada per ser mostrada. Finalment, es formarà el personal del museu en l’ús de la plataforma, la gestió de continguts, la validació de ceramistes, l’actualització de fitxes digitals i la consulta de dades d’ús. Aquesta formació permetrà que el sistema pugui mantenir-se actiu i actualitzat un cop finalitzada la implementació inicial del projecte.

-------------------------------------------------------------------------------------------------------------------------------------------------------------------

Moduls que ens basarem:

M01 Muntatge i manteniment

M02 Sistemes operatius monolloc

M03 Aplicacions ofimàtiques

M04 Sistemes operatius en xarxa

M05 Xarxes locals

M06 Seguretat informàtica

M07 Serveis de xarxa

M08 Aplicacions web

M09 Formació i orientació laboral

M10 Empresa i iniciativa emprenedora

M11 Anglès tècnic
