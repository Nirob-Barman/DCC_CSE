vim real_nirob.l


```
%{
/*
 * real number
 */
%}
%%
[\t]+   /*ignore whitespace*/;
[0-9]   {printf("%s: is a digit.\n",yytext);}
-?[0-9]+        {printf("%s: is an integer.\n",yytext);}
[0-9]*\.[0-9]+  {printf("%s: is a float number.\n",yytext);}
-?(([0-9]+)|([0-9]+\.[0-9]+)([eE][-+]?[0-9]+)?) {printf("%s: is a real number.\n",yytext);}
[a-zA-Z]+       {printf("%s: is not a real number.\n");}
.|\n    {ECHO;}
%%
main()
{
    yylex();
}
```

vim real_nirob.l

flex real_nirob.l

gcc lex.yy.c

./a.out


```
789
789: is an integer.

45.23
45.23: is a float number.


78.45
78.45: is a float number.

45.43e78
45.43e78: is a real number.


56.23
56.23: is a float number.

-56.23
-56.23: is a real number.

-789
-789: is an integer.
```



Ctrd+d





