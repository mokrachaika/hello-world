



IMASH GREEN LIGHT ZA PHP










Problem 3 – SoftUni Bar Income
Let`s take a break and visit the game bar at SoftUni. It is about time for the people behind the bar to go home and you are the person who has to draw the line and calculate the money from the products that were sold throughout the day. Until you receive a line with text "end of shift" you will be given lines of input. But before processing that line you have to do some validations first.
Each valid order should have a customer, product, count and a price:
•	Valid customer's name should be surrounded by '%' and must start with a capital letter, followed by lower-case letters
•	Valid product contains any word character and must be surrounded by '<' and '>' 
•	Valid count is an integer, surrounded by '|'
•	Valid price is any real number followed by '$'
The parts of a valid order should appear in the order given: customer, product, count and a price.
Between each part there can be other symbols, except ('|', '$', '%' and '.')
For each valid line print on the console: "{customerName}: {product} - {totalPrice}"
When you receive "end of shift" print the total amount of money for the day rounded to 2 decimal places in the following format: "Total income: {income}".
Input / Constraints
•	Strings that you have to process until you receive text "end of shift".
Output
•	Print all of the valid lines in the format "{customerName}: {product} - {totalPrice}"
•	After receiving "end of shift" print the total amount of money for the day rounded to 2 decimal places in the following format: "Total income: {income}"


Examples
Input	                                            Output	                                     Comment
                                                                                         Each line is valid, so we print 
                                                                                               each order, calculating the total 
                                                                                                 price of the product bought.
                                                                                          At the end we print the total 
                                                                                          income for the day

%George%<Croissant>|2|10.3$
%Peter%<Gum>|1|1.3$
%Maria%<Cola>|1|2.4$
end of shift
                                       end of shift	George: Croissant - 20.60
                                      Peter: Gum - 1.30
                                       Maria: Cola - 2.40
                                      Total income: 24.30	                                    

%InvalidName%<Croissant>|2|10.3$
%Peter%<Gum>1.3$
%Maria%<Cola>|1|2.4
%Valid%<Valid>valid|10|valid20$
                                         Valid: Valid - 200.00
                                         Total income: 200.00	                          On the first line, the customer 
                                                                                               name isn`t valid, so we skip that line.
                                                                                                 The second line is missing product count.
                                                                                               The third line don`t have a valid price.
                                 
                                   
                                   
 End of shift                                                                                                 And only the forth line is valid
