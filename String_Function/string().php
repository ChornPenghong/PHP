<?php
    echo("<p> Strlen() of Hello World! </p>");
    echo strlen("Hello world!"); //count character degit

    echo("<p> str_word_count() of Hello World! </p>");
    echo str_word_count("Hello world!"); //count word

    
    echo("<p> strrev() of Hello World! </p>");
    echo strrev("Hello world!"); //Reverse character

    echo("<p> strpos() of Hello World! </p>");
    echo strpos("Hello world!", "world"); //Search specific text in the string

    echo("<p> str_replace() of Hello World! </p>");
    echo str_replace("world","Mates", "Hello world!"); //replace words

    /* in string, if we use double qoute ("") outside we must use single qoute inside, 
    but if we wwant to use single qoute both inside and outside we must add back slash; */