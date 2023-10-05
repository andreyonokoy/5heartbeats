<h2>Lab: Namespace</h2>
1. Identify the namespaces used<br/>
   Answer: It uses namespaces starting /src/OrderApp/ folder in accordance with PSR-4 standard and they look like
   OrderApp\Controller;
   OrderApp\Core\Db;
   OrderApp\Model\OrdersModel;
   and so on.
2. Which Autoload it uses?<br/>
   Answer: Composer
<h2>Lab: Classes</h2>
1. Create a class definition that represents or models something. Give it a constant, some properties, and a few methods. Set appropriate visibility for each.<br/>
   Answer: I had an idea to create a group of classes to make a simple RPG game (or only skills execution process) and decided to start with Characters and Skills models. Have installed Laravel framework. Created a group of models with migrations for them.
2. Instantiate a couple of objects, and execute methods created producing some output.<br/>
   Answer: CharacterController.php has a method to create and print a character's object data
3. Create something that is realistic and appropriate to a current or future application for your domain.<br/>
   Answer: I can use something similar with my job because it is a boring E-commerce system. That's why I chose unrealistic but fun to develop task
<h2>Lab: Create an Extensible Super Class</h2>
1. Using the code created in the previous exercise, create an extensible superclass definition. Set the properties and methods that subclasses will need.<br/>
Answer: Created executeSkill class which should tackle different skills execution processes. Basically, it works with Skills objects to get the skill's properties, the Character object who used this skill, and the Character object who was selected as a target
2. Create one or more subclasses that extend the superclass with constants, properties, and methods specific to the subclass.<br/>
Answer: Created class which works with Skills where target and uses character are the same
3. Instantiate a couple of objects from the subclasses and execute the methods producing some output.<br/>
Answer: didn't have enough time to make something useful.
