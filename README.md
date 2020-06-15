# FoodKart
Online Food Ordering Management System Mini-Project.

This is a Web based Application developed using PHP as a Host Language.
Database for the Application is in "Database" folder. It can be imported to your localhost(phpMyAdmin) or any other servers.

# Database
- The default username for customer is cus1 and password pass1.
- The default username for maneger is admin and password is mak.
- change the configuration of database in connection.php.


- Online Food Ordering System
# System Documentation


# Abstract
	The Online Food Ordering System described in this document has been designed to fill a specific need in the market by providing small restaurants with the ability to offer their customers an online ordering option. The system, which is highly customizable, allows the restaurant employees to easily manage the site content, most importantly the menu, themselves through a very intuitive graphical interface.
	The website, which is the only component seen by the restaurant customers, is then built dynamically based on the current state of the system, so any changes made are reflected in real time. Visitors to the site, once registered, are then able to easily navigate this menu, add food items to their order, and specify delivery options with only a few clicks, greatly simplifying the ordering process. Back in the restaurant, placed orders are promptly retrieved and displayed in an easily readable format for efficient processing.
	The purpose of this document is to provide in-depth descriptions of design and implementation details of the system, as well as descriptions of all available functionality and plans for evolution. In addition, user manuals and trouble-shooting tips have been included for all three components to give the reader a clear idea of intended typical use cases for the system.

 
# Chapter 1: Need & Feasibility
Need
	In today’s age of fast food and take-out, many restaurants have chosen to focus on quick preparation and speedy delivery of orders rather than offering a rich dining experience. Until very recently, all of these delivery orders were placed over the phone, but there are many disadvantages to this system. First, the customer must have a physical copy of the restaurant’s menu to look at while placing their order and this menu must be up to date. While this expectation is not unreasonable, it is certainly inconvenient.
	Second, the orders are placed using strictly oral communication, which makes it far more difficult for the customer to receive immediate feedback on the order they have placed. This often leads to confusion and incorrect orders. The current system is also inconvenient for the restaurant itself, as they must either have a dedicated staff member to answer the phone and take orders, or some employees must perform double-duty, distracting them from their regular tasks.
	What we propose is an online ordering system, originally designed for small ventures, but may be expanded where many restaurants provide food within a common portal. The main advantage of our system is that it greatly simplifies the ordering process for both the customer and the restaurant. When the customer visits the ordering webpage, they are presented with an interactive and up-to-date menu, complete with all available options and dynamically adjusting prices based on the selected options. After making a selection, the item is then added to their order, which the customer can review the details of at any time before checking out. This provides instant visual confirmation of what was selected and ensures that items in the order are, in fact, what was intended.
	The system also greatly lightens the load on the restaurant’s end, as the entire process of taking orders is automated. Once an order is placed on the webpage, it is placed into the database and then retrieved, in pretty much real-time, by a desktop application on the restaurant’s end. Within this application, all items in the order are displayed, along with their corresponding options and delivery details, in a concise and easy to read manner. This allows restaurant employees to quickly go through the orders as they are placed and produce the necessary items with minimal delay and confusion.
	While there are already a few systems like this in existence but due to the scarcity and not very user-friendly nature of these system at our place, we started this project. The web order forms are built dynamically from the database, which can be managed using a graphical user interface. This allows the restaurant employees to not only set up and customize the system on their own, but also allows them to make changes to the menu in real time. [The exact same system can be used by numerous businesses with absolutely no modification to the code itself, which greatly increases its usefulness (Unimplemented for now)].
# Feasibility
	At the present moment, the system is entirely functional, save the few minor bugs which are bound to present themselves during more extensive testing. A user is currently able to register and log in to the website and place an order. That order is then displayed, correctly and completely, in the order retrieval desktop application. Much of what is left to do focuses not on improving functionality, but rather on improving user experience by creating richer graphical interfaces for the user to interact with and modifying the application’s icons and color schemes to make them more pleasing to look at and use. For this reason, we feel that completing the project in the required timeframe is very feasible, particularly if we are able to adhere to the dates.
	In addition to time, a second factor influencing feasibility is resources, which also should not be a concern here. The online ordering system is structured like a fairly standard web application, and as such requires no special hardware and only basic software, namely web and database servers, to function properly. 
 
# Chapter 2: Requirements Specification
# System Model
	The structure of the system can be divided into three main logical components. The first component must provide some form of menu management, allowing the restaurant to control what can be ordered by customers. The second component is the web ordering system and provides the functionality for customers to place their order and supply all necessary details. The third and final logical component is the order retrieval system. Used by the restaurant to keep track of all orders which have been placed, this component takes care of retrieving and displaying order information, as well as updating orders which have already been processed.





# Functional Requirements
	As can be seen in the system model diagramed above, each of the three system components essentially provides a layer of isolation between the end user and the database. Firstly, allowing the end user to interact with the system through a rich interface provide a much more enjoyable user experience, particularly for the non-technical users which will account for the majority of the system’s users. In addition, this isolation layer also protects the integrity of the database by preventing users from taking any action outside those which the system is designed to handle. Because of this design pattern, it is essential to enumerate exactly which functions a user will be presented and these functions are outlined below, grouped by component.
The Web Ordering System
Users of the web ordering system, namely restaurant customers, must be provided the following functionality:
•	Create an account (Sign Up).
•	Manage their account.
•	Log in to the system.
•	Navigate the restaurant’s menu.
•	Select an item from the menu.
•	Customize options for a selected item.
•	Cart.
•	Add an item to their current order.
•	Review their current order.
•	Remove an item/remove all items from their current order.
•	Provide delivery and payment details.
•	Place an order.
•	Receive confirmation in the form of an order number.
As the goal of the system is to make the process of placing an order as simple as possible for the customer, the functionality provided through the web ordering system is restricted to that which most pertinent to accomplish the desired task. All of the functions outlined above, with the exceptions of account creation and management, will be used every time a customer places an order. By not including extraneous functions, we are moving towards our goal of simplifying the ordering process.
Menu Management System
	The menu management system will be available only to restaurant employees and will, as the name suggests, allow them to manage the menu that is displayed to users of the web ordering system. The functions afforded by the menu management system provide user with the ability to, using a graphical interface:
•	Add a new/update/delete food item to/from the menu.
•	Add a new/update/delete option for a given food item.
•	Update price for a given food item.
•	Update default options for a given food item.
•	Update additional information (description, photo, etc.) for a given food item.
It is anticipated that the functionality provided by this component will be one of the first things noted by the restaurant user, as they will have to go through it to configure their menu, etc. before beginning to actually take orders. Once everything is initially configured, however, this component will likely be the least used, as menu updates generally do not occur with great frequency.
Order Retrieval System
	Of the three components, the order retrieval system is functionally the simplest. Like the menu management system, it is designed to be used only by restaurant employees, and provides the following functions:
•	Retrieve new orders from the database.
•	Display the orders in an easily readable, graphical way.
•	Mark an order as having been processed and remove it from the list of active orders [to be implemented] .
User Interface Specifications
	Each of the system components will have their own unique interface. These are described below.
Web Ordering System
	Users of the web ordering system will interact with the application through a series of simple forms. Each category of food has its own form associated with it which presents a drop down menu for choosing which specific item from the category should be added to the order, and a series of check boxes and radio buttons for selecting which options are to be included. Adding an item to the order is accomplished by a single button click. Users select which category of food they would like to order, and therefore which form should be displayed, by navigating a menu bar, an approach which should be familiar to most users.
	Entering delivery and payment deals is done in a similar manner. The user is presented with a form and must complete the required fields, which include both drop down and text boxes, before checking out and receiving a confirmation number. 
Menu Management System
	User interaction with the menu management system is similar to that with the web ordering system. Users navigate to find a specific food item that they would like to modify and after making their selection they are presented with a form which displays all of the current fields and values associated with that item, all of which can be modified or removed. The form also presents buttons which allow the addition of new fields and values. Unlike the web ordering system, however, most of the input here will be freeform, specifically in the form of text boxes, since there is no finite set of fields which could be added.
Order Retrieval System
	User interaction with the order retrieval will be very simple. The application will automatically fetch new orders from the database at regular intervals and display the order numbers, along with delivery time, in a panel on the left hand side of the application. To view the details of an order, the user must simply click on that order number, which will populate the right-hand panel with the details, displayed in an easy to read and navigate tree structure. This structure can intuitively be expanded and collapsed to display only the desired information. Finally, once and order is processed, the user clicks a single button, labeled “Processed”, to remove it from the list of active orders.
Non-functional Requirements
	Because the design patterns of the Online Ordering System are pretty much the standard for a web application, the non-functional requirements of the system are very straightforward. Although written using Google Web Toolkit, the application is cross-compiled to HTML and JavaScript, along with a PHP backend, all of which are supported by any reasonably well-maintained web server, although I would recommend Apache2, and particularly the free XAMPP distribution.
	All of the application data is stored in a MySQL database, and therefore a MySQL server (phpMyAdmin) must also be installed on the host computer. As with Apache2, this software is freely available and can be installed and run under most operating systems.
	The server hardware can be any computer capable of running both the web and database servers and handling the expected traffic. For a restaurant that is not expecting to see much web traffic, or possibly doing only a limited test run, an average personal computer may be appropriate. Once the site starts generating more hits, though, it will likely be necessary to upgrade to a dedicated host to ensure proper performance. The exact cutoffs will need to be determined through a more thorough stress testing of the system.
System Evolution
	As mentioned in the system model, at the heart of the entire ordering system is the database. In fact, the system could be completely operational using nothing but the database and an appropriate shell utility, assuming that all users are well-versed in SQL and enjoy using it to order food. While this would be a bit extreme, it does illustrate the point that the one part of the system which will stay relatively constant is the database. On the other hand, it is very probable that the other components will continue to evolve with time. For example, with the booming popularity of mobile applications, we would really like to make the web interface available as a phone application as well. Also it may make sense to at some point migrate the menu management and order retrieval systems to web, or even mobile, applications as well, as some users may prefer to use them as such.
	We are also certain that if this system goes into actual use, many requests will arise for additional features which we had not previously considered, but would be useful to have. For this reason, we feel as though the application can be constantly evolving, which we consider a very good thing.
 
# Chapter 3: System Design
System Design

Level 1: The Database & the 3 Components
	The structure of the system can be divided into three main logical components. The first component must provide some form of menu management, allowing the restaurant to control what can be ordered by customers. The second component is the web ordering system and provides the functionality for customers to place their order and supply all necessary details. The third and final logical component is the order retrieval system. Used by the restaurant to keep track of all orders which have been placed, this component takes care of retrieving and displaying order information, as well as updating orders which have already been processed.





Level 2: Web Ordering System Components
	The web ordering system is comprised of 6 major components. These are the login form, the main menu, the account management form(disabled for now), the order form, the shopping cart, and the checkout form. When the customer first arrives at the site, they are presented with the login form. After either signing in or, if they do not yet have an account, first registering and then signing in, the user is taken to a welcome page with the main menu. From here, they have two options – they can either change their password and other preferences through the account management form (disabled due to serious bug), or they can select an order form and begin adding items to their order. If they choose the second path, they can navigate the numerous order forms using the main menu, each of which corresponds to a specific category of order items, adding items to their shopping cart along the way. At any time, they can view and modify their shopping cart and when they are finally ready to place their order, they can proceed to the checkout form. The checkout form uses the contents of the shopping cart to present a summary of the order and to calculate the total cost, in addition to allowing the user to specify all of the necessary delivery details.









Level 2.1: The Login Form
	The login form is standard for a form of this type. It provides text fields for username and password, which the user must enter before signing in. This form also gives the option for a user to register for the site if they have not yet done so.	
Level 2.2: The Main Menu
	The main menu, found at the top of the screen like in most applications, presents the user with two levels of selections. Once they make these two selections, the application generates an order form specifically for that type of food, and displays this form to the user.
Level 2.3: The Account Management Form
	The Account Management (or edit profile) will be implemented soon.
Level 2.4: The Order Form
	The order form, which is dynamically generated based on selections from the main menu, 
Level 2.5: The Shopping Cart
	The shopping cart performs much like a shopping cart in any other application. After an item is added to the order, it is displayed, along with its price, in the shopping cart. The shopping cart also keeps a running total of the current price of the whole order. By clicking on an item in the shopping cart, the user can review all of the details for that particular item. Finally, the shopping cart contains a button for the user to proceed to checkout.
Level 2.6: The Checkout Form
	The checkout form is the user’s last chance to verify that the contents of their order are correct before actually placing it. This form also provides fields for the user to supply all of the necessary checkout and delivery details (payment type, delivery address, etc.).

Menu Management System Components
	In order to make use of the menu management system, the user must interact with the menu management form. The form provides facilities like add menu items, description of items, price of items and images of these items

The Forms
	There are 2 types of forms in the menu management system - Category Forms, and Food Forms. The forms are all similar, allowing the user to add, edit, and remove information relevant to the selected item. Where they differ is in the specific fields that the user is able to edit. After changes to any of the forms are saved, the necessary records in the database are updated.
Level 3: Order Retrieval System Components
The simplest of the three components, the order retrieval system can be broken down into just two components. They are the summary panel, which displays a list of all currently active orders, and the order detail panel, which highlights just a single order. When the application first starts, the order details for the first order in the list are displayed. In order to view the details of a different order, the user must simply select it from the list in the summary panel.


Level 3.1: Summary Panel
	The summary panel, located on the left side of the screen, displays a list of all currently active orders, along with their delivery times and statuses. By changing the selected item in this list, the user is able to control the contents of the order detail panel.
Level 3.2: Order Detail Panel
The order detail panel which contains a hierarchical tree structure for viewing all of the details related to the order which is currently selected in the summary panel. This component also contains a button to mark the order as processed and remove it from the list of active orders [Broken]. 
User Interface Design
The user interface design principles can be broken into two groups. The interface in the web application is designed to limit free form user input, using mostly drop-down menus, radio buttons and check boxes. This is done for only reason to simplify the ordering process as much as possible. Free form input is necessary in the menu management component, however, as all of the values must be user supplied. The interface for this component contains traditional forms comprised of text fields and corresponding labels, along with save and discard buttons for each form.
 
# Chapter 4: Testing Design
Testing
Phases
	The structure of the system can be divided into three main logical components, plus the database, which is invisible to the end user. Each of these components must be tested individually, and the approaches which will be used for each component are described in the following sections.





# Database
	Testing of the database component is very straightforward, and has actually already been mostly completed. The database was the first component designed and before beginning work on any of the applications, we wrote all of the SQL statements and executed them directly, essentially isolating the database, using the MySQL client. By doing this we were able to reveal, and promptly fix a large percentage of the errors within the database itself.
Web Ordering System
	Testing of the web ordering system will be the most effort oriented, as it is the component that will see the highest frequency of use and will be exposed to the most users, which leads to a higher potential of failure. Testing here will be divided into two phases. During normal use case testing we will execute all of the functions available through the web interface using a broad spectrum of reasonable values that a user would be expected to input.
	In phase two we will perform exceptional use case testing, where we will artificially generate cases that shouldn’t arise, but possibly could, and monitor how the system handles these cases. These cases fall into one of two categories – when the mistake happens in the browser and the server has to deal with it, or the other way around. we have tried to place appropriate checks on all values being sent back and forth so the system realizes something is wrong before going to the database and potentially changing the state of the system, but it will be very important to see if there is anything we have not accounted for.
Menu Management System
	Testing of the menu management system will be very similar to that of the web ordering system, as we will first run test cases where the user supplies acceptable values, and afterwards test how the system responds to unexpected input.
Order Retrieval System
	Of all the components, testing of the order retrieval system will be the simplest. Since it is simply an interface to display the results of database queries and has no potential to change the state of the system, the only thing that really needs to be tested is how the system responds when a result set is not in the form it is expecting. This will be done by intentionally corrupting the database and analyzing the response of the order retrieval system.
Requirements Traceability
	In the requirements document, we specified the following functional requirements:
For the Web Ordering System:
•	Create an account.
•	Manage their account [disabled].
•	Log in to the system.
•	Navigate the restaurant’s menu.
•	Select an item from the menu.
•	Customize options for a selected item.
•	Add an item to their current order.
•	Review their current order.
•	Remove an item/remove all items from their current order.
•	Provide delivery and payment details.
•	Place an order.
•	Receive confirmation in the form of an order number.
For the Menu Management System:
•	Add a new/update/delete food category to/from the menu.
•	Add a new/update/delete food item to/from the menu.
•	Add a new/update/delete option for a given food item.
•	Update price for a given food item.
•	Update default options for a given food item.
•	Update additional information (description, photo, etc.) for a given food item.
For the Order Retrieval System:
•	Retrieve new orders from the database.
•	Display the orders in an easily readable, graphical way.
•	Mark an order as having been processed and remove it from the list of active orders [Testing].
In order to assure thorough testing, we will have to generate cases in which each of these functions is performed, not just with a single input value, but an example of each possible class of input. This may seem tedious, but is absolutely necessary since the system is so heavily dependent on user input and must respond appropriately to anything the user may do. The good news is that because the system was designed to contain only the absolutely necessary functionality, the testing of the different functions should flow smoothly into one another.
Testing Schedule
	Throughout all of the design and development phases, we have been performing unit tests on each component, assuring that it works properly before introducing it into the rest of the system, but we plan on beginning rigorous testing of the system. we will begin by putting the system through its normal paces as a normal user would be expected to. we will test the entire functionality of the system, but will do so following the normal logical flow, and only providing reasonable values for user input. 
Once we are happy with how the system performs for normal use cases, we will move on to testing the exceptional use cases. These are the use cases that would never be encountered by the average user, but, whether through confusion or malice, may come up. Two examples would be adding hundreds of items to an order or attempting to supply an SQL statement as a login credential.
In the final phase of testing, we will carry out stress and performance testing. In this phase, we will bombard the system with an increasing number of HTTP requests and then measure response times and see at what point things begin to break down [limited].
Hardware and Software Requirements
The testing to be performed will require no special hardware, but some specially designed software may be used, particularly when performing stress testing. 

