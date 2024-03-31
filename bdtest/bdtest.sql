CREATE TABLE empleado(
  id_empleado SERIAL PRIMARY KEY,
  nombres VARCHAR(255) NOT NULL,
  apellidos VARCHAR(255) NOT NULL,
  username VARCHAR(255) UNIQUE NOT NULL
);

SELECT * FROM empleado;
