<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<img src="org.JPG"/>
  <p>This is an UML use case diagram for my Tinker .Org Application this just visually reinforces the fact that Customer engages with the Tinker .Org App and then the Admin reacts.
     The next element is a Use Case and this is where you really start to describe what your system does. A Use Case is depicted with this oval shape and it represents an action that
     accomplishes some sort of task with in the system. They're going to be placed within the rectangle because they're actions that occur within the Tinker .Org App. We're to keep 
     things very simple. My Tinker .Org App is going to allow Customer to login, view transaction details in checklist, choose event, create transaction and payout. The first thing
     that will happen when the Customer uses the Tinker .Org App is to login thats why login is at the top for me it's a good practice to put or place your Use Cases in a logical order
     as possible. In my Use Case Diagram a customer is going to log in to my App. So I draw a solid line between the Actor and the Use Case to show this relationship. This type of 
     relationship is called an association and its signifies a basic communication or interaction. A Customer is going to interact with the rest of these Use Cases as well. They're 
     going to view transaction details, choose event, create transaction and payout so we'll draw a solid lines out to each of those as well. So when a Customer wants to check or view 
     details for transaction on the app the admin is going to provide the correct details. Similarly, when a Customer wants to choose event personnel, create transaction or to make 
     payments, the admin is going to follow through with those transactions. When a Customer wants to create a transaction and make a payment, This application is going to make sure
     there's enough money to complete those transactions. So use case called Verify Account Balance is created. And finally, when a customer wants to make a payment, this application is
     going to give them the option of paying from either their checking account or their savings account. So two use cases were created called Pay from checking and Pay from savings. 
     This Login use case will not complete unless Verify Password is complete. Thats why an a dashed lined with an arrow pointing towards the included use case was drawn. This Application
     won't display a login error message everytime a customer login. This will only happen once in a while when a customer accidentally enters incorrect password or username thats why and
     a dashed lined with an arrow pointing towards the extend use cases. Both create transaction and payout are going to verify account balance so I draw a dashed lined with an arrow pointing
     towards the extend use case name verify account balance. I want this application to make this check everytime either of these base use cases occur. When you make a payment with in this
     application, you can do so from either your checking account or your savings account. In this scenario, Payout  is a general use case and Pay from savings and Pay from checking are
     specialized use cases. In a certain scenarios you might want to distinguish between pay from checking and pay from savings you make them both children to a general use case, which could 
     allow you to have certain behaviors or qualities unique to each of these children. :)</p>
</body>
</html>
