CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    idade INT
);

INSERT INTO usuarios (nome, idade) VALUES
('Ivan', 25),
('Carlos', 17);

SELECT id, nome, idade FROM usuarios WHERE idade >= 18;

