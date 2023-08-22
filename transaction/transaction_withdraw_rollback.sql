START TRANSACTION;

-- Retrieve the account balance
SELECT balance INTO @account_balance FROM accounts WHERE account_number = '123456';

-- Insert a transaction record for the withdrawal
INSERT INTO transactions (account_number, amount, transaction_type)
VALUES ('123456', 500, 'Withdrawal');

-- Retrieve the transfer amount of last insert
SELECT * FROM transactions WHERE transaction_id = LAST_INSERT_ID();

-- Check if the transfer amount is less than or equal to the account balance
IF @transfer_amount <= @account_balance THEN
    -- Perform the withdrawal
    UPDATE accounts
    SET balance = balance - @transfer_amount
    WHERE account_number = '123456';

    -- Insert a transaction record for the withdrawal
    INSERT INTO transactions (account_number, amount, transaction_type)
    VALUES ('123456', @transfer_amount, 'Withdrawal');

    -- Commit the transaction
    COMMIT;
ELSE
    -- Rollback the transaction
    ROLLBACK;
END IF;
