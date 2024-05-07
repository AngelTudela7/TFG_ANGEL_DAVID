
create database ligas;
use ligas;




CREATE TABLE Estadios(
id_Estadio INTEGER PRIMARY KEY,
nombre_Estadio VARCHAR(50) NOT NULL,
pais VARCHAR(50) NOT NULL,
ciudad VARCHAR (50) NOT NULL,
aforo INTEGER NOT NULL

);



CREATE TABLE Arbitros(
id_Arbitro INTEGER PRIMARY KEY,
nombre_Arbitro VARCHAR (50) NOT NULL,
apellidos_Arbitro VARCHAR (70) NOT NULL,
nacionalidad VARCHAR (70) NOT NULL,
asignacion VARCHAR (50) NOT NULL
);

CREATE TABLE Competiciones(
id_Competicion INTEGER PRIMARY KEY,
nombre_Competicion VARCHAR (50)  NOT NULL, 
numero_Jornadas INTEGER NOT NULL,
numero_Equipos INTEGER NOT NULL,
pais_Competicion VARCHAR (50) NOT NULL
);


CREATE TABLE Partidos(
id_Partido INTEGER PRIMARY KEY,
duracion INTEGER NOT NULL,
tipo VARCHAR (50) NOT NULL,
id_arbitro INTEGER NOT NULL,
id_estadio INTEGER NOT NULL,
id_competicion INTEGER NOT NULL,
jornada INTEGER NOT NULL,
fecha DATETIME NOT NULL,
temporada VARCHAR (50) NOT NULL,
resultado VARCHAR (50) NOT NULL,
pais VARCHAR (50) NOT NULL,
  CONSTRAINT Arbitro_PartidoFK FOREIGN KEY (id_Arbitro) REFERENCES Arbitros (id_Arbitro) ON DELETE CASCADE,
  CONSTRAINT Estadio_PartidoFK FOREIGN KEY (id_Estadio) REFERENCES Estadios (id_Estadio) ON DELETE CASCADE,
  CONSTRAINT Competicion_PartidoFK FOREIGN KEY (id_Competicion) REFERENCES Competiciones (id_Competicion) ON DELETE CASCADE

);




CREATE TABLE Equipos(
id_Equipo INTEGER PRIMARY KEY,
nombre_Equipo VARCHAR(50) NOT NULL,
pais_Equipo VARCHAR(50) NOT NULL,
ciudad_Equipo VARCHAR(50) NOT NULL,
numero_plantilla INTEGER NOT NULL,
abreviacion VARCHAR (5) NOT NULL,
id_Competicion INTEGER NOT NULL,
id_Estadio INTEGER NOT NULL,
CONSTRAINT Equipo_CompeticionFK FOREIGN KEY (id_Competicion) REFERENCES Competiciones (id_Competicion) ON DELETE CASCADE, 
CONSTRAINT Equio_EstadioFK FOREIGN KEY (id_Estadio) REFERENCES Estadios (id_Estadio) ON DELETE CASCADE
);




CREATE TABLE Jugadores(
id_Jugador INTEGER PRIMARY KEY,
nombre_Jugador VARCHAR (50) NOT NULL,
apellidos_Jugador VARCHAR (50) NOT NULL,
nacionalidad VARCHAR (50) NOT NULL,
posicion VARCHAR(50) NOT NULL,
edad INTEGER NOT NULL,
goles INTEGER ,
asistencias INTEGER ,
id_Equipo INTEGER NOT NULL,
CONSTRAINT Jugador_EquipoFK FOREIGN KEY (id_Equipo) REFERENCES Equipos (id_Equipo)
);




CREATE TABLE Equipos_Partidos (
id_Equipo INTEGER NOT NULL,
id_Equipo2 INTEGER NOT NULL,
id_Partido INTEGER NOT NULL,
CONSTRAINT Equipo_PartidoFK FOREIGN KEY (id_Equipo) REFERENCES Equipos (id_Equipo) ON DELETE CASCADE,
CONSTRAINT Equipo_Partido2FK FOREIGN KEY (id_Equipo) REFERENCES Equipos (id_Equipo) ON DELETE CASCADE,
CONSTRAINT Partido_EquipoFK FOREIGN KEY (id_Partido) REFERENCES Partidos (id_Partido) ON DELETE CASCADE

);



