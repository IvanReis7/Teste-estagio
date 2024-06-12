
CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT,
    valor DECIMAL(10, 2)
);

INSERT INTO pedidos (cliente_id, valor) VALUES
(1, 75.00),
(2, 30.00),
(3, 55.00),
(4, 40.00);

DELETE FROM pedidos WHERE valor < 50.00;


SELECT * FROM pedidos;
