# Introduction:

This is the Final Year Project for Bachelor Degree in Software Engineering, In this Project  we are using the Internet of things to create a Smart Parking Assistance System, In this system we are using IR Sensors, Arduino UNO Board and connect that Arduino Board with a website and Android Application. The purpose of this application to provide help to user to park their cars save time along the way.

There are four main components, 

1. Website
2. Android Application
3. Database
4. IOT Hardware

# Website:

The website is codded using PHP, HTML, CSS and Java Script, there is a database that is designed in SQL.

## Web Pages:

The Web Pages are coded in php and javascript, The php is used for thr creating the website and javascript is used for the connection between the website and IOT parts.

### PHP Pages:

There are total 11 web pages whcih are coded in php, HTMl and CSS.

1. **db_conn.php**
    
    This is part of the website that is responsible for the connection with the database. This the connection phase, The code for connection can be found in this file. 
    
2. **delete.php**
    
    This file contain the code for delete the user profile from database.
    
3. **display.php**
    
    This file will fetch the user data and the data will be displayed in the form of a table.
    
4. **home.php**
    
    This file is the dashboard, After your are logged into the system, this home pages will be displayed.
    
5. **login.php**
    
    This file contain the Login form, you have to login into the system before you can View any data or make modification.
    
6. **logout.php**
    
    This file is logout, and the sessions, The session will help if you are logged out from the system then you can not go back by pressing the back button, The session can not allow that.
    
7. **signup.php**
    
    This is the page where admin or the manager will add more user so that they access the application.
    
8. **update.php**
    
    This is the pages where the admin or the manager can update the user profile.
    
9. **viewstatus.php**
    
    This is page where the live detection of parking will be displayed, The result from the hardware will be placed in this web page.
    
10. **index.php**
    
    This is the min running pages, The program will execute when index.php is called. 
    
11. **styles.css**
    
    This is a file that will contain all of the css code for the website.
    

All **o**f the above are php based website but we are also using HTML and CSS to design the website.

# Hardware:

In this Project we are using Electronic Parts to get the signal, All of the parts which are used are stated bellow:

1. IR Sensor
2. Arduino UNO Board
3. Bread Board 
4. Male to male Cables
5. Male to Female Cables

Each of the Parts are put together to form one unit, The picture of the unit is bellow:

 ![WhatsApp Image 2022-02-26 at 10 58 39 PM](https://user-images.githubusercontent.com/82662797/155857128-22e0e3da-99e1-4666-9bd7-9ee57571125d.jpeg)



The above image shows the whole working of the system. and each Sensor is color coded.

**IR Sensor:**

There are three pin in each sensor one is Ground, second is Power and the third one is Code line.

On a Sensor there are three labels

1. **GNN**
    
    GNN present ground line 
    
2. **OUT**
    
    OUT line present Code
    
3. **VCC**
    
    The VCC line Represent Power Line
    

**Color Code list for Sensors:**

- **Sensor 1:**
    
    **Code Line Color:** Orange
    
    **Pot number**:  3
    
    **Power Color:**  White
    
    **Ground Color:** Green
    
- **Sensor 2**
    
    **Code Color Line:** Red
    
    **Port number:** 4
    
    **Power Color:**  White
    
    **Ground Color:** Green
    
- **Sensor 3:**
    
    **Code color:** Yellow color
    
    **Port Number:** 5
    
    **Ground:** Yellow
    
    **Power:** White:
    
    **Ground Color:** Green
    
- **Sensor 4:**
    
    **Code color:** Blue
    
    **Port number:** 7
    
    **Power Color:**  White
    
    **Ground color**: Purple
    

**Power For the Sensor:**

In the UNO Board there are two power point, 3.5 Volt and 5 Volt Power. 

The system is Powered by 5 Volt point.

# Connection Hardware with Website:

- The connection between website and the hardware is done using the javascript. The problem with Arduino is that it can not connect to the website directly so we need a server and the server is designed in javascript, using a framework called **Node js.**
- Using Node Js we are using two libraries 1.  [Socket.io](http://Socket.io) and  2. serialport
- Using both Libraries  we can connect to the UNO board. The name of the file is called server.js, The server will run at the port of 3000.

# Database:

The database is designed in SQL and there are total 3 tables

1. manager
2. User
3. Login

**Manager:**

The manager table contain different Attributes such as 

1. email
2. name
3. password
4. Date of birthday.

The manager will login into the system using Email and Password.

The default Login detail are:

**Manager_email**: 99marafay@gmail.com

**Manager_password:** 19march1999

**User:**

The user table contain same as attribute as the manager.

The user can login into the system using the user_email and user_password.

# Required Software to Install:

There are a couple of software that are required to be installed for the application to run.

1. [Xampp](https://www.apachefriends.org/download.html)
2. [Vs](https://code.visualstudio.com/download) code
3. [Node](https://nodejs.org/en/download/) js
    1. npm i -s serialport
    2. npm i -s socket.io 
4. Ardui[no IDE](https://www.arduino.cc/en/software) 

# Process to Start the Application:
In Order to run the application, you need to install application. Check The Required Software Section to install the application.
 Once all of the application are Installed then download the code from the github by pressing the button “Download ZIP” 

![Download File](https://user-images.githubusercontent.com/82662797/155857162-05194c62-f672-4e18-aeaa-eb44989082bc.png)

and the file will start to download.
1. Once File is Downloaded, Unzip the File.
2. Once unzipped then copy the folder to the directory in Xampp\hdocs
3. Once the file are in placed then open xampp control Pannel and then start the sql server. 
4. Once the server is running open the Vs code
5. Once VS code is Opened then open the code folder in the VS Code.
6. Once Opened then open the Server.js file in VS code.
7. In the bottom provide the path of the view_parking spot and change the port number of which can be provided when Arduino IDE. 
8. Connect the UNO board with the computer.
9. You can find the port number in tools section and then select port, copy the port number.
10. Then change the port number in the server.js.
11. Once the port number and the file for ver-parkingstatus is set then you need to run the server
12. Inorder to Run the server enter the following coomand in the terminal which is in the vs code **“node server.js”**
13. The server will start to run.
14. Once the server is running the enter the following URL in the broswer to upload the database so that website can work properly.
15. URL : localhost\dashboard
16. Once the dashboard is open the create a database and the upload the database. You can find the database in the Database folder in “FYP-main”. Once all of the content are uploaded then open another tab.
17.  Enter the following link in the URL “localhost\FYP-main\Manager\index.php”
18. The website will run then Login with the Manager Email and Manager Password which is “**99marafay@gmail.com” “19march1999”.**
19. Now the application is running.
