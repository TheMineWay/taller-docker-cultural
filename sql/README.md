# SQL scripts

En este archivo encontraremos los scripts de SQL que necesitaremos durante el taller

## 0. Tablas

Las tablas que utilizaremos se pueden crear mediante los siguientes scripts

```sql
CREATE TABLE `frases` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la frase',
  `frase` varchar(128) NOT NULL COMMENT 'Frase',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha en la que se ha creado la frase',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```