# Firebase Staries Utils 🔥
Static class to make all needed methods for authentication is a way to go, and making easy to read documentation is even better. 
```javascript
class StariesAccount {
  // ...
}
```

## Methods
These are connected directly with the Firebase web API.

### .Register(email, password, errorHandler)
Registers a new user using the **email** and the **password** (strings) and has an _optional_ parameter for **eventHandler**, a callback function that takes as a parameter the error of the instance of Firebase. Example:
```javascript
StariesAccount.Register("example@skem.club","coolpassword123");
```
If the register is successful it moves the user to the login.html page.

### .Login(email, password, errorHandler)
Validates the credentials of an existing user using the **email** and the **password** (strings) and has an _optional_ parameter for **eventHandler**, a callback function that takes as a parameter the error of the instance of Firebase. Example:
```javascript
StariesAccount.Login("example@skem.club","coolpassword123");
```
If the register is successful it moves the user to the staries-home.html page.

### .Observer()
Validates if the user is logged in or not. If the user is, then it makes the static property _mail_ available for reading, containing the current mail whose the user is used to log-in. 
```javascript
StariesAccount.Observer();
```
If the register is not successful it moves the user to the index.html page.

### .Logout(errorHandler)
Deletes the current user session. It has an _optional_ parameter for **eventHandler**, a callback function that takes as a parameter the error of the instance of Firebase. Example:
```javascript
StariesAccount.Logout(function(error){
  console.log(error);
});
```
If the logout is successful it moves the user to the index.html page.

## Properties
Temporal data storage for the methods that set-up the user session.
### .mail
Read-only property to retrieve the mail of the user if the user already logged in. To access this property, the method **Observer** should be called first. Example
```javascript
StariesAccount.Observer();
console.log(StariesAccount.mail);
```


## Contributing
Pull requests are always welcome, just be sure to update the documentation when modifying the utils and, of course, add your name at the bottom for credits :)

## Credits
Written by [als_trash 🍣](https://github.com/alstrash/).
Free usage under the [MIT](https://choosealicense.com/licenses/mit/) license.