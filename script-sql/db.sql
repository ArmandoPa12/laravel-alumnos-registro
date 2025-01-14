CREATE TABLE colegio (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(100) NULL,
    direccion TEXT,
    campo VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE gestion (
    id SERIAL PRIMARY KEY,
    dato VARCHAR(50) NOT NULL, -- Ejemplo: "2024", "2024-julio"
    id_colegio INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_colegio) REFERENCES colegio(id) ON DELETE CASCADE
);
CREATE TABLE curso (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(100) NULL,
    paralelo VARCHAR(10),
    campo VARCHAR(100),
    id_gestion INT NOT NULL,
    FOREIGN KEY (id_gestion) REFERENCES gestion(id) ON DELETE CASCADE
);

-- Tabla: persona (alumnos)
CREATE TABLE persona (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(100) null,
    alumno BOOLEAN NOT NULL DEFAULT TRUE,
    id_curso INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_curso) REFERENCES curso(id) ON DELETE CASCADE
);

-- Tabla: prendas (medidas de prendas)
CREATE TABLE prendas (
    id SERIAL PRIMARY KEY,
    id_alumno INT NOT NULL,
    prenda VARCHAR(50) NULL,
    medida VARCHAR(100) NULL,
    valor NUMERIC(10, 2) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_alumno) REFERENCES persona(id) ON DELETE CASCADE
);


drop table prendas;
drop table persona;
drop table curso;
drop table gestion;
drop table colegio;

INSERT INTO colegio (nombre, direccion, campo) VALUES ('colegio los paloes', 'av las cabanas', null);
INSERT INTO colegio (nombre, direccion, campo) VALUES ('colegio elvira parada', 'av los tajibos', 'campo opcional');

INSERT INTO curso (nombre, paralelo , campo, id_colegio) VALUES ('primero', 'A', 'campo opcional', 1);
INSERT INTO curso (nombre, paralelo , campo, id_colegio) VALUES ('primero', 'B', null, 1);
INSERT INTO curso (nombre, paralelo , campo, id_colegio) VALUES ('primero', 'C', null, 1);
INSERT INTO curso (nombre, paralelo , campo, id_colegio) VALUES ('2do secundaria', 'B', null, 1);
INSERT INTO curso (nombre, paralelo , campo, id_colegio) VALUES ('2do secundaria', 'A', 'dato opcinal', 1);


INSERT INTO persona (nombre , id_curso) VALUES ('jose hernandes',1);
INSERT INTO persona (nombre , alumno ,id_curso) VALUES ('maria hernandes',false,1);
INSERT INTO persona (nombre , alumno ,id_curso) VALUES ('maria choque',true,1);
INSERT INTO persona (nombre , alumno ,id_curso) VALUES ('julio firmino',false,1);

INSERT INTO prendas (id_alumno ,prenda ,medida,valor) VALUES (1,'polera','cuello',45);