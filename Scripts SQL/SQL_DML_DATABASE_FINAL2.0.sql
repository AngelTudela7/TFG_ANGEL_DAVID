

INSERT INTO estadios (id, nombre_Estadio, pais, ciudad, aforo) VALUES
(1, 'Camp Nou', 'España', 'Barcelona', 99354),
(2, 'Santiago Bernabéu', 'España', 'Madrid', 81044),
(3, 'Wanda Metropolitano', 'España', 'Madrid', 68456),
(4, 'Parc des Princes', 'Francia', 'París', 47929),
(5, 'Stade Vélodrome', 'Francia', 'Marsella', 67394),
(6, 'Allianz Arena', 'Alemania', 'Múnich', 75000),
(7, 'Signal Iduna Park', 'Alemania', 'Dortmund', 81365),
(8, 'San Siro', 'Italia', 'Milán', 80018),
(9, 'Stadio Olimpico', 'Italia', 'Roma', 72698),
(10, 'Old Trafford', 'Inglaterra', 'Manchester', 74691),
(11, 'Emirates Stadium', 'Inglaterra', 'Londres', 60260),
(12, 'Anfield', 'Inglaterra', 'Liverpool', 53394),
(13, 'Estadio da Luz', 'Portugal', 'Lisboa', 64975),
(14, 'Estádio do Dragão', 'Portugal', 'Oporto', 50835),
(15, 'Veltins-Arena', 'Alemania', 'Gelsenkirchen', 62271),
(16, 'Etihad Stadium', 'Inglaterra', 'Manchester', 55097),
(17, 'Stadio San Paolo', 'Italia', 'Nápoles', 60240),
(18, 'Stamford Bridge', 'Inglaterra', 'Londres', 40834),
(19, 'Stadio Artemio Franchi', 'Italia', 'Florencia', 43239),
(20, 'Stade de France', 'Francia', 'Saint-Denis', 81338);


INSERT INTO arbitros (id, nombre_Arbitro, apellidos_Arbitro, nacionalidad, asignacion) VALUES
(1, 'Mateu', 'Lahoz', 'Español', 'La Liga'),
(2, 'Felix', 'Brych', 'Alemán', 'Bundesliga'),
(3, 'Gianluca', 'Rocchi', 'Italiano', 'Serie A'),
(4, 'Clement', 'Turpin', 'Francés', 'Ligue 1'),
(5, 'Michael', 'Oliver', 'Inglés', 'Premier League'),
(6, 'Antonio', 'Mateu Lahoz', 'Español', 'La Liga'),
(7, 'Daniel', 'Siebert', 'Alemán', 'Bundesliga'),
(8, 'Daniele', 'Doveri', 'Italiano', 'Serie A'),
(9, 'Benoit', 'Bastien', 'Francés', 'Ligue 1'),
(10, 'Anthony', 'Taylor', 'Inglés', 'Premier League'),
(11, 'Jose', 'Luis Munuera Montero', 'Español', 'La Liga'),
(12, 'Felix', 'Zwayer', 'Alemán', 'Bundesliga'),
(13, 'Davide', 'Massa', 'Italiano', 'Serie A'),
(14, 'Clement', 'Turpin', 'Francés', 'Ligue 1'),
(15, 'Martin', 'Atkinson', 'Inglés', 'Premier League');


INSERT INTO competiciones (id,nombre_Competicion, numero_Jornadas, numero_Equipos, pais_Competicion) VALUES
(1,'LaLiga', 38, 20, 'España'),
(2,'Premier League', 38, 20, 'Inglaterra'),
(3,'Serie A', 38, 20, 'Italia'),
(4,'Bundesliga', 34, 18, 'Alemania'),
(5,'Ligue 1', 38, 20, 'Francia'),
(6,'Liga Primera', 38, 20, 'Portugal');



INSERT INTO equipos (id, nombre_Equipo, pais_Equipo, ciudad_Equipo, numero_plantilla, abreviacion, competicion_id, id_Estadio) VALUES
(1, 'FC Barcelona', 'España', 'Barcelona', 25, 'FCB', 1, 1),
(2, 'Real Madrid', 'España', 'Madrid', 25, 'RMA', 1, 2),
(3, 'Atlético de Madrid', 'España', 'Madrid', 25, 'ATM', 1, 3),
(4, 'Paris Saint-Germain', 'Francia', 'París', 25, 'PSG', 5, 4),
(5, 'Olympique de Marsella', 'Francia', 'Marsella', 25, 'OM', 5, 5),
(6, 'Bayern Munich', 'Alemania', 'Múnich', 25, 'FCB', 4, 6),
(7, 'Borussia Dortmund', 'Alemania', 'Dortmund', 25, 'BVB', 4, 7),
(8, 'Inter de Milán', 'Italia', 'Milán', 25, 'INT', 3, 8),
(9, 'AS Roma', 'Italia', 'Roma', 25, 'ROM', 3, 9),
(10, 'Juventus', 'Italia', 'Turín', 25, 'JUV', 3, 10),
(11, 'Manchester United', 'Inglaterra', 'Manchester', 25, 'MUN', 2, 11),
(12, 'Manchester City', 'Inglaterra', 'Manchester', 25, 'MCI', 2, 16),
(13, 'Liverpool', 'Inglaterra', 'Liverpool', 25, 'LIV', 2, 12),
(14, 'Chelsea', 'Inglaterra', 'Londres', 25, 'CHE', 2, 18),
(15, 'Arsenal', 'Inglaterra', 'Londres', 25, 'ARS', 2, 11),
(16, 'SL Benfica', 'Portugal', 'Lisboa', 25, 'BEN', 6, 13),
(17, 'FC Porto', 'Portugal', 'Oporto', 25, 'POR', 6, 14),
(18, 'Schalke 04', 'Alemania', 'Gelsenkirchen', 25, 'S04', 4, 15),
(19, 'Napoli', 'Italia', 'Nápoles', 25, 'NAP', 3, 17),
(20, 'ACF Fiorentina', 'Italia', 'Florencia', 25, 'FIO', 3, 19);






INSERT INTO jugadores (id, nombre_Jugador, apellidos_Jugador, nacionalidad, posicion, edad, goles, asistencias, equipo_id) VALUES
(1, 'Gerard', 'Piqué', 'Español', 'Defensa', 35, 2, 5, 1),
(2, 'Sergio', 'Busquets', 'Español', 'Centrocampista', 33, 1, 7, 1),
(3, 'Jordi', 'Alba', 'Español', 'Defensa', 32, 3, 10, 1),
(4, 'Marc-André', 'ter Stegen', 'Alemán', 'Portero', 29, 0, 0, 1),
(5, 'Sergio', 'Ramos', 'Español', 'Defensa', 35, 5, 2, 2),
(6, 'Toni', 'Kroos', 'Alemán', 'Centrocampista', 32, 2, 10, 2),
(7, 'Karim', 'Benzema', 'Francés', 'Delantero', 34, 10, 5, 2),
(8, 'Thibaut', 'Courtois', 'Belga', 'Portero', 29, 0, 0, 2),
(9, 'Diego', 'Godín', 'Uruguayo', 'Defensa', 35, 1, 0, 3),
(10, 'Koke', 'Resurrección', 'Español', 'Centrocampista', 29, 3, 8, 3),
(11, 'Antoine', 'Griezmann', 'Francés', 'Delantero', 30, 7, 5, 3),
(12, 'Jan', 'Oblak', 'Eslovaco', 'Portero', 29, 0, 0, 3),
(13, 'Marquinhos', '', 'Brasileño', 'Defensa', 27, 3, 1, 4),
(14, 'Marco', 'Verratti', 'Italiano', 'Centrocampista', 29, 1, 10, 4),
(15, 'Neymar', 'Jr.', 'Brasileño', 'Delantero', 29, 15, 10, 4),
(16, 'Keylor', 'Navas', 'Costarricense', 'Portero', 35, 0, 0, 4),
(17, 'Dimitri', 'Payet', 'Francés', 'Centrocampista', 34, 5, 10, 5),
(18, 'Florian', 'Thauvin', 'Francés', 'Delantero', 28, 10, 5, 5),
(19, 'Steve', 'Mandanda', 'Francés', 'Portero', 36, 0, 0, 5),
(20, 'Arkadiusz', 'Milik', 'Polaco', 'Delantero', 27, 7, 3, 5),
(21, 'Manuel', 'Neuer', 'Alemán', 'Portero', 35, 0, 0, 6),
(22, 'Joshua', 'Kimmich', 'Alemán', 'Centrocampista', 27, 5, 15, 6),
(23, 'Thomas', 'Müller', 'Alemán', 'Delantero', 32, 10, 10, 6),
(24, 'Robert', 'Lewandowski', 'Polaco', 'Delantero', 33, 30, 10, 6),
(25, 'Erling', 'Haaland', 'Noruego', 'Delantero', 21, 30, 5, 7),
(26, 'Marco', 'Reus', 'Alemán', 'Centrocampista', 32, 7, 7, 7),
(27, 'Mats', 'Hummels', 'Alemán', 'Defensa', 33, 2, 2, 7),
(28, 'Jude', 'Bellingham', 'Inglés', 'Centrocampista', 18, 3, 5, 7),
(29, 'Romelu', 'Lukaku', 'Belga', 'Delantero', 28, 25, 10, 8),
(30, 'Lautaro', 'Martínez', 'Argentino', 'Delantero', 24, 15, 5, 8),
(31, 'Nicolo', 'Barella', 'Italiano', 'Centrocampista', 24, 5, 15, 8),
(32, 'Samir', 'Handanovič', 'Esloveno', 'Portero', 37, 0, 0, 8),
(33, 'Edin', 'Džeko', 'Bosnio', 'Delantero', 36, 10, 5, 9),
(34, 'Lorenzo', 'Pellegrini', 'Italiano', 'Centrocampista', 25, 5, 15, 9),
(35, 'Bryan', 'Cristante', 'Italiano', 'Centrocampista', 26, 3, 10, 9),
(36, 'Rui', 'Patrício', 'Portugués', 'Portero', 34, 0, 0, 9),
(37, 'Cristiano', 'Ronaldo', 'Portugués', 'Delantero', 37, 35, 10, 10),
(38, 'Paulo', 'Dybala', 'Argentino', 'Delantero', 28, 15, 10, 10),
(39, 'Giorgio', 'Chiellini', 'Italiano', 'Defensa', 37, 2, 0, 10),
(40, 'Federico', 'Chiesa', 'Italiano', 'Delantero', 24, 10, 5, 10),
(41, 'Bruno', 'Fernandes', 'Portugués', 'Centrocampista', 27, 15, 20, 11),
(42, 'Marcus', 'Rashford', 'Inglés', 'Delantero', 24, 20, 10, 11),
(43, 'David', 'De Gea', 'Español', 'Portero', 31, 0, 0, 11),
(44, 'Harry', 'Maguire', 'Inglés', 'Defensa', 28, 2, 0, 11),
(45, 'Kevin', 'De Bruyne', 'Belga', 'Centrocampista', 30, 10, 25, 12),
(46, 'Raheem', 'Sterling', 'Inglés', 'Delantero', 27, 15, 10, 12),
(47, 'Ederson', 'Moraes', 'Brasileño', 'Portero', 28, 0, 0, 12),
(48, 'Ruben', 'Dias', 'Portugués', 'Defensa', 24, 2, 0, 12),
(49, 'Mohamed', 'Salah', 'Egipcio', 'Delantero', 30, 25, 20, 13),
(50, 'Sadio', 'Mané', 'Senegalés', 'Delantero', 29, 20, 15, 13),
(51, 'Virgil', 'van Dijk', 'Neerlandés', 'Defensa', 30, 3, 0, 13),
(52, 'Alisson', 'Becker', 'Brasileño', 'Portero', 29, 0, 0, 13),
(53, 'Kai', 'Havertz', 'Alemán', 'Centrocampista', 22, 10, 5, 14),
(54, 'Mason', 'Mount', 'Inglés', 'Centrocampista', 23, 10, 10, 14),
(55, 'Edouard', 'Mendy', 'Senegalés', 'Portero', 29, 0, 0, 14),
(56, 'Thiago', 'Silva', 'Brasileño', 'Defensa', 37, 1, 1, 14),
(57, 'Pierre-Emerick', 'Aubameyang', 'Gabonés', 'Delantero', 32, 20, 5, 15),
(58, 'Bukayo', 'Saka', 'Inglés', 'Centrocampista', 20, 5, 15, 15),
(59, 'Bernd', 'Leno', 'Alemán', 'Portero', 29, 0, 0, 15),
(60, 'Kieran', 'Tierney', 'Escocés', 'Defensa', 24, 2, 5, 15),
(61, 'Darwin', 'Núñez', 'Uruguayo', 'Delantero', 22, 15, 5, 16),
(62, 'Rafa', 'Silva', 'Portugués', 'Centrocampista', 28, 10, 10, 16),
(63, 'Odisseas', 'Vlachodimos', 'Griego', 'Portero', 27, 0, 0, 16),
(64, 'Jan', 'Vertonghen', 'Belga', 'Defensa', 34, 1, 1, 16),
(65, 'Moussa', 'Marega', 'Maliense', 'Delantero', 30, 10, 5, 17),
(66, 'Otávio', 'Edmilson', 'Brasileño', 'Centrocampista', 27, 5, 15, 17),
(67, 'Agustín', 'Marchesín', 'Argentino', 'Portero', 33, 0, 0, 17),
(68, 'Pepe', '', 'Portugués', 'Defensa', 39, 2, 0, 17),
(69, 'Sead', 'Kolašinac', 'Bosnio', 'Defensa', 28, 1, 1, 18),
(70, 'Amine', 'Harit', 'Marroquí', 'Centrocampista', 24, 3, 7, 18),
(71, 'Martin', 'Ødegaard', 'Noruego', 'Centrocampista', 23, 5, 10, 18),
(72, 'Ralf', 'Fährmann', 'Alemán', 'Portero', 33, 0, 0, 18),
(73, 'Lorenzo', 'Insigne', 'Italiano', 'Delantero', 30, 15, 10, 19),
(74, 'Kalidou', 'Koulibaly', 'Senegalés', 'Defensa', 30, 2, 0, 19),
(75, 'Piotr', 'Zielinski', 'Polaco', 'Centrocampista', 27, 5, 10, 19),
(76, 'Alex', 'Meret', 'Italiano', 'Portero', 24, 0, 0, 19),
(77, 'Dusan', 'Vlahovic', 'Serbio', 'Delantero', 21, 20, 5, 20),
(78, 'Nikola', 'Milinkovic', 'Serbio', 'Centrocampista', 24, 5, 10, 20),
(79, 'Bartlomiej', 'Dragowski', 'Polaco', 'Portero', 24, 0, 0, 20),
(80, 'German', 'Pezzella', 'Argentino', 'Defensa', 30, 2, 0, 20);




INSERT INTO partidos (id, duracion, tipo, arbitro_id, estadio_id,competicion_id, jornada, fecha, temporada, resultado, pais) VALUES
(1, 90, 'Liga', 1, 1,1, 15, '2024-04-20 18:00:00', '2023/2024', '2-1', 'España'),
(2, 90, 'Liga', 3, 2,2, 17, '2024-04-21 15:30:00', '2023/2024', '3-0', 'España'),
(3, 90, 'Liga', 5, 3,5, 19, '2024-04-22 20:00:00', '2023/2024', '1-1', 'Francia'),
(4, 90, 'Liga', 2, 4,4, 20, '2024-04-23 17:00:00', '2023/2024', '2-2', 'Alemania'),
(5, 90, 'Liga', 4, 5,3, 14, '2024-04-24 19:45:00', '2023/2024', '2-0', 'Italia'),
(6, 90, 'Copa', 6, 6,6, 2, '2024-04-25 18:00:00', '2023/2024', '1-0', 'Portugal'),
(7, 90, 'Copa', 8, 7,6, 3, '2024-04-26 15:30:00', '2023/2024', '2-1', 'Portugal'),
(8, 90, 'Copa', 10, 8,3, 4, '2024-04-27 20:00:00', '2023/2024', '3-2', 'Italia'),
(9, 90, 'Copa', 12, 9,5, 5, '2024-04-28 17:00:00', '2023/2024', '1-1', 'Francia'),
(10, 90, 'Copa', 14, 10,2, 6, '2024-04-29 19:45:00', '2023/2024', '2-1', 'Inglaterra'),
(11, 90, 'Liga', 1, 11,1, 15, '2024-04-30 18:00:00', '2023/2024', '1-0', 'España'),
(12, 90, 'Liga', 3, 12,1, 17, '2024-05-01 15:30:00', '2023/2024', '2-0', 'España'),
(13, 90, 'Liga', 5, 13,5, 19, '2024-05-02 20:00:00', '2023/2024', '2-2', 'Francia'),
(14, 90, 'Liga', 2, 14,4, 20, '2024-05-03 17:00:00', '2023/2024', '3-1', 'Alemania'),
(15, 90, 'Liga', 4, 15,3, 14, '2024-05-04 19:45:00', '2023/2024', '2-0', 'Italia'),
(16, 90, 'Copa', 6, 16,6, 2, '2024-05-05 18:00:00', '2023/2024', '1-0', 'Portugal'),
(17, 90, 'Copa', 8, 17,6, 3, '2024-05-06 15:30:00', '2023/2024', '2-1', 'Portugal'),
(18, 90, 'Copa', 10, 18,3, 4, '2024-05-07 20:00:00', '2023/2024', '3-2', 'Italia'),
(19, 90, 'Copa', 12, 19,5, 5, '2024-05-08 17:00:00', '2023/2024', '1-1', 'Francia'),
(20, 90, 'Copa', 14, 20,2, 6, '2024-05-09 19:45:00', '2023/2024', '2-1', 'Inglaterra'),
(21, 90, 'Liga', 7, 5,5, 15, '2024-05-30 18:00:00', '2023/2024', '2-1', 'Francia'),
(22, 90, 'Liga', 8, 6,6, 16, '2024-05-31 15:30:00', '2023/2024', '1-0', 'Portugal'),
(23, 90, 'Liga', 9, 7,2, 17, '2024-06-01 20:00:00', '2023/2024', '3-3', 'Inglaterra'),
(24, 90, 'Liga', 10, 8,4, 18, '2024-06-02 17:00:00', '2023/2024', '2-1', 'Alemania'),
(25, 90, 'Liga', 11, 9,3, 19, '2024-06-03 19:45:00', '2023/2024', '1-0', 'Italia'),
(26, 90, 'Copa', 12, 10,5, 20, '2024-06-04 18:00:00', '2023/2024', '2-2', 'Francia'),
(27, 90, 'Copa', 13, 11,1, 21, '2024-06-05 15:30:00', '2023/2024', '3-1', 'España'),
(28, 90, 'Copa', 14, 12,2, 22, '2024-06-06 20:00:00', '2023/2024', '2-0', 'Inglaterra'),
(29, 90, 'Copa', 15, 13,6, 23, '2024-06-07 17:00:00', '2023/2024', '1-1', 'Portugal'),
(30, 90, 'Copa', 1, 14,5, 24, '2024-06-08 19:45:00', '2023/2024', '2-1', 'Francia');



INSERT INTO equipos_partidos (equipo1_id, equipo2_id, partido_id) VALUES
(1, 2, 1),   
(6, 7, 3), -- Bayern Munich vs Borussia Dortmund
-- Partido 4
(8, 9, 4), -- Inter de Milán vs AS Roma
-- Partido 5
(10, 12, 5), -- Juventus vs Manchester City
-- Partido 6
(11, 13, 6), -- Manchester United vs Liverpool
-- Partido 7
(14, 15, 7), -- Chelsea vs Arsenal
-- Partido 8
(16, 17, 8), -- SL Benfica vs FC Porto
-- Partido 9
(18, 19, 9), -- Schalke 04 vs Napoli
-- Partido 10
(20, 4, 10), -- ACF Fiorentina vs Paris Saint-Germain
-- Partido 11
(2, 3, 11), -- Real Madrid vs Atlético de Madrid
-- Partido 12
(5, 6, 12), -- Olympique de Marsella vs Bayern Munich
-- Partido 13
(7, 8, 13), -- Borussia Dortmund vs Inter de Milán
-- Partido 14
(9, 10, 14), -- AS Roma vs Juventus
-- Partido 15
(12, 14, 15), -- Manchester City vs Chelsea
-- Partido 16
(13, 15, 16), -- Liverpool vs Arsenal
-- Partido 17
(17, 18, 17), -- FC Porto vs Schalke 04
-- Partido 18
(19, 20, 18), -- Napoli vs ACF Fiorentina
-- Partido 19
(4, 1, 19), -- Paris Saint-Germain vs FC Barcelona
-- Partido 20
(3, 7, 20), -- Atlético de Madrid vs Borussia Dortmund
-- Partido 21
(6, 9, 21), -- Bayern Munich vs AS Roma
-- Partido 22
(10, 11, 22), -- Juventus vs Manchester United
-- Partido 23
(11, 14, 23), -- Manchester United vs Chelsea
-- Partido 24
(13, 17, 24), -- Liverpool vs FC Porto
-- Partido 25
(16, 19, 25), -- SL Benfica vs Napoli
-- Partido 26
(18, 2, 26), -- Schalke 04 vs Real Madrid
-- Partido 27
(20, 5, 27), -- ACF Fiorentina vs Olympique de Marsella
-- Partido 28
(1, 3, 28), -- FC Barcelona vs Atlético de Madrid
-- Partido 29
(4, 6, 29), -- Paris Saint-Germain vs Bayern Munich
-- Partido 30
(7, 10, 30); -- Borussia Dortmund vs Juventus
