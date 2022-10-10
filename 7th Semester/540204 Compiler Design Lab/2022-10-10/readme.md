
[Download PuTTY](https://www.chiark.greenend.org.uk/~sgtatham/putty/latest.html)


1. Creating a Lexical Analyzer with Lex


![lex](https://user-images.githubusercontent.com/47166768/194798894-1803ac27-638a-4739-9935-3a2c6d1608ce.png)


[Structure of Lex Programs](https://ecomputernotes.com/compiler-design/lex-use-of-lex)


#


FLEX (fast lexical analyzer generator) 


Structure of Lex Programs
Lex program will be in following form


```
declarations

%%

translation rules

%%

auxiliary functions
```



### How to run the program: 

To run the program, it should be first saved with the extension .l or .lex. Run the below commands on terminal in order to run the program file. 

Step 1: lex filename.l or lex filename.lex depending on the extension file is saved with

Step 2: gcc lex.yy.c 

Step 3: ./a.out 

Step 4: Provide the input to program in case it is required

Note: Press Ctrl+D or use some rule to stop taking inputs from the user. Please see the output images of below programs to clear if in doubt to run the programs.


#

Terminal
vim
digit.l
2 mode - 
- insert mode(i)
- command mode(esc) 

:wq(save and exit)

#


192.168.7.78

cse

root123

#

<p align="middle" float="left">

  <img src="https://user-images.githubusercontent.com/47166768/194802084-2687ea69-7bbb-41cd-a91d-bb155d6857dc.png" width="449" height="438">
  
  <img src="https://user-images.githubusercontent.com/47166768/194802117-b38e6378-8159-405d-9985-571150749f63.png" width="449" height="438">
  
  ![image](https://user-images.githubusercontent.com/47166768/194802576-71de2fee-6d32-4819-91dd-b379f3ecb3e9.png)

  
</p>


%{

/`*`

  `*` a verb/not a verb

  `*`/

%}





