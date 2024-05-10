
create database ligas;
use ligas;




CREATE TABLE Estadios(
id INTEGER PRIMARY KEY,
nombre_Estadio VARCHAR(50) NOT NULL,
pais VARCHAR(50) NOT NULL,
ciudad VARCHAR (50) NOT NULL,
aforo INTEGER NOT NULL

);



CREATE TABLE Arbitros(
id INTEGER PRIMARY KEY,
nombre_Arbitro VARCHAR (50) NOT NULL,
apellidos_Arbitro VARCHAR (70) NOT NULL,
nacionalidad VARCHAR (70) NOT NULL,
asignacion VARCHAR (50) NOT NULL
);

CREATE TABLE Competiciones(
id INTEGER PRIMARY KEY,
nombre_Competicion VARCHAR (50)  NOT NULL, 
numero_Jornadas INTEGER NOT NULL,
numero_Equipos INTEGER NOT NULL,
pais_Competicion VARCHAR (50) NOT NULL
);


CREATE TABLE Partidos(
id INTEGER PRIMARY KEY,
duracion INTEGER NOT NULL,
tipo VARCHAR (50) NOT NULL,
arbitro_id INTEGER NOT NULL,
estadio_id INTEGER NOT NULL,
competicion_id  INTEGER NOT NULL,
jornada INTEGER NOT NULL,
fecha DATETIME NOT NULL,
temporada VARCHAR (50) NOT NULL,
resultado VARCHAR (50) NOT NULL,
pais VARCHAR (50) NOT NULL,
  CONSTRAINT Arbitro_PartidoFK FOREIGN KEY (arbitro_id) REFERENCES Arbitros (id) ON DELETE CASCADE,
  CONSTRAINT Estadio_PartidoFK FOREIGN KEY (estadio_id) REFERENCES Estadios (id) ON DELETE CASCADE,
  CONSTRAINT Competicion_PartidoFK FOREIGN KEY (competicion_id) REFERENCES Competiciones (id) ON DELETE CASCADE

);




CREATE TABLE Equipos(
id INTEGER PRIMARY KEY,
nombre_Equipo VARCHAR(50) NOT NULL,
pais_Equipo VARCHAR(50) NOT NULL,
ciudad_Equipo VARCHAR(50) NOT NULL,
numero_plantilla INTEGER NOT NULL,
abreviacion VARCHAR (5) NOT NULL,
competicion_id INTEGER NOT NULL,
estadio_id INTEGER NOT NULL,
CONSTRAINT Equipo_CompeticionFK FOREIGN KEY (competicion_id) REFERENCES Competiciones (id) ON DELETE CASCADE, 
CONSTRAINT Equio_EstadioFK FOREIGN KEY (estadio_id) REFERENCES Estadios (id) ON DELETE CASCADE
);




CREATE TABLE Jugadores(
id INTEGER PRIMARY KEY,
nombre_Jugador VARCHAR (50) NOT NULL,
apellidos_Jugador VARCHAR (50) NOT NULL,
nacionalidad VARCHAR (50) NOT NULL,
posicion VARCHAR(50) NOT NULL,
edad INTEGER NOT NULL,
goles INTEGER ,
asistencias INTEGER ,
equipo_id INTEGER NOT NULL,
CONSTRAINT Jugador_EquipoFK FOREIGN KEY (equipo_id) REFERENCES Equipos (id) ON DELETE CASCADE
);




CREATE TABLE Equipos_Partidos (
equipo1_id INTEGER NOT NULL,
equipo2_id INTEGER NOT NULL,
partido_id INTEGER NOT NULL,
CONSTRAINT Equipo_PartidoFK FOREIGN KEY (equipo1_id) REFERENCES Equipos (id) ON DELETE CASCADE,
CONSTRAINT Equipo_Partido2FK FOREIGN KEY (equipo2_id) REFERENCES Equipos (id) ON DELETE CASCADE,
CONSTRAINT Partido_EquipoFK FOREIGN KEY (partido_id) REFERENCES Partidos (id) ON DELETE CASCADE

);



