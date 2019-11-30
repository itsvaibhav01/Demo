**Demo**

-- Here is the collaboration of the Web-Devs I have worked with,

-- very simple implementation of various tools
<hr/>

**Demo1**

-- Here I have setup 2 dockers and they are communicating via REST API

1. The Python server is running over the python-flask environment
2. The PHP server is running with php7.0-apache environment
3. Docker-compose contains all services

**The Dockers are built over amazon AWS ec2 server: [link](http://13.126.98.214/)**

<hr/>

**Demo2**

-- Here I used another amazon AWS ec2 server to showcase how Machine learning and AWS can combine for faster results

1. Simple python app hosted directly from the server

it can be scaled up easily to make bigger application [link](http://15.206.165.45/)

<hr/>

**Demo3**

--Here I used the **Amazon AWS lambda function** to make a very simple open API to showcase how different APIs can be made with simple lambda service.

1. Using a simple algorithmic problem of converting an integer into a Roman number
2. Simply add resource /graph with a query containing key1 value which we want to convert into roman

Ex : [https://08dfyhqznb.execute-api.ap-south-1.amazonaws.com/dijink/graph?key1=15](https://08dfyhqznb.execute-api.ap-south-1.amazonaws.com/dijink/graph?key1=15)

Output : {&quot;num&quot;:&quot;XV&quot;}

Ex : [https://08dfyhqznb.execute-api.ap-south-1.amazonaws.com/dijink/graph?key1=34](https://08dfyhqznb.execute-api.ap-south-1.amazonaws.com/dijink/graph?key1=34)

Output : {&quot;num&quot;:&quot;XXXIV&quot;}
