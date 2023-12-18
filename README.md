# User guide

This dashboard has been developed for the Blue Racing Team. In this dashboard an user can easily add new attributes and their data points. In order to update these datapoints a device will need both the ID from the value that is to be updated and a valid token.

## create new admin
you can create a new admin with the command 
`add:account {username} {password}`
Once you're logged in you can change the password via the profile tab.

## creating a value
In order to create a new value, the user needs to be logged in.
Once logged in you can either add a value to an existing attribute or you can create a new attribute. In the attribute tab you can click "Value" to see the values associated with the chosen attribute. Once on the value page, you can add and delete values.

Creating an attribute is easily done on the attribute page, after you've created the new attribute you can easily add values.

Note: Values can *only* be updated via the `/value/update/{id}` endpoint!

## updating a value
Updating a value can be done easily! In order to update a value you'll only need three things.
*The ID of the value you want to update
*The new value
*A valid token
Now you can proceed with a call to `{host}/value/update/{id}`
add your token and value as "token"=token and "value"=value 

## token management
Values can only be updated if the post request includes a valid token. These tokens can be created in the token tab. Each token will have an expiration data, tokens will become invalid once this date has been reached. 
