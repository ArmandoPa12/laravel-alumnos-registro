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