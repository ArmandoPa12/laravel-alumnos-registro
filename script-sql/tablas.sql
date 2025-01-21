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