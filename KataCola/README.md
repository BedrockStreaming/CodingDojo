# INTRO
In a first time, we don't care about the stock management (infinite products, infinite coin)

The price are the same (0.80) for each products.

This rules will evolve.

We need to have 2 teams: 
1st will be in charge of the coin management.

2nd will be in charge of the product management.


# Accept Coins (1st team)
As a vendor

I want a vending machine that accepts coins

So that I can collect money from the customer

The vending machine will accept valid coins (10, 20, 50 cents and 1 euro) and reject invalid ones (1, 2 cents and 2 euros).

When a valid coin is inserted the amount of the coin will be added to the current amount and the display will be updated.

When there are no coins inserted, the machine displays INSERT COIN.

Rejected coins are placed in the coin return.
Examples
```
Example 1
$ INSERTCOIN 10, 10, 20, 10
> CREDIT 0.50
Example 2
$ INSERTCOIN 10, 1, 50, 10, 5
> CREDIT 1.70 COIN-RETURN 0,05
```
# Select Product (2nd team)
As a vendor

I want customers to select products

So that I can give them an incentive to put money in the machine

There are three products: cola (C) for 0.80€, sprite (S) for 0.80€, and fanta (F) for 0.80€. When the respective button is pressed and enough money has been inserted, the product is dispensed and the machine displays THANK YOU.

If the display is checked again, it will display INSERT COIN and the current amount will be set to 0.00€.

If there is not enough money inserted then the machine displays PRICE and the price of the item and subsequent checks of the display will display either INSERT COIN or the current amount as appropriate.
Examples
```
Example 1
$ INSERTCOIN 50, 20, 10 
> CREDIT 0.80
$ ORDER C
> PRODUCT-RETURN C COIN-RETURN 0

Example 2
$ ORDER F
> PRICE 0.80 CREDIT 0
$ INSERTCOIN 1
> CREDIT 1.00 
$ ORDER F
> PRODUCT-RETURN F COIN-RETURN 0.20

```

# Stock management (2nd Team)
We will have a limited amount of product (5 of each)
In case of a product is missing, the vending machine should display something like that:
```
$ ORDER C
> STOCK OUT OF Coca . Please choose an other product

```

We have a limited stock of coin too to return money.
Try to use the less coin to return money
tips: if you need to return 20 cents,  use 1 coin of 20, instead of 2 coins of 10 (if available)
At start, the machine contains:
 - 5 coins of 10 cents
 - 5 coins of 20 cents
 - 5 coins of 50 cents

If we can't make change, display EXACT CHANGE ONLY

# New products (1st team)
Add new product in the vending machine
Water (W) price is 0.50 cents
Mars (M) price 1 euro

# HELP
You can display all the available command by typing in terminal
```
make help
```