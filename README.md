## TravelSaathi-Flight-Ticket-Price
>**TravelSaathi is an AI enabled Web Platform based application. It serves as the day to day companion for Airport Authority individuals. It can be useful for both aviation professionals and their customers. They can intelligently set the Fare price of flight tickets, can compare with competitive industries, and can also provide environmental friendly and energy saving solutions.**

>**More specifically, this system is designed to allow an Aviation industry to set competitive fare price for their Flight service and obtain beneficiary margin; along with monitoring of Airport premises and conserving Energy.**

>**This web App is cross language compiled software. Its machine learning algorithm and API is written in Python Language and its various Frameworks and Libraries. These days, Python is covering almost all aspects of an IT industry Software production. HTML, CSS, JavaScript has been used for front-end UI interface and back-end connectivity has been handled by PHP language. Flask has been used for API building, and Wamp Server to host WEB APP on local windows PC.**

## The products and process features
• This platform helps Airport authorities to monitor their Airport premises Heat index and live flight Schedules.

• It helps aviation companies to set a cheap and competitive Fare price for the Flight Ticket using regression models.

• They can provide environmental friendly solutions.

• It could also help them to store cold storage or raw food items for longer period.

## Technology Stack
This is a cross language compiled application. The software is written in various languages. Viz. python, JavaScript, PHP, etc. and different libraries are used for serving APIs; viz. *Flask, urlib, request, IOT Core, Pub-Sub*, etc. Lets study them in detail.

1. **Flask API**
2. **GoIbibo API**
3. **Firebase**
4. **Wamp Server**
5. **IoT Core – PubSub**
6. **BigQuery**
7. **Python 3.5.6**
8. **JavaScript**
9. **PHP**

## Architectural Design
![Architectural Diagram](https://github.com/Atul-Anand-Jha/TravelSaathi-Flight-Ticket-Price/blob/master/doc/img/Architectural%20Diagram.png)

## Operations, Attribute
• **Flask server API** hosts the machine learning Model packed as pickle object and message passed in json string format.

• Cloud provides **IOT core and Pub-Sub** and the entire message is transferred using MQTT protocol. Cloud Function provides pipeline for data transfer.

• **BigQuery** holds all the historical data and real time updates are reflected on Firebase.

• **Regression models** are used for ticket price prediction. Data received as **json string** and output produced as a string object.

# ScreenShots
![Welcome](https://github.com/Atul-Anand-Jha/TravelSaathi-Flight-Ticket-Price/blob/master/doc/img/Screenshot%20(432).png)
![Predictor](https://github.com/Atul-Anand-Jha/TravelSaathi-Flight-Ticket-Price/blob/master/doc/img/Screenshot%20(433).png)
![Prediction result](https://github.com/Atul-Anand-Jha/TravelSaathi-Flight-Ticket-Price/blob/master/doc/img/Screenshot%20(434).png)
![Schedule](https://github.com/Atul-Anand-Jha/TravelSaathi-Flight-Ticket-Price/blob/master/doc/img/Screenshot%20(435).png)
![Premise Monitor](https://github.com/Atul-Anand-Jha/TravelSaathi-Flight-Ticket-Price/blob/master/doc/img/Screenshot%20(436).png)


## Result
TravelSaathi is an intelligent AI assisted web platform to help aviation individuals take smart, critical and environmental friendly decisions. It is mainly developed to help aviation companies and airport authorities. We can intelligently predict flight ticket price, and can compare it with competitive flight services in the market. The Machine Learning model is working in the back-end to support prediction. It is highly optimized ensemble regression model. One can also visualize the Heat index and monitor all over the airport premises. This could be used to provide sustainable Packages and Food Storage. Also, it can be used to provide environmental friendly solution to electronic appliances. Viz. setting mode and temperature of AC.

Thus, this multi-purpose application is versatile in usage. It is also built using multiple cross compiled languages. And, data is stored on cloud to avoid any loss. This web app can be very handy in aviation industries.

## Future Scope
This can be further enhanced to bring the optimal Fare price to the other side of end user i.e. the customer. Even customers can compare prices of similar trips and can chose best option for them. The heat index feature could be used to provide IIoT 4.0 (industrial IoT) to airport premises. And, temperature and modes of Air conditioners can be controlled automatically using Artificial Intelligence. Customers can avail best flight option at minimal cost. Baggage and packages could be tracked throughout the intra - airport premises and inter – airport premises.


**NOTE :** *Currently, this project is not hosted live on any online server. I have built this solely on my local PC. and, tested on localhost, only. You can try to serve it online also.*

### Disclaimer: 
In case you copy any content of this repository, You are expected to mention its owner's ( MY) name with little description.

>> To explore the project in detail and find its hidden finctionalities , run and explore it by yourself.
