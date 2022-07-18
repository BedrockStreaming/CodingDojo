# KataCola WORK IN PROGRESS ....

Inspired from [guyroyse](https://github.com/guyroyse/vending-machine-kata)

## Description 
In this exercise you will build the brains of a vending machine. It will accept money, make change, maintain inventory, and dispense products. All the things that you might expect a vending machine to accomplish.

The point of this kata is to learn how to work efficiently on a same project with collaborative teams.

## Features
In a first time, we don't care about the stock management (infinite products, infinite coin)  
The price are the same (0.80) for each product.  
These rules will evolve.

To do so, we need to have 2 teams that will work on 2 subjects:

- Team 1:
  - Coin management
  - Create new products
- Team 2:
  - Product management
  - Stock management


### Accept Coins (Team 1)
_As a vendor_  
_I want a vending machine that accepts coins_  
_So that I can collect money from the customer_

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
### Select Product (Team 2) (EXACT change only)
_As a vendor_  
_I want customers to select products_  
_So that I can give them an incentive to put money in the machine_

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

```

### Return Coins

We need to integrate the change system.  
Try to return less coin possible (If you need to return 20 cents, use 1 coin of 20, instead of 2 coins of 10).
Tips: 
Always try to return the max of high valuable coins.  

If you need to return 50 cents, you should try to return in this order:  
 - 1 coin of 50 cents  
 - 2 coins of 20 cents and 1 of 10 cents 
 - 1 coin of 20 and 3 of 10 cents
 - 5 coins of 10 cents  


### Select products with return coins integrated

As we already done it first... but with the possibility to manage changes.
```
Example 1
$ ORDER F
> PRICE 0.80 CREDIT 0
$ INSERTCOIN 1
> CREDIT 1.00 
$ ORDER F
> PRODUCT-RETURN F COIN-RETURN 0.20

```

### Stock management (Team 2)
We will have a limited amount of product (5 of each)
you should use serializer component, already in composer (see files in utils folder)
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

### New products (Team 1)

you should use serializer component, already in composer (see files in utils folder)

Add new product in the vending machine:
- Water (W) price is 0.50 cents with a stock of 5
- Mars (M) price 1 euro with a stock of 5

## HELP
You can display all the available command by typing in terminal
```
make help
```

## Miscellaneous
Despite the fact there is 2 teams, this is not a competition, don't hesitate to help each other ... and communicate