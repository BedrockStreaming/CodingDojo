# Accept Coins
As a vendor
I want a vending machine that accepts coins
So that I can collect money from the customer
The vending machine will accept valid coins (5, 10, 20 cents) and reject invalid ones (1, 2, 50 cents and 1 and 2 euros). When a valid coin is inserted the amount of the coin will be added to the current amount and the display will be updated. When there are no coins inserted, the machine displays INSERT COIN. Rejected coins are placed in the coin return.
Exemples
```
Example 1
$ 10, 10, 20, 10
> CREDIT 0.50
Example 2
$ 10, 1, 50, 10
> CREDIT 0.20 COIN-RETURN 1, 50
```
# Select Product
As a vendor
I want customers to select products
So that I can give them an incentive to put money in the machine
There are three products: cola for 0.50€, chips for 0.50€, and candy for 0.50€. When the respective button is pressed and enough money has been inserted, the product is dispensed and the machine displays THANK YOU. If the display is checked again, it will display INSERT COIN and the current amount will be set to 0.00€. If there is not enough money inserted then the machine displays PRICE and the price of the item and subsequent checks of the display will display either INSERT COIN or the current amount as appropriate.
Exemples
```
Example 1
$ 20, 20, 10, A
> PRODUCT-RETURN A COIN-RETURN 0
Example 2
$ 20, 20, A
> CREDIT 0.40 INSERT-COIN 0.10 PRODUCT-RETURN 0 COIN-RETURN 0
$ 10, A
> PRODUCT-RETURN A COIN-RETURN 0
```