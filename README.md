# Magento Simple Donations
This extension shows a "I want to donate $1" action button in cart, letting the user the opportunity to donate money as they shop products.

You will be able to configure the cart message, minimum amount to donate and get a list of donations done.

## Installation
Install as usual:
- Disable compiler (if enabled)
- Drop the extension folder into your Magento root
- Clear cache
- Logout and loing again in admin
- Enable compiler again (if your use it)
- Done!

## Configuration

#### Prepare your "Donation product"
- Create a simple virual product with the minimum price a user can donate. Complete the rest of product information as usual.
- If you don't want this "donation product" to be visible in your catalog, set Visibility to 'Not visible individually'.
- Take note of the created product ID.

#### Extension configuration 
To configure the extension go to System => Config => NV => Donations

**Enable donations**
Enables or disables the extension in the frontend

**Product ID**
Set here the ID of your "Donation product"

**Order Statuses for adding**
When an order reach this status, the user donation is added to the donations list (usually this will be processing).

**Order Statuses for deleting**
When an order reach any of these statuses, the user donation is removed from the donations list (usually this will be cancelled or closed).

## Review and export donations

Go to Sales => Donations to get a list of users and donations.
You can export the list as usual.




