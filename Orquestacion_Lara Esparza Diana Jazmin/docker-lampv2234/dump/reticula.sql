drop database if exists `reticula`;

create database reticula;

use reticula;

drop table if exists `materias`; 

CREATE TABLE `materias` (
  `clave_materia` varchar(30) NOT NULL,
  `nombre_materia` varchar(60) NOT NULL,
  `semestre` int(10) NOT NULL,
  `creditos` int(10) NOT NULL
);

INSERT INTO `materias` (`clave_materia`, `nombre_materia`, `semestre`, `creditos`) VALUES
('ACF0901', 'Cálculo diferencial', 1, 5),
('AEF1041', 'Matemáticas discretas', 1, 5),
('AED1285', 'Fundamentos de programación', 1, 5),
('SCH1024', 'Taller de administración', 1, 4),
('ACC0906', 'Fundamentos de investigación', 1, 4),
('ACA0907', 'Taller de ética', 1, 4),

('ACF0902', 'Cálculo integral', 2, 5),
('ACF0903', 'Álgebra lineal', 2, 5),
('AED1286', 'Programación orientada a objetos', 2, 5),
('AEC1008', 'Contabilidad financiera', 2, 5),
('AEC1058', 'Química', 2, 4),
('AEF1052', 'Probabilidad y estadística', 2, 5),

('ACF0904', 'Cálculo vectorial', 3, 5),
('SCC1013', 'Investigación de operaciones', 3, 4),
('AED1026', 'Estructura de datos', 3, 5),
('SCC1005', 'Cultura empresarial', 3, 4),
('ACD0908', 'Desarrollo sustentable', 3, 5),
('SCF1006', 'Física general', 3, 5),

('ACF0905', 'Ecuaciones diferenciales', 4, 5),
('AEF1031', 'Fundamentos de bases de datos', 4, 5),
('SCD1027', 'Tópicos avanzados de programación', 4, 5),
('SCD1022', 'Simulación', 4, 5),
('SCC1017', 'Métodos numéricos', 4, 4),
('SCD1018', 'Principios eléctricos y aplicaciones digitales', 4, 5),

('SCC1007', 'Fundamentos de ingeniería de software', 5, 4),
('SCA1025', 'Taller de bases de datos', 5, 4),
('AEC1061', 'Sistemas operativos', 5, 4),
('SCC1010', 'Graficación', 5, 4),
('AEC1034', 'Fundamentos de telecomunicaciones', 5, 4),
('SCC1010', 'Arquitectura de computadoras', 5, 4),

('SCD1011', 'Ingeniería desoftware', 6, 5),
('SCB100', 'Administración de bases de datos', 6, 5),
('SCD1015', 'Lenguajes y Autómatas I', 6, 5),
('SCA1026', 'Taller de sistemas operativos', 6, 4),
('SCD1021', 'Redes de computadora', 6, 5),
('SCC1014', 'Lenguajes de interfaz', 6, 4),
('ACA ', 'Actividades complementarias', 6, 5),

('SCG1009', 'Gestión de proyectos de software', 7, 6),
('DAH2101', 'Bases de datos avanzadas', 7, 4),
('SCD1016', 'Lenguajes y Autómatas II', 7, 5),
('ACA0909', 'Taller de investigación I', 7, 4),
('SCD1004', 'Conmutación y enrutamiento de redes de datos', 7, 5),
('SCC1023 ', 'Sistemas programables', 7, 4),

('DAH2103', 'Ciencia de datos', 8, 4),
('DAH2103', 'Cómputo y servicios en la nube', 8, 4),
('DAH2102', 'Desarrollo de aplicaciones para dispositivos móviles', 8, 4),
('ACA0910', 'Taller de investigación II', 8, 4),
('SCA1002', 'Administración de redes', 8, 4),
('SCC1019', 'Programación lógica y funcional', 8, 4),
('S1', 'Servicio Social', 8, 10),

('AEB1055', 'Programación web', 9, 5),
('DAH2105', 'Desarrollo de aplicaciones empresariales', 9, 4),
('DAD2106', 'Laboratorio para despliegue de aplicaciones empresariales', 9, 5),
('SCC1012', 'Inteligencia artificial', 9, 4),
('R1', 'Residencia', 9, 10);

select * from materias;

