-- Create the 'accounts' table
CREATE TABLE accounts (
    account_number VARCHAR(10) PRIMARY KEY,
    account_holder VARCHAR(50),
    balance DECIMAL(10, 2)
);

-- Insert sample data into the 'accounts' table
INSERT INTO
    accounts (account_number, account_holder, balance)
VALUES
    ('123456', 'John Doe', 2500.00),
    ('987654', 'Jane Smith', 1500.00);

-- Create the 'transactions' table
CREATE TABLE transactions (
    transaction_id INT NOT NULL AUTO_INCREMENT,
    account_number VARCHAR(10),
    amount DECIMAL(10, 2),
    transaction_type VARCHAR(20),
    FOREIGN KEY (account_number) REFERENCES accounts(account_number),
    PRIMARY KEY (transaction_id)
);

-- Insert sample data into the 'transactions' table
INSERT INTO
    transactions (
        transaction_id,
        account_number,
        amount,
        transaction_type
    )
VALUES
    (1, '123456', 500.00, 'Withdrawal'),
    (2, '987654', 500.00, 'Deposit');