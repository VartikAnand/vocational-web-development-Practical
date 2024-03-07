# Aim
Create a customer table in MySQL with cust_no, cust_name, item_purchased, and mob no, and insert 10 records into it.
## Code

```html


```
-- Create the customer table
CREATE TABLE customer (
    cust_no INT PRIMARY KEY,
    cust_name VARCHAR(50),
    item_purchased VARCHAR(50),
    mob_no VARCHAR(15)
);

-- Insert 10 records into the customer table
INSERT INTO customer (cust_no, cust_name, item_purchased, mob_no)
VALUES
    (1, 'John Doe', 'Product A', '123-456-7890'),
    (2, 'Jane Smith', 'Product B', '987-654-3210'),
    (3, 'Bob Johnson', 'Product C', '555-123-4567'),
    (4, 'Alice Brown', 'Product A', '111-222-3333'),
    (5, 'Charlie Wilson', 'Product D', '444-555-6666'),
    (6, 'Eva Davis', 'Product B', '777-888-9999'),
    (7, 'Frank Miller', 'Product C', '999-888-7777'),
    (8, 'Grace Taylor', 'Product D', '666-555-4444'),
    (9, 'Henry Turner', 'Product A', '333-222-1111'),
    (10, 'Ivy White', 'Product B', '222-333-4444');


### mysql query (Optionally)

```sql 
-- Create Customer table
CREATE TABLE Customer (
    cust_no INT PRIMARY KEY,
    cust_name VARCHAR(255),
    item_purchased VARCHAR(255),
    mob_no VARCHAR(15)
);

INSERT INTO Customer (cust_no, cust_name, item_purchased, mob_no)
VALUES
    (1, 'Vartik', 'Laptop', '123-456-7890');

INSERT INTO Customer (cust_no, cust_name, item_purchased, mob_no)
VALUES
    (2, 'Shurti', 'Smartphone', '987-654-3210');

INSERT INTO Customer (cust_no, cust_name, item_purchased, mob_no)
VALUES
    (3, 'Kitrav', 'Tablet', '555-123-4567');



```

## Output

```
Table created

one row inserted 
```