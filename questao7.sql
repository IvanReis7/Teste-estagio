CREATE table produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    preco DECIMAL(10, 2)
);

INSERT INTO produtos (nome, preco)
VALUES ('Notebook', 1500.00);

SELECT * FROM produtos;

