### Exercises
The following exercises use a database table called dishes with the following structure:

```
CREATE TABLE dishes (
dish_id INT,
dish_name VARCHAR(255),
price DECIMAL(4,2),
is_spicy INT
)
```

Here is some sample data to put into the dishes table:

```
INSERT INTO dishes VALUES (1,'Walnut Bun',1.00,0)
INSERT INTO dishes VALUES (2,'Cashew Nuts and White Mushrooms',4.95,0)
INSERT INTO dishes VALUES (3,'Dried Mulberries',3.00,0)
INSERT INTO dishes VALUES (4,'Eggplant with Chili Sauce',6.50,1)
INSERT INTO dishes VALUES (5,'Red Bean Bun',1.00,0)
INSERT INTO dishes VALUES (6,'General Tso''s Chicken',5.50,1)
```

1. Write a program that lists all of the dishes in the table, sorted by price.

2. Write a program that displays a form asking for a price. When the form is submitted, the program should print out the names and prices of the dishes whose price is at least the submitted price. Don’t retrieve from the database any rows or columns that aren’t printed in the table

3. Write a program that displays a form with a ```<select>``` menu of dish names. Create the dish names to display by retrieving them from the database. When the form is submitted, the program should print out all of the information in the table (ID, name, price, and spiciness) for the selected dish.

4. Create a new table that holds information about restaurant customers. The table should store the following information about each customer: customer ID, name,
phone number, and the ID of the customer’s favorite dish. Write a program that displays a form for putting a new customer into the table. The part of the form for entering the customer’s favorite dish should be a ```<select>``` menu of dish names. The customer’s ID should be generated by your program, not entered in the form.