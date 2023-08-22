-- Start a transaction
START TRANSACTION;

-- Update the sender's balance
UPDATE accounts
SET balance = balance - 500
WHERE account_number = '123456';

-- Insert a transaction record for the withdrawal
INSERT INTO transactions (account_number, amount, transaction_type)
VALUES ('123456', 500, 'Withdrawal');

-- Update the receiver's balance
UPDATE accounts
SET balance = balance + 500
WHERE account_number = '987654';

-- Insert a transaction record for the deposit
INSERT INTO transactions (account_number, amount, transaction_type)
VALUES ('987654', 500, 'Deposit');

-- Commit the transaction
COMMIT;
