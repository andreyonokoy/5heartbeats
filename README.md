<h1>How to install</h1>
1. Install Latest Laravel.
2. Copy files from the repo to the new Laravel folder.
3. Run SQL file /database/dump/dump20231016.sql
4. Start web server with the command - php artisan serve

<h1>Labs</h1>
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
   Answer: CharacterController.php has a method to create and print a character's object data<br/>
3. Create something that is realistic and appropriate to a current or future application for your domain.<br/>
   Answer: I can use something similar with my job because it is a boring E-commerce system. That's why I chose unrealistic but fun to develop task
<h2>Lab: Create an Extensible Super Class</h2>
1. Using the code created in the previous exercise, create an extensible superclass definition. Set the properties and methods that subclasses will need.<br/>
Answer: Created executeSkill class which should tackle different skills execution processes. Basically, it works with Skills objects to get the skill's properties, the Character object who used this skill, and the Character object who was selected as a target<br/>
2. Create one or more subclasses that extend the superclass with constants, properties, and methods specific to the subclass.<br/>
Answer: Created class which works with Skills where target and uses character are the same
3. Instantiate a couple of objects from the subclasses and execute the methods producing some output.<br/>
Answer: didn't have enough time to make something useful.<br/>
   <h2>Lab: Magic Methods</h2>
Created app/Http/Controllers/EducationController.php method labMagicMethods which has examples of each Magic Methods usage.
   <h2>Lab: Abstract Classes</h2>
   Created /app/Effects/AbstractEffect.php abstract class for Effect execution. Abstract method "apply" will contain all unique logic for concreate skill effect execution.
   <h2>Lab: Interfaces</h2>
Created Interface Damagable /app/Interfaces/Damageable.php to collect all objects that can be damaged by skills. Now only class Characters implement this interface, but in the future different objects will be added.<br/>
Class /app/Service/ExecuteSkill.php accepts an object that implements this Interface as a skill target in __invoke method. I am not sure that I used __invoke in the appropriate place. In my plan ExecuteSkill will have only one executable method, which will be useful for other code, that's why I used here magic method.
   <h2>Lab: Type Hinting</h2>
In most of my classes, I hint types.
   <h2>Lab: Build Custom Exception Class</h2>
   Added 2 exception classes to manage the situation when skill has effect or condition without special class. In my plan each unique skill effect or condition should have class which should maintain it's logic.
Same effect or condition class may work with different skills. It gives the possibility to build complex logic from same blocks.<br/>
   In Laravel, try and catch blocks are already added. We may execute http://127.0.0.1:8000/education/labexceptions/ which tries to execute wrong Skill Effect Class.<br/>
<h2>Lab: Traits</h2>
Added Trait /app/Traits/CombatLog.php<br/>>
We may execute http://127.0.0.1:8000/education/labInterfaces/ and see how my application works. In /app/Http/Controllers/EducationController.php I initialized some characters with Level and HitPoins and used Attack skill with conditions and effects. All actions are printed in combat log.<br/>
Special CombatLog trait was added to Characters, Skills, SkillEffects and SkillConditions classes. It means that all such object may write some data for CombatLog.<br/>
But basically, I wanna separate CombatLogs by Combat Model, because it should contain logs from concrete actions inside one combat. how I should set Combat object or Combant_id value in this trait?

<h2>Questions</h2>
1. Can you recommend a good Laravel online training?<br/>
2. Can you share your opinion and experience about dependency injection containers? As far as I understand, they are now very popular for establishing connections between classes with different functionality. Where I can dive deep into this theme?<br/>
3. I think it will be my next step to pass your PHP Architect course. I have seen one which is already planned, but it has uncomfortable time for me. Do you know about other groups in November or December?<br/>
