Qus: what is difference between $msg and $$msg
Ans: $msg is a variable $$msg is a variable of variable.
Example:
-------
$msg = "Hai";
$$msg = "Hello";
echo $msg." ".$Hai // Hai Hello
Because $msg variable value changed as a variable, it is called variable of variable

Qus: Explain Oops Concept:
Ans: 
  1. Classes
  2. Object
  3. Interface
  4. Inheritance
  5. Abstract
  6. Encapsulation
  7. Polymorphisam
  8. Access Modifiers
  
  these are the concepts are in Oops. basically oops is concept about Object Oriented, Which is contain data of object have Arguments or properties and methods.
  
  Qus: frameworks is best or core php is best?
  Ans:
    Advantage of framework
    -----------------------
    1. Speed Up Custom web application
    2. No need to write lengthy code compare with Core PHP
    3. Work with Database more efficently => object relational mapping (ORM)
    4. Perform Unit testing efficently
    
    Disadvantage of framework
    -------------------------
    1. Developers need to framework instead of PHP
    2. Lack of option to modify core behavior
    3. Affect speed and performance of websites, due to web developer unware of framework concept.
    
 Qus: Tell about php version.
 Ans:
  AS per WIKI information
  Current Version is PHP8 released on November 26,2020
  PHP7 During 2014 and 2015, a new major PHP version was developed, which was numbered PHP 7
  PHP 6 and Unicode ,PHP received mixed reviews due to lacking native Unicode support at the core language level.
  PHP 5 On July 14 2004, PHP 5 was released powered by the new Zend Engine II. PHP 5 included new features such as improved support for object-oriented programming, the PHP Data Objects (PDO) extension (which defines a lightweight and consistent interface for accessing databases)
  PHP 3 and 4 in 1997 and formed the base of PHP 3,changing the language's name to the recursive acronym PHP: Hypertext Preprocessor.

Qus: hooks in yii2 and where to apply?
Ans:
  First of all, we need to understand what is HOOK in programming language.
  
  In programming, a hook is a place and usually an interface provided in packaged code that allows a programmer to insert customized programming. For example, a programmer might want to provide code that analyzed how often a particular logic path was taken within a program. Or a progammer might want to insert an additional capability. Typically, hooks are provided for a stated purpose and are documented for the programmer.
  
  So, Hook is not a part of Yii2, it is a common terminology using in programming language.
