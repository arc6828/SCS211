DELIMITER &&  
CREATE PROCEDURE withdrawal (IN withdraw_account_number VARCHAR(255), IN withdraw_amount DECIMAL(10,2))  
BEGIN  
    START TRANSACTION;

    -- Retrieve the account balance
    SELECT balance INTO @account_balance FROM accounts WHERE account_number = withdraw_account_number;    

    -- Check if the transfer amount is less than or equal to the account balance
    IF withdraw_amount <= @account_balance THEN
        -- Perform the withdrawal
        UPDATE accounts
        SET balance = balance - withdraw_amount
        WHERE account_number = withdraw_account_number;

        -- Insert a transaction record for the withdrawal
        INSERT INTO transactions (account_number, amount, transaction_type)
        VALUES (withdraw_account_number, withdraw_amount, 'Withdrawal');

        -- Commit the transaction
        COMMIT;
    ELSE
        -- Rollback the transaction
        ROLLBACK;
    END IF;

END &&  
DELIMITER ;  
