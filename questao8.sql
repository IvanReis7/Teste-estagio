
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    email VARCHAR(255)
);

INSERT INTO clientes (id, nome, email) VALUES
(1, 'Alice', 'alice@example.com'),
(2, 'Bob', 'bob@example.com'),
(5, 'Carol', 'carol@example.com');

UPDATE clientes
SET email = 'novoemail@example.com'
WHERE id = 5;

SELECT * FROM clientes WHERE id = 5;
