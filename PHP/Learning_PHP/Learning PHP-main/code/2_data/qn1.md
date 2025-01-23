Find the errors in this PHP program:

```
<? php
    print 'How are you?';
    print 'I'm fine.';
??>
```

The errors in this code are:

- The opening tag ```<? php``` has a space which would cause a syntax error

- The second error comes from the third line of the program
    - print ```'I'm fine.';```

    - The above line would cause an error since it does not have an escape character like backslash ```\``` before the apostrophe ```‘``` which would have been best written as ```print “I’m fine.”``` or ```‘I\n’m fine.’``` where the role of the escape character is to treat the punctuation as text and not as part of the program while choosing to use the double quotes encapsulates the statement as a text-based statement preventing a syntax error.
- The final error of the program originates from the closing tag ```??>``` of the program which has an extra ```?``` hence a syntax error
